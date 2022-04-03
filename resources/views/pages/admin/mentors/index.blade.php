@extends('layouts.admin_dashboard')
@section('title')
    Santri Hub | Mentors
@endsection

@section('content')
<div class="page-content-wrapper border">

    <!-- Title -->
    <div class="row">
        <div class="col-12 d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 mb-sm-0">Data Mentors</h1>
            <a  href="{{route('mentors.create')}}" class="btn btn-sm btn-primary mb-0" >Add a Mentor</a>
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
                    <form action="/admin/countries" class="rounded position-relative">
                        <input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search" name="search">
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
                                    <th scope="col" class="border-0 rounded-start">Mentor Name</th>
                                    <th scope="col" class="border-0">Country</th>
                                    <th scope="col" class="border-0">City</th>
                                    <th scope="col" class="border-0">College</th>
                                    <th scope="col" class="border-0">Active</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>

                            <!-- Table body START -->
                            <tbody>
                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="avatar avatar-md">
                                                <img src="{{ url('template/assets/images/avatar/09.jpg')}}" class="rounded-circle" alt="">
                                            </div>
                                            <div class="mb-0 ms-2">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="#" class="stretched-link">Lori Stevens</a></h6>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td class="text-center text-sm-start">
                                        <h6 class="mb-0">Web Designer</h6>
                                    </td>

                                    <!-- Table data -->
                                    <td>15</td>

                                    <!-- Table data -->
                                    <td>5,354</td>

                                        <!-- Table data -->
                                    <td>Active</td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
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
                        {{-- {{$items -> links()}} --}}
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