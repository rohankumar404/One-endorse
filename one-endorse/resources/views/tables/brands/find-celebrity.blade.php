@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/default/css/tables/celebrity-brands/style.css') }}">
@endpush
@section('content')
<div class="container py-4">
       <!-- Filter Section -->
       <div class="filter-bar rounded-3 p-3 mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div class="dropdown bg-black rounded-adv">
                <button class="btn btn-link text-white text-decoration-none d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/icon/elements/white-Relume.png') }}" alt="Industry" class="filter-icon mr-2">Location
                    <img src="{{ asset('assets/img/icon/drop-down-white.png') }}" alt="arrow" class="ms-2 dropdown-arrow">
                </button>
                <ul class="dropdown-menu">
                    @foreach($locations as $location)
                        <li><a class="dropdown-item" href="#" data-filter="location" data-value="{{ $location }}">{{ $location }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="dropdown bg-black rounded-adv">
                <button class="btn btn-link text-white text-decoration-none d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/icon/elements/white-Relume.png') }}" alt="Industry" class="filter-icon mr-2">Sport Category
                    <img src="{{ asset('assets/img/icon/drop-down-white.png') }}" alt="arrow" class="ms-2 dropdown-arrow">
                </button>
                <ul class="dropdown-menu">
                    @foreach($sportCategories as $category)
                        <li><a class="dropdown-item" href="#" data-filter="sport_category" data-value="{{ $category }}">{{ $category }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="dropdown bg-black rounded-adv">
                <button class="btn btn-link text-white text-decoration-none d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/icon/elements/white-Relume.png') }}" alt="Industry" class="filter-icon mr-2">Sport
                    <img src="{{ asset('assets/img/icon/drop-down-white.png') }}" alt="arrow" class="ms-2 dropdown-arrow">
                </button>
                <ul class="dropdown-menu">
                    @foreach($sports as $sport)
                        <li><a class="dropdown-item" href="#" data-filter="sport" data-value="{{ $sport }}">{{ $sport }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="dropdown bg-black rounded-adv">
                <button class="btn btn-link text-white text-decoration-none d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/icon/elements/white-Relume.png') }}" alt="Industry" class="filter-icon mr-2">Available Category
                    <img src="{{ asset('assets/img/icon/drop-down-white.png') }}" alt="arrow" class="ms-2 dropdown-arrow">
                </button>
                <ul class="dropdown-menu">
                    @foreach($categories as $category)
                        <li><a class="dropdown-item" href="#" data-filter="available_category" data-value="{{ $category }}">{{ $category }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="dropdown bg-black rounded-adv">
                <button class="btn btn-link text-white text-decoration-none d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/icon/elements/white-Relume.png') }}" alt="Industry" class="filter-icon mr-2">Cost
                    <img src="{{ asset('assets/img/icon/drop-down-white.png') }}" alt="arrow" class="ms-2 dropdown-arrow">
                </button>
                <ul class="dropdown-menu">
                    @foreach($costs as $cost)
                        <li><a class="dropdown-item" href="#" data-filter="cost" data-value="{{ $cost }}">{{ $cost }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="search-bar mb-4 px-3">
        <div class="input-group gap-3">
            <input type="text" class="form-control rounded-ex-adv" placeholder="Search celebrities...">
            <button class="btn bg-gray rounded-ex-adv hover px-4" type="button">Search</button>
        </div>
    </div>

    <!-- Table Section -->
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
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
                            <img src="{{ $celebrity['image'] }}" class="rounded-circle me-2" style="width: 40px; height: 40px;">
                            <span>{{ $celebrity['name'] }} | {{ $celebrity['gender'] }}</span>
                        </div>
                    </td>
                    <td class="pt-15">{{ $celebrity['engagement_rate'] }}%</td>
                    <td class="pt-15">{{ $celebrity['location'] }}</td>
                    <td class="pt-15">{{ $celebrity['sport'] }}</td>
                    <td>
                        <a href="{{ route('profile.celebrity.index', $celebrity['id']) }}" class="btn hover btn-outline-dark">View Profile</a>
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
            const searchTerm = $('.search-bar input').val();
            
            $.ajax({
                url: '{{ route("celebrity.filter") }}',
                method: 'POST',
                data: {
                    filterType: filterType,
                    filterValue: filterValue,
                    search: searchTerm,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
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
    
        function updateTable(data) {
            const tbody = $('tbody');
            tbody.empty();
            
            if (data.length === 0) {
                tbody.append(`
                    <tr>
                        <td colspan="5" class="text-center">No results found</td>
                    </tr>
                `);
                return;
            }
    
            data.forEach(celebrity => {
                tbody.append(`
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="${celebrity.image}" class="rounded-circle me-2" width="40">
                                <span>${celebrity.name} | ${celebrity.gender}</span>
                            </div>
                        </td>
                        <td class="pt-15">${celebrity.engagement_rate}%</td>
                        <td class="pt-15">${celebrity.location}</td>
                        <td class="pt-15">${celebrity.sport}</td>
                        <td>
                            <a href="/brands/celebrity/${celebrity.id}" class="btn btn-outline-dark">View Profile</a>
                        </td>
                    </tr>
                `);
            });
        }
    });
    </script>
@endpush
@endsection