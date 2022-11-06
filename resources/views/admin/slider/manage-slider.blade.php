@extends('admin.master')

@section('content')
<h6 class="mb-0 text-uppercase">Slider Content</h6>
<hr/>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Slider Title</th>
                    <th>Description</th>
                    <th>Slider Image</th>
                </tr>
                </thead>
                <tbody>
                @php $i=1 @endphp
                @foreach($sliders as $slider)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $slider->title }}</td>
                    <td><textarea rows="5" cols="50">{{ $slider->description }}</textarea></td>
                    <td>
                        <img src="{{ $slider->slider_image }}" alt="" style="width: 80px;height: 80px">
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
