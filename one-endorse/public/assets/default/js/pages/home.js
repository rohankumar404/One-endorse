$(document).ready(function() {
    const images = [
        'https://img.freepik.com/free-photo/athletic-male-rugby-player-holding-ball-with-dust_23-2148793371.jpg?t=st=1735541399~exp=1735544999~hmac=16cc4ad46c3734afe487681e29d0e2cfa433f7619a3f5c56e3834d2eb8cec5c7&w=740',
        'https://img.freepik.com/free-photo/male-rugby-player-with-ball-water-splashes_23-2148793336.jpg?t=st=1735541432~exp=1735545032~hmac=3c0cee4a7945c994923526784381320644e0428dc7b464d34d81b20d9d9db7c7&w=740',
        'https://img.freepik.com/premium-photo/portrait-confident-american-football-players-holding-ball-while-standing-big-modern-stadium-field-with-lights-flares-night_530697-78669.jpg?w=740',
        'https://img.freepik.com/free-photo/front-view-athletic-handsome-rugby-player-holding-ball-while-posing_23-2148793301.jpg?t=st=1735541474~exp=1735545074~hmac=fc46e316c086e71cccb88984e667f1aaa8e28f101d5450d2bb9c4dae9df8428c&w=740',
        'https://img.freepik.com/free-photo/two-female-sprinter-athletes-running-treadmill-race-training-athletics-stadium_613910-19087.jpg?t=st=1735559263~exp=1735562863~hmac=7c7a0a9307043316db98fab7d44979492efc861c99d0e34238975df6a3969ba8&w=740',
        'https://img.freepik.com/free-photo/blond-teenager-soccer-player-dressed-blue-uniform-plays-with-ball_613910-11851.jpg?t=st=1735541512~exp=1735545112~hmac=795ff17116157d062da56ef8f0732f4666aa92fba4396a7281bbab3ccca078e1&w=740',
        'https://img.freepik.com/free-photo/front-view-athletic-female-rugby-player-holding-ball-with-powder_23-2148793376.jpg?t=st=1735541552~exp=1735545152~hmac=571228a24dbcf4f89c3480de4bba4ba3e2ea1a8dfcf9d3f508fe33cb231f7adc&w=740',
        'https://img.freepik.com/free-photo/portrait-young-handsome-sportsman-holds-hand-chin-dark-background_613910-5321.jpg?t=st=1735541573~exp=1735545173~hmac=cb523cae1a415371b4806dba921e724aeb0af021bef39229414b7106623f6fbb&w=740',
        'https://img.freepik.com/free-photo/full-body-studio-portrait-black-basketball-player-playing-with-ball_613910-1478.jpg?t=st=1735541592~exp=1735545192~hmac=bc1ac314cdcfa1ba8123ee412c3b7507d3a493ca73eb4ccf1c529b5836fe23cd&w=740'
        // Add as many images as you need
    ];

    const sliderContainer = $('.slider-container');
    let currentIndex = 0;
    let autoSlideInterval;
    
    // Create slides
    images.forEach((img, index) => {
        sliderContainer.append(`
            <div class="slide shadow-brt ${index === 1 ? 'active' : ''}" data-index="${index}">
                <img src="${img}" alt="Slide ${index + 1}">
            </div>
        `);
    });

    function updateSliderPosition() {
        const containerWidth = $('.slider-outer').width();
        const slideWidth = 250; // Width of non-active slides
        const activeSlideWidth = 400; // Width of active slide
        const slideMargin = 20; // Total margin between slides
        
        // Calculate position to center active slide
        const totalWidthBeforeActive = currentIndex * (slideWidth + slideMargin);
        const centerOffset = (containerWidth - activeSlideWidth) / 2;
        const position = -(totalWidthBeforeActive - centerOffset);
        
        sliderContainer.css('transform', `translateX(${position}px)`);
        
        // Update active state
        $('.slide').removeClass('active');
        $(`.slide[data-index="${currentIndex}"]`).addClass('active');
    }

    function moveSlide(direction) {
        if (direction === 'next') {
            currentIndex = (currentIndex + 1) % images.length;
        } else {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
        }
        updateSliderPosition();
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(() => moveSlide('next'), 5000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    // Initialize
    currentIndex = 1; // Start with second image active
    updateSliderPosition();
    startAutoSlide();

    // Event handlers
    $('.next').click(function() {
        stopAutoSlide();
        moveSlide('next');
        startAutoSlide();
    });

    $('.prev').click(function() {
        stopAutoSlide();
        moveSlide('prev');
        startAutoSlide();
    });

    $('.slider-outer').hover(
        stopAutoSlide,
        startAutoSlide
    );

    // Handle window resize
    $(window).resize(updateSliderPosition);
});