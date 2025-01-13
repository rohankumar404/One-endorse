@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/term-condition/style.css') }}">
@endpush
@section('content')
<section class="term-condition-hero pt-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="font-55 text-900">Terms and condition</h1>
                <p class="font-14 text-normal">Effective date: April 3, 2024</p>
            </div>
        </div>
    </div>
</section>
<section class="terms-section py-80">
    <div class="container">
        <h1 class="font-34 text-800 mb-4">Table of contents</h1>
        
        <div class="row">
            <!-- Left Navigation -->
            <div class="col-lg-3">
                <div class="terms-nav position-sticky" style="top: 100px;">
                    <nav class="nav flex-column">
                        <a class="nav-link active" href="#navigate-terms">Navigate Terms</a>
                        <a class="nav-link" href="#guidelines">Guidelines Unpacked</a>
                        <a class="nav-link" href="#agreement">Agreement Roadmap</a>
                        <a class="nav-link" href="#decoded">Decoded Terms</a>
                        <a class="nav-link" href="#rules">Setting Rules</a>
                    </nav>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-9">
                <div class="terms-content" data-bs-spy="scroll" data-bs-target=".terms-nav" data-bs-offset="0" tabindex="0">
                    <!-- Navigate Terms Section -->
                    <section id="navigate-terms" class="mb-5">
                        <h2 class="font-32 text-800 mb-3">Navigate Terms</h2>
                        <p class="font-16 text-normal">Embark on a journey of clarity and understanding with our "Navigate Terms" section, where we simplify and guide you through the intricacies of our Terms and Conditions. Your exploration begins here, ensuring a seamless experience within our community.</p>
                    </section>

                    <!-- Guidelines Section -->
                    <section id="guidelines" class="mb-5">
                        <h2 class="font-32 text-800 mb-3">Guidelines Unpacked</h2>
                        <p class="font-16 text-normal">Dive deep into our operational framework with "Guidelines Unpacked," where we unravel the intricacies of our Terms of Service. This section serves as your comprehensive guide, providing insights into how we operate and the standards we uphold.</p>
                    </section>

                    <!-- Agreement Section -->
                    <section id="agreement" class="mb-5">
                        <h2 class="font-32 text-800 mb-3">Agreement Roadmap</h2>
                        <p class="font-16 text-normal">Find your way through the Agreement Arena with our "Agreement Roadmap" section. This concise yet comprehensive resource acts as your roadmap, elucidating the terms and conditions that govern your engagement with our platform.</p>
                    </section>

                    <!-- Decoded Terms Section -->
                    <section id="decoded" class="mb-5">
                        <h2 class="font-32 text-800 mb-3">Decoded Terms</h2>
                        <p class="font-16 text-normal">This section empowers you with the knowledge needed to navigate our platform confidently.</p>
                        <blockquote class="border-primary ps-3 mt-3">
                            <p class="font-16 text-primary">In "Decoded Terms," we unravel the complexities of our Terms and Conditions, presenting a user-friendly guide to enhance your understanding.</p>
                        </blockquote>
                    </section>

                    <!-- Setting Rules Section -->
                    <section id="rules" class="mb-5">
                        <h2 class="font-32 text-800 mb-3">Setting Rules</h2>
                        <p class="font-16 text-normal">"Setting Rules" offers a concise yet thorough handbook on our Terms of Use and Privacy Policy. This section serves as your go-to resource for understanding the rules that define and safeguard your experience within our community.</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script src="assets/default/js/pages/term-condition/script.js"></script>
@endpush