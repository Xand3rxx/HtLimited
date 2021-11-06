@extends('layouts.admin')
@section('title', 'Administrator Profile')
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
                        <h5>Edit Profile</h5>
                        <h6 class="sub-heading">This page allows you to edit and update your personal information.</h6>
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
                    <div class="card-header">Editing <strong>{{ !empty($administrator['name']) ? Str::title($administrator['name']) : 'Unavailable' }}'s</strong> Account</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.profile.update', $administrator['uuid']) }}" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="row gutters">
                                <div class="col">
                                    <label for="name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') ?? $administrator['name'] }}" required>
                                    @error('name')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>

                                <div class="was-validated col">
                                    <label for="image" class="col-form-label">Profile Avatar(Optional)</label>
                                    <br>
                                    <label class="form-control custom-file">
                                        <input type="file" id="avatar" accept="image/*" class="custom-file-input" @error('avatar') is-invalid @enderror name="avatar" id="avatar" required>
                                        <span class="custom-file-control"></span>
                                    </label>
                                    <br>
                                    <small class="text-muted">Kindly upload clear photo for your profile avatar. The image should have a maximum size of 256kb</small>
                                    @error('avatar')
                                        <x-alert :message="$message" />
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">Change Password</div>
                    <div class="card-body">
                        <form action="{{ route('admin.profile.change_password') }}" method="POST">
                            @csrf @method('PUT')
                            <div class="row gutters">
                            <div class="col">
                                <label for="password" class="col-form-label">Current Password</label>
                                <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" autocomplete="off">
                            </div>
                            <div class="col">
                                <label for="password" class="col-form-label">New Password</label>
                                <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password" autocomplete="off">
                                <small class="text-muted"> Use a minimum of 8 characters. For a strong and secure password, a mix of letters, numbers & symbols is advised.</small>
                            </div>
                            <div class="col">
                                <label for="confirm_password" class="col-form-label">Confirm Password</label>
                                <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="new_confirm_password" name="new_confirm_password" autocomplete="off">
                            </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Change Password</button>
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
