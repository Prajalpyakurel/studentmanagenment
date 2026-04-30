<header class="header min-header" style="background-color: rgb(10, 61, 30);">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="/" class="navbar-brand logo">
                <h1 style="color: #fff">IMS</h1>
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index.html" class="menu-logo">
                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li class="">
                    <a href="/">HOME</a>
                </li>

                {{-- Search Bar --}}
                <li class="searchbar" style="position: relative;">
                    <i class="fa fa-search" aria-hidden="true" id="searchToggleBtn" style="cursor:pointer;"></i>
                    <div class="togglesearch" id="searchDropdown" style="
                        display: none;
                        position: absolute;
                        top: 50px;
                        left: -160px;
                        width: 340px;
                        background: #fff;
                        border-radius: 10px;
                        box-shadow: 0 8px 32px rgba(0,0,0,0.18);
                        z-index: 9999;
                        padding: 12px;
                    ">
                        <form action="{{ route('search') }}" method="GET" id="searchForm" style="margin-bottom: 0;">
                            <div class="input-group">
                                <input type="text" id="searchInput" name="q" class="form-control"
                                    placeholder="Search courses..." autocomplete="off" value="{{ request('q') }}"
                                    style="border-radius: 6px 0 0 6px;">
                                <button type="submit" class="btn btn-primary" style="border-radius: 0 6px 6px 0;">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>

                        {{-- Live search results dropdown --}}
                        <div id="liveSearchResults" style="
                            margin-top: 8px;
                            max-height: 260px;
                            overflow-y: auto;
                            display: none;
                        "></div>
                    </div>
                </li>
            </ul>
        </div>

        <ul class="nav header-navbar-rht">
            @guest
                <li><a href="{{ route('login') }}">Log in</a></li>
                <li><a href="{{ route('register') }}" class="login-btn">Signup</a></li>
            @else
                <li class="nav-item" style="padding-right: 15px; color: #fff;">
                    You are logged in as <strong style="padding-left: 5px;">{{ Auth::user()->name }}</strong>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="login-btn">Logout</button>
                    </form>
                </li>
            @endguest
            <li class="course-amt">
                <a href="#" class="user-circle" data-bs-toggle="modal" data-bs-target="#bookedCoursesModal">
                    <img src="{{ asset('assets/img/course.png') }}" width="22" alt="Courses">
                </a>
                <a href="#" class="course" data-bs-toggle="modal" data-bs-target="#bookedCoursesModal">
                    <span>Courses</span>
                </a>
            </li>
        </ul>
    </nav>
</header>

{{-- Pass all course titles to JS for client-side binary search --}}
@push('scripts')
    <script>
        // All courses passed from backend (sorted by title for binary search)
        const ALL_COURSES = @json($coursesForSearch ?? []);

        // ─── Binary Search Algorithm ──────────────────────────────────────────────
        // Time: O(log n) | Requires sorted array
        // Best for: fast prefix-matching on large pre-loaded datasets
        function binarySearchCourses(courses, query) {
            query = query.toLowerCase().trim();
            if (!query) return [];

            const results = [];

            // Binary search to find the first course whose title starts with query
            let lo = 0, hi = courses.length - 1, start = -1;

            while (lo <= hi) {
                const mid = Math.floor((lo + hi) / 2);
                const title = courses[mid].title.toLowerCase();

                if (title.startsWith(query)) {
                    start = mid;
                    hi = mid - 1; // keep searching left for first match
                } else if (title < query) {
                    lo = mid + 1;
                } else {
                    hi = mid - 1;
                }
            }

            // Collect all contiguous matches from start
            if (start !== -1) {
                for (let i = start; i < courses.length; i++) {
                    if (courses[i].title.toLowerCase().startsWith(query)) {
                        results.push(courses[i]);
                    } else {
                        break;
                    }
                }
            }

            // Also do a linear pass for contains-matches not caught by binary search
            // (handles mid-word matches like searching "php" in "Advanced PHP")
            courses.forEach(c => {
                const t = c.title.toLowerCase();
                if (!t.startsWith(query) && t.includes(query)) {
                    results.push(c);
                }
            });

            return results.slice(0, 8); // limit to top 8
        }

        // ─── UI Logic ─────────────────────────────────────────────────────────────
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.getElementById('searchToggleBtn');
            const dropdown = document.getElementById('searchDropdown');
            const input = document.getElementById('searchInput');
            const resultsBox = document.getElementById('liveSearchResults');

            // Toggle search panel
            toggleBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                const isVisible = dropdown.style.display === 'block';
                dropdown.style.display = isVisible ? 'none' : 'block';
                if (!isVisible) input.focus();
            });

            // Close on outside click
            document.addEventListener('click', function (e) {
                if (!dropdown.contains(e.target) && e.target !== toggleBtn) {
                    dropdown.style.display = 'none';
                    resultsBox.style.display = 'none';
                }
            });

            // Live search using binary search on keyup
            let debounceTimer;
            input.addEventListener('keyup', function () {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(() => {
                    const query = input.value.trim();
                    if (query.length < 1) {
                        resultsBox.style.display = 'none';
                        resultsBox.innerHTML = '';
                        return;
                    }

                    const matches = binarySearchCourses(ALL_COURSES, query);
                    renderResults(matches, query);
                }, 200);
            });

            function renderResults(matches, query) {
                if (matches.length === 0) {
                    resultsBox.innerHTML = `<p style="padding:10px; color:#888; margin:0;">No courses found for "<strong>${escHtml(query)}</strong>"</p>`;
                    resultsBox.style.display = 'block';
                    return;
                }

                const highlight = (text, q) => {
                    const idx = text.toLowerCase().indexOf(q.toLowerCase());
                    if (idx === -1) return escHtml(text);
                    return escHtml(text.slice(0, idx))
                        + `<mark style="background:#ffe066;border-radius:2px;">${escHtml(text.slice(idx, idx + q.length))}</mark>`
                        + escHtml(text.slice(idx + q.length));
                };

                resultsBox.innerHTML = matches.map(c => `
                            <a href="/courses/${c.id}" style="
                                display: flex;
                                align-items: center;
                                gap: 10px;
                                padding: 9px 10px;
                                border-radius: 6px;
                                text-decoration: none;
                                color: #222;
                                transition: background 0.15s;
                            " onmouseover="this.style.background='#f0f7f0'" onmouseout="this.style.background='transparent'">
                                <i class="fa fa-book" style="color:green; font-size:13px;"></i>
                                <span style="font-size:14px;">${highlight(c.title, query)}</span>
                            </a>
                        `).join('');

                resultsBox.style.display = 'block';
            }

            function escHtml(str) {
                return str.replace(/[&<>"']/g, m => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[m]));
            }
        });
    </script>
@endpush