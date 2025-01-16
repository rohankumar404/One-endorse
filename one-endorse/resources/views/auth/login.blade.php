@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/auth/register-login.css') }}">
@endpush

<section class="py-80">
    <div class="container registerd-sec-bd rounded-ex-adv p-5">
        <div class="row justify-content-center">
            <!-- Left Column - Image -->
            <div class="col-12 col-sm-12 col-md-6">
                <div class="sec-img rounded-adv">
                    <img class="border-0" src="https://img.freepik.com/premium-photo/sports-abstract-collage_23-2151203862.jpg?w=740" alt="Cricket Team">
                </div>
            </div>

            <!-- Right Column - Login Form -->
            <div class="col-12 col-sm-12 col-md-6 text-center py-5">
                <!-- Logo -->
                <div class="mb-2 d-flex justify-content-center">
                    <img src="{{ asset('assets/img/images/logo.png') }}" alt="OneEndorse" class="" style="width: 80px;">
                </div>

                <!-- Title -->
                <h1 class="font-24 fw-bold mb-3">Log in account</h1>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="text-start">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <input type="email" 
                               name="email" 
                               placeholder="Email address"
                               class="form-control custom-input rounded-mid" 
                               required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4 position-relative">
                        <input type="password" 
                               name="password" 
                               placeholder="Password"
                               class="form-control custom-input rounded-mid" 
                               required>
                        <button type="button" class="password-toggle">
                            <i class="fas fa-eye-slash text-gray-400"></i>
                        </button>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                            <label class="form-check-label text-gray-500" for="remember_me">
                                Remember me
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-dark text-decoration-none">
                                Forget password?
                            </a>
                        @endif
                    </div>

                    <!-- Sign In Button -->
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark w-60 w-md-40 rounded-pill">
                            Sign In
                        </button>
                    </div>

                    <!-- Don't have account -->
                    <div class="text-center mb-4">
                        <span class="text-gray-500">Don't have an account? </span>
                        <a href="{{ route('register') }}" class="text-dark text-decoration-none">Sign Up</a>
                    </div>

                    <!-- Divider -->
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="flex-grow-1"><hr class="my-0"></div>
                        <span class="text-gray-500">or</span>
                        <div class="flex-grow-1"><hr class="my-0"></div>
                    </div>

                    <!-- Google Sign In -->
                    <div>
                        <a href="{{ route('auth.google') }}" 
                           class="btn btn-dark w-100 rounded-pill d-flex align-items-center justify-content-center gap-2">
                            <img src="{{ asset('assets/img/icon/google.png') }}" alt="Google" class="google-icon">
                            Sign in with Google
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>