@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/tables/celebrity-brands/style.css') }}">
@endpush
@section('content')
<div class="container py-4">
    <!-- Filter Section -->
    <div class="filter-section mb-4">
        <div class="row g-3">
            <div class="col-md">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle w-100" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-map-marker-alt"></i> Location
                    </button>
                    <ul class="dropdown-menu w-100">
                        @foreach($locations as $location)
                            <li><a class="dropdown-item" href="#" data-filter="location" data-value="{{ $location }}">{{ $location }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            <!-- Repeat for other filters -->
            <!-- Sport Category, Sport, Available Category, Cost -->
        </div>

        <!-- Search Bar -->
        <div class="search-bar mt-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search celebrities...">
                <button class="btn btn-dark" type="button">Search</button>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr style="background: gray;">
                    <th>Name</th>
                    <th>Engagement Rate</th>
                    <th>Location</th>
                    <th>Sport</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($celebrities as $celebrity)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ $celebrity['image'] }}" class="rounded-circle me-2" width="40">
                            <span>{{ $celebrity['name'] }} | {{ $celebrity['gender'] }}</span>
                        </div>
                    </td>
                    <td class="pt-15">{{ $celebrity['engagement_rate'] }}%</td>
                    <td class="pt-15">{{ $celebrity['location'] }}</td>
                    <td class="pt-15">{{ $celebrity['sport'] }}</td>
                    <td>
                        <a href="{{ route('profile.celebrity.index', $celebrity['id']) }}" class="btn btn-outline-dark">View Profile</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@push('scripts')
<script>
$(document).ready(function() {
    // Filter handling
    $('.dropdown-item').click(function(e) {
        e.preventDefault();
        const filterType = $(this).data('filter');
        const filterValue = $(this).data('value');
        
        $.ajax({
            url: '{{ route("celebrity.filter") }}',
            method: 'POST',
            data: {
                filterType: filterType,
                filterValue: filterValue,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Update table with filtered results
                updateTable(response.data);
            }
        });
    });

    // Search handling
    let searchTimeout;
    $('.search-bar input').on('input', function() {
        clearTimeout(searchTimeout);
        const searchTerm = $(this).val();
        
        searchTimeout = setTimeout(() => {
            $.ajax({
                url: '{{ route("celebrity.search") }}',
                method: 'POST',
                data: {
                    search: searchTerm,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    updateTable(response.data);
                }
            });
        }, 500);
    });
});

function updateTable(data) {
    // Function to update table with new data
}
</script>
@endpush
@endsection