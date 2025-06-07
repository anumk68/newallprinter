@extends('layouts.app') 
@section('title', 'Contact')
@section('meta-description', 'Your meta description here') 
@section('content')
<section class="banner-section" style="background: linear-gradient(rgb(31 191 255 / 52%), rgb(31 191 255 / 52%)), url(public/images/about_bannner.png);">
   
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="contant_contact">
        <h1>Contact Us</h1>
      </div>
    </div>
  </div>
</section>

<section class="form_map py_8">
  <div class="container">
    <div class="row align-items-center g-5">
      <!-- Left Content -->
      <div class="col-lg-7">
        <div class="banner_content_map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.1556407447424!2d-122.24685562440837!3d37.76294861284156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f86bdc2339109%3A0xd7bc36438b7582b8!2s1311%20Park%20St%2C%20Alameda%2C%20CA%2094501%2C%20USA!5e0!3m2!1sen!2sin!4v1748935184214!5m2!1sen!2sin" width="530" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <!-- Right Form -->
      <div class="col-lg-5">
                 <div class="form-container">
           @include('partials.common-form', [
                        'brands' => $brands,
                        'serviceSlug' => $service->slug ?? '',
                        'prefix' => 'service6',
                    ])
        </div>
      </div>  
    </div>
  </div>


</section>


<section class="contact-section PY_8 PT-0 text-center">
  <div class="container">
    <div class="row">
      <!-- Email Us -->
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="contact-box">
          <div class="contact-icon mb-3">
            <img src="https://img.icons8.com/ios-filled/50/4a5b39/new-post.png" alt="Email Icon">
          </div>
          <h4 class="contact-title">Email Us</h4>
          <p>Email us for any assistance or inquiry.</p>
          <p><strong>support@printertouch.com</strong></p>
        </div>
      </div>

      <!-- Call Us -->
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="contact-box">
          <div class="contact-icon mb-3">
            <img src="https://img.icons8.com/ios-filled/50/4a5b39/phone.png" alt="Phone Icon">
          </div>
          <h4 class="contact-title">Call Us</h4>
          <p>Call us for any assistance or inquiry.</p>
          <p><img src="https://flagcdn.com/us.svg" width="18" alt="US Flag"> <strong>+1 (844) 460-2008</strong></p>
        </div>
      </div>

      <!-- Visit Us -->
      <div class="col-md-4">
        <div class="contact-box">
          <div class="contact-icon mb-3">
            <img src="https://img.icons8.com/ios-filled/50/4a5b39/marker.png" alt="Location Icon">
          </div>
          <h4 class="contact-title">Visit Us</h4>
          <p>Visit us at our location for any inquiry.</p>
          <p><strong>444 Alaska Ave, Torrance, CA 90503,<br> (U.S.A)</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

