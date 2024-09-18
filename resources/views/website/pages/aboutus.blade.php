@extends('website.layouts.master')

@section('content')
    <div style="">
    <div class="top_banner">
        <img src="{{asset('background.jpg')}}"  alt="" width="100%">
        <div class="centered">
            <h1 style="font-size: 60px; font-weight:800;">About Us</h1>
            <p>Home > About Us</p>
        </div>

    </div>
    <!--    Our Story Section-->
    <div class="our-story-section" style=" background-color: var(--soft-white);">
        <div class="our-story-left  mt-3 loading_for_left">
            <div class="our-story-content text-justify">
{{--                <h1>Our Story</h1>--}}
                <h1>Welcome to EEE Innovation Ghar </h1>
                <p class="text-justify">Established on February 12, 2019, EEE Innovation Ghar Pvt. Ltd stands as a beacon of technological advancement in Nepal. Our mission is to deliver cutting-edge solutions in Engineering, Education, and Entertainment while providing exceptional IT services to the global market, leveraging the unparalleled talent of Nepal.
                    <br><br>
                    Our motto is to be the best outsourcing company on the local and global market by trading
                    technologies. EEE Innovation Ghar Pvt Ltd is tied up with a Japanese Tech company named "B-icon.
                    Inc" from the beginning and also provides various IT solutions to them. In near future we will
                    diversify our domain and will be a leading conglomerate in Nepal, We will develop the best
                    technology through innovation and apply them in every possible domain. We have a highly dedicated
                    and expert IT team providing world-class solutions and support from analysis to development and from
                    testing to implementation phase.</p>
            </div>
        </div>
        <div class="our-story-right loading_for_right">
            <img src="{{asset('our-story.png')}}" alt="" height="400" width="400">

        </div>
    </div>
    <div class="our-story-section" style=" background-color: var(--soft-white); ">
        <div class="our-story-left loading_for_left">
            <img src="{{asset('our-story.png')}}" alt="" height="400" width="400">

        </div>
        <div class="our-story-right loading_for_right">
            <div class="our-story-content">
                <h1>Our Vision</h1>
                <p class="text-justify">
                    Established on February 12, 2019, EEE Innovation Ghar Pvt. Ltd stands as a beacon of technological advancement in Nepal. Our mission is to deliver cutting-edge solutions in Engineering, Education, and Entertainment while providing exceptional IT services to the global market, leveraging the unparalleled talent of Nepal.
                </p>
                <h1>Our Expertise</h1>
                <p class="text-justify">
                    Driven by our motto of excellence, our dedicated team of experts is at the forefront of innovation, crafting bespoke solutions tailored to meet the evolving needs of our clients. From meticulous analysis to seamless development, rigorous testing, and flawless implementation, we are committed to delivering world-class solutions every step of the way.
                </p>
            </div>


        </div>
    </div>
{{--start of why choose us--}}
    <div class="feat bg-gray pt-5 pb-5" style=" background-color: var(--soft-white);overflow:hidden; ">
        <div class="container">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span>Why Choose</span> Us?</h4>
                    <p>When you choose us, you'll feel the benefit of 10 years' experience of Web Development. Because we know the digital world and we know that how to handle it. With working knowledge of online, SEO and social media.</p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
                        <h6>Modern Design</h6>
                        <p>We use latest technology for the latest world because we know the demand of peoples.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
                        <h6>Creative Design</h6>
                        <p>We are always creative and and always lisen our costomers and we mix these two things and make beast design.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
                        <h6>24 x 7 User Support</h6>
                        <p>If our customer has any problem and any query we are always happy to help then.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
                        <h6>Business Growth</h6>
                        <p>Everyone wants to live on top of the mountain, but all the happiness and growth occurs while you're climbing it</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-upload"></i></span>
                        <h6>Market Strategy</h6>
                        <p>Holding back technology to preserve broken business models is like allowing blacksmiths to veto the internal combustion engine in order to protect their horseshoes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
                        <h6>Affordable cost</h6>
                        <p>Love is a special word, and I use it only when I mean it. You say the word too much and it becomes cheap.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        {{-- end start of why choose us--}}

{{--        start of our team--}}
    <div style="margin-bottom:2rem;">
        <div class="feat bg-gray pt-5 pb-1" style=" background-color: var(--soft-white); ">

                <div class="row">
                    <div class="section-head col-sm-12" style="margin-bottom:0;">
                        <h4><span>Meet Our</span> TEAM</h4>
                        <p>
                            "Empowering Innovation, Uniting Excellence: Together We Tech!"</p>
                    </div>
                    {{-- @for ($i = 0; $i < count($employees); $i++)
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_one"><img src="{{ asset('images/' . $employees[$i]->image) }}" alt=""></span>
                            <h6>{{ $employees[$i]->name }}</h6>
                            <h6>{{ $employees[$i]->designation }}</h6>
                            <h6>{{$employees[$i]->email}}</h6>
                            <p>{{ $employees[$i]->about }}</p>
                            {{-- <p>We use latest technology for the latest world because we know the demand of peoples.</p> --}}


                            {{-- <p>Rajan’s passion, curiosity, and experience in technology and business has made him a competitive CEO for this organization.</p> --}}
                        {{-- </div>
                    </div> --}}
                </div>
        </div>
        <div class="container-fluid" style="margin-bottom: 2rem;">
            <div class="team-container" style=" background-color: var(--soft-white); ">
                    <!-- Team members go here -->
                    <div class="team-members" id="teamMembers">
                        <!-- Team members go here -->
                        @foreach($teams as $team)
                        <div class="team-member">{{ $team->name }} - {{ $team->designation }}</div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
                {{--end of our team --}}
                <!--    End Our Story Section-->
{{-- Testimonial section --}}
<section class="overflow-hidden">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">
            <h1 class="mb-4 text-danger">Our Students testimonials</h1>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                quisquam eum porro a pariatur veniam.
            </p>
        </div>
    </div>

    <div class="container swiper">
        <div class="card-wrapper">
            <!-- Card slides container -->
            <ul class="card-list swiper-wrapper">
                @foreach ($testimonials as $testimonial)
                    <li class="card-item swiper-slide">
                        <div class="card-link">
                            @if($testimonial->client_photo)
                            <img src="{{ asset('storage/'.$testimonial->client_photo) }}" alt="Client Photo" class="card-image">
                        @endif
                            <h3 class="d-flex justify-center mt-2" style="color: #de5fa8" >{{ $testimonial->client_name }}</h1>
                            <h2 class="card-title" >{!! Str::words($testimonial->description, 50, ' ...') !!}</h2>
                        </div>
                    </li>
                @endforeach

            </ul>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation Buttons -->
            <div class="swiper-slide-button swiper-button-prev"></div>
            <div class="swiper-slide-button swiper-button-next"></div>
        </div>
    </div>
</section>
@endsection

