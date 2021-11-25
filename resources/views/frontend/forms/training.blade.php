<section id="contact" class="contact">
    <div class="section-title">
        <h2>Sign Up Now!</h2>
    </div>
    <div class="container">
      <div class="row justify-content-center aos-init aos-animate" data-aos="fade-up">
        <div class="col-lg-10">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <small class="mb-10">Asterisk (<span class="text-danger">*</span>) next to a form control's label indicates that such field is <strong>"required"</strong></small>
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>Full Name</label>
                    <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" id="full_name" value="{{ old('full_name') }}" required>
                    @error('full_name')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-8 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>Business Name</label>
                    <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror" id="business_name" value="{{ old('business_name') }}" required>
                    @error('business_name')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>Location</label>
                    <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" id="location" value="{{ old('location') }}" required>
                    @error('location')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required>
                    @error('email')
                        <x-alert :message="$message" />
                    @enderror
                </div>


                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Phone Number</label>
                    <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" maxlength="11" value="{{ old('phone_number') }}" required>
                    @error('phone_number')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-12 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Expectation on the Program</label>
                    <textarea class="form-control @error('expectation') is-invalid @enderror" name="expectation" rows="3" value="{{ old('expectation') }}" required></textarea>
                    @error('expectation')
                      <x-alert :message="$message" />
                    @enderror
                </div>

                <input type="hidden" name="training_type" class="d-none" value="{{ ((Route::currentRouteNamed('frontend.training_start_your_business') == true) ? 'Start your business' : ((Route::currentRouteNamed('frontend.training_improve_your_business') == true) ? 'Improve your business' : 'Business continuity plan')) }}" required>

            </div>

            <div class="text-center"><button type="submit">Submit </button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
