<div class="slide-card box-shadow-16 bg-white rounded-normal">
    <div class="slide-image">
        <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}" class="img-fluid rounded-normal">
    </div>
    <div class="slide-content py-3">
        <div class="celeb-name-category d-flex justify-content-between pl-20">
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
        <div class="follo-cnt d-flex justify-content-between align-items-center mt-2 p-3">
            <div class="insta-fl">
                <h5 class="font-14 text-500">Instagram</h5>
                <p class="font-14 text-300">2025</p>
            </div>
            <div class="insta-fl">
                <h5 class="font-14 text-500">Facebook</h5>
                <p class="font-14 text-300">2825</p>
            </div>
            <div class="insta-fl">
                <h5 class="font-14 text-500">X</h5>
                <p class="font-14 text-300">1327</p>
            </div>
        </div>
        
    </div>
</div>