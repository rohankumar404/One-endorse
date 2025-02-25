@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('assets/default/css/home.css') }}">
@section('title', 'One Endorse - Home Page')
<section class="home-banner-img py-80">
    <!-- <div> -->
        <div class="container">
            <div class="row flex-wrap-reverse">
                <!-- <div class="d-flex hero-section-content align-items-center flex-wrap"> -->
                    <div class="col-12 col-md-6">
                        <div class="d-flex flex-column">
                            <div>
                                <h1 class="font-55">
                                    <span class="text-white text-300">Drive Impactful</span><br><span class="text-color-primary text-800">Marketing Campaigns</span>
                                </h1>
                                <p class="text-secondary font-18 text-white">Connect with sports athletes and agencies to create seamless and successful marketing campaigns.</p>
                            </div>
                            <div class="btn-section d-flex justify-center-start my-2">
                                <button class="btn border-0 btn-primary me-3"><a href="/dashboard/celebrities">Explore Brands</a></button>
                                <button class="btn btn-transparent"><a href="/dashboard/brands">Explore Celebrity</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="hero-section-img d-flex justify-content-md-end justify-content-center">
                            <img class="box-shadow-32 rounded-4" src="https://img.freepik.com/premium-photo/sports-abstract-collage_23-2151203862.jpg?w=740" alt="">
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    <!-- </div> -->
</section>
<section class="companies-section-001 py-80">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="font-28 text-800 mb-3">Trusted by Top Companies Worldwide</h4>
            </div>
        </div>
    </div>
    
    <div class="logos-wrapper-001 py-40">
        <!-- First Slider -->
        <div class="slider-container-001">
            <div class="slider-track-001" id="sliderTrack001">
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/1.png') }}" alt="Company 1" class="company-img-001">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/2.png') }}" alt="Company 2" class="company-img-002">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/3.png') }}" alt="Company 3" class="company-img-003">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/4.png') }}" alt="Company 4" class="company-img-004">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/5.png') }}" alt="Company 5" class="company-img-005">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/6.png') }}" alt="Company 6" class="company-img-006">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/7.png') }}" alt="Company 7" class="company-img-007">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/8.png') }}" alt="Company 8" class="company-img-008">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/9.png') }}" alt="Company 9" class="company-img-009">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/10.png') }}" alt="Company 10" class="company-img-0010">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/11.png') }}" alt="Company 11" class="company-img-0011">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/12.png') }}" alt="Company 12" class="company-img-0012">
                </div>
            </div>
        </div>

        <!-- Second Slider -->
        <div class="slider-container-002 mt-4">
            <div class="slider-track-002" id="sliderTrack002">
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/13.png') }}" alt="Company 13" class="company-img-0013">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/14.png') }}" alt="Company 14" class="company-img-0014">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/15.png') }}" alt="Company 15" class="company-img-0015">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/16.png') }}" alt="Company 16" class="company-img-0016">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/17.png') }}" alt="Company 17" class="company-img-0017">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/18.png') }}" alt="Company 18" class="company-img-0018">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/19.png') }}" alt="Company 19" class="company-img-0019">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/20.png') }}" alt="Company 20" class="company-img-0020">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/22.png') }}" alt="Company 22" class="company-img-0022">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/23.png') }}" alt="Company 23" class="company-img-0023">
                </div>
                <div class="slide-box">
                    <img src="{{ asset('assets/img/logo-img/24.png') }}" alt="Company 24" class="company-img-0024">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="your-sports-marketing py-80">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center">
                <h2 class="font-34 text-800 text-center m-0">Streamline Your Sports Marketing</h2>
                <p class="font-20 text-500 text-center">Everything You Need, All in One Place</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-20">
                <div class="marketing-card rounded-adv box-shadow-16">
                    <div class="card-img box-shadow-16 rounded-adv">
                        <img clss="rounded-adv" src="{{ asset('assets/img/images/find-you-thletes.jpg') }}" alt="Find Athletes">
                    </div>
                    <div class="card-cnt d-flex flex-column justify-content-center m-card-p">
                        <h4 class="font-24 text-700 text-center">Find Athletes</h4>
                        <p class="font-14 text-normal text-center">Connect with 15,000+ athletes across 120 countries & 150 sports—One Endorse fits your campaign needs.</p>
                        <a class="mt-3 mx-auto" href="/dashboard/brands"><button class="btn btn-secondary m-card-btn shadow-buttom border-0 d-flex justify-content-between align-items-center">
                            <span class="font-12 text-normal">Click Now</span>
                            <span><svg enable-background="new 0 0 32 32" height="16" viewBox="0 0 32 32" width="16" xmlns="http://www.w3.org/2000/svg"><g id="Layer_1"><path d="m8.6436 30.4697c-.8063-.7441-.8574-2.0199-.1133-2.8262l10.748-11.6435-10.748-11.6436c-.7441-.8063-.693-2.082.1133-2.8262s2.082-.693 2.8262.1133l12 13c.707.7661.707 1.9468 0 2.7129l-12 13c-.7442.8063-2.02.8575-2.8262.1133z" fill="#444444"/></g></svg></span>
                        </button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-20">
                <div class="marketing-card rounded-adv box-shadow-16">
                    <div class="card-img box-shadow-16 rounded-adv">
                        <img clss="rounded-adv" src="{{ asset('assets/img/images/find-your-brands.jpg') }}" alt="Find Brands">
                    </div>
                    <div class="card-cnt d-flex flex-column justify-content-center m-card-p">
                        <h4 class="font-24 text-700 text-center">Find Brand</h4>
                        <p class="font-14 text-normal text-center">Find brands that align with your values and goals, building strong and impactful partnerships for long-term success.</p>
                        <a class="mt-3 mx-auto" href="/dashboard/celebrities"><button class="btn btn-secondary m-card-btn shadow-buttom border-0 d-flex justify-content-between align-items-center">
                            <span class="font-12 text-normal">Click Now</span>
                            <span><svg enable-background="new 0 0 32 32" height="16" viewBox="0 0 32 32" width="16" xmlns="http://www.w3.org/2000/svg"><g id="Layer_1"><path d="m8.6436 30.4697c-.8063-.7441-.8574-2.0199-.1133-2.8262l10.748-11.6435-10.748-11.6436c-.7441-.8063-.693-2.082.1133-2.8262s2.082-.693 2.8262.1133l12 13c.707.7661.707 1.9468 0 2.7129l-12 13c-.7442.8063-2.02.8575-2.8262.1133z" fill="#444444"/></g></svg></span>
                        </button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-20">
                <div class="marketing-card rounded-adv box-shadow-16">
                    <div class="card-img box-shadow-16 rounded-adv">
                        <img clss="rounded-adv" src="https://img.freepik.com/premium-photo/close-up-view-desk-full-papers-stats-shown-charts-diverse-businesspeople_482257-1380.jpg?w=740" alt="Find Athletes">
                    </div>
                    <div class="card-cnt d-flex flex-column justify-content-center m-card-p">
                        <h4 class="font-24 text-700 text-center">Manage Campaign</h4>
                        <p class="font-14 text-normal text-center">Manage campaigns effortlessly with powerful tools designed to streamline your marketing strategy and maximize impact.</p>
                        <a class="mt-3 mx-auto" href="#"><button class="btn btn-secondary m-card-btn shadow-buttom border-0 d-flex justify-content-between align-items-center">
                            <span class="font-12 text-normal">Click Now</span>
                            <span><svg enable-background="new 0 0 32 32" height="16" viewBox="0 0 32 32" width="16" xmlns="http://www.w3.org/2000/svg"><g id="Layer_1"><path d="m8.6436 30.4697c-.8063-.7441-.8574-2.0199-.1133-2.8262l10.748-11.6435-10.748-11.6436c-.7441-.8063-.693-2.082.1133-2.8262s2.082-.693 2.8262.1133l12 13c.707.7661.707 1.9468 0 2.7129l-12 13c-.7442.8063-2.02.8575-2.8262.1133z" fill="#444444"/></g></svg></span>
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recent-campaigns">
    <div class="section-bg bg-black py-80">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-20 border-bottom-gray d-flex flex-wrap resp-text-align align-items-center">
                    <h3 class="font-34 text-800 text-center text-white">Our Recent Campaigns</h3>
                    <p class="text-secondary m-0 text-white font-16">All in One Place</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center py-30">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-20">
                    <div class="r-compaigns-card bg-white p-3 box-shadow-16 rounded-adv">
                        <div class="r-card-head border-bottom-black d-flex justify-content-between">
                            <h4 class="font-26 text-800">Future Campaigns</h4>
                            <div class="arrow-circle bg-gray d-flex align-items-center justify-content-center mb-2">
                                <img src="../assets/img/icon/home/1235.png" alt="arrow">
                            </div>
                        </div>
                        <p class="font-14 text-normal text-center py-15">Get ready for groundbreaking campaigns. Partner with athletes to boost your brand's visibility and impact.</p>
                        <div class="card-img rounded-adv box-shadow-16">
                            <img clss="rounded-adv" src="{{ asset('assets/img/images/future-campaigns.jpg') }}" alt="Future Campaigns">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-20">
                    <div class="r-compaigns-card bg-temp text-white p-3 box-shadow-16 rounded-adv-us">
                        <div class="r-card-head border-bottom-white d-flex justify-content-between">
                            <h4 class="font-26 text-800">Brand Synergy</h4>
                            <div class="arrow-circle bg-gray d-flex align-items-center justify-content-center mb-2">
                                <img src="../assets/img/icon/home/1235.png" alt="arrow">
                            </div>
                        </div>
                        <p class="font-14 text-normal text-center py-15">Anticipate campaigns that align your brand with top athletes. Create powerful partnerships for mutual success.</p>
                        <div class="card-img rounded-adv-us-frem box-shadow-16">
                            <img clss="rounded-adv" src="{{ asset('assets/img/images/brand-synergy.jpg') }}" alt="Brand Synergy">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-20">
                    <div class="r-compaigns-card bg-white p-3 box-shadow-16 rounded-adv">
                        <div class="r-card-head border-bottom-black d-flex justify-content-between">
                            <h4 class="font-26 text-800">Marketing Impact</h4>
                            <div class="arrow-circle bg-gray d-flex align-items-center justify-content-center mb-2">
                                <img src="../assets/img/icon/home/1235.png" alt="arrow">
                            </div>
                        </div>
                        <p class="font-14 text-normal text-center py-15">Prepare for campaigns that leverage sports to enhance your brand. Connect with athletes to make a significant impact.</p>
                        <div class="card-img rounded-adv box-shadow-16">
                            <img clss="rounded-adv" src="{{ asset('assets/img/images/marketing-impact.jpg') }}" alt="Marketing Impact">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- image gallery section  -->
