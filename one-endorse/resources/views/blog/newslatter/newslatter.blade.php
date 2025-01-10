<link rel="stylesheet" href="{{ asset('assets/default/css/blog/newslatter/newslatter.css') }}">

<section class="newsletter-section py-80">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <!-- Left Column -->
            <div class="col-12 col-md-5">
                <h2 class="font-34 text-800">Sign up for our newsletter</h2>
                <p class="font-16 text-normal mt-2">Lorem ipsum dolor sit amet, ConnectEDU advising elite.</p>
            </div>

            <!-- Right Column -->
            <div class="col-12 col-md-5">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="newsletter-form d-flex flex-column flex-md-row gap-3 align-items-start align-items-md-center mt-4 mt-lg-0">
                    @csrf
                    <div class="form-group flex-grow-1 w-100">
                        <input type="email" 
                               class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror" 
                               name="email"
                               placeholder="Enter your email"
                               value="{{ old('email') }}"
                               required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary border-0 rounded-pill px-4">
                        Subscribe
                    </button>
                </form>
                <p class="font-12 text-normal mt-2">
                    By clicking Sign Up you're confirming that you agree with our Terms and Conditions.
                </p>
            </div>
        </div>
    </div>
</section>