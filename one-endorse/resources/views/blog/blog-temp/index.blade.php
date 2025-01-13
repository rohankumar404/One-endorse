@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/blog/blog-temp/style.css') }}">
@endpush
@section('content')
<!-- Hero Section -->
<section class="blog-hero py-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span class="section-tag">Blog</span>
                <h1 class="font-55 text-900 mt-3">
                    Explore, Engage, Evolve                    
                </h1>
                <span class="d-block font-40 text-normal">Unveiling Insights and Inspiration in Every Blog Post.</span>
                <p class="font-16 text-normal mt-3 w-lg-70">Dive into a wealth of knowledge, perspectives, and captivating stories on our blog page—where each post is a journey of discovery and growth.</p>
            </div>
        </div>
    </div>
</section>
<section class="blog-detail-section py-80">
    <div class="container">
        <!-- Blog Header -->
        <div class="blog-header mb-4">
            <h1 class="font-34 text-800 mb-3">Featured blog posts</h1>
        </div>

        <!-- Blog Content -->
        <div class="blog-content">
            <!-- Featured Image -->
            <div class="featured-image position-relative mb-4">
                <img src="https://img.freepik.com/free-photo/full-shot-men-soccer-field_23-2150405442.jpg?t=st=1736758327~exp=1736761927~hmac=dfd305a21f44fb07c9f3c99fc2286bf091874938e6f7068ba1c144e88caa62ad&w=740" 
                     alt="Sports Celebs-Brand Collaborations" 
                     class="w-100 rounded-adv">
                <div class="image-meta position-absolute bottom-0 start-0 p-3 d-flex align-items-center gap-3"></div>
            </div>

            <!-- Blog Title & Description -->
            <div class="blog-main-content">
                <div class="d-flex mb-3">
                    <span class="section-tag bg-temp text-white mr-2">Category</span>
                    <div class="read-time d-flex align-items-center ml-1">
                        <span class="font-14 text-500">5 min read</span>
                    </div>
                </div>
                <h2 class="font-32 text-800 mb-3">The Impact of Sports Celebs-Brand Collaborations</h2>
                <p class="font-16 text-600 mb-4">Explore the dynamic world of sports marketing and discover how Sports Celebs-brand collaborations are reshaping the game</p>

                <!-- Blog Paragraphs -->
                <div class="blog-paragraphs">
                    <p class="font-16 text-normal mb-4">Lorem ipsum dolor sit amet consectetur. Vel ac etiam et viverra ornare neque sed in. Augue at pulvinar tortor feugiat nibh sit sapien id laoreet. Mauris quis sit tempor tempus a. Egestas platea aliquam neque dui aenean facilisi non habitant. Imperdiet faucibus ultrices diam arcu.</p>

                    <p class="font-16 text-normal mb-4">Pellentesque consequat et pulvinar dignissim ac morbi volutpat. Ac in morbi dictum nulla cursus velit lorem ullamcorper vulputate. Tempor enim vitae volutpat sem sit lacus amet enim. Dictumst ut proin purus eu augue ut adipiscing viverra.</p>

                    <p class="font-16 text-normal mb-4">Diam vulputate a massa facilisis ipsum ornare feugiat amet. Enim vulputate nulla sapien habitasse hac at. Nulla ut cursus quam morbi at. In eget ac elementum purus vulputate. Mattis ultrices mauris mauris elementum quisque egestas a. Sapien sed leo pharetra justo sit tortor pharetra.</p>

                    <!-- Continue with more paragraphs -->
                </div>

                <!-- Share Section -->
                <div class="share-section mt-5 pt-4 border-top">
                    <h3 class="font-20 text-700 mb-3">Share this article</h3>
                    <div class="share-buttons d-flex gap-3">
                        <a href="#" class="btn border-pry rounded-circle p-2">
                            <svg width="24" height="24" class="bi bi-facebook">
                                <?xml version="1.0" encoding="iso-8859-1"?>
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <path style="fill:#2196F3;" d="M320,85.333h64c5.891,0,10.667-4.776,10.667-10.667v-64C394.667,4.776,389.891,0,384,0h-64
                                c-64.772,0.071-117.263,52.561-117.333,117.333V192H128c-5.891,0-10.667,4.776-10.667,10.667v64c0,5.891,4.776,10.667,10.667,10.667
                                h74.667v224c0,5.891,4.776,10.667,10.667,10.667h64c5.891,0,10.667-4.776,10.667-10.667v-224h74.667
                                c4.589-0.003,8.662-2.942,10.112-7.296l21.333-64c1.862-5.589-1.16-11.629-6.749-13.491c-1.084-0.361-2.22-0.546-3.363-0.547h-96
                                v-74.667C288,99.66,302.327,85.333,320,85.333z"/><g></g></svg>
                            </svg>
                        </a>
                        <a href="#" class="btn border-pry rounded-circle p-2">
                            <svg width="24" height="24" class="bi bi-twitter">
                                <?xml version="1.0" encoding="UTF-8"?>
                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" data-name="Capa 1" viewBox="0 0 24 24">
                                <path d="m18.9,1.153h3.682l-8.042,9.189,9.46,12.506h-7.405l-5.804-7.583-6.634,7.583H.469l8.6-9.831L0,1.153h7.593l5.241,6.931,6.065-6.931Zm-1.293,19.494h2.039L6.482,3.239h-2.19l13.314,17.408Z"/>
                                </svg>
                            </svg>
                        </a>
                        <a href="#" class="btn border-pry rounded-circle p-2">
                            <svg width="24" height="24" class="bi bi-linkedin">
                                <svg id="Layer_1" enable-background="new 0 0 100 100" height="24" viewBox="0 0 100 100" width="24" xmlns="http://www.w3.org/2000/svg"><g id="_x31_0.Linkedin" fill="#0073b1"><path d="m89.98 90v-.003h.02v-29.34c0-14.353-3.09-25.41-19.87-25.41-8.067 0-13.48 4.427-15.69 8.623h-.233v-7.283h-15.91v53.41h16.567v-26.447c0-6.963 1.32-13.697 9.943-13.697 8.497 0 8.623 7.947 8.623 14.143v26.004z"/><path d="m11.32 36.59h16.587v53.41h-16.587z"/><path d="m19.607 10c-5.304 0-9.607 4.303-9.607 9.607s4.303 9.697 9.607 9.697 9.607-4.393 9.607-9.697c-.004-5.304-4.307-9.607-9.607-9.607z"/></g></svg>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
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
@endsection