<section class="img-gallery py-80">
    <div class="container position-relative">
        <div class="row">
            <div class="gallery-header text-center">
                <div class="section-head d-flex justify-content-center align-items-center">
                    <img src="../assets/img/icon/elements/1.png" alt="elements">
                    <h3 class="font-34 text-800">Image Gallery</h3>
                    <img src="../assets/img/icon/elements/2.png" alt="elements">
                </div>
                <p class="font-20 text-500">Browse through our successful partnerships and campaigns</p>
            </div>
        </div>
        <div class="gallery-container">
            <div class="slider-outer">
                <button class="nav-button border-pry prev"><svg viewBox="0 0 16 16" width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 2)"><path d="m6.00391 0-6.00391 6 6.00195 6 .707031-.705078-4.79492-4.79492h12.0859v-1h-12.0859l4.79688-4.79688z" fill="#4a4a4a"/></g></svg></button>
                <button class="nav-button border-pry next"><svg viewBox="0 0 16 16" width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 2)"><path d="m7.99609 12 6.00391-6-6.00195-6-.707031.705078 4.79492 4.79492h-12.0859v1h12.0859l-4.79688 4.79688z" fill="#4a4a4a"/></g></svg></button>
                <div class="slider-container"></div>
            </div>
        </div>
    </div>
