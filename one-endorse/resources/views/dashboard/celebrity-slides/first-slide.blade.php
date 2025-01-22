<div class="slide-card box-shadow-16 bg-white rounded-mid">
    <div class="slide-image">
        <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}" class="img-fluid rounded-mid">
    </div>
    <div class="slide-content p-3">
        <h4 class="font-18 fw-bold mb-2">{{ $slide['title'] }}</h4>
        <p class="font-14 text-gray mb-0">{{ $slide['category'] }}</p>
    </div>
</div>