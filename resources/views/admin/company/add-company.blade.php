@extends('admin.master')
@section('title')
    Slider
@endsection
@section('content')
    <form action="{{ route('new-company') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Add Company</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Company Information</h5>
                            </div>
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputEnterYourTitle" class="col-sm-3 col-form-label">Enter Company Name</label>
                                <div class="col-sm-9">
                                    <input name="company_name" type="text" class="form-control" id="inputEnterYourTitle" placeholder="Company Name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputDescription" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input name="address" class="form-control" id="inputDescription" placeholder="address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fancy-file-upload" class="col-sm-3 col-form-label">Upload Company Logo</label>
                                <div class="col-sm-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <input name="company_logo" id="fancy-file-upload" type="file" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" value="submit" class="btn btn-primary px-5">Add Company</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

