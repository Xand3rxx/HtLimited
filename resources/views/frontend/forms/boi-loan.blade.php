<section id="contact" class="contact">
    <div class="section-title">
        <h2>Loan Request Form</h2>
    </div>
    <div class="container">
      <div class="row justify-content-center aos-init aos-animate" data-aos="fade-up">
        <div class="col-lg-10">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <small class="ms-9 mt-n4 mb-4">Asterisk (<span class="text-danger">*</span>) next to a form control's label indicates that such field is <strong>"required"</strong></small>
            <h5 class="mt-2 mb-3">Personal Information</h5>
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>Type of Loan</label>
                    <input type="text" name="loan_type" class="form-control @error('loan_type') is-invalid @enderror" id="loan_type">
                    @error('loan_type')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>Surname</label>
                    <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" id="surname">
                    @error('surname')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>First Name</label>
                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name">
                    @error('first_name')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                    @error('email')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>State of Residence</label>
                    <select class="form-control @error('state_id') is-invalid @enderror" name="state_id" id="state_id">
                        <option selected disabled value="">Select...</option>
                        {{-- @foreach($states as $state)
                            <option value="{{ $state['id'] }}" {{ old('state_id') == $state['id'] ? 'selected' : ''}}>{{ $state['name'] }}</option>
                        @endforeach --}}
                    </select>
                    @error('state_id')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>L.G.A. of Residence</label>
                    <select class="form-control @error('lga_id') is-invalid @enderror" name="lga_id" id="lga_id">
                        <option selected disabled value="">Select...</option>
                        {{-- @foreach($lgas as $lga)
                            <option value="{{ $lga['id'] }}" {{ old('lga_id') == $lga['id'] ? 'selected' : ''}}>{{ $lga['name'] }}</option>
                        @endforeach --}}
                    </select>
                    @error('lga_id')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Phone Number</label>
                    <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" maxlength="11">
                    @error('phone_number')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label fw-bolder text-dark">Alternative Phone Number</label>
                    <input type="tel" class="form-control @error('alternative_phone_number') is-invalid @enderror" name="alternative_phone_number" id="alternative_phone_number" maxlength="11">
                    @error('alternative_phone_number')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-12 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Residential address</label>
                    <textarea class="form-control @error('residential_address') is-invalid @enderror" name="residential_address" rows="3"></textarea>
                    @error('residential_address')
                      <x-alert :message="$message" />
                    @enderror
                </div>
            </div>

            <h5 class="mt-2 mb-3">Business Information</h5>
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>Business Name</label>
                    <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror" id="business_name">
                    @error('business_name')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Business Name Registration Status</label>
                    <select class="form-control @error('business_name_reg_status') is-invalid @enderror" name="business_name_reg_status" id="business_name_reg_status">
                        <option selected disabled value="">Select...</option>
                        <option value="Completed">Completed</option>
                        <option value="In Progress">In Progress</option>
                        <option value="NotAvailable">NotAvailable</option>
                    </select>
                    @error('business_name_reg_status')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>CAC Registration Number</label>
                    <input type="text" name="cac_reg_status" class="form-control @error('cac_reg_status') is-invalid @enderror" id="cac_reg_status">
                    @error('cac_reg_status')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Upload CAC Certificate</label>
                    <input type="file" accept=".docx, .doc, .pdf" name="cac_certificate" class="form-control @error('cac_certificate') is-invalid @enderror" id="cac_certificate">
                    @error('cac_certificate')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Official Email</label>
                    <input type="email" class="form-control @error('business_email') is-invalid @enderror" name="business_email" id="business_email" placeholder="Your official business Email">
                    @error('business_email')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Official Phone Number</label>
                    <input type="tel" class="form-control @error('official_phone_number') is-invalid @enderror" name="official_phone_number" id="official_phone_number" maxlength="11">
                    @error('official_phone_number')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark">Official Phone Number 2</label>
                    <input type="tel" class="form-control @error('official_phone_number_2') is-invalid @enderror" name="official_phone_number_2" id="official_phone_number_2" maxlength="11">
                    @error('official_phone_number_2')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Industry Sector</label>
                    <select class="form-control @error('industry_sector') is-invalid @enderror" name="industry_sector" id="industry_sector">
                        <option selected disabled value="">Select...</option>
                        {{-- @foreach($industrySectors as $industrySector)
                            <option value="{{ $industrySector['id'] }}" {{ old('industry_sector') == $industrySector['id'] ? 'selected' : ''}}>{{ $industrySector['name'] }}</option>
                        @endforeach --}}
                    </select>
                    @error('industry_sector')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Products</label>
                    <input type="text" class="form-control @error('products') is-invalid @enderror" name="products" id="products">
                    @error('products')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Equipment Used</label>
                    <input type="text" class="form-control @error('equipment_used') is-invalid @enderror" name="equipment_used" id="equipment_used">
                    @error('equipment_used')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Years of Operation</label>
                    <select class="form-control @error('industry_sector') is-invalid @enderror" name="industry_sector" id="industry_sector">
                        <option selected disabled value="">Select...</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10 - Above</option>
                    </select>
                    @error('industry_sector')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Staff Strength</label>
                    <select class="form-control @error('staff_strength') is-invalid @enderror" name="staff_strength" id="staff_strength">
                        <option selected disabled value="">Select...</option>
                        <option value="1 - 5">1 - 5</option>
                        <option value="6 - 10">6 - 10</option>
                        <option value="11 - 20">11 - 20</option>
                        <option value="20 - 50">20 - 50</option>
                        <option value="50 - Above">50 - Above</option>
                    </select>
                    @error('staff_strength')
                        <x-alert :message="$message" />
                    @enderror
                </div>
            </div>

            <h5 class="mt-2 mb-3">Loan Request Details</h5>
            <div class="form-row">
                <div class="col-md-12 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>Loan Sum (e.g. ₦10,000,000)</label>
                    <input type="tel" name="loan_sum" class="form-control @error('loan_sum') is-invalid @enderror" id="loan_sum" maxlength="8">
                    @error('loan_sum')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-12 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Purpose of Loan</label>
                    <textarea class="form-control @error('purpose_of_loan') is-invalid @enderror" name="purpose_of_loan" rows="3"></textarea>
                    @error('purpose_of_loan')
                      <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-12 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Have you read and understood the requirements for this loan request?</label><br>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="loan_request_agreement" id="inlineRadio1" value="on"> Yes
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="loan_request_agreement" id="inlineRadio1" value="off"> No
                        </label>
                    </div>

                    @error('loan_request_agreement')
                      <x-alert :message="$message" />
                    @enderror
                </div>
            </div>

            <div class="text-center"><button type="submit">Submit Request</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
