@extends('layouts.app')

@section('title', '')
@section('meta-description', '')
@section('content')

<!--Start breadcrumb area-->
<section class="banner-section" style="background: linear-gradient(rgb(31 191 255 / 52%), rgb(31 191 255 / 52%)), url(public/images/redirectbanner_3.jpg);">
   
    <div class="container">
        <div class="row align-items-center g-5">
        <!-- Left Content -->
        <div class="col-lg-6">
    <div class="banner_content">
            <h1 class="display-5 fw-bold">Installation & Troubleshooting</h1>
            <p class="mt-3">
            Setting up your new printer or facing technical issues? Our dedicated Printer Installation & Troubleshooting service ensures a smooth start and uninterrupted performance. Whether you're installing a wireless printer, configuring drivers, or dealing with stubborn error messages, we provide step-by-step help for all major brands, including HP, Epson, Canon, and Brother. At All Printer Setup, our experts walk you through proper setup, network connection, and software installation so your printer is ready to go without hassle. If your printer suddenly stops working, won't print, or gives poor output, we diagnose and fix the issue fast. We specialize in solving paper jams, driver conflicts, Wi-Fi setup problems, and print queue errors. Save time and avoid frustration with reliable printer support. Let us get your device up and running smoothly, whether it's your first setup or a recurring glitch.


            </p>
    
    </div>
        </div>

        <!-- Right Form -->
        <div class="col-lg-6">
                        <div class="form-container">
            @include('partials.common-form', [
                            'brands' => $brands,
                            'serviceSlug' => $service->slug ?? '',
                            'prefix' => 'service5',
                        ])
    </div>
      </div>  
    </div>
  </div>
</section>



<section class="priter-all-serv-mainnn py_8 pb-0">
    <div class="container">
        <div class="services-mnn-seccchdd">
            <h2>Get Your Printer Installation & Troubleshooting Support Help Quickly</h2>
        </div>
        <div class="row align-items-center background_color_all_sec  mb-4">
                         <div class="col-md-4">
                    <div class="priter-all-serv-mainnn-img">
                       <img src="public/images/about/expert_install_trouble.png" alt="printing_form">
                    </div>
                    </div>
                <div class="col-md-8">
                        <div class="priter-all-serv-mainnn-cnttt">
                       <h3>Expert Printer Installation and Troubleshooting Support</h3>
                        <p>Get expert <a href="{{ route('installation_printer') }}"> printer installation and troubleshooting support</a> for HP, Epson, Brother, and Canon printers. Quick, reliable service at All Printer Setup USA. We understand that setting up a new printer or fixing issues with an existing one can be frustrating. That’s why we’re here to help! Whether you need assistance installing your printer for the first time or troubleshooting problems, our team of experts is ready to make the process simple and stress-free.</p>
                    </div>
                </div>
        </div>
        <div class="row align-items-center background_color_all_sec  mb-4">

            <div class="col-md-8">
                    <div class="priter-all-serv-mainnn-cnttt">
                        <h3>Printer Installation</h3>
                        <p>Getting your printer up and running is easy with our professional support. We assist with: </p>
                        <ul class="main-b-tagpg">
                            <li><b>Setting up any printer model  - </b>Whether it’s HP, Epson, Brother, or Canon, we guide you through the setup process step by step.
                            </li>
                            <li><b>Wireless and wired connections - </b>We’ll ensure your printer is connected properly to your Wi-Fi network or computer.
                            </li>
                            <li><b>Driver installation - </b>Having trouble with drivers? We’ll help install the right software so your printer runs smoothly.</li>
                            <li><b>First-time configuration - </b>From selecting paper settings to optimizing print quality, we make sure your printer is configured correctly.</li>
                        </ul>
                    </div>
            </div>
                        <div class="col-md-4">
                      <div class="priter-all-serv-mainnn-img">
                        <img src="public/images/about/printer_installation.png" alt="printing_form">
                    </div>
            </div>
                </div>
          

        <div class="row align-items-center background_color_all_sec  mb-4">
            <div class="col-md-4">
                <div class="priter-all-serv-mainnn-div">
                    <div class="priter-all-serv-mainnn-img">
                      <img src="public/images/about/troble_shoot_print_shoot.jpg" alt="printing_form">
                        
                    </div>
                        </div>
            </div>
              <div class="col-md-8">
                      <div class="priter-all-serv-mainnn-cnttt">
                        <h3>Troubleshooting Printer Issues</h3>
                  <p>Is your printer not working as expected? Our troubleshooting services cover:
                        </p>
                         <ul class="main-b-tagpg">
                            <li><b>Fixing paper jams - </b> We’ll help you clear paper jams and prevent them from happening in the future.</li>
                            <li><b>Resolving error codes - </b>Don’t understand the error messages? We decode them and provide easy-to-follow solutions.
                            </li>
                            <li><b>Printer not connecting - </b>Whether it’s a network or USB issue, we’ll get your printer back online.
                            </li>
                            <li><b>Slow printing or low-quality output - </b> If your printer is slow or printing poorly, we diagnose the issue and improve performance.
                            </li>
                            <li><b>Driver and software issues - </b>We solve problems related to printer drivers and ensure your system is up-to-date.</li>
                        </ul>
                    </div>
              </div>
          
        
        </div>
        <div class="row align-items-center background_color_all_sec mb-4">


         <div class="col-md-8">
            <div class="priter-all-serv-mainnn-cnttt">
                        <h3>Why Choose Us?</h3>
                      <ul class="main-b-tagpg">
                            <li><b>Expert Support - </b> <a href="{{ route('home') }}">All Printer Setup</a> team has experience with all major printer brands.
                            </li>
                            <li><b>Quick Response - </b>We offer fast solutions so you can get back to printing in no time.
                            </li>
                            <li><b>Customer Satisfaction - </b>We aim to provide the best service possible, ensuring your printer runs smoothly without any hassle.
                            </li>
                        </ul>
             </div>
         </div>

                <div class="col-md-4">
                        <div class="priter-all-serv-mainnn-img">
                       <img src="public/images/about/why_chooose_us_install.png" alt="printing_form">
                    </div>
                </div>
        </div>

    </div>
