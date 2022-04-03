@extends('layouts.admin_dashboard')
@section('title')
    Santri Hub | Countries
@endsection

@section('content')
<div class="page-content-wrapper border">

    <!-- Title -->
    <div class="row">
        <div class="col-12 d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 mb-sm-0">Add a country</h1>
        </div>
    </div>

    <!-- Card START -->
    <div class="card bg-transparent">

        <!-- Card header START -->
        <div class="card-header bg-transparent border-bottom px-0">
            <!-- Search and select START -->
            <div class="row g-3 align-items-center justify-content-between">
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
                    <div class="border-0">
                       <form action="{{route('countries.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">State Name</label>
                            <input type="text" class="form-control" name="country_name" id="exampleFormControlInput1" placeholder="Input Country Name" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Status Active</label>
                            <select name="active" class="form-select" aria-label="Default select example" required>
                                <option value="">Option</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                              </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Add Country</button>
                       </form>
                    </div>
                    <!-- Table END -->
                </div>
                <!-- Tabs content item END -->

            </div>
            <!-- Tabs content END -->
        </div>
        <!-- Card body END -->

        <!-- Card footer START -->
        <!-- Card footer END -->
    </div>
    <!-- Card END -->
</div>


@endsection