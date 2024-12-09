<nav style="position: sticky; top:0; z-index:999; background:none; width:100%;">
    <div class="nav-bar">
        <li class="logo">
            <a style="text-decoration:none;margin-left: 3.9rem;" href="{{route('home')}}" >
                {{-- <img src="{{asset('logo.png')}}" class="w-[40px]" /> --}}
                <h1 style="font-size: 4em;"> <span style="color: #de5fa8">E</span>EE</h1>
            </a>
        </li>
        <input type="checkbox" id="check" />
        <span class="menu">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="dropdown dropbtn"><a href="#">About Us</a>
                <ul class="dropdown-content p-0">
                    <li><a href="{{route('aboutus')}}">Explore Us</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                </ul>
            </li>
            <li><a href="{{route('services')}}">Services</a>
            </li>
            <li><a href="{{route('clients')}}">Our Clients</a></li>
            <li><a href="{{route('courses')}}">Courses</a></li>
            <li><a href="{{route('blogs')}}">Blogs</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
        </span>
        <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
    </div>
</nav>
