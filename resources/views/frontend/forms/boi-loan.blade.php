<section id="contact" class="contact">
    <div class="section-title">
        <h2>Loan Request Form</h2>
    </div>
    <div class="container">
      <div class="row justify-content-center aos-init aos-animate" data-aos="fade-up">
        <div class="col-lg-10">
          <form action="{{ route('forms.store') }}" method="POST" enctype="multipart/form-data" role="form" class="php-email-form">
              @csrf
            <small class="ms-9 mt-n4 mb-4">Asterisk (<span class="text-danger">*</span>) next to a form control's label indicates that such field is <strong>"required"</strong></small>
            <h5 class="mt-2 mb-3">Personal Information</h5>
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>Type of Loan</label>
                    <input type="text" name="loan_type" class="form-control @error('loan_type') is-invalid @enderror" id="loan_type" value="{{ old('loan_type') }}">
                    @error('loan_type')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>Surname</label>
                    <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" id="surname" value="{{ old('surname') }}">
                    @error('surname')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>First Name</label>
                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name" value="{{ old('first_name') }}">
                    @error('first_name')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>State of Residence</label>
                    <select class="form-control @error('state') is-invalid @enderror" name="state" id="state">
                        <option selected disabled value="">Select...</option>
                        @foreach($states as $state)
                            <option value="{{ $state['name'] }}">{{ $state['name'] }}</option>
                        @endforeach
                    </select>
                    @error('state')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>L.G.A. of Residence</label>
                    <select class="form-control @error('lga') is-invalid @enderror" name="lga" id="lga">
                        <option selected disabled value="">Select...</option>
                    </select>
                    @error('lga')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Phone Number</label>
                    <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" maxlength="11" value="{{ old('phone_number') }}">
                    @error('phone_number')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label fw-bolder text-dark">Alternative Phone Number</label>
                    <input type="tel" class="form-control @error('alternative_phone_number') is-invalid @enderror" name="alternative_phone_number" id="alternative_phone_number" maxlength="11" value="{{ old('alternative_phone_number') }}">
                    @error('alternative_phone_number')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-12 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Residential address</label>
                    <textarea class="form-control @error('residential_address') is-invalid @enderror" name="residential_address" rows="3">{{ old('business_name') }}</textarea>
                    @error('residential_address')
                      <x-alert :message="$message" />
                    @enderror
                </div>
            </div>

            <h5 class="mt-2 mb-3">Business Information</h5>
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark "><span class="text-danger">*</span>Business Name</label>
                    <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror" id="business_name" value="{{ old('business_name') }}">
                    @error('business_name')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Business Name Registration Status</label>
                    <select class="form-control @error('business_name_reg_status') is-invalid @enderror" name="business_name_reg_status" id="business_name_reg_status">
                        <option selected disabled value="">Select...</option>
                        <option value="Completed" {{ old('business_name_reg_status') == 'Completed' ? 'selected' : ''}}>Completed</option>
                        <option value="In Progress" {{ old('business_name_reg_status') == 'In Progress' ? 'selected' : ''}}>In Progress</option>
                        <option value="Not Available" {{ old('business_name_reg_status') == 'Not Available' ? 'selected' : ''}}>Not Available</option>
                    </select>
                    @error('business_name_reg_status')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>CAC Registration Number</label>
                    <input type="text" name="cac_reg_status" class="form-control @error('cac_reg_status') is-invalid @enderror" id="cac_reg_status" value="{{ old('cac_reg_status') }}">
                    @error('cac_reg_status')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Upload CAC Certificate</label>
                    <input type="file" accept=".docx, .doc, .pdf" name="cac_certificate" class="form-control @error('cac_certificate') is-invalid @enderror" id="cac_certificate" required>
                    @error('cac_certificate')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Official Email</label>
                    <input type="email" class="form-control @error('business_email') is-invalid @enderror" name="business_email" id="business_email" placeholder="Your official business Email" value="{{ old('business_email') }}">
                    @error('business_email')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Official Phone Number</label>
                    <input type="tel" class="form-control @error('official_phone_number') is-invalid @enderror" name="official_phone_number" id="official_phone_number" maxlength="11" value="{{ old('official_phone_number') }}">
                    @error('official_phone_number')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label fw-bolder text-dark">Alternative Official Phone Number</label>
                    <input type="tel" class="form-control @error('official_phone_number_2') is-invalid @enderror" name="official_phone_number_2" id="official_phone_number_2" maxlength="11" value="{{ old('official_phone_number_2') }}">
                    @error('official_phone_number_2')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-6 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Industry Sector</label>
                    <select class="form-control @error('industry_sector') is-invalid @enderror" name="industry_sector" id="industry_sector">
                        <option selected disabled value="">Select...</option>
                        <option value="Aerospace, Defense" {{ old('industry_sector') == 'Aerospace, Defense' ? 'selected' : ''}}>Aerospace, Defense</option>
                        <option value="Education" {{ old('industry_sector') == 'Education' ? 'selected' : ''}}>Education</option>
                        <option value="Financial Services" {{ old('industry_sector') == 'Financial Services' ? 'selected' : ''}}>Financial Services</option>
                        <option value="Government" {{ old('industry_sector') == 'Government' ? 'selected' : ''}}>Government</option>
                        <option value="Healthcare, Pharma" {{ old('industry_sector') == 'Healthcare, Pharma' ? 'selected' : ''}}>Healthcare, Pharma</option>
                        <option value="Manufacturing" {{ old('industry_sector') == 'Manufacturing' ? 'selected' : ''}}>Manufacturing</option>
                        <option value="Media & Entertainment" {{ old('industry_sector') == 'Media & Entertainment' ? 'selected' : ''}}>Media & Entertainment</option>
                        <option value="Mining & Natural Resources" {{ old('industry_sector') == 'Mining & Natural Resources' ? 'selected' : ''}}>Mining & Natural Resources</option>
                        <option value="Retail" {{ old('industry_sector') == 'Retail' ? 'selected' : ''}}>Retail</option>
                        <option value="Technology: Hardware & Software" {{ old('industry_sector') == 'Technology: Hardware & Software' ? 'selected' : ''}}>Technology: Hardware & Software</option>
                        <option value="Telecom" {{ old('industry_sector') == 'Telecom' ? 'selected' : ''}}>Telecom</option>
                        <option value="Transport" {{ old('industry_sector') == 'Transport' ? 'selected' : ''}}>Transport</option>
                        <option value="Travel & Hospitality" {{ old('industry_sector') == 'Travel & Hospitality"' ? 'selected' : ''}}>Travel & Hospitality</option>
                        <option value="Web: Ecommerce & Social" {{ old('industry_sector') == 'Web: Ecommerce & Social' ? 'selected' : ''}}>Web: Ecommerce & Social</option>
                        <option value="Others" {{ old('industry_sector') == 'Others' ? 'selected' : ''}}>Others</option>
                    </select>
                </select>
                    @error('industry_sector')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-12 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Products</label>
                    <input type="text" class="form-control @error('products') is-invalid @enderror" name="products" id="products" value="{{ old('products') }}">
                    @error('products')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Equipment Used</label>
                    <input type="text" class="form-control @error('equipment_used') is-invalid @enderror" name="equipment_used" id="equipment_used" value="{{ old('equipment_used') }}">
                    @error('equipment_used')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Years of Operation</label>
                    <select class="form-control @error('years_of_operation') is-invalid @enderror" name="years_of_operation" id="years_of_operation">
                        <option selected disabled value="">Select...</option>
                        <option value="0" {{ old('years_of_operation') == '0' ? 'selected' : ''}}>0</option>
                        <option value="1" {{ old('years_of_operation') == '1' ? 'selected' : ''}}>1</option>
                        <option value="2" {{ old('years_of_operation') == '2' ? 'selected' : ''}}>2</option>
                        <option value="3" {{ old('years_of_operation') == '3' ? 'selected' : ''}}>3</option>
                        <option value="4" {{ old('years_of_operation') == '4' ? 'selected' : ''}}>4</option>
                        <option value="5" {{ old('years_of_operation') == '5' ? 'selected' : ''}}>5</option>
                        <option value="6" {{ old('years_of_operation') == '6' ? 'selected' : ''}}>6</option>
                        <option value="7" {{ old('years_of_operation') == '7' ? 'selected' : ''}}>7</option>
                        <option value="8" {{ old('years_of_operation') == '8' ? 'selected' : ''}}>8</option>
                        <option value="9" {{ old('years_of_operation') == '9' ? 'selected' : ''}}>9</option>
                        <option value="10 - Above" {{ old('years_of_operation') == '10 - Above' ? 'selected' : ''}}>10 - Above</option>
                    </select>
                    @error('years_of_operation')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-4 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Staff Strength</label>
                    <select class="form-control @error('staff_strength') is-invalid @enderror" name="staff_strength" id="staff_strength">
                        <option selected disabled value="">Select...</option>
                        <option value="1 - 5" {{ old('staff_strength') == '1 - 5' ? 'selected' : ''}}>1 - 5</option>
                        <option value="6 - 10" {{ old('staff_strength') == '6 - 10' ? 'selected' : ''}}>6 - 10</option>
                        <option value="11 - 20" {{ old('staff_strength') == '11 - 20' ? 'selected' : ''}}>11 - 20</option>
                        <option value="20 - 50" {{ old('staff_strength') == '20 - 50' ? 'selected' : ''}}>20 - 50</option>
                        <option value="50 - Above" {{ old('staff_strength') == '50 - Above' ? 'selected' : ''}}>50 - Above</option>
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
                    <input type="tel" name="loan_sum" class="form-control @error('loan_sum') is-invalid @enderror" id="loan_sum" maxlength="8" value="{{ old('loan_sum') }}">
                    @error('loan_sum')
                        <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-12 form-group">
                    <label class="form-label fw-bolder text-dark"><span class="text-danger">*</span>Purpose of Loan</label>
                    <textarea class="form-control @error('purpose_of_loan') is-invalid @enderror" name="purpose_of_loan" rows="3">{{ old('purpose_of_loan') }}</textarea>
                    @error('purpose_of_loan')
                      <x-alert :message="$message" />
                    @enderror
                </div>

                <div class="col-md-12 mb-10">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input @error('loan_request_agreement') is-invalid @enderror" type="checkbox" style="margin-top: -0.58rem !important" name="loan_request_agreement" {{ old('loan_request_agreement') ? 'checked' : '' }} />
                            Have you read and understood the requirements for this loan request?
                        </label>
                        @error('loan_request_agreement')
                            <x-alert :message="$message" />
                        @enderror
                    </div>
                </div>

                <input type="hidden" name="form_type" class="d-none" value="Boi">
            </div>

            <div class="text-center"><button type="submit">Submit Request</button></div>
          </form>
        </div>

      </div>

    </div>

    @push('scripts')
<script>
    $(document).ready(function() {
        "use strict";
        //Get list of L.G.A's in a particular state.
        $('#state').on('change', function() {
            let state = $('#state').find('option:selected').val();
            let stateName = $('#state').find('option:selected').text();

            $.ajax({
                url: "{{ route('frontend.lga') }}",
                method: "POST",
                dataType: "JSON",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "state": state
                },
                success: function(data) {
                    if (data) {
                        $('#lga').html(data.lgaList);
                    } else {
                        var message = 'Error occured while trying to get L.G.A`s in ' + stateName + ' state';
                        var type = 'error';
                        displayMessage(message, type);
                    }
                },
            })
        });

    });
</script>
@endpush

  </section>
