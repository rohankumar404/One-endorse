@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/auth/style.css') }}">
@endpush
@section('content')
<section class="py-80">
    <div class="container registerd-sec-bd rounded-ex-adv p-5">
        <div class="row justify-content-center flex-wrap-reverse">
            <!-- Left Column - Selection -->
            <div class="col-12 col-sm-12 col-md-6 d-flex flex-column justify-content-center">
                <div class="selection-content ps-4">
                    <!-- Logo -->
                    <div class="mb-4">
                        <img src="{{ asset('assets/img/images/logo.png') }}" alt="OneEndorse" class="" style="width: 80px;">
                    </div>

                    <!-- Title -->
                    <h1 class="font-32 fw-bold mb-4">Who you are?</h1>
                    
                   <!-- Selection Options -->
                    <div class="selection-options mb-4">
                        <div class="d-flex gap-3 flex-wrap">
                            <button type="button" class="selection-btn border-1 border-black rounded-adv d-flex align-items-center" data-value="brands">
                                <img class="icon-black mr-5" src="assets/img/icon/elements/black-Relume.png" alt="elements">
                                <img class="icon-white mr-5" src="assets/img/icon/elements/white-Relume.png" alt="elements" style="display: none;">
                                <span>Brands</span>
                            </button>
                            <button type="button" class="selection-btn border-1 border-black rounded-adv d-flex align-items-center" data-value="celebrities">
                                <img class="icon-black mr-5" src="assets/img/icon/elements/black-Relume.png" alt="elements">
                                <img class="icon-white mr-5" src="assets/img/icon/elements/white-Relume.png" alt="elements" style="display: none;">
                                <span>Celebrities</span>
                            </button>
                        </div>
                    </div>

                    <!-- Continue Button -->
                    <div class="mt-2">
                        <button type="button" class="btn-auth rounded-pill disabled border-1 border-black rounded-adv" id="continueBtn">
                            Continue
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Column - Image -->
            <div class="col-12 col-sm-12 col-md-6">
                <div class="sec-img rounded-adv">
                    <img class="border-0" src="https://img.freepik.com/premium-photo/sports-abstract-collage_23-2151203862.jpg?w=740" alt="Cricket Team">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const selectionBtns = document.querySelectorAll('.selection-btn');
    const continueBtn = document.getElementById('continueBtn');
    let selectedValue = null;

    selectionBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            selectionBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            // Store selected value
            selectedValue = this.dataset.value;
            // Enable continue button
            continueBtn.classList.remove('disabled');
        });
    });

    continueBtn.addEventListener('click', function() {
        if (selectedValue) {
            // Redirect or handle the selection
            window.location.href = `/register/${selectedValue}`;
        }
    });
});





document.addEventListener('DOMContentLoaded', function() {
    const selectionBtns = document.querySelectorAll('.selection-btn');
    const continueBtn = document.getElementById('continueBtn');
    let selectedValue = null;

    selectionBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            selectionBtns.forEach(b => {
                b.classList.remove('active');
                // Reset all images
                b.querySelector('.icon-black').style.display = 'block';
                b.querySelector('.icon-white').style.display = 'none';
            });

            // Add active class to clicked button
            this.classList.add('active');
            // Switch images for active button
            this.querySelector('.icon-black').style.display = 'none';
            this.querySelector('.icon-white').style.display = 'block';
            
            // Store selected value
            selectedValue = this.dataset.value;
            // Enable continue button
            continueBtn.classList.remove('disabled');
        });
    });

    continueBtn.addEventListener('click', function() {
        if (selectedValue) {
            // Redirect or handle the selection
            window.location.href = `/register/${selectedValue}`;
        }
    });
});
</script>
@endpush