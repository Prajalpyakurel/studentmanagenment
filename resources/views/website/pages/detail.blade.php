@extends('website.layouts.index')

@section('content')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Mulish:wght@300;400;500;600;700&display=swap');

        :root {
            --green: #1a7a4a;
            --green-light: #22c55e;
            --green-pale: #f0fdf4;
            --green-mid: #dcfce7;
            --dark: #0f1f13;
            --muted: #64748b;
            --border: #e2e8f0;
            --gold: #f59e0b;
        }

        body { font-family: 'Mulish', sans-serif; }

        /* ── Hero Banner ─────────────────────────────── */
        .course-hero {
            background: linear-gradient(135deg, #0f2d1a 0%, #1a4d2e 60%, #0d3320 100%);
            padding: 70px 0 50px;
            position: relative;
            overflow: hidden;
        }
        .course-hero::before {
            content: '';
            position: absolute; inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .course-hero .breadcrumb-nav {
            font-size: 13px; color: rgba(255,255,255,0.55);
            margin-bottom: 20px;
        }
        .course-hero .breadcrumb-nav a { color: rgba(255,255,255,0.55); text-decoration: none; }
        .course-hero .breadcrumb-nav a:hover { color: #fff; }
        .course-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(28px, 4vw, 48px);
            color: #fff;
            line-height: 1.2;
            margin-bottom: 16px;
        }
        .course-hero .hero-meta {
            display: flex; flex-wrap: wrap; gap: 20px;
            margin-top: 20px;
        }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 6px;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.15);
            color: rgba(255,255,255,0.85);
            padding: 6px 14px; border-radius: 30px; font-size: 13px;
        }
        .hero-badge.green { background: rgba(34,197,94,0.2); border-color: rgba(34,197,94,0.3); color: #86efac; }

        /* ── Page Layout ────────────────────────────── */
        .detail-body { padding: 48px 0 80px; background: #fafcff; }

        /* ── Content card ───────────────────────────── */
        .content-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            margin-bottom: 24px;
            overflow: hidden;
        }
        .content-card .card-head {
            padding: 20px 28px;
            border-bottom: 1px solid var(--border);
            display: flex; align-items: center; gap: 10px;
        }
        .content-card .card-head h3 {
            margin: 0; font-size: 17px; font-weight: 700; color: var(--dark);
        }
        .content-card .card-head .icon {
            width: 32px; height: 32px;
            background: var(--green-pale);
            color: var(--green);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 15px;
        }
        .content-card .card-body-p { padding: 24px 28px; }

        /* ── Description ────────────────────────────── */
        .course-description {
            font-size: 15px; color: #374151; line-height: 1.8;
        }

        /* ── Stats Row ──────────────────────────────── */
        .stats-row {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;
            margin-bottom: 24px;
        }
        .stat-box {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 20px;
            text-align: center;
            transition: box-shadow 0.2s;
        }
        .stat-box:hover { box-shadow: 0 4px 20px rgba(0,0,0,0.07); }
        .stat-box .stat-icon { font-size: 22px; margin-bottom: 6px; }
        .stat-box .stat-val { font-size: 22px; font-weight: 700; color: var(--dark); }
        .stat-box .stat-lbl { font-size: 12px; color: var(--muted); margin-top: 2px; text-transform: uppercase; letter-spacing: 0.5px; }
        .stat-box.highlight { background: var(--green-pale); border-color: #bbf7d0; }
        .stat-box.highlight .stat-val { color: var(--green); }

        /* ── Sidebar Card ───────────────────────────── */
        .sidebar-sticky { position: sticky; top: 100px; }

        .pricing-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        .pricing-top {
            background: linear-gradient(135deg, #0f2d1a, #1a7a4a);
            padding: 28px 24px;
            text-align: center;
            color: #fff;
        }
        .pricing-top .price-label { font-size: 12px; opacity: 0.7; text-transform: uppercase; letter-spacing: 1px; }
        .pricing-top .price-amount {
            font-family: 'Playfair Display', serif;
            font-size: 42px; font-weight: 700;
            line-height: 1;
            margin: 8px 0 4px;
        }
        .pricing-top .price-sub { font-size: 13px; opacity: 0.65; }

        .pricing-body { padding: 24px; }

        .seats-visual { margin-bottom: 20px; }
        .seats-visual .seats-label {
            display: flex; justify-content: space-between;
            font-size: 13px; margin-bottom: 8px; color: var(--muted);
        }
        .seats-track {
            height: 8px; background: #e2e8f0; border-radius: 10px; overflow: hidden;
        }
        .seats-fill {
            height: 100%; border-radius: 10px;
            background: linear-gradient(90deg, #22c55e, #16a34a);
            transition: width 1s ease;
        }
        .seats-fill.low  { background: linear-gradient(90deg, #f59e0b, #d97706); }
        .seats-fill.full { background: linear-gradient(90deg, #ef4444, #dc2626); }

        /* ── Booking Form ───────────────────────────── */
        .booking-form .form-group { margin-bottom: 14px; }
        .booking-form label { font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 5px; display: block; }
        .booking-form .form-control {
            border: 1.5px solid var(--border);
            border-radius: 9px; padding: 10px 14px; font-size: 14px;
            width: 100%; outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            font-family: 'Mulish', sans-serif;
        }
        .booking-form .form-control:focus {
            border-color: var(--green);
            box-shadow: 0 0 0 3px rgba(26,122,74,0.1);
        }

        /* ── eSewa Button ───────────────────────────── */
        .btn-esewa {
            width: 100%; padding: 15px;
            background: linear-gradient(135deg, #60bb46, #3ea527);
            color: #fff; border: none; border-radius: 11px;
            font-size: 15px; font-weight: 700;
            cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 10px;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-top: 8px; font-family: 'Mulish', sans-serif;
        }
        .btn-esewa:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(60,165,40,0.35); }
        .btn-esewa:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }
        .esewa-logo {
            background: #fff; color: #3ea527;
            font-weight: 900; font-size: 12px;
            padding: 2px 7px; border-radius: 4px;
        }

        /* ── PDF Viewer ─────────────────────────────── */
        .pdf-embed-wrap {
            border-radius: 10px; overflow: hidden;
            border: 1px solid var(--border); background: #f1f5f9;
        }
        .pdf-embed-wrap embed, .pdf-embed-wrap iframe {
            width: 100%; height: 560px; display: block; border: none;
        }
        .pdf-download-btn {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--green); color: #fff;
            padding: 10px 22px; border-radius: 9px; font-size: 14px;
            font-weight: 600; text-decoration: none; margin-top: 14px;
            transition: background 0.2s;
        }
        .pdf-download-btn:hover { background: #155e35; color: #fff; }

        /* ── Rating ─────────────────────────────────── */
        .star-filled { color: var(--gold); }
        .star-empty  { color: #d1d5db; }

        /* ── Booked Badge ───────────────────────────── */
        .already-booked-badge {
            background: var(--green-mid); border: 1px solid #86efac;
            border-radius: 10px; padding: 14px 18px; font-size: 14px;
            color: #15803d; text-align: center; margin-bottom: 14px; font-weight: 600;
        }

        /* ── No Seats ───────────────────────────────── */
        .no-seats-warning {
            background: #fff7ed; border: 1px solid #fed7aa;
            border-radius: 10px; padding: 14px; text-align: center;
            color: #c2410c; font-size: 14px; font-weight: 600;
        }

        /* ── Recommended Courses ────────────────────── */
        .rec-section {
            padding: 56px 0 72px;
            background: #fff;
            border-top: 1px solid var(--border);
        }
        .rec-heading {
            font-family: 'Playfair Display', serif;
            font-size: 28px; font-weight: 700;
            color: var(--dark); margin-bottom: 6px;
        }
        .rec-sub {
            font-size: 14px; color: var(--muted); margin-bottom: 36px;
        }
        .rec-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.25s, box-shadow 0.25s;
            height: 100%;
            display: flex; flex-direction: column;
        }
        .rec-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 40px rgba(0,0,0,0.10);
        }
        .rec-card-top {
            background: linear-gradient(135deg, #0f2d1a, #1a7a4a);
            padding: 22px 20px 18px;
            position: relative;
        }
        .rec-card-top .rec-cat {
            display: inline-block;
            background: rgba(255,255,255,0.15);
            color: #bbf7d0;
            font-size: 11px; font-weight: 700;
            text-transform: uppercase; letter-spacing: 0.8px;
            padding: 3px 10px; border-radius: 20px;
            margin-bottom: 10px;
        }
        .rec-card-top h5 {
            font-family: 'Playfair Display', serif;
            color: #fff; font-size: 16px;
            margin: 0; line-height: 1.4;
        }
        .rec-score-pill {
            position: absolute; top: 16px; right: 16px;
            background: rgba(255,255,255,0.15);
            color: #86efac; font-size: 11px; font-weight: 700;
            padding: 3px 9px; border-radius: 20px;
            border: 1px solid rgba(134,239,172,0.3);
        }
        .rec-card-body {
            padding: 18px 20px;
            flex: 1; display: flex; flex-direction: column;
        }
        .rec-card-body p {
            font-size: 13px; color: var(--muted);
            line-height: 1.6; flex: 1;
            margin-bottom: 16px;
        }
        .rec-card-footer {
            display: flex; align-items: center; justify-content: space-between;
            padding-top: 14px;
            border-top: 1px solid var(--border);
        }
        .rec-price {
            font-size: 18px; font-weight: 700; color: var(--green);
        }
        .rec-duration {
            font-size: 12px; color: var(--muted);
            display: flex; align-items: center; gap: 4px;
        }
        .btn-rec {
            display: block; width: 100%;
            background: var(--green-pale);
            color: var(--green); font-weight: 700;
            font-size: 13px; text-align: center;
            padding: 10px; border-radius: 9px;
            text-decoration: none; margin-top: 12px;
            border: 1.5px solid #bbf7d0;
            transition: background 0.2s, color 0.2s;
        }
        .btn-rec:hover {
            background: var(--green); color: #fff;
        }

        @media(max-width:768px) {
            .stats-row { grid-template-columns: repeat(2, 1fr); }
            .course-hero { padding: 50px 0 36px; }
        }
    </style>

    {{-- ── HERO ──────────────────────────────────────── --}}
    <section class="course-hero">
        <div class="container">
            <div class="breadcrumb-nav">
                <a href="/">Home</a> &rsaquo;
                <a href="{{ route('courses') }}">Courses</a> &rsaquo;
                <span style="color:rgba(255,255,255,0.8);">{{ $course->title }}</span>
            </div>
            <h1>{{ $course->title }}</h1>
            <p style="color:rgba(255,255,255,0.7); max-width:600px; font-size:15px; line-height:1.7;">
                {{ Str::limit($course->description, 180) }}
            </p>
            <div class="hero-meta">
                <span class="hero-badge"><i class="fas fa-tag"></i> {{ $course->category ?? $course->Category }}</span>
                <span class="hero-badge"><i class="fas fa-clock"></i> {{ $course->duration }} Months</span>
                <span class="hero-badge green"><i class="fas fa-chair"></i> {{ $course->availableSeat }} seats left</span>
            </div>
        </div>
    </section>

    {{-- ── BODY ──────────────────────────────────────── --}}
    <section class="detail-body">
        <div class="container">

            {{-- Flash Messages --}}
            @if(session('success'))
                <div class="alert alert-success mb-4" style="border-radius:10px;">✓ {{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger mb-4" style="border-radius:10px;">{{ session('error') }}</div>
            @endif

            <div class="row">

                {{-- ── LEFT COLUMN ──────────────────── --}}
                <div class="col-lg-8">

                    {{-- Stats --}}
                    <div class="stats-row">
                        <div class="stat-box highlight">
                            <div class="stat-icon">🪑</div>
                            <div class="stat-val">{{ $course->availableSeat }}</div>
                            <div class="stat-lbl">Available Seats</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-icon">👥</div>
                            <div class="stat-val">{{ $course->totalSeat }}</div>
                            <div class="stat-lbl">Total Seats</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-icon">📅</div>
                            <div class="stat-val">{{ $course->duration }}</div>
                            <div class="stat-lbl">Duration (Months)</div>
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="content-card">
                        <div class="card-head">
                            <div class="icon">📖</div>
                            <h3>Course Overview</h3>
                        </div>
                        <div class="card-body-p">
                            <div class="course-description">{{ $course->description }}</div>
                        </div>
                    </div>

                    {{-- What's Included --}}
                    <div class="content-card">
                        <div class="card-head">
                            <div class="icon">⭐</div>
                            <h3>What's Included</h3>
                        </div>
                        <div class="card-body-p">
                            <div class="row">
                                @foreach([
                                        ['🎓', 'Certificate of Completion', 'Receive an official certificate after finishing the course.'],
                                        ['📚', 'Study Materials', 'Access to all course books and digital materials.'],
                                        ['👨‍🏫', 'Expert Instructors', 'Learn from industry-certified professionals.'],
                                        ['💬', 'Lifetime Support', 'Community access and Q&A support throughout.'],
                                    ] as [$icon, $title, $desc])
                                        <div class="col-sm-6 mb-3">
                                            <div style="display:flex;gap:12px;align-items:flex-start;">
                                                <span style="font-size:22px;">{{ $icon }}</span>
                                                <div>
                                                    <div style="font-weight:700;font-size:14px;color:#1a1a2e;">{{ $title }}</div>
                                                    <div style="font-size:13px;color:#64748b;">{{ $desc }}</div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- PDF Brochure --}}
                    @if($course->pdf_path)
                        <div class="content-card pdf-section">
                            <div class="card-head">
                                <div class="icon">📄</div>
                                <h3>Course Brochure / Syllabus</h3>
                            </div>
                            <div class="card-body-p">
                                <div class="pdf-embed-wrap">
                                    <iframe
                                        src="{{ asset('storage/' . $course->pdf_path) }}#toolbar=1&navpanes=0"
                                        title="Course PDF"
                                        loading="lazy">
                                        <p>Your browser doesn't support embedded PDFs.
                                        <a href="{{ asset('storage/' . $course->pdf_path) }}" target="_blank">Click here to view the PDF.</a></p>
                                    </iframe>
                                </div>
                                <a href="{{ asset('storage/' . $course->pdf_path) }}" target="_blank" class="pdf-download-btn">
                                    <i class="fas fa-download"></i> Download PDF Brochure
                                </a>
                            </div>
                        </div>
                    @endif

                </div>{{-- /col-lg-8 --}}

                {{-- ── SIDEBAR ───────────────────────── --}}
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <div class="pricing-card">

                            <div class="pricing-top">
                                <div class="price-label">Course Fee</div>
                                <div class="price-amount">Nrs {{ number_format($course->price, 0) }}</div>
                                <div class="price-sub">One-time payment · eSewa accepted</div>

                            </div>

                            <div class="pricing-body">

                                @php
                                    $pct = $course->totalSeat > 0
                                        ? round(($course->availableSeat / $course->totalSeat) * 100)
                                        : 0;
                                    $fillClass = $pct > 40 ? '' : ($pct > 15 ? 'low' : 'full');
                                @endphp
                                <div class="seats-visual">
                                    <div class="seats-label">
                                        <span>Seats filling up</span>
                                        <span>{{ $course->availableSeat }}/{{ $course->totalSeat }} left</span>
                                    </div>
                                    <div class="seats-track">
                                        <div class="seats-fill {{ $fillClass }}" style="width:{{ $pct }}%"></div>
                                    </div>
                                </div>

                                @auth
                                    @php
                                        $alreadyBooked = \App\Models\CourseBooking::where('user_id', Auth::id())
                                            ->where('course_id', $course->id)
                                            ->whereIn('payment_status', ['paid'])
                                            ->exists();
                                    @endphp

                                    @if($alreadyBooked)
                                        <div class="already-booked-badge">
                                            ✓ You are already enrolled in this course!
                                        </div>
                                    @elseif($course->availableSeat <= 0)
                                        <div class="no-seats-warning">⚠ No seats available at this time.</div>
                                    @else
                                        <form action="{{ route('esewa.initiate', $course->id) }}" method="POST" class="booking-form">
                                            @csrf
                                            <div class="form-group">
                                                <label>Full Name *</label>
                                                <input type="text" name="name" class="form-control" required
                                                    value="{{ Auth::user()->name }}" placeholder="Your full name">
                                            </div>
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input type="email" name="email" class="form-control" required
                                                    value="{{ Auth::user()->email }}" placeholder="your@email.com">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="98XXXXXXXX">
                                            </div>
                                            <div class="form-group">
                                                <label>Additional Notes</label>
                                                <textarea name="notes" class="form-control" rows="2"
                                                    placeholder="Anything we should know?"></textarea>
                                            </div>
                                            <button type="submit" class="btn-esewa">
                                                <span class="esewa-logo">e</span>
                                                Pay Nrs {{ number_format($course->price, 0) }} with eSewa
                                            </button>
                                            <p style="font-size:11px;color:#9ca3af;text-align:center;margin-top:10px;">
                                                🔒 Secured by eSewa · Your seat is reserved only after payment.
                                            </p>
                                        </form>
                                    @endif

                                @else
                                    <div style="text-align:center;padding:10px 0;">
                                        <p style="color:#64748b;font-size:14px;margin-bottom:16px;">
                                            Please log in to book this course and pay via eSewa.
                                        </p>
                                        <a href="{{ route('login') }}" class="btn-esewa" style="text-decoration:none;display:inline-flex;">
                                            <i class="fas fa-sign-in-alt"></i> Login to Book
                                        </a>
                                    </div>
                                @endauth

                                <hr style="margin:20px 0;border-color:#e2e8f0;">
                                <ul style="list-style:none;padding:0;margin:0;font-size:13px;color:#374151;">
                                    <li style="padding:7px 0;display:flex;gap:10px;align-items:center;">
                                        <i class="fas fa-check-circle" style="color:#22c55e;"></i>
                                        Instant seat confirmation on payment
                                    </li>
                                    <li style="padding:7px 0;display:flex;gap:10px;align-items:center;">
                                        <i class="fas fa-check-circle" style="color:#22c55e;"></i>
                                        Category: <strong>{{ $course->category ?? $course->Category }}</strong>
                                    </li>
                                    <li style="padding:7px 0;display:flex;gap:10px;align-items:center;">
                                        <i class="fas fa-check-circle" style="color:#22c55e;"></i>
                                        Duration: <strong>{{ $course->duration }} months</strong>
                                    </li>
                                    @if($course->pdf_path)
                                        <li style="padding:7px 0;display:flex;gap:10px;align-items:center;">
                                            <i class="fas fa-file-pdf" style="color:#ef4444;"></i>
                                            <a href="{{ asset('storage/' . $course->pdf_path) }}" target="_blank"
                                               style="color:var(--green);font-weight:600;">View Syllabus PDF</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>{{-- /row --}}
        </div>
    </section>

    {{-- ── RECOMMENDED COURSES ───────────────────────── --}}
    @if(isset($recommended) && $recommended->isNotEmpty())
        <section class="rec-section">
            <div class="container">

                <div class="d-flex align-items-end justify-content-between mb-1 flex-wrap gap-2">
                    <div>
                        <p style="font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;color:var(--green);margin-bottom:6px;">
                            ✦ You Might Also Like
                        </p>
                        <h2 class="rec-heading">Related Courses</h2>
                        <p class="rec-sub">Courses similar to <strong>{{ $course->title }}</strong></p>
                    </div>
                    <a href="{{ route('courses') }}"
                       style="font-size:13px;font-weight:700;color:var(--green);text-decoration:none;white-space:nowrap;">
                        Browse All Courses &rarr;
                    </a>
                </div>

                <div class="row g-4 mt-1">
                    @foreach($recommended as $rec)
                        <div class="col-lg-3 col-md-6">
                            <div class="rec-card">
                                <div class="rec-card-top">
                                    <span class="rec-cat">{{ $rec->category ?? $rec->Category }}</span>
                                    {{-- Relevance score pill --}}
                                    <span class="rec-score-pill">
                                        ★ {{ $rec->_score }} match
                                    </span>
                                    <h5>{{ $rec->title }}</h5>
                                </div>
                                <div class="rec-card-body">
                                    <p>{{ Str::limit($rec->description, 90) }}</p>
                                    <div class="rec-card-footer">
                                        <div>
                                            <div class="rec-price">Nrs {{ number_format($rec->price, 0) }}</div>
                                            <div class="rec-duration">
                                                <i class="fas fa-clock" style="font-size:10px;"></i>
                                                {{ $rec->duration }} months
                                            </div>
                                        </div>
                                        <div style="font-size:12px;color:var(--muted);">
                                            <i class="fas fa-chair" style="font-size:10px;"></i>
                                            {{ $rec->availableSeat }} seats
                                        </div>
                                    </div>
                                    <a href="{{ route('course.detail', $rec->id) }}" class="btn-rec">
                                        View Course &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endif

@endsection