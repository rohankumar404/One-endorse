@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/dashboard/slides-card/slides-card-style.css') }}">
@endpush

<div class="slide-card bg-gray rounded-adv p-3">
    <!-- Header Section -->
    <div class="d-flex align-items-center">
        <!-- Profile Image -->
        <div class="profile-image me-3">
            <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}" 
                 class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
        </div>
        


        <!-- Social Media Stats -->
        <div class="social-stats d-flex ml-2">
            <div class="social-item">
                <svg class="mb-1" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
                <p class="font-10 text-gray mb-0">2.4M</p>
            </div>
            <div class="social-item mx-3">
                <svg class="mb-1" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
                <p class="font-10 text-gray mb-0">98.3K</p>
            </div>
            <div class="social-item">
                <svg class="mb-1" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
                <p class="font-10 text-gray mb-0">62.6K</p>
            </div>
        </div>
    </div>
    <div class="card-name mt-1">
        <!-- Name and Title -->
        <div class="profile-info">
            <h4 class="font-16 fw-bold mb-0">{{ $slide['title'] }}</h4>
            <p class="font-14 text-gray w-80 mb-0">{{ $slide['category'] }}</p>
        </div>
    </div>
    <!-- Categories -->
    <div class="celeb-category">
        <div class="category bg-temp rounded-card-tag px-3 mb-1">
            <span class="text-white font-12 mb-1">Cricket</span>
        </div>
        <div class="category bg-black rounded-card-tag px-3">
            <span class="text-white font-12 mb-1">Athlete</span>
        </div>
    </div>

    <!-- Status Indicators -->
    <div class="d-flex align-items-center mt-3">
        <div class="status-dot bg-success rounded-circle me-1" style="width: 8px; height: 8px;"></div>
        <div class="status-dot bg-warning rounded-circle me-1" style="width: 8px; height: 8px;"></div>
        <div class="status-dot bg-danger rounded-circle me-1" style="width: 8px; height: 8px;"></div>
        <div class="status-dot bg-info rounded-circle me-1" style="width: 8px; height: 8px;"></div>
        <div class="status-dot bg-primary rounded-circle" style="width: 8px; height: 8px;"></div>
    </div>

    <!-- Action Buttons -->
    <div class="d-flex justify-content-between align-items-center mt-3">
        <button class="btn btn-primary border-0 font-12">View Profile</button>
        <button class="btn hover border-pry font-12">Send Offer</button>
    </div>
    <div class="top-right-corner">
        <img src="{{ asset('assets/img/icon/elements/shape-white.png') }}" alt="corner-bg">
        <div class="top-circle bg-gray border-1 p-2 rounded-circle d-flex justify-content-center align-items-center">
            <svg id="Layer_1" height="20px" width="20px" enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path d="m21 12.6h-18c-.3 0-.6-.3-.6-.6s.3-.6.6-.6h18c.3 0 .6.3.6.6s-.3.6-.6.6z" fill="arrow-color"/></g><g><path d="m15 18.6c-.2 0-.3-.1-.4-.2-.2-.2-.2-.6 0-.8l5.6-5.6-5.6-5.6c-.2-.2-.2-.6 0-.8s.6-.2.8 0l6 6c.2.2.2.6 0 .8l-6 6c-.1.1-.2.2-.4.2z" fill="arrow-color"/></g></svg>
        </div>
    </div>
</div>