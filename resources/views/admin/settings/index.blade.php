@extends('layouts.admin')
@section('title', 'Site Settings')
@section('content')

<!-- BEGIN .app-main -->
<div class="app-main">
    <!-- BEGIN .main-heading -->
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="page-icon">
                        <i class="icon-equalizer2"></i>
                    </div>
                    <div class="page-title">
                        <h5>Site Settings</h5>
                        <h6 class="sub-heading">This page allows you to edit and update your the default settings for the website such as the site title, icon, description, tagline, social media links, address, working hours etc.</h6>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- END: .main-heading -->

    <!-- BEGIN .main-content -->
    <div class="main-content">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">Manage your website settings</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.settings.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row gutters">
                                <label for="site_title" class="col-sm-3 col-form-label">Site Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="site_title" name="site_title" placeholder="" value="{{ old('site_title') ?? $setting['site_title'] }}" required>
                                    @error('site_title')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row gutters">
                                <label for="site_tagline" class="col-sm-3 col-form-label">Tagline</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="site_tagline" name="site_tagline" placeholder="" value="{{ old('site_title') ?? $setting['site_tagline'] }}">
                                    <small class="text-muted">In a few words, explain what this site is about.</small>
                                    @error('site_tagline')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="site_icon" class="col-sm-3 col-form-label">Site Icon</label>
                                <div class="col-sm-9 was-validated">
                                    <label class="form-control custom-file">
                                        <input type="file" id="site_icon" accept="image/*" class="custom-file-input" @error('site_icon') is-invalid @enderror name="site_icon">
                                        <span class="custom-file-control"></span>
                                    </label>
                                    <br>
                                    <small class="text-muted">Site Icons are what you see in browser tabs, bookmark bars etc.</small>
                                    @error('site_icon')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="site_logo" class="col-sm-3 col-form-label">Site Logo</label>
                                <div class="col-sm-9 was-validated">
                                    <label class="form-control custom-file">
                                        <input type="file" id="site_logo" accept="image/*" class="custom-file-input" @error('site_logo') is-invalid @enderror name="site_logo">
                                        <span class="custom-file-control"></span>
                                    </label>
                                    <br>
                                    <small class="text-muted">A logo is a symbol made up of text and images that identifies a business.</small>
                                    @error('site_logo')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="site_tagline" class="col-sm-3 col-form-label">Site Description</label>
                                <div class="col-sm-9">
                                    <textarea id="site_description" class="form-control @error('site_description') is-invalid @enderror" rows="4" name="site_description" id="site_description" required>{{ old('site_description') ?? $setting['site_description'] }}</textarea>
                                    @error('site_description')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="website_url" class="col-sm-3 col-form-label">Website URL</label>
                                <div class="col-sm-9">
                                    <input type="url" class="form-control" id="website_url" name="website_url" maxlength="50" placeholder="" value="{{ old('website_url') ?? $setting['website_url'] }}" required>
                                    @error('website_url')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" maxlength="50" placeholder="" value="{{ old('email') ?? $setting['email'] }}" required>
                                    @error('email')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="site_address" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="site_address" name="site_address" placeholder="" value="{{ old('site_address') ?? $setting['site_address'] }}" required>
                                    @error('site_address')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="site_phone_number" class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="site_phone_number" name="site_phone_number" value="{{ old('site_phone_number') ?? $setting['site_phone_number'] }}" maxlength="13" placeholder="" required>
                                    @error('site_phone_number')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="site_alternative_phone_number" class="col-sm-3 col-form-label">Alternative Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="site_alternative_phone_number" name="site_alternative_phone_number" maxlength="13" value="{{ old('site_alternative_phone_number') ?? $setting['site_alternative_phone_number'] }}">
                                    @error('site_alternative_phone_number')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="site_working_hours" class="col-sm-3 col-form-label">Working Hours</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="site_working_hours" name="site_working_hours" maxlength="13" placeholder="" value="{{ old('site_working_hours') ?? $setting['site_working_hours'] }}" maxlength="20" required>
                                    @error('site_working_hours')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="facebook_link" class="col-sm-3 col-form-label">Facebook URL</label>
                                <div class="col-sm-9">
                                    <input type="url" class="form-control" id="facebook_link" name="facebook_link" placeholder="https://web.facebook.com/hamper-shop" value="{{ old('facebook_link') ?? $setting['facebook_link'] }}">
                                    @error('facebook_link')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="instagram_link" class="col-sm-3 col-form-label">Instagram URL</label>
                                <div class="col-sm-9">
                                    <input type="url" class="form-control" id="instagram_link" name="instagram_link" placeholder="https://instagram.com/@hamperShop" value="{{ old('instagram_link') ?? $setting['instagram_link'] }}">
                                    @error('instagram_link')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="linkedin_link" class="col-sm-3 col-form-label">LinkedIn URL</label>
                                <div class="col-sm-9">
                                    <input type="url" class="form-control" id="linkedin_link" name="linkedin_link" placeholder="https://linkedin.com/@hamperShop" value="{{ old('linkedin_link') ?? $setting['linkedin_link'] }}">
                                    @error('linkedin_link')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="twitter_link" class="col-sm-3 col-form-label">Twitter URL</label>
                                <div class="col-sm-9">
                                    <input type="url" class="form-control" id="twitter_link" name="twitter_link" placeholder="https://twitter.com/@hamperShop" value="{{ old('twitter_link') ?? $setting['twitter_link'] }}">
                                    @error('twitter_link')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="youtube_link" class="col-sm-3 col-form-label">YouTube URL</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="youtube_link" name="youtube_link" placeholder="https://youtube.com/@hamperShop" value="{{ old('youtube_link') ?? $setting['youtube_link'] }}">
                                    @error('youtube_link')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="adsense" class="col-sm-3 col-form-label">Adsense Code</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control @error('adsense') is-invalid @enderror" name="adsense" placeholder="Write a brief description of the post" rows="10" required>{{ old('adsense') ?? $setting['adsense'] }}</textarea>
                                    @error('adsense')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: .main-content -->
</div>
<!-- END: .app-main -->
@endsection
