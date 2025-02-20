@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/dashboard/slides-card/slides-card-style.css') }}">
@endpush
<div class="slide-card box-shadow-16 bg-white rounded-normal">
    <div class="slide-image">
        <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}" class="img-fluid rounded-normal">
    </div>
    <div class="slide-content p-3">
        <div class="celeb-name-category d-flex justify-content-between">
            <div class="celeb-name">
                <h4 class="font-18 fw-bold">{{ $slide['title'] }}</h4>
                <p class="font-14 text-gray mb-2">{{ $slide['category'] }}</p>
            </div>
            <div class="celeb-category">
                <div class="category bg-temp rounded-card-tag px-3 mb-1">
                    <span class="text-white font-12 mb-1">Cricket</span>
                </div>
                <div class="category bg-black rounded-card-tag px-3">
                    <span class="text-white font-12 mb-1">Athlete</span>
                </div>
            </div>
        </div>        
        <div class="follo-cnt d-flex justify-content-between align-items-center mt-3 py-2">
            <div class="social-fl d-flex flex-column align-items-center">
                <img src="{{ asset('assets/img/icon/all-icons/Instagram.png') }}" alt="User" class="card-social-icon mb-1">
                <!-- <h5 class="font-14 text-500">Instagram</h5> -->
                <p class="font-14 text-300">2025</p>
            </div>
            <div class="social-fl d-flex flex-column align-items-center">
                <img src="{{ asset('assets/img/icon/all-icons/facebook.png') }}" alt="User" class="card-social-icon mb-1">
                <!-- <h5 class="font-14 text-500">Facebook</h5> -->
                <p class="font-14 text-300">2825</p>
            </div>
            <div class="social-fl d-flex flex-column align-items-center">
                <img src="{{ asset('assets/img/icon/all-icons/letter-x.png') }}" alt="User" class="card-social-icon mb-1">
                <!-- <h5 class="font-14 text-500">X</h5> -->
                <p class="font-14 text-300">1327</p>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
            <button class="btn btn-primary font-12 border-0 py-1 px-2">View Profile</button>
            <button class="btn border-pry sdry-hover font-12 py-1 px-2">Send Offer</button>
        </div>
    </div>
</div>