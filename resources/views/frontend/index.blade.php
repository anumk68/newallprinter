@extends('layouts.app')
@section('meta_description', 'Index ')

@section('content')

    <section class="banner-section"
        style="background: linear-gradient(rgb(31 191 255 / 52%), rgb(31 191 255 / 52%)),
 url(public/images/about_bannner.png);">

        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Left Content -->
                <div class="col-lg-6">
                    <div class="banner_content">
                        <h1 class="display-5 fw-bold">Are You Facing Issues With Your Printers?</h1>
                        <p class="mt-3">
                            Printer Touch offers online printer maintenance services to deal with problems like updating
                            drivers, paper jams, connectivity issues, or any other issues. Our team is dedicated to
                            providing fast and reliable solutions to restore your printer to peak performance.
                        </p>
                        <ul class="list-unstyled feature-list mt-4">
                            <li> Get 24*7 Customer Support</li>
                            <li> 100% Money Back Guarantee</li>
                            <li> Dedicated Support Team</li>
                            <li> 100% Resolution Guarantee</li>
                        </ul>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-6">

                    <div class="form-container">
                        @include('partials.common-form', [
                            'brands' => $brands,
                            'serviceSlug' => $service->slug ?? '',
                            'prefix' => 'service1',
                        ])
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="printer-brands py_8">
        <div class="container">
            <div class="printer_brands_heaidng">
                <h2>Choose Your Printer Brand</h2>
                <p>Find Your Perfect Printing Partner: Explore Top Printer Brands!</p>
            </div>
            <div class="row justify-content-center">
                @foreach ($brands as $brand)
                    <div class="col-md-2 mb-3">
                        <div class="brand-card">
                            @if ($brand->icon_image)
                                <img src="{{ asset('storage/app/public/' . $brand->icon_image) }}"
                                    alt="{{ $brand->brand_name }}">
                            @else
                                <img src="{{ asset('images/default_logo.png') }}" alt="No Image">
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="why_choose_us">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Column (Video) -->
                <div class="col-md-6 mb-3">
                    <div class="video-container">
                        <video autoplay muted loop>
                            <source src="https://printertales.com/public/upload/image/636cac052db00_printertalesvid.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

                <!-- Right Column (Content) -->
                <div class="col-md-6 mb-3">
                    <div class="content-box">
                        <h2 class="section-heading">Why Choose Printer Tales to Fix Your Printer Issues?</h2>
                        <p class="section-content">
                            Our Technical team of certified and experienced printer experts provides solutions to all kinds
                            of printer issues. We provide troubleshooting guides for almost all top printer brands,
                            including HP, Canon, Brother, Epson, Panasonic, Zebra, Samsung, Fujitsu, Xerox, etc. We are
                            available 24/7 to answer your queries in real-time as a printer can show errors anytime.
                            <br><br>
                            With Printer Tales, you’ve expert help right at your fingertips whenever and wherever you want.
                            Just give us a call any time of the day, and we’ll ensure that your printer issue gets solved as
                            soon as possible.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="why_choose_us py_8">
        <div class="container">
            <div class="row align-items-center">

                <!-- Right Column (Content) -->
                <div class="col-md-6 mb-3">
                    <div class="content-box">
                        <h2 class="section-heading">About Us</h2>
                        <p class="section-content">
                            Our Technical team of certified and experienced printer experts provides solutions to all kinds
                            of printer issues. We provide troubleshooting guides for almost all top printer brands,
                            including HP, Canon, Brother, Epson, Panasonic, Zebra, Samsung, Fujitsu, Xerox, etc. We are
                            available 24/7 to answer your queries in real-time as a printer can show errors anytime.
                            <br><br>
                            With Printer Tales, you’ve expert help right at your fingertips whenever and wherever you want.
                            Just give us a call any time of the day, and we’ll ensure that your printer issue gets solved as
                            soon as possible.
                        </p>
                        <div class="btn_about_us">
                            <a href="{{route('about')}}" class="btn">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Left Column (Video) -->
                <div class="col-md-6 mb-3">
                    <div class="img_about">
                        <img src="{{asset('public/images/About_Printer_Setup.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-blog-area py_8 pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="sec-title-two pull-left">
                        <h2>All Printer Setup - Latest Blogs Update</h2>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="button pull-right">
                        <a href="{{ route('blogs') }}">Read More News<i class="fa fa-caret-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme" id="owl_1">
                @foreach ($blogs as $blog)
                    <div class="item">
                        <div class="single-latest-blog11">
                            <div class="img-holder">
                                <img class="lazyload" src="{{ asset('public/' . $blog->banner) }}"
                                    alt="{{ $blog->banner_alt }}">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{ route('blog.blog_details', $blog->slug) }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li><a href="#">{{ $blog->author }}</a></li>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i><a
                                            href="#">{{ $blog->created_at->format('M d, Y') }}</a></li>
                                </ul>
                                <a href="{{ route('blog.blog_details', $blog->slug) }}">
                                    <h3 class="blog-title">{{ $blog->title }}</h3>
                                </a>
                                <p>{{ substr($blog->meta_description, 0, 140) }}...</p>
                                <a class="btn" href="{{ route('blog.blog_details', $blog->slug) }}">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="testimonials py_8">
        <div class="container">
            <h2 class="title">Testimonials</h2>
            <p class="subtitle">Find out why our customers keep coming back – their testimonials tell the whole story.</p>

            <div class="owl-carousel testimonial-slider">
                <!-- Testimonial 1 -->
                <div class="testimonial-box">
                    <img src="{{asset('public/images/ann-truscott.jpg')}}" alt="John Davidson" class="profile">
                    <h3>John Davidson</h3>
                    <div class="stars">★★★★★</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, pariatur placeat. Impedit, deserunt
                        adipisci eligendi sit dolorem facere doloribus, eaque cupiditate quibusdam non voluptates enim amet
                        officiis, iusto voluptatibus cumque?</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-box">
                    <img src="{{asset('public/images/ann-truscott.jpg')}}" alt="Robert McCauley" class="profile">
                    <h3>Robert McCauley</h3>
                    <div class="stars">★★★★★</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, pariatur placeat. Impedit, deserunt
                        adipisci eligendi sit dolorem facere doloribus, eaque cupiditate quibusdam non voluptates enim amet
                        officiis, iusto voluptatibus cumque?</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-box">
                    <img src="{{asset('public/images/ann-truscott.jpg')}}" alt="Elizabeth" class="profile">
                    <h3>Elizabeth</h3>
                    <div class="stars">★★★★★</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, pariatur placeat. Impedit, deserunt
                        adipisci eligendi sit dolorem facere doloribus, eaque cupiditate quibusdam non voluptates enim amet
                        officiis, iusto voluptatibus cumque?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="appoinment-area py_8 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="products">
                        <div class="main_print_form">
                            <img src="{{asset('public/images/fill_out_form_img.webp')}}" alt="Brother">
                            <!-- <img class="lazyload" data-src="{{ asset('public/images/about/fill_out_form_img.webp') }}" alt="printing_form"> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-container">
                        @include('partials.common-form', [
                            'brands' => $brands,
                            'serviceSlug' => $service->slug ?? '',
                            'prefix' => 'service2',
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-container py_8">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 mb-3">
                    <div class="faq-content">
                        <h2>Frequently Asked Questions</h2>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>What is your return policy?</span>
                                <span class="icon">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>We offer a 30-day return policy from the date of delivery.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>What is your return policy?</span>
                                <span class="icon">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>We offer a 30-day return policy from the date of delivery.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>What is your return policy?</span>
                                <span class="icon">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>We offer a 30-day return policy from the date of delivery.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>What is your return policy?</span>
                                <span class="icon">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>We offer a 30-day return policy from the date of delivery.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>What is your return policy?</span>
                                <span class="icon">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>We offer a 30-day return policy from the date of delivery.</p>
                            </div>
                        </div>

                        <!-- Add more FAQ items as needed -->
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="faq_images">
                        <img src="{{asset('public/images/Customer_support.jpg')}}" alt="FAQ public/images">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    <script>
        $('#owl_1').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            smartSpeed: 3000,
            slideTransition: 'linear',
            items: 3,
            autoplaySpeed: 5000,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
@endsection