</section>
<!-- bolg section  -->
<section class="blog-section py-80">
    <div class="container">
        <div class="blog_section_2nd" id="blogSection2nd">
            <!-- Header section same as before -->
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="section-tag">Blog</span>
                    <h1 class="font-34 text-800 mt-2">The Latest Industry News</h1>
                    <p class="font-20 text-500">Stay informed with our expert analysis and insights.</p>
                </div>
                <a href="#" class="border-pry rounded-ex-sm p-2 sdry-hover text-decoration-none text-black font-14">View All</a>
            </div>

            <div class="slider_container_2nd" id="sliderContainer2nd">
                <div class="slider_wrapper_2nd" id="sliderWrapper2nd">
                    <!-- Slides will be dynamically added here -->
                </div>
            </div>

            <div class="slider_nav_2nd">
                <div class="dots_container_2nd" id="dotsContainer2nd">
                    <!-- Dots will be dynamically added here -->
                </div>
                <div class="nav_buttons_2nd">
                    <button class="prev_btn_2nd border-pry" id="prevBtn2nd"><svg viewBox="0 0 16 16" width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 2)"><path d="m6.00391 0-6.00391 6 6.00195 6 .707031-.705078-4.79492-4.79492h12.0859v-1h-12.0859l4.79688-4.79688z" fill="#4a4a4a"/></g></svg></button>
                    <button class="next_btn_2nd border-pry" id="nextBtn2nd"><svg viewBox="0 0 16 16" width="20px" height="20px" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 2)"><path d="m7.99609 12 6.00391-6-6.00195-6-.707031.705078 4.79492 4.79492h-12.0859v1h12.0859l-4.79688 4.79688z" fill="#4a4a4a"/></g></svg></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- discover section  -->
