@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/profile/celebrity-brands/style.css') }}">
@endpush
@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-card d-flex flex-column align-items-center text-center p-4 bg-white rounded-3 shadow-sm">
                <img src="{{ asset($celebrity['image']) }}" class="rounded-circle mb-3" width="150" height="150" style="object-fit: cover;">
                <h3 class="font-22 text-800">{{ $celebrity['name'] }}</h3>
                <p class="text-muted">{{ $celebrity['location'] }}</p>
                
                <div class="d-flex justify-content-center gap-2 mt-2">
                    <button class="btn btn-outline-dark rounded-pill">
                        <i class="fas fa-heart"></i> Add to Favourite
                    </button>
                    <button class="btn btn-dark rounded-pill">
                        <i class="fas fa-envelope"></i> Contact me
                    </button>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-4 bg-white p-4 rounded-3 shadow-sm">
                <div class="d-flex justify-content-between mb-3">
                    <span>Age</span>
                    <span class="fw-bold">{{ $celebrity['profile']['age'] }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Gender</span>
                    <span class="fw-bold">{{ $celebrity['profile']['gender'] }}</span>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="profile-details bg-white p-4 rounded-3 shadow-sm">
                <h4 class="mb-3">Description</h4>
                <p class="text-muted">{{ $celebrity['profile']['description'] }}</p>
                
                <h4 class="mt-4 mb-3">Blocked Category</h4>
                <div class="d-flex flex-wrap gap-2">
                    @foreach($celebrity['profile']['blocked_category'] as $category)
                        <span class="badge bg-light text-dark border">{{ $category }}</span>
                    @endforeach
                </div>

                <h4 class="mt-4 mb-3">Team</h4>
                <p class="text-muted">{{ $celebrity['profile']['team'] }}</p>

                <h4 class="mt-4 mb-3">How to Associate</h4>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3">
                            <h6>Social Collaboration</h6>
                            <p class="mb-0">{{ $celebrity['profile']['association_types']['social'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3">
                            <h6>Digital Association</h6>
                            <p class="mb-0">{{ $celebrity['profile']['association_types']['digital'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border rounded-3">
                            <h6>Endorsement</h6>
                            <p class="mb-0">{{ $celebrity['profile']['association_types']['endorsement'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="latest-activity mt-4 bg-white p-4 rounded-3 shadow-sm">
                <h4 class="mb-3">Latest Activity</h4>
                <div class="row g-3">
                    @foreach($celebrity['profile']['latest_activity'] as $activity)
                        <div class="col-md-3">
                            <img src="{{ asset($activity) }}" class="img-fluid rounded-3" alt="Activity">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection