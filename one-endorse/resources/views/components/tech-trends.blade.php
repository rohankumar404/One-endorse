<section class="teck-and-trends py-80">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="font-34 text-800">Tech and Trends in Sports</h2>
                <p class="font-16 text-500">technology, innovation, and emerging trends</p>
            </div>
            <a href="#" class="border-pry rounded-ex-sm p-2 sdry-hover text-decoration-none text-black font-12">View All</a>
        </div>
        <div class="row g-4">
            @foreach($techandtrendsblog as $techandtrends)
                @include('blog.tech-trends.index', ['techandtrends' => $techandtrends])
            @endforeach
        </div>
    </div>
</section>