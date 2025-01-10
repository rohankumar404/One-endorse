@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('assets/default/css/contact.css') }}">
<section class="py-50 bg-white">
    <div class="bg-color-section rounded-ex-adv">
        <div class="container p-4">
            <div class="row py-30">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="contect-form">
                        <h1 class="font-34 text-800">Contact us</h1>
                        @if(session('success'))
                            <div class="success-message">
                                {{ session('success') }}
                            </div>
                        @endif
                        <p class="font-14 text-normal mt-3">Connect with us! Use the Contact Us form to reach out for any inquiries or partnership opportunities. We look forward to hearing from you!</p>
                        <form class="mt-5" action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="fullName" class="form-label font-18 text-700">Full Name</label>
                                <input type="text" class="form-control rounded-sm" id="fullName" name="full_name" placeholder="Jane Doe" value="{{ old('full_name') }}" required>
                                @error('full_name')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                                <p class="font-12 text-normal mt-1">Enter your first and last name</p>
                            </div>
                
                            <div class="mb-3">
                                <label for="email" class="form-label font-18 text-700">Email</label>
                                <input type="email" class="form-control rounded-sm" id="email" name="email" placeholder="Enter email..." value="{{ old('email') }}" required>
                                @error('email')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label font-18 text-700">Phone Number</label>
                                <input type="text" class="form-control rounded-sm" id="phoneNumber" name="phone_number" placeholder="Enter phone number..." value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                
                            <div class="mb-3">
                                <label for="message" class="form-label font-18 text-700">Message</label>
                                <textarea class="form-control rounded-sm" id="message" name="message" rows="4" placeholder="Type your message..." required>{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                
                            <div class="checkbox-wrapper">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms_accepted" value="1" required>
                                    <label class="form-check-label rounded-ex-sm font-12 text-500 mt-1" for="terms">
                                        I accept the Terms
                                    </label>
                                    @error('terms_accepted')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                
                            <button type="submit" class="btn-rounded bg-temp p-hover text-white mt-3">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="cotact-form-img d-flex align-items-center">
                        <img src="../assets/img/images/woman-holding-laptop.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>