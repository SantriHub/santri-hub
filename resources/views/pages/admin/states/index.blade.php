@extends('layouts.admin_dashboard')
@section('title')
    Santri Hub | States
@endsection

@section('content')
<div class="page-content-wrapper border">

    <!-- Title -->
    <div class="row">
        <div class="col-12 d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 mb-sm-0">Data States</h1>
            <a href="{{route('states.create')}}" class="btn btn-sm btn-primary mb-0">Add a State</a>
        </div>
        <br> <br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
    </div>

    <!-- Card START -->
    <div class="card bg-transparent">

        <!-- Card header START -->
        <div class="card-header bg-transparent border-bottom px-0">
            <!-- Search and select START -->
            <div class="row g-3 align-items-center justify-content-between">

                <!-- Search bar -->
                <div class="col-md-8">
                    <form class="rounded position-relative">
                        <input class="form-control bg-transparent" type="search" placeholder="Search" name="search" aria-label="Search">
                        <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                    </form>
                </div>
            </div>
            <!-- Search and select END -->
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body px-0">
            <!-- Tabs content START -->
            <div class="tab-content">
                <!-- Tabs content item START -->
                <div class="tab-pane fade show active" id="nav-html-tab-1">
                    <!-- Table START -->
                    <div class="table-responsive border-0">
                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 rounded-start">State Name</th>
                                    <th scope="col" class="border-0">Active</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>

                            <!-- Table body START -->
                            <tbody>
                                <!-- Table row -->
                                @forelse ($items as $item)
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            {{-- <div class="avatar avatar-md">
                                                <img src="{{ asset('template/assets/images/avatar/09.jpg')}}" class="rounded-circle" alt="">
                                            </div> --}}
                                            <div class="mb-0 ms-2">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="#" class="stretched-link"> {{$item->state_name}} </a></h6>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td class="text-center text-sm-start">
                                        <h6 class="mb-0">{{$item->active === 1 ? 'Active' : 'Inactive'}}</h6>
                                    </td>

                                    <!-- Table data -->
                                    <form action="{{ route('states.destroy', $item->id) }}"  method="post">
                                    <td>
                                        <a href="{{ route('states.edit', $item->id) }}" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0 button-update" >
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger-soft btn-round mb-0">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </form>
                                </tr>
                                @empty
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                                @endforelse
                                
                            </tbody>
                            <!-- Table body END -->
                        </table>
                    </div>
                    <!-- Table END -->
                </div>
                <!-- Tabs content item END -->

            </div>
            <!-- Tabs content END -->
        </div>
        <!-- Card body END -->

        <!-- Card footer START -->
        <div class="card-footer bg-transparent p-0">
            <!-- Pagination START -->
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                <!-- Content -->
                <p class="mb-0 text-center text-sm-start"></p>
                <!-- Pagination -->
                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                    <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0">
                        {{$items -> links()}}
                    </ul>
                </nav>
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Card footer END -->
    </div>
    <!-- Card END -->
</div>
@endsection