<section class="discover bg-black py-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="section-head">
                    <span class="section-tag text-white">Discover</span>
                    <h3 class="font-34 text-800 text-white mt-3">Find Your Perfect <br> Collaborator</h3>
                </div>
                <div class="sign-btn ">
                    <button class="border-pry btn-rounded border-0 p-hover bg-temp text-white mt-3"><a href="{{ route('register') }}">Sign Up Now</a></button>
                </div>
                <div class="p-4">
                    <img src="../assets/img/icon/elements/Layer_1.png" alt="elements">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 d-flex flex-column justify-content-between">
                <div class="d-flex">
                    <div class="col-2 elemant">
                        <img src="../assets/img/icon/elements/Relume.png" alt="elements">
                    </div>
                    <div class=" col-10 discover-content d-flex justify-content-between">
                        <div class="d-cont text-white pl-20">
                            <h4 class="font-24 text-600">Browse Our Curated List</h4>
                            <p class="font-14 text-normal">Our platform features a diverse range of athletes and agencies, ready to align with your brand's vision.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-2 elemant-t pt-4 pt-md-0">
                        <img src="../assets/img/icon/elements/Relume.png" alt="elements">
                    </div>
                    <div class=" col-10 discover-content d-flex justify-content-between pt-4 pt-md-0">
                        <div class="d-cont text-white pl-20">
                            <h4 class="font-24 text-600">Select Your Ideal Partner</h4>
                            <p class="font-14 text-normal">Identify athletes who resonate with your brand values and have the reach to influence your target audience.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-2 elemant-t pt-4 pt-md-0">
                        <img src="../assets/img/icon/elements/Relume.png" alt="elements">
                    </div>
                    <div class=" col-10 discover-content d-flex justify-content-between pt-4 pt-md-0">
                        <div class="d-cont text-white pl-20">
                            <h4 class="font-24 text-600">Initiate Meaningful Connections</h4>
                            <p class="font-14 text-normal">Reach out to your chosen sports figures or their representatives to discuss potential collaboration opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-2 elemant-t pt-4 pt-md-0">
                        <img src="../assets/img/icon/elements/Relume.png" alt="elements">
                    </div>
                    <div class=" col-10 discover-content d-flex justify-content-between pt-4 pt-md-0">
                        <div class="d-cont text-white pl-20">
                            <h4 class="font-24 text-600">Launch and Track Your Campaign</h4>
                            <p class="font-14 text-normal">Execute your campaign with confidence, knowing you can monitor its success and make data-driven decisions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta pt-60">
    <div class="bg-color py-80">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="cta-cnt text-center">
                        <h3 class="font-34 text-800">Ready to try it out?</h3>
                        <p class="font-14 text-normal">Sign up now and get 50% off your first month of using our product.</p>
                        <div class="cta-btn d-flex justify-content-center gap-2 mt-3">
                            <button class="border-pry btn-rounded border-0 p-hover bg-temp text-white font-14"><a href="{{ route('register') }}">Sign Up</a></button>
                            <button class="border-btn btn-rounded sdry-hover text-black font-14"><a href="/about">Learn more</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
