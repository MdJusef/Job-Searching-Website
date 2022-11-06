@extends('admin.master')

@section('content')
    <h6 class="mb-0 text-uppercase">Category List</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->status==1? 'published':'unpublished' }}</td>
                            <td>
                                @if($category->status==1)
                                    <a href="{{ route('category-status',['id'=> $category->id]) }}" class="btn btn-outline-success">Unpublished</a>
                                @else
                                    <a href="{{ route('category-status',['id'=> $category->id]) }}" class="btn btn-outline-primary">Published</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

