@extends('layouts.app') 
@section('content')
<section class="banner-section" style="background: linear-gradient(rgb(31 191 255 / 52%), rgb(31 191 255 / 52%)), url(public/images/redirectbanner_2.jpg);">
   
    <div class="container">
        <div class="row align-items-center g-5">
        <!-- Left Content -->
        <div class="col-lg-6">
    <div class="banner_content">
            <h1 class="display-5 fw-bold">Canon Printer Support</h1>
            <p class="mt-3">
            Facing trouble with your Canon printer? Whether it's stuck in an error state, not connecting to Wi-Fi, or printing poorly, our Canon Printer Support service has the solutions you need. At All Printer Setup, we assist with driver downloads, firmware updates, wireless setup, and error code troubleshooting for all Canon models. From home printers to office machines, our experts ensure your device runs smoothly without interruption. We understand how frustrating printer issues can be, so we offer clear guidance and fast fixes to keep your productivity on track. Our support helps you resolve paper jams, alignment problems, and connectivity glitches with ease. Don't waste time searching for fixes online — get step-by-step help from a trusted team. Let us take care of your Canon printer so you can get back to printing with confidence.


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
            <h2>Get Canon Printer Support Help Instantly or Quicklyy</h2>
        </div>
        <div class="row align-items-center background_color_all_sec  mb-4">
                         <div class="col-md-4">
                    <div class="priter-all-serv-mainnn-img">
                           <img src="{{ asset('public/images/about/Canon_Printer_Help_and_Support.png') }}"
                                alt="printing_form">
                    </div>
                    </div>
                <div class="col-md-8">
                        <div class="priter-all-serv-mainnn-cnttt">
                        <h3>Overview of Canon Printers</h3>
                        <p>In fact, people know this brand because of the production of <a href="{{ route('epson_service') }}">Canon printers</a> with the extraordinary print quality and versatility to serve both home and professional environments. For many of the customers, Canon is valued for providing a wide range of models of inkjet, laser, and multifunction printers for various needs in printing and services, particularly high-quality photo prints and efficient handling of documents. It also has several other outstanding features such as wireless connectivity, mobile printing, and advanced color management, which make it more convenient for the users. Colorful image quality and crisp text printouts from a canon printer's appeal as both photographers and businesses enjoy using these devices. Routine maintenance - like cleaning print heads and using genuine, original ink cartridges- enable optimal performance and extended lifespan.</p>
                    </div>
                </div>

         
        </div>
        <div class="row align-items-center background_color_all_sec  mb-4">

            <div class="col-md-8">
                        <div class="priter-all-serv-mainnn-cnttt">
                 <h3>Canon Printer Help and Support</h3>
                        <p>At <a href="{{ route('home') }}">ALL PRINTER SETUP,</a> we specialize in providing comprehensive Canon printer help and support for customers across the USA. Whether you're struggling with installation issues, connectivity problems, or printer setup concerns, our expert team is ready to assist. We understand the frustration that comes with printer issues, which is why we aim to deliver fast, reliable, and effective solutions for all Canon printer models. </p>
                    </div>
            </div>
                        <div class="col-md-4">
                    <div class="priter-all-serv-mainnn-img">
                      <img src="{{ asset('public/images/about/canon_printer_help_support.png') }}"
                                alt="printing_form">
                    </div>
            </div>
                </div>
          

        <div class="row align-items-center background_color_all_sec  mb-4">
            <div class="col-md-4">
                <div class="priter-all-serv-mainnn-div">
                    <div class="priter-all-serv-mainnn-img">
                          <img src="{{ asset('public/images/about/canon_printer_business.png') }}"
                        alt="printing_form">
                        
                    </div>
                        </div>
            </div>
              <div class="col-md-8">
                      <div class="priter-all-serv-mainnn-cnttt">
                          <h3>Canon Printers for Businesses</h3>
                        <p>With laser as well as inkjet, it can provide businesses with options that would prove to be perfect for printing all the colorful marketing material that the company feels it needs or really efficient in handling all the paperwork. It is very easy with wireless and mobile printing, facilitating collaboration, and MFP's combine printing, scanning, copying, faxing to streamline workflows, coupled with advanced security measures to protect sensitive information and ease of use for employees. In addition to this, regular maintenance, high-yield cartridges ensure cost-effective printing, making Canon printers a valuable investment for boosting productivity and efficiency at the workplace.</p>
                    </div>
              </div>
          
        
        </div>
        <div class="row align-items-center background_color_all_sec mb-4">


         <div class="col-md-8">
            <div class="priter-all-serv-mainnn-cnttt">
                       <h3>Install Canon Printer with Expert Guidance</h3>
                        <p>When it comes to installing your Canon printer, precision is key. Our technicians are well-versed in helping you install Canon printers on various platforms, including Windows and macOS. We offer step-by-step guidance for both wired and wireless installations, ensuring that your printer is correctly connected to your network and ready to perform. Our goal is to take the complexity out of the process, making installation easy for you.</p>
             </div>
         </div>

                <div class="col-md-4">
                        <div class="priter-all-serv-mainnn-img">
                        <img src="{{ asset('public/images/about/install_canon_expert.png') }}"
                        alt="printing_form">
                    </div>
                </div>
        </div>
        <div class="row align-items-center background_color_all_sec  mb-4">
            <div class="col-md-4">
                        <div class="priter-all-serv-mainnn-img">
                            <img src="{{ asset('public/images/about/online_installation_printer.png') }}"
                    alt="printing_form">          
                    </div>
            </div>
           <div class="col-md-8">
                     <div class="priter-all-serv-mainnn-cnttt">
                        <h3>Online Installation Assistance for Canon Printers</h3>
                        <p>If you prefer to handle the installation on your own but need guidance, we also offer install Canon printer online support. Our online service allows you to follow simple instructions from the comfort of your home or office. With our real-time assistance, you’ll have your Canon printer up and running efficiently without needing in-person support. We also help troubleshoot any issues that may arise during the installation process.</p>
                    </div>
           </div>

         </div>
        <div class="row align-items-center background_color_all_sec  mb-4">
                   <div class="col-md-8">
                        <div class="priter-all-serv-mainnn-cnttt">
                       <h3>Get in Touch for Canon Printer Solutions</h3>
                        <p>At ALL PRINTER SETUP, we’re here to solve any issue related to your Canon printer. From installation to ongoing technical support, our team of experts is available to assist you every step of the way. Don’t let technical problems disrupt your workflow - contact us today to get expert <a href="{{ route('epson_service') }}">Canon printer support</a> and ensure your printer is functioning optimally.</p>
                    </div>
            </div>
             <div class="col-md-4">
                       <div class="priter-all-serv-mainnn-img">
                          <img src="{{ asset('public/images/about/get_in_touch_solution.png') }}"
                        alt="printing_form">    
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
                      <img src="{{ asset('public/images/about/printer_faq_3.png') }}"
                    alt="faq_img">    
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  How to Fix an Appointment with All Printer Setup’s Assistant?
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        To schedule an appointment with an assistant from All Printer Setup, visit our website and navigate to the "Contact Us" section. There, you’ll find an online appointment form - fill it out with your details, including your contact number, and a brief description of your issue. Alternatively, you can directly CHAT with us through the website's CHAT BOX.  Once confirmed, you’ll receive a confirmation email with all the necessary details.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How to Reinstall Canon MX922 Printer? 
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          The steps on <a href="https://allprintersetup.com/blogs/how-to-reinstall-canon-mx922-printer">how to reinstall your Canon MX922 printer</a> would include deleting the existing drivers by going through the Control Panel to "Devices and Printers". Then you can right click the printer icon there and delete it. Restart your computer after that. Then, you download the latest drivers from the Canon support website, confirming that these are the ones that will match your operating system. You then attach your printer using a USB cable or if you are using wireless, make sure it's connected to the same wi-fi. Download the driver installation file. Run the driver installation file and follow the instructions on-screen. Select your connection type, and you're good to go. Print a test page to see if you get the desired output.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           How to Install Canon Pixma G6020 Print Head?
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                      The process of <a href="https://allprintersetup.com/blogs/how-to-install-canon-pixma-g6020-print-head">how to install Canon Pixma G6920 print head</a> on a Canon Pixma G6020 begins by ensuring that the printer is turned on. Next, open the front cover and then the ink tank cover. Remove the ink tanks from their location in order to be able to access the print head, before gently popping the print head out of its location by pushing the levers down and pulling it out of the machine. Unpack any new print heads and push the new head into the slot provided, ensuring it clicks into place. Reinsert the ink tanks, and then close the front cover. Finally, run a print head alignment through the printer settings to function at its best.
                        </div>
                        </div>
                    </div>
                             <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        Where can I find the serial number for my Canon's product?
                        </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                      To find the serial number for your Canon product, check for a label or sticker on the bottom, back, or inside the battery compartment. The user manual may also indicate its location. For printers, you can often find the serial number in the printer settings menu on the display screen. Additionally, some products may allow you to view the serial number through your Canon online account. Make sure to keep it noted for warranty or support needs!
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection