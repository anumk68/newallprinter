<form id="inquiryForm_{{ $prefix }}" class="needs-validation inquiry-form" action="{{ route('commonstore.store') }}" method="POST">
 @csrf
    <h4>Fill the form</h4>

    <!-- HIDDEN FIELD FOR SERVICE -->
    <input type="hidden" name="service_slug" value="{{ old('service_slug', $service->slug ?? '') }}">

    <div class="row">
        <div class="col-md-6 mb-3">
            <select class="form-select" name="brand" required>
                <option value="">Select Brand</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->brand_name }}" {{ old('brand') == $brand->brand_name ? 'selected' : '' }}>
                        {{ $brand->brand_name }}
                    </option>
                @endforeach
            </select>
            <div class="invalid-feedback">Please select a brand.</div>
         
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="model_number"
                   placeholder="Model Number"
                   value="{{ old('model_number') }}"
                   required>
            <div class="invalid-feedback">Model number is required.</div>
           
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="name"
                   placeholder="Your Name"
                   value="{{ old('name') }}"
                   required>
            <div class="invalid-feedback">Name is required.</div>
          
        </div>
        <div class="col-md-6 mb-3">
            <input type="email" class="form-control" name="email"
                   placeholder="Your Email"
                   value="{{ old('email') }}"
                   required>
            <div class="invalid-feedback">Valid email is required.</div>
           
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <select class="form-select" name="country_code" required>
                <option value="">Country Code</option>
                <option {{ old('country_code') == 'USA +1' ? 'selected' : '' }}>USA +1</option>
                <option {{ old('country_code') == 'UK +44' ? 'selected' : '' }}>UK +44</option>
                <option {{ old('country_code') == 'IN +91' ? 'selected' : '' }}>IN +91</option>
            </select>
            <div class="invalid-feedback">Select country code.</div>
           
        </div>
        <div class="col-md-6 mb-3">
            <input type="tel" class="form-control" name="phone_number"
                   placeholder="Your Phone Number"
                   value="{{ old('phone_number') }}"
                   required pattern="\d{10}">
            <div class="invalid-feedback">Enter valid phone number.</div>
          
        </div>
    </div>

    <div class="mb-3">
        <textarea class="form-control" name="issue_description" rows="3"
                  placeholder="Describe Your Issue"
                  required>{{ old('issue_description') }}</textarea>
        <div class="invalid-feedback">Please describe your issue.</div>
      
    </div>

    <div class="flexiable">

        <button class="btn btn-custom btn-primary" type="submit">Submit</button>
    </div>
</form>
<div id="successMessage_{{ $prefix }}" class="alert alert-success d-none" style="margin:9px;"></div>
<div id="errorMessages_{{ $prefix }}" class="alert alert-danger d-none" style="margin:9px;"></div>


