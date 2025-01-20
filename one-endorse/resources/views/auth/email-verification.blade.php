@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/auth/style.css') }}">
@endpush
@section('content')
<section class="py-80">
    <div class="container registerd-sec-bd rounded-ex-adv p-5">
        <div class="row justify-content-center">
            <!-- Left Column - Image -->
            <div class="col-12 col-sm-12 col-md-6">
                <div class="sec-img rounded-adv">
                    <img class="border-0" src="https://img.freepik.com/premium-photo/sports-abstract-collage_23-2151203862.jpg?w=740" alt="Cricket Team">
                </div>
            </div>

            <!-- Right Column - Confirmation Message -->
            <div class="col-12 col-sm-12 col-md-6 text-center d-flex justify-content-center align-items-center">
                <div class="confirmation-content border-low-black border-1 rounded-adv p-4">
                    <!-- Logo -->
                    <div class="mb-4 d-flex justify-content-center">
                        <img src="{{ asset('assets/img/images/logo.png') }}" alt="OneEndorse" class="" style="width: 80px;">
                    </div>

                    <!-- Title -->
                    <h1 class="font-24 fw-bold mb-4">Confirm Mail id</h1>
                    
                    <!-- Message -->
                    <p class="text-gray-600 mb-4">
                        We have sent confirmation mail to your mail ID<br>
                        <span class="text-dark">{{ $email }}</span> please click on Confirm
                    </p>

                    <!-- Confirm Button -->
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-dark w-60 w-md-40 rounded-pill">
                            Confirm
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection