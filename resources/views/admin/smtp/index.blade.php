@extends('layouts.admin')
@section('title', 'SMTP Mail Settings')
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
                        <h5>SMTP Settings</h5>
                        <h6 class="sub-heading">This page allows you to edit and update the default settings for sending mails.</h6>
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
                    <div class="card-header">Manage your SMTP Mail Settings</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.smtp-settings.store') }}">
                            @csrf
                            <div class="form-group row gutters">
                                <label for="site_title" class="col-sm-3 col-form-label">SMTP Title</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('smtp_mailer') is-invalid @enderror" name="smtp_mailer" id="smtp_mailer">
                                        <option value="mailgun" {{ old('smtp_mailer') == 'mailgun' ? 'selected' : ''}} @if($smtp['smtp_mailer'] == 'mailgun') selected @endif>Mailgun</option>
                                        <option value="postmark" {{ old('smtp_mailer') == 'postmark' ? 'selected' : ''}} @if($smtp['smtp_mailer'] == 'postmark') selected @endif>Postmark</option>
                                        <option value="sendmail" {{ old('smtp_mailer') == 'sendmail' ? 'selected' : ''}} @if($smtp['smtp_mailer'] == 'sendmail') selected @endif>SendMail</option>
                                        <option value="smtp" {{ old('smtp_mailer') == 'smtp' ? 'selected' : ''}} @if($smtp['smtp_mailer'] == 'smtp') selected @endif>SMTP</option>
                                    </select>
                                    @error('smtp_mailer')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="smtp_mail_host" class="col-sm-3 col-form-label">SMTP Mail Host</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="smtp_mail_host" name="smtp_mail_host" maxlength="50" placeholder="" value="{{ old('smtp_mail_host') ?? $smtp['smtp_mail_host'] }}" required>
                                    @error('smtp_mail_host')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="smtp_mail_port" class="col-sm-3 col-form-label">SMTP Mail Port</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('smtp_mail_port') is-invalid @enderror" name="smtp_mail_port" id="smtp_mailer">
                                        <option value="465" {{ old('smtp_mail_port') == '465' ? 'selected' : ''}} @if($smtp['smtp_mail_port'] == '465') selected @endif>465</option>
                                        <option value="587" {{ old('smtp_mail_port') == '587' ? 'selected' : ''}} @if($smtp['smtp_mail_port'] == '587') selected @endif>587</option>
                                        <option value="2525" {{ old('smtp_mail_port') == '2525' ? 'selected' : ''}} @if($smtp['smtp_mail_port'] == '2525') selected @endif>2525</option>
                                        <option value="3306" {{ old('smtp_mail_port') == '3306' ? 'selected' : ''}} @if($smtp['smtp_mail_port']== '3306') selected @endif>3306</option>
                                    </select>
                                    @error('smtp_mail_port')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="smtp_mail_username" class="col-sm-3 col-form-label">SMTP Mail Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="smtp_mail_username" name="smtp_mail_username" maxlength="50" placeholder="" value="{{ old('smtp_mail_username') ?? $smtp['smtp_mail_username'] }}" required>
                                    @error('smtp_mail_username')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="smtp_mail_password" class="col-sm-3 col-form-label">SMTP Mail Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="smtp_mail_password" name="smtp_mail_password" value="{{ old('smtp_mail_password') ?? base64_decode($smtp['smtp_mail_password']) }}" maxlength="13" placeholder="" required>
                                    @error('smtp_mail_password')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row gutters">
                                <label for="smtp_mail_encryption" class="col-sm-3 col-form-label">SMTP Mail Encryption</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('smtp_mail_encryption') is-invalid @enderror" name="smtp_mail_encryption" id="smtp_mail_encryption">
                                        <option value="none" {{ old('smtp_mail_encryption') == 'none' ? 'selected' : ''}} @if($smtp['smtp_mail_encryption'] == 'none') selected @endif>None</option>
                                        <option value="ssl" {{ old('smtp_mail_encryption') == 'ssl' ? 'selected' : ''}} @if($smtp['smtp_mail_encryption'] == 'ssl') selected @endif>SSL</option>
                                        <option value="tls" {{ old('smtp_mail_encryption') == 'tls' ? 'selected' : ''}} @if($smtp['smtp_mail_encryption'] == 'tls') selected @endif>TLS</option>
                                    </select>
                                    <small class="text-muted">For most servers TLS is the recommended option. If your SMTP provider offers both SSL and TLS options, we recommend using TLS.</small>
                                    @error('smtp_mail_encryption')
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
