@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/auth/style.css') }}">
@endpush
@section('content')
    <section class="py-80">
        <div class="container registerd-sec-bd rounded-ex-adv p-5">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="sec-img rounded-adv ">
                        <img class="border-0" src="https://img.freepik.com/premium-photo/sports-abstract-collage_23-2151203862.jpg?w=740" alt="Cricket Team">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 text-center">
                    <!-- Logo -->
                    <div class="mb-2 d-flex justify-content-center">
                        <img src="{{ asset('assets/img/images/logo.png') }}" alt="OneEndorse" class="" style="width: 80px;">
                    </div>
    
                    <!-- Title -->
                    <h1 class="font-24 fw-bold mb-3">Create an account</h1>
                    
                    <!-- Subtitle -->
                    <p class="text-gray-600 mb-4">Account Details</p>
    
                    <form method="POST" action="{{ route('register') }}" class="text-start">
                        @csrf
    
                        <!-- Name Fields -->
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <div class="position-relative">
                                    <input type="text" 
                                           name="first_name" 
                                           placeholder="First Name"
                                           class="form-control custom-input rounded-mid @error('first_name') is-invalid @enderror" 
                                           value="{{ old('first_name') }}"
                                           required>
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="position-relative">
                                    <input type="text" 
                                           name="last_name" 
                                           placeholder="Last Name"
                                           class="form-control custom-input rounded-mid @error('last_name') is-invalid @enderror" 
                                           value="{{ old('last_name') }}"
                                           required>
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
    
                        <!-- Email -->
                        <div class="mb-3 position-relative">
                            <input type="email" 
                                   name="email" 
                                   placeholder="name@gmail.com"
                                   class="form-control custom-input rounded-mid @error('email') is-invalid @enderror" 
                                   value="{{ old('email') }}"
                                   required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <!-- Password -->
                        <div class="mb-3 position-relative">
                            <input type="password" 
                                name="password" 
                                placeholder="Password"
                                class="form-control custom-input rounded-mid @error('password') is-invalid @enderror" 
                                required>
                            <button type="button" class="password-toggle">
                                <img src="{{ asset('assets/img/icon/eye-cross.png') }}" 
                                    alt="toggle password" 
                                    class="password-toggle-img">
                            </button>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4 position-relative">
                            <input type="password" 
                                name="password_confirmation" 
                                placeholder="Confirm Password"
                                class="form-control custom-input rounded-mid @error('password_confirmation') is-invalid @enderror" 
                                required>
                            <button type="button" class="password-toggle">
                                <img src="{{ asset('assets/img/icon/eye-cross.png') }}" 
                                    alt="toggle password" 
                                    class="password-toggle-img">
                            </button>
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <!-- Sign Up Button -->
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-dark w-60 w-md-40 rounded-pill">
                                Sign Up
                            </button>
                        </div>
    
                        <!-- Already have account -->
                        <div class="text-center mb-4">
                            <span class="text-gray-500">Already have an account? </span>
                            <a href="{{ route('login') }}" class="text-dark text-decoration-none">Sign In</a>
                        </div>
    
                        <!-- Divider -->
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="flex-grow-1"><hr class="my-0"></div>
                            <span class="text-gray-500">or</span>
                            <div class="flex-grow-1"><hr class="my-0"></div>
                        </div>
    
                        <!-- Google Sign Up -->
                        <div>
                            <a href="{{ route('auth.google') }}" 
                               class="btn btn-dark w-100 rounded-pill d-flex align-items-center justify-content-center gap-2">
                                <img src="{{ asset('assets/img/icon/google.png') }}" alt="Google" class="google-icon">
                                Sign up with Google
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script src="{{ asset('assets/default/js/pages/auth/script.js') }}"></script>
@endpush