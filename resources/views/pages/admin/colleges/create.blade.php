@extends('layouts.admin_dashboard')
@section('title')
    Santri Hub | Colleges
@endsection

@section('content')
<div class="page-content-wrapper border">

    <!-- Title -->
    <div class="row">
        <div class="col-12 d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 mb-sm-0">Add a College</h1>
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
                       <form action="{{route('colleges.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">College Name</label>
                            <input type="text" class="form-control" name="college_name" id="exampleFormControlInput1" placeholder="Input City Name" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                            <input type="text" class="form-control" name="short_description" id="exampleFormControlInput1" placeholder="Input Short Description" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Input Description" rows="3"></textarea>
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Country Name</label>
                              <select name="country_id" class="form-select" aria-label="Default select example" required>
                                <option value="">Option</option>
                                @forelse ($countries as $itemCountry)
                                  <option value="{{$itemCountry->id}}">{{$itemCountry->country_name}}</option>
                                @empty
                                  <option value="">Tidak ada data</option>
                                @endforelse
                                </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">State Name</label>
                            <select name="state_id" class="form-select" aria-label="Default select example" required>
                              <option value="">Option</option>
                              @forelse ($states as $itemState)
                                <option value="{{$itemState->id}}">{{$itemState->state_name}}</option>
                              @empty
                                <option value="">Tidak ada data</option>
                              @endforelse
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">City Name</label>
                            <select name="city_id" class="form-select" aria-label="Default select example" required>
                              <option value="">Option</option>
                              @forelse ($cities as $itemCity)
                                <option value="{{$itemCity->id}}">{{$itemCity->city_name}}</option>
                              @empty
                                <option value="">Tidak ada data, Isi data City !</option>
                              @endforelse
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">College Status</label>
                            <select name="college_status" class="form-select" aria-label="Default select example" required>
                                <option value="">Option</option>
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                              </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Status Active</label>
                            <select name="active" class="form-select" aria-label="Default select example" required>
                                <option value="">Option</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                              </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Add College</button>
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