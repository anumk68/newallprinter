@extends('layouts.app')

@section('content')
    <section class="banner_about py_8"
        style="
        background: linear-gradient(
            rgba(31, 191, 255, 0.52),
            rgba(31, 191, 255, 0.52)
        ),
        url('{{ asset('storage/app/public/' . $service->banner_image) }}');
        background-size: cover;
        background-position: center;
    ">
        <div class="container">

            <div class="row align-items-center">

                <!-- Left Column -->
                <div class="col-md-5">
                    <div class="virtual-assist-box">
                        <h6>Our Experts are available for</h6>
                        <h3>Virtual Assistance (24/7)</h3>
                        <img src="{{ asset('public/images/calling.png') }}" alt="Virtual Assistant Icon">
                        <br>
                        <a href="#contact" class="btn btn-custom mt-3">Get in Touch</a>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-7">
                    <div class="services_banner_form_clickable">
                        <div class="container">
                            <div class="wizard-box">
                                <!-- Step 1 -->
                                <div class="step active" id="step1">
                                    <h4>Select Your Printer Series</h4>
                                    <div class="d-flex flex-wrap">
                                        @forelse ($seriesList as $series)
                                            <button class="btn-option" onclick="selectOption(this, 'printerSeries')">
                                                {{ $series }}
                                            </button>
                                        @empty
                                            <p>No printer series available for this brand.</p>
                                        @endforelse
                                    </div>

                                    <div class="text-center">
                                        <button class="nav-btn" onclick="nextStep()">Next</button>
                                    </div>
                                </div>

                                <!-- Step 2 -->
                                <div class="step" id="step2">
                                    <h4>Select the option that fits your problem best</h4>
                                    <div class="d-flex flex-wrap ">
                                        <button class="btn-option"
                                            onclick="selectOption(this, 'problem')">{{ $service->service_name }}</button>


                                    </div>
                                    <div class="text-center">
                                        <button class="nav-btn" onclick="prevStep()">Previous</button>
                                        <button class="nav-btn" onclick="nextStep()">Next</button>
                                    </div>
                                </div>

                                <!-- Step 3 -->
                                <div class="step" id="step3">
                                    <h4>Choose your Operating System</h4>
                                    <div class="d-flex justify-content-center flex-wrap">
                                        <button class="btn-option" onclick="selectOption(this, 'os')">Windows</button>
                                        <button class="btn-option" onclick="selectOption(this, 'os')">Macbook</button>
                                        <button class="btn-option" onclick="selectOption(this, 'os')">Chromebook</button>
                                    </div>
                                    <div class="text-center">
                                        <button class="nav-btn" onclick="prevStep()">Previous</button>
                                        <button class="nav-btn" onclick="nextStep()">Next</button>
                                    </div>
                                </div>

                                <!-- Step 4 -->
                                <div class="step" id="step4">

                                    <div class="form-container">
                                        @include('partials.printer-form', [
                                            'brands' => $brands,
                                            'serviceSlug' => $service->slug ?? '',
                                        ])

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="image_banner_boottm py_8">
        <div class="container">
            <div class="single_image">
                <a href="#"><img src="image/Banne_print.png" alt=""></a>
            </div>
        </div>

    </section>

    <section class="bloging_content">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="bloging_main_under">
                        <div class="img_bloging">
                            @if ($service->banner_image)
                                <img src="{{ asset('storage/app/public/' . $service->banner_image) }}"
                                    alt="{{ $service->service_name }}" class="img-fluid mb-3">
                            @endif
                        </div>
                        <div class="contant_under_bloging">
                            <p>{!! $service->description !!}</p>

                        </div>

                    </div>

                </div>
                <div class="col-md-5">
                    <div class="right_sticky_bloging">
                        <div class="social_icon_main">
                            <div class="follow_us">
                                <i class="fa-brands fa-youtube"></i>
                                <i class="fa-solid fa-x"></i>
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>

                        <div class="bloging_form">
                            <div class="form-container">
                               @include('partials.common-form', [
                        'brands' => $brands,
                        'serviceSlug' => $service->slug ?? '',
                        'prefix' => 'service4',
                    ])
                            </div>
                        </div>

                        <div class="support-box text-center d-flex flex-wrap justify-content-center"
                            style="background: url('image/bloging_bg_buttons.png')">
                            <div class="fleX_blogging">
                              <div class="btn_header_callnow text-center">
                                        <a href="tel:8888752997" class="btn w-100">Contact Us</a>
                                    </div>
                               <div class="btn_header_callnow text-center">
                                        <a href="javascript:void(0);" onclick="parent.LiveChatWidget.call('maximize')" class="btn w-100">Live Chat</a>
                                    </div>
                            </div>
                            <div class="fleX_blogging">
                                <div class="btn_header_callnow text-center">
                                        <a href="{{ route('virtual_chat') }}" class="btn w-100">Virtual Assistance</a>
                                    </div>
                              <div class="btn_header_callnow text-center">
                                        <a href="javascript:void(0);" onclick="openIframeModal('{{ route('iframe_index') }}');" class="btn w-100">Download Drivers</a>
                                        </div>
                            </div>
                        </div>

                    <!-- //iframe -->
                    <div id="iframeModal" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
                        background-color: rgba(0, 0, 0, 0.7); z-index: 9999; justify-content: center; align-items: center;">
                        <div style="position: relative; width: 90%; max-width: 400px; height: 80%; background: #fff; border-radius: 10px; overflow: hidden;">
                            <button onclick="closeIframeModal()" style="position: absolute; top: 10px; right: 10px; z-index: 10000; background: #ff5a5a; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">X</button>
                            <iframe id="driversIframe" src="" style="width: 95%; height: 98%; border: none;margin-top:5%;justify-content:center;"></iframe>
                        </div>
                    </div>

                    @if(request()->isMethod('post'))
                        @php
                            $name  = request('name');
                            $email = request('email');
                            $phone = request('phone');
                            $model = request('model');
                            $feedback = request('feedback');

                            $to = 'manpreet.digirush@gmail.com';
                            $subject = 'New enquiry submitted';

                            $message = "New Inquiry Details:\n\n";
                            $message .= "Name: $name\n";
                            $message .= "Phone Number: $phone\n";
                            $message .= "Model Number: $model\n";
                            $message .= "Email: $email\n";
                            $message .= "Feedback: $feedback\n";

                            $headers = "From: contact@getsupportguide.com\r\n";
                            $headers .= "Reply-To: contact@getsupportguide.com\r\n";
                            $headers .= "X-Mailer: PHP/" . phpversion();

                            mail($to, $subject, $message, $headers);

                            echo json_encode(['status' => 'sent']);
                            exit;
                        @endphp
                    @endif


                    <script>
                        function openIframeModal(url) {
                            const modal = document.getElementById('iframeModal');
                            const iframe = document.getElementById('driversIframe');
                            iframe.src = url;
                            modal.style.display = 'flex';
                        }

                        function closeIframeModal() {
                            const modal = document.getElementById('iframeModal');
                            const iframe = document.getElementById('driversIframe');
                            iframe.src = '';
                            modal.style.display = 'none';
                        }

                        //function to show thankyou modal and sending modal
                        function contact_form_submitted(event) {
                            event.preventDefault();
                            const modalElement = document.getElementById('thankYouModal');
                            const modal = new bootstrap.Modal(modalElement);
                            modal.show();

                            var name     = document.getElementById('name').value;
                            var email    = document.getElementById('email').value;
                            var phone    = document.getElementById('phone').value;
                            var model    = document.getElementById('model').value;
                            var feedback = document.getElementById('feedback').value;

                            $.ajax({
                                type: 'POST',
                                url: '{{ url()->current() }}',
                                data: {
                                    name: name,
                                     email: email, 
                                     phone: phone, 
                                     model: model, 
                                     feedback: feedback,
                                     _token: '{{ csrf_token() }}'
                                },
                                success: function(response){
                                    console.log(response);
                                }
                            });
                        }
                    </script>
                        <section class="reviews">
                            <h2>Google Review's</h2>
                            <div class="owl-carousel review-carousel">
                                <div class="review-card">
                                    <div class="review-header">
                                        <img src="public/images/hp_logo.png" alt="James Bauman" class="review-avatar">
                                        <div class="review-info">
                                            <h4>James Bauman</h4>
                                            <span>@James.Bauman</span>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="96px"
                                            height="96px">
                                            <path fill="#1c9957"
                                                d="M42,39V9c0-1.657-1.343-3-3-3H9C7.343,6,6,7.343,6,9v30c0,1.657,1.343,3,3,3h30C40.657,42,42,40.657,42,39z">
                                            </path>
                                            <path fill="#3e7bf1" d="M9,42h30c1.657,0-15-16-15-16S7.343,42,9,42z"></path>
                                            <path fill="#cbccc9" d="M42,39V9c0-1.657-16,15-16,15S42,40.657,42,39z"></path>
                                            <path fill="#efefef"
                                                d="M39,42c1.657,0,3-1.343,3-3v-0.245L26.245,23L23,26.245L38.755,42H39z">
                                            </path>
                                            <path fill="#ffd73d"
                                                d="M42,9c0-1.657-1.343-3-3-3h-0.245L6,38.755V39c0,1.657,1.343,3,3,3h0.245L42,9.245V9z">
                                            </path>
                                            <path fill="#d73f35"
                                                d="M36,2c-5.523,0-10,4.477-10,10c0,6.813,7.666,9.295,9.333,19.851C35.44,32.531,35.448,33,36,33s0.56-0.469,0.667-1.149C38.334,21.295,46,18.813,46,12C46,6.477,41.523,2,36,2z">
                                            </path>
                                            <path fill="#752622" d="M36 8.5A3.5 3.5 0 1 0 36 15.5A3.5 3.5 0 1 0 36 8.5Z">
                                            </path>
                                            <path fill="#fff"
                                                d="M14.493,12.531v2.101h2.994c-0.392,1.274-1.455,2.185-2.994,2.185c-1.833,0-3.318-1.485-3.318-3.318s1.486-3.318,3.318-3.318c0.824,0,1.576,0.302,2.156,0.799l1.548-1.547C17.22,8.543,15.92,8,14.493,8c-3.038,0-5.501,2.463-5.501,5.5s2.463,5.5,5.501,5.5c4.81,0,5.637-4.317,5.184-6.461L14.493,12.531z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="review-text">
                                        The support provided for my Brother MFC-J995DW was efficient and effective. I had
                                        difficulty setting up the wireless connection, but the Printer touch support team
                                        guided me through the process smoothly.
                                    </p>
                                </div>
                                <!-- Add more .review-card items as needed -->
                            </div>
                        </section>

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
    <section class="faq-container py_8 pt-0">
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
