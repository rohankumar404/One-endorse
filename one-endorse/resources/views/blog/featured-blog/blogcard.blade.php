
    <div class="col-12 col-md-6 col-lg-4">
        <div class="slide-card bg-white box-shadow-16 rounded-adv p-12">
            <div class="position-relative card-image-wrapper">
                <img src="{{ $blog['image_url'] }}" 
                     alt="{{ $blog['category'] }}" 
                     class="w-100 rounded-adv-top slide-card-img">
                <span class="section-tag position-absolute bg-white text-black border-0" style="bottom:15px; left:15px;">
                    {{ $blog['category'] }}
                </span>
            </div>
            <div class="card-content pt-3">
                <div class="time-info d-flex align-items-center mb-2">
                    <svg width="16" height="16" viewBox="0 0 16 16" class="me-2">
                        <path fill="currentColor" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"/>
                        <path fill="currentColor" d="M8 3H7v6l5.2 3.2.8-1.3-4.5-2.7V3z"/>
                    </svg>
                    <span class="font-12 text-normal">{{ $blog['read_time'] }} min read</span>
                </div>
                <h5 class="card-title font-20 text-700">{{ $blog['title'] }}</h5>
                <p class="font-14 text-normal my-3">{{ $blog['excerpt'] }}</p>
                <a href="#" class="read-more d-flex align-items-center mt-3">
                    Read more →
                </a>
            </div>
        </div>
    </div>