</section>


<section class="faques_redirect">
    <div class="container">
     <div class="all-serv-accordian-hdx mb-4">
                    <h2 class="text-center">Frequently Asked Questions (FAQs)</h2>
                </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                  <div class="all-serv-accordian-imgg">
                    <img src="public/images/about/printer_faq_4.png" alt="faq_page">
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How do I troubleshoot my printer offline?
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        General fixes for diagnosing an apparently offline printer are as follows: First, check that the printer is powered up and hooked to your computer or your network. In "Devices and Printers," right-click the printer and click on the option "Set as Default Printer." You then reboot the printer and the computer in question to get the connection renewed. If you have installed a wireless printer, first confirm that they both share the same Wi-Fi. Confirm if the cables hooked to the printer are properly plugged into the ports of the printer. Check for error messages from the printer. Then, if the problem is still persistent, reinstall the printer drivers.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Why is my printer not connecting to Wi-Fi?
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                      If your printer does not connect to Wi-Fi, ensure that it is in range to the router. Make sure the "Wi-Fi" is enabled on the printer. If you're prompted during the setup process, ensure the correct network password is entered. Reset both the printer and the router to refresh the connection. Firmware is the printer's software, so ensure it's up to date because outdated software has been known to cause connectivity problems. If you installed any firewalls or security software, they may block the connection. Disable these services temporarily, then continue with troubleshooting through printer manuals that provide troubleshooting specific to the problem of how to connect to Wi-Fi.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          How do I install my printer on a Windows computer?
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                    To install your printer on a Windows PC or Computer, first connect it via USB or ensure it’s on the same Wi-Fi network. Power on the printer, then go to "Settings" > "Devices" > "Printers & Scanners" on your computer. Click "Add a printer or scanner" and select your printer from the list when it appears. Windows will automatically install the necessary drivers; follow any on-screen prompts to complete the setup. Finally, print a test page to confirm the installation is successful. If the printer doesn’t appear, you may need to download the drivers from the manufacturer’s website.
                        </div>
                        </div>
                    </div>
                             <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                           How do I update the firmware on my printer?
                        </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                   How to update firmware in the printer: Go to the manufacturer's website and search for its support section pertaining to your printer's particular model. Download the newest firmware file. Ensure that the printer is connected to the computer via USB or a common network with Wi-Fi. Open the downloaded file and then simply follow the instructions on screen to complete the update. Some may even offer the option of checking for updates through their control panel. After applying the update, restart your printer so that you can take hold of the changes.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Start Brand area-->

<section id="marquee">
        <div class="container" >
            <div class="pic-container" >
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img_new.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img_new1.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img_new2.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img3.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img4.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img5.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img6.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img7.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img8.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img9.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img10.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img11.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img12.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img13.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img14.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img15.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
                <div class="pic">
                <a href="#"><img src="{{ asset('public/images/brand/img16.png') }}" alt="brother_print_logo" loading="lazy"></a>
                </div>
            </div>
        </div>
    </section>

@endsection