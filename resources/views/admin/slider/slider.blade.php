@extends('admin.master')
@section('title')
    Slider
@endsection
@section('content')
    <form action="{{ route('new-slider') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Add Slider</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Slider</h5>
                            </div>
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputEnterYourTitle" class="col-sm-3 col-form-label">Enter Slider Title</label>
                                <div class="col-sm-9">
                                    <input name="title" type="text" class="form-control" id="inputEnterYourTitle" placeholder="Enter Title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control" id="inputDescription" rows="3" placeholder="This is all about slider content"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fancy-file-upload" class="col-sm-3 col-form-label">Upload Slide</label>
                                <div class="col-sm-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <input name="slider_image" id="fancy-file-upload" type="file" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" value="submit" class="btn btn-primary px-5">Save Slide</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
