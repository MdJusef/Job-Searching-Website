
@extends('admin.master')
@section('title')
    Slider
@endsection
@section('content')
    <form action="{{ route('new-category') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Add Category</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Category</h5>
                            </div>
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputEnterYourTitle" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input name="category_name" type="text" class="form-control" id="inputEnterYourTitle" placeholder="Enter Category Name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" value="submit" class="btn btn-primary px-5">Save Category</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
