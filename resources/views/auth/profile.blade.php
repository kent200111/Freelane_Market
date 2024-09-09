@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('My profile') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <!-- Left Section -->
                                        <div class="col-lg-5">
                                            <!-- Widget: user widget style 1 -->
                                            <div class="card card-widget widget-user">
                                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                                <div class="widget-user-header bg-info">
                                                    <h3 class="widget-user-username">{{ Auth::user()->name }}</h3>
                                                    <h5 class="widget-user-desc">{{ Auth::user()->role }}</h5>
                                                </div>
                                                <div class="widget-user-image">
                                                    <img class="img-circle elevation-2"
                                                        src="admin/dist/img/user1-128x128.jpg" alt="User Avatar">
                                                </div>
                                                <div class="card-footer text-center">
                                                    <h5 class="description-header">{{ Auth::user()->bio }}</h5>
                                                    <hr>
                                                    <h5 class="description-header">
                                                        <i class="fas fa-search-location"></i>
                                                        {{ Auth::user()->location }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right Section -->
                                        <div class="col-lg-7">
                                            <h2>Basin Information</h2>
                                            <div class="card-footer">
                                                <!-- Name Input -->
                                                <div class="input-group mb-3">
                                                    <input type="text" name="name"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        placeholder="{{ __('Name') }}"
                                                        value="{{ old('name', auth()->user()->name) }}" required>
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-user"></span>
                                                        </div>
                                                    </div>
                                                    @error('name')
                                                        <span class="error invalid-feedback">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Email Input -->
                                                <div class="input-group mb-3">
                                                    <input type="email" name="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        placeholder="{{ __('Email') }}"
                                                        value="{{ old('email', auth()->user()->email) }}" required>
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-envelope"></span>
                                                        </div>
                                                    </div>
                                                    @error('email')
                                                        <span class="error invalid-feedback">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Bio Input -->
                                                <div class="input-group mb-3">
                                                    <input type="text" name="bio"
                                                        class="form-control @error('bio') is-invalid @enderror"
                                                        placeholder="{{ __('Update Your Bio') }}"
                                                        value="{{ old('bio', auth()->user()->bio) }}">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-user"></span>
                                                        </div>
                                                    </div>
                                                    @error('bio')
                                                        <span class="error invalid-feedback">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>

                                                {{-- location Input --}}
                                                <div class="input-group mb-3">
                                                    <input type="text" name="location"
                                                        class="form-control @error('location') is-invalid @enderror"
                                                        placeholder="{{ __('Update Your Location') }}"
                                                        value="{{ old('location', auth()->user()->location) }}">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-search-location"></span>
                                                        </div>
                                                    </div>
                                                    @error('location')
                                                        <span class="error invalid-feedback">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Password Input -->
                                                <div class="input-group mb-3">
                                                    <input type="password" name="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="{{ __('New password') }}">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-lock"></span>
                                                        </div>
                                                    </div>
                                                    @error('password')
                                                        <span class="error invalid-feedback">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- Password Confirmation -->
                                                <div class="input-group mb-3">
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                                        placeholder="{{ __('New password confirmation') }}"
                                                        autocomplete="new-password">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-lock"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-right">
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ __('Update') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h2>Skills</h2>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('scripts')
    @session('success')
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            Toastify({
                text: "{{ $value }}",
                duration: 3000,
                close: true,
            }).showToast();
        </script>
    @endsession
@endsection
