{{-- resources/views/dashboard/celebrities.blade.php --}}
@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/dashboard/style.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
@endpush
@section('content')
<section class="py-70">
    <div class="container bg-img rounded-ex-adv">
        <!-- Welcome Text -->
        <div class="text-center mb-3">
            <span class="welcome-text">
                <img src="{{ asset('assets/img/icon/elements/black-Relume.png') }}" alt="User" class="user-icon">
                Welcome John
            </span>
        </div>

        <!-- Search Title -->
        <h2 class="text-center font-24 fw-bold mb-2">
            Search from the Largest Database of Sports Celebs
        </h2>

        <!-- Search and Filter Card -->
        <div class="search-filter-card rounded-ex-adv bg-white py-3 px-4">
            <!-- Filter Options -->
            <div class="filter-options d-flex justify-content-between bg-black py-2 px-3 text-white text-normal rounded-adv mb-3">
                <button class="filter-btn d-flex align-items-center gap-2">
                    <img src="{{ asset('assets/img/icon/elements/black-Relume.png') }}" alt="Industry" class="filter-icon">
                    Sport Category
                    <img src="{{ asset('assets/img/icon/drop-down-white.png') }}" alt="arrow" class="ms-2 dropdown-arrow">
                </button>

                <button class="filter-btn d-flex align-items-center gap-2">
                    <img src="{{ asset('assets/img/icon/elements/black-Relume.png') }}" alt="Endorsement" class="filter-icon">
                    Sport
                    <img src="{{ asset('assets/img/icon/drop-down-white.png') }}" alt="arrow" class="ms-2 dropdown-arrow">
                </button>

                <button class="filter-btn d-flex align-items-center gap-2">
                    <img src="{{ asset('assets/img/icon/elements/black-Relume.png') }}" alt="Category" class="filter-icon">
                    Available Category
                    <img src="{{ asset('assets/img/icon/drop-down-white.png') }}" alt="arrow" class="ms-2 dropdown-arrow">
                </button>

                <button class="filter-btn d-flex align-items-center gap-2">
                    <img src="{{ asset('assets/img/icon/elements/black-Relume.png') }}" alt="Cost" class="filter-icon">
                    Cost
                    <img src="{{ asset('assets/img/icon/drop-down-white.png') }}" alt="arrow" class="ms-2 dropdown-arrow">
                </button>
            </div>

            <!-- Search Bar -->
             <div class="d-flex w-100">
                <div class="search-wrapper w-80">
                    <input type="text" 
                        class="form-control search-input rounded-adv border-black py-2" 
                        placeholder="Search">                
                </div>
                <div class="w-20 d-flex align-items-center justify-content-end">
                    <button type="button" class="search-btn h-100 rounded-adv w-80 hover">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- First Slider Section -->
<section class="slider-section actors-celebrity-sec py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="font-34 text-800">Cricketers</h3>
            </div>
            <a href="#" class="border-pry rounded-ex-sm p-2  sdry-hover text-decoration-none text-black font-12">View All</a>
        </div>
        <div class="swiper firstSlider p-4 pb-5">
            <div class="swiper-wrapper d-flex">
                @foreach($firstSlideData as $slide)
                    <div class="swiper-slide">
                        @include('dashboard.brands-slides.first-slide', ['slide' => $slide])
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Second Slider Section -->
<section class="slider-section sports-celebrity-sec py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="font-34 text-800">IPL Cricketers</h3>
            </div>
            <a href="#" class="border-pry rounded-ex-sm p-2  sdry-hover text-decoration-none text-black font-12">View All</a>
        </div>
        <div class="swiper secondSlider p-4 pb-5">
            <div class="swiper-wrapper d-flex">
                @foreach($secondSlideData as $slide)
                    <div class="swiper-slide">
                        @include('dashboard.brands-slides.second-slide', ['slide' => $slide])
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
@endsection

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
const initSlider = (selector) => {
    const sliderElement = document.querySelector(selector);
    if (!sliderElement) {
        console.warn(`Slider with selector "${selector}" not found.`);
        return;
    }

    const swiper = new Swiper(selector, {
        slidesPerView: 1, // Default for small screens
        spaceBetween: 35, // Default spacing
        loop: true, // Infinite loop for smooth transitions
        autoplay: {
            delay: 3000, // Delay between slides
            disableOnInteraction: false, // Resume autoplay after interaction
        },
        pagination: {
            el: `${selector} .swiper-pagination`, // Scoped pagination element
            clickable: true,
        },
        breakpoints: {
            400: { // Medium screens (custom)
                slidesPerView: 2,
                spaceBetween: 35,
            },
            768: { // Medium screens (md)
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: { // Large screens (lg)
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
    });

    // Pause autoplay on hover and resume on mouse leave
    sliderElement.addEventListener('mouseenter', () => {
        swiper.autoplay.stop();
    });

    sliderElement.addEventListener('mouseleave', () => {
        swiper.autoplay.start();
    });

    return swiper;
};

// Initialize both sliders when DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    initSlider('.firstSlider'); // For Featured Athletes slider
    initSlider('.secondSlider'); // For Popular Sports slider
});
</script>
@endpush