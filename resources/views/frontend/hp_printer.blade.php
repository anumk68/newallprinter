@extends('layouts.app')

@section('content')
    <section class="banner-section"
        style="background: linear-gradient(rgb(31 191 255 / 52%), rgb(31 191 255 / 52%)), url(public/images/about_bannner.png);">

        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Left Content -->
                <div class="col-lg-6">
                    <div class="banner_content">
                        <h1 class="display-5 fw-bold">{{ $brand->brand_name }}</h1>
                        <p class="mt-3">
                            {{ $brand->description }}
                        </p>

                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-6">
                  
                        <div class="form-container">
                            @include('partials.common-form', [
                                'brands' => $brands,
                                'serviceSlug' => $service->slug ?? '',
                                'prefix' => 'service3',
                            ])
                        </div>

                   
                </div>
            </div>
        </div>
    </section>


    <section class="select_brand_issue">
        <div class="container my-5">
            <h2 class="text-center mb-4 title">Please Select Your Printer Issues!</h2>
            <div class="row g-4">
                @foreach ($brand->services as $service)
                    <div class="col-md-3">
                    <a
                                href="{{ route('service_detail', ['brand_slug' => $brand->slug, 'service_slug' => $service->slug]) }}">
                        <div class="issue-box">
                            <img src="{{ asset('storage/app/public/' . $service->icon) }}" alt="{{ $service->name }}">
                            
                                {{ $service->service_name }}
                          
                        </div>
                          </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="why_choose_us py_8">
        <div class="container">
            <div class="row align-items-center">

                <!-- Right Column (Content) -->
                <div class="col-md-6 mb-3">
                    <div class="content-box">
                        <h2 class="section-heading">Printer Issue</h2>
                        <p class="section-content">
                          {{$brand->seo_content ?? 'We provide comprehensive solutions for all your printer issues, ensuring smooth and efficient printing experiences. Our expert team is dedicated to resolving any problems you may encounter with your printer, from setup and installation to troubleshooting and maintenance.'}}
                        </p>
                       
                    </div>
                </div>

                <!-- Left Column (Video) -->
                <div class="col-md-6 mb-3">
                    <div class="img_about">
                    <img src="{{ asset('storage/app/public/' . $brand->additional_image) }}" alt="{{ $brand->additional_image }}">
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

 <section class="blog-section py_8">
        <div class="container">
            <h2 class="section-title">Latest Blogs And Drivers</h2>
            <p class="section-subtitle">Effortless Printing, Every Time: Learn How Our Latest Drivers Make Your Life Easier
                in Our Informative Blogs.</p>

            @foreach ($blogs->chunk(3) as $chunk)
                <div class="row">
                    @foreach ($chunk as $blog)
                        <div class="col-md-4 mb-3">
                            <div class="single-latest-blog11">
                                <div class="img-holder">
                                    <a href="{{ route('blog.blog_details', $blog->slug) }}">
                                        <img src="{{ asset('public/' . $blog->banner) }}" alt="{{ $blog->banner_alt }}">
                                    </a>
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
                                        <h3 class="blog-title">{{ Str::words($blog->title ?? '', 8, '...') }}</h3>
                                    </a>
                                    <p class="blog-sort-desc">{{ Str::limit($blog->meta_description ?? '', 125, '...') }}
                                    </p>
                                    <a class="btn" href="{{ route('blog.blog_details', $blog->slug) }}">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>
    </section>

    <section class="testimonials py_8">
        <div class="container">
            <h2 class="title">Testimonials</h2>
            <p class="subtitle">Find out why our customers keep coming back – their testimonials tell the whole story.</p>

            <div class="owl-carousel testimonial-slider">
                <!-- Testimonial 1 -->
                <div class="testimonial-box">
                    <img src="public/images/ann-truscott.jpg" alt="John Davidson" class="profile">
                    <h3>John Davidson</h3>
                    <div class="stars">★★★★★</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, pariatur placeat. Impedit, deserunt
                        adipisci eligendi sit dolorem facere doloribus, eaque cupiditate quibusdam non voluptates enim amet
                        officiis, iusto voluptatibus cumque?</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-box">
                    <img src="public/images/ann-truscott.jpg" alt="Robert McCauley" class="profile">
                    <h3>Robert McCauley</h3>
                    <div class="stars">★★★★★</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, pariatur placeat. Impedit, deserunt
                        adipisci eligendi sit dolorem facere doloribus, eaque cupiditate quibusdam non voluptates enim amet
                        officiis, iusto voluptatibus cumque?</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-box">
                    <img src="public/images/ann-truscott.jpg" alt="Elizabeth" class="profile">
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
                            
                             <img class="lazyload" src="{{ asset('public/images/about/fill_out_form_img.webp') }}" alt="printing_form"> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-container">
                            @include('partials.common-form', [
                                'brands' => $brands,
                                'serviceSlug' => $service->slug ?? '',
                                'prefix' => 'service8',
                            ])
                        </div>
                </div>
            </div>
        </div>
    </section>
     <section class="faq-container py_8 pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3">
                    <div class="faq_images">
                        <img src="{{ asset('public/images/Customer_support.jpg') }}" alt="FAQ Image">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="faq-content">
                        <h2>Frequently Asked Questions</h2>

                        @if ($faqs->count())
                            @foreach ($faqs as $faq)
                                <div class="faq-item">
                                    <div class="faq-question" onclick="toggleFAQ(this)">
                                        <span>{{ $faq->question }}</span>
                                        <span class="icon">+</span>
                                    </div>
                                    <div class="faq-answer">
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No FAQs found for this service.</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
