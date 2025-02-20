// image gallery js 
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
        autoSlideInterval = setInterval(() => moveSlide('next'), 3000);
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

// blog section javasript 
$(document).ready(function() {
    const blogSlider2nd = {
        posts: [
            {
                image: "https://img1.hscicdn.com/image/upload/f_auto,t_ds_w_1280,q_80/lsci/db/PICTURES/CMS/387000/387041.jpg",
                tag: "Sports",
                title: "Shubman Gill fined Rs.12 lakh for slow over rate during CSK vs GT match",
                content: "Sunrisers Hyderabad (SRH) and Mumbai Indians face each other in search of their first win in Indian Premier league 2024 at the Rajiv Gandhi Stadium in Hyderabad on Wednesday. Here are all the head-to-head numbers and stats you need to know ahead of the match.",
                readTime: "5 min read"
            },
            {
                image: "https://img1.hscicdn.com/image/upload/f_auto,t_ds_w_1280,q_80/lsci/db/PICTURES/CMS/387000/387041.jpg",
                tag: "Technology",
                title: "Shubman Gill fined Rs.12 lakh for slow over rate during CSK vs GT match",
                content: "Sunrisers Hyderabad (SRH) and Mumbai Indians face each other in search of their first win in Indian Premier league 2024 at the Rajiv Gandhi Stadium in Hyderabad on Wednesday. Here are all the head-to-head numbers and stats you need to know ahead of the match.",
                readTime: "7 min read"
            },
            {
                image: "https://img1.hscicdn.com/image/upload/f_auto,t_ds_w_1280,q_80/lsci/db/PICTURES/CMS/387000/387041.jpg",
                tag: "Finance",
                title: "Shubman Gill fined Rs.12 lakh for slow over rate during CSK vs GT match",
                content: "Sunrisers Hyderabad (SRH) and Mumbai Indians face each other in search of their first win in Indian Premier league 2024 at the Rajiv Gandhi Stadium in Hyderabad on Wednesday. Here are all the head-to-head numbers and stats you need to know ahead of the match.",
                readTime: "6 min read"
            },
            {
                image: "https://img1.hscicdn.com/image/upload/f_auto,t_ds_w_1280,q_80/lsci/db/PICTURES/CMS/387000/387041.jpg",
                tag: "Innovation",
                title: "Shubman Gill fined Rs.12 lakh for slow over rate during CSK vs GT match",
                content: "Sunrisers Hyderabad (SRH) and Mumbai Indians face each other in search of their first win in Indian Premier league 2024 at the Rajiv Gandhi Stadium in Hyderabad on Wednesday. Here are all the head-to-head numbers and stats you need to know ahead of the match.",
                readTime: "4 min read"
            },
            {
                image: "https://img1.hscicdn.com/image/upload/f_auto,t_ds_w_1280,q_80/lsci/db/PICTURES/CMS/387000/387041.jpg",
                tag: "Healthcare",
                title: "Shubman Gill fined Rs.12 lakh for slow over rate during CSK vs GT match",
                content: "Sunrisers Hyderabad (SRH) and Mumbai Indians face each other in search of their first win in Indian Premier league 2024 at the Rajiv Gandhi Stadium in Hyderabad on Wednesday. Here are all the head-to-head numbers and stats you need to know ahead of the match.",
                readTime: "8 min read"
            }
        ],
        currentSlide: 1, // Changed to start from second slide
        autoSlideInterval: null,
        isMobile: window.innerWidth < 768,

        init: function() {
            this.createSlides();
            this.createDots();
            this.bindEvents();
            this.startAutoSlide();
            this.updateActiveSlide(this.currentSlide); // Start from second slide
        },

        createSlides: function() {
            this.posts.forEach((post, index) => {
                $('#sliderWrapper2nd').append(`
                    <div class="slide_item_2nd pb-25 ${index === 1 ? 'active' : ''}">
                        <img src="${post.image}" alt="${post.title}" class="slide_img_2nd">
                        <div class="p-4">
                            <span class="slide_tag_2nd font-14">${post.tag}</span>
                            <span class="float-end font-12 mt-1">${post.readTime}</span>
                            <h3 class="font-20 text-700 mt-2">${post.title}</h3>
                            <p class="slide_text_2nd font-14 text-normal">${post.content}</p>
                            <a href="#" class="read_more_2nd d-flex align-items-center">Read More <span><img src="../assets/img/icon/home/Vector.png" alt="dsds"/></span></a>
                        </div>
                    </div>
                `);
            });
        },

        createDots: function() {
            this.posts.forEach((_, index) => {
                $('#dotsContainer2nd').append(`
                    <div class="dot_2nd ${index === 1 ? 'active' : ''}" data-index="${index}"></div>
                `);
            });
        },

        updateActiveSlide: function(index) {
            $('.slide_item_2nd').removeClass('active');
            $('.slide_item_2nd').eq(index).addClass('active');

            const slideWidth = $('.slide_item_2nd').outerWidth(true);
            let offset;

            if (!this.isMobile) {
                // Desktop view - center the active slide
                const containerWidth = $('#sliderContainer2nd').width();
                offset = (containerWidth / 2) - (slideWidth / 2) - (slideWidth * index);
            } else {
                // Mobile view - simple slide transition
                offset = -slideWidth * index;
            }

            $('#sliderWrapper2nd').css({
                'transform': `translateX(${offset}px)`,
                'transition': 'transform 0.3s ease'
            });
        },

        goToSlide: function(index) {
            this.currentSlide = index;
            $('.dot_2nd').removeClass('active').eq(this.currentSlide).addClass('active');
            this.updateActiveSlide(this.currentSlide);
        },

        nextSlide: function() {
            const nextIndex = (this.currentSlide + 1) % this.posts.length;
            this.goToSlide(nextIndex);
        },

        prevSlide: function() {
            const prevIndex = (this.currentSlide - 1 + this.posts.length) % this.posts.length;
            this.goToSlide(prevIndex);
        },

        startAutoSlide: function() {
            this.autoSlideInterval = setInterval(() => this.nextSlide(), 3000);
        },

        stopAutoSlide: function() {
            clearInterval(this.autoSlideInterval);
        },

        bindEvents: function() {
            $('#nextBtn2nd').click(() => {
                this.stopAutoSlide();
                this.nextSlide();
                this.startAutoSlide();
            });
            
            $('#prevBtn2nd').click(() => {
                this.stopAutoSlide();
                this.prevSlide();
                this.startAutoSlide();
            });

            $('.dot_2nd').click(function() {
                blogSlider2nd.stopAutoSlide();
                blogSlider2nd.goToSlide($(this).data('index'));
                blogSlider2nd.startAutoSlide();
            });

            $('#sliderContainer2nd').hover(
                () => this.stopAutoSlide(),
                () => this.startAutoSlide()
            );

            // Handle window resize
            $(window).resize(() => {
                this.isMobile = window.innerWidth < 768;
                this.updateActiveSlide(this.currentSlide);
            });

            // Add touch support for mobile
            let touchStartX = 0;
            let touchEndX = 0;

            $('#sliderContainer2nd').on('touchstart', (e) => {
                touchStartX = e.touches[0].clientX;
            });

            $('#sliderContainer2nd').on('touchend', (e) => {
                touchEndX = e.changedTouches[0].clientX;
                const diff = touchStartX - touchEndX;

                if (Math.abs(diff) > 50) { // Minimum swipe distance
                    if (diff > 0) {
                        this.nextSlide();
                    } else {
                        this.prevSlide();
                    }
                }
            });
        }
    };

    // Initialize the slider
    blogSlider2nd.init();
});
