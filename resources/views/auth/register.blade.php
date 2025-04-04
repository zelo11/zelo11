@extends('layouts.app')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card px-sm-6 px-0">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-6">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <svg width="25" viewBox="0 0 25 42" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Your SVG Logo Here -->
                                </svg>
                            </span>
                            <span class="app-brand-text demo text-heading fw-bold">Sneat</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1">Adventure starts here 🚀</h4>
                    <p class="mb-6">Make your app management easy and fun!</p>

                    <!-- Registration Form -->
                    <form method="POST" action="{{ route('register') }}" id="formAuthentication" class="mb-6">
                        @csrf

                        <!-- Name Field -->
                        <div class="mb-6 form-control-validation">
                            <label for="name" class="form-label">Username</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter your username">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="mb-6 form-control-validation">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter your email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="form-password-toggle form-control-validation">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group input-group-merge">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password">
                                <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="form-password-toggle form-control-validation">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <div class="input-group input-group-merge">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                            </div>
                        </div>

                        <!-- Terms and Conditions Checkbox -->
                        <div class="my-7 form-control-validation">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required>
                                <label class="form-check-label" for="terms-conditions">
                                    I agree to <a href="javascript:void(0);">privacy policy & terms</a>
                                </label>
                            </div>
                        </div>

                        <!-- Register Button -->
                        <button type="submit" class="btn btn-primary d-grid w-100">Sign up</button>
                    </form>

                    <!-- Login Link -->
                    <p class="text-center">
                        <span>Already have an account?</span>
                        <a href="{{ route('login') }}">
                            <span>Sign in instead</span>
                        </a>
                    </p>

                    <!-- Social Media Links -->
                    <div class="divider my-6">
                        <div class="divider-text">or</div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="javascript:;" class="btn btn-sm btn-icon rounded-circle btn-text-facebook me-1_5">
                            <i class="icon-base bx bxl-facebook-circle icon-20px"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-sm btn-icon rounded-circle btn-text-twitter me-1_5">
                            <i class="icon-base bx bxl-twitter icon-20px"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-sm btn-icon rounded-circle btn-text-github me-1_5">
                            <i class="icon-base bx bxl-github icon-20px"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-sm btn-icon rounded-circle btn-text-google-plus">
                            <i class="icon-base bx bxl-google icon-20px"></i>
                        </a>
                    </div>

                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>
@endsection
