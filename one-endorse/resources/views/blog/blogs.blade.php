@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('assets/default/css/blog/blog.css') }}">

<!-- Hero Section -->
<section class="blog-hero py-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <span class="section-tag">Blog</span>
                <h1 class="font-55 text-900 mt-3">
                    Explore, Engage, Evolve:
                    <span class="d-block">Unveiling Insights and Inspiration</span>
                    <span class="d-block">in Every Blog Post.</span>
                </h1>
                <p class="font-16 text-normal mt-3 w-lg-70">Dive into a wealth of knowledge, perspectives, and captivating stories on our blog page—where each post is a journey of discovery and growth.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Posts Section -->
<section class="featured-posts py-50">
    <div class="container">
        <h2 class="font-34 text-800 mb-4">Featured blog posts</h2>
        
        <div class="row g-4">
            <!-- Main Featured Post -->
            <div class="col-12 col-lg-6">
                <div class="slide-card bg-white box-shadow-16 p-12 rounded-adv h-100">
                    <div class="position-relative">
                        <img src="https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg" 
                             alt="Sports Campaign" 
                             class="w-100 rounded-adv featured-img">
                        <span class="section-tag position-absolute bg-white text-black border-0" style="bottom:15px; left:15px;">Category</span>        
                    </div>
                    <div class="py-2">
                        <div class="time-info d-flex align-items-center mb-2">
                            <svg width="16" height="16" viewBox="0 0 16 16" class="me-2">
                                <path fill="currentColor" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"/>
                                <path fill="currentColor" d="M8 3H7v6l5.2 3.2.8-1.3-4.5-2.7V3z"/>
                            </svg>
                            <span class="font-12 text-normal">5 min read</span>
                        </div>
                        <h3 class="font-24 text-700">The Impact of Sports Celebs-Brand Collaborations</h3>
                        <p class="font-14 text-normal my-3">Explore the dynamic world of sports marketing and discover how Sports Celebs-brand collaborations are reshaping the game</p>
                        <a href="#" class="read-more d-flex align-items-center gap-2">
                            Read more →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Side Featured Posts -->
            <div class="col-12 col-lg-6">
                <div class="row g-4">
                    <!-- First Side Post -->
                    <div class="col-12">
                        <div class="slide-card bg-gray rounded-adv">
                            <div class="d-flex align-items-center p-12">
                                <div class="side-img rounded-adv" style="max-width: 170px; height: 180px;">
                                    <img src="https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg" 
                                         alt="Sports Team"
                                         class="w-100 h-100 object-fit-cover rounded-adv">
                                </div>
                                <div class="ms-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="section-tag bg-white text-black border-0">Category</span>
                                        <span class="font-12 text-normal">5 min read</span>
                                    </div>
                                    <h4 class="font-20 text-700 my-3">Crafting Memorable <br> Sports Campaigns</h4>
                                    <a href="#" class="read-more">Read more →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Side Post -->
                    <div class="col-12">
                        <div class="slide-card bg-gray rounded-adv">
                            <div class="d-flex align-items-center p-12">
                                <div class="side-img rounded-adv" style="max-width: 170px; height: 180px;">
                                    <img src="https://img.freepik.com/free-photo/young-male-soccer-football-player-training-isolated-gradient-wall_155003-37551.jpg" 
                                         alt="Sports Team"
                                         class="w-100 h-100 object-fit-cover rounded-adv">
                                </div>
                                <div class="ms-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="section-tag bg-white text-black border-0">Category</span>
                                        <span class="font-12 text-normal">5 min read</span>
                                    </div>
                                    <h4 class="font-20 text-700 my-3">Sports Celebs Driving <br> Social Impact</h4>
                                    <a href="#" class="read-more">Read more →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid Section -->
<!-- Featured blog posts  -->
<section class="blog-grid py-80">
    <div class="container">
        <h2 class="font-34 text-800 mb-4">Featured blog posts</h2>
        <div class="row g-4">
            @foreach($featuredBlogs as $blog)
                @include('blog.featured-blog.blogcard', ['blog' => $blog])
            @endforeach
        </div>
    </div>
</section>
<!-- newslatter section  -->
@include('blog.newslatter.newslatter')
<!-- Global Trend blog posts  -->
<section class="global-trend py-80">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="font-34 text-800">Global trend</h2>
                <p class="font-16 text-500">Navigate the ever-evolving landscape of sports marketing.</p>
            </div>
            <a href="#" class="border-pry rounded-ex-sm p-2  sdry-hover text-decoration-none text-black font-12">View All</a>
        </div>
        <div class="row g-4">
            @foreach($globaltrendsblog as $globaltrendblog)
                @include('blog.globaltrend-blog.index', ['globaltrendblog' => $globaltrendblog])
            @endforeach
        </div>
    </div>
</section>
<!-- Beyond the Field -->
<section class="beyond-the-field py-80">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <div class="d-flex align-items-center">
                    <h2 class="font-34 text-800">Beyond the Field:</h2>
                    <span class="font-24 text-500 ml-2 mt-1">Sports Celebs Ventures and Impact</span>
                </div>
                <p class="font-16 text-500">Explore the multifaceted lives of Sports Celebss as we delve into their entrepreneurial ventures.</p>
            </div>
            <a href="#" class="border-pry rounded-ex-sm p-2  sdry-hover text-decoration-none text-black font-12">View All</a>
        </div>
        <div class="row g-4">
            @foreach($beyondfieldblog as $beyondfield)
                @include('blog.beyond-field.index', ['beyondfield' => $beyondfield])
            @endforeach
        </div>
    </div>
</section>
<!-- Tech and Trends in Sports -->
<section class="teck-and-trends py-80">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="font-34 text-800">Tech and Trends in Sports</h2>
                <p class="font-16 text-500">technology, innovation, and emerging trends</p>
            </div>
            <a href="#" class="border-pry rounded-ex-sm p-2  sdry-hover text-decoration-none text-black font-12">View All</a>
        </div>
        <div class="row g-4">
            @foreach($techandtrendsblog as $techandtrends)
                @include('blog.tech-trends.index', ['techandtrends' => $techandtrends])
            @endforeach
        </div>
    </div>
</section>
<!-- Unlock the Power of Possibilities  -->
<section class="bg-white py-80">
    <div class="container unlock-the-power rounded-ex-adv">
        <div class="row p-5">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="sec-cont d-flex flex-column justify-content-between">
                    <div class="text-conten text-white">
                        <h3 class="font-46 text-900">Unlock the Power of Possibilities</h3>
                        <p class="font-18 text-normal">Experience our service and elevate your journey to new heights.</p>
                    </div>
                    <div class="get-started rounded-ex-adv bg-white p-12 my-3 my-md-0">
                        <button class="w-100 text-start">Get started</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <div class="sec-img rounded-adv">
                    <img src="https://img.freepik.com/premium-photo/trophy-winning-award-sport-success-achievement-cup_488220-4860.jpg?w=740" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>