@extends('admin.master')

@section('content')
    <h6 class="mb-0 text-uppercase">Company List</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Company Name</th>
                        <th>Company Address</th>
                        <th>Company Logo</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($companyDetails as $companyDetail)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $companyDetail->company_name }}</td>
                            <td>{{ $companyDetail->address }}</td>
                            <td>
                                <img src="{{ $companyDetail->company_logo }}" alt="" style="width: 80px;height: 80px">
                            </td>
                            <td>{{ $companyDetail->status==1? 'published':'unpublished' }}</td>
                            <td>
                                @if($companyDetail->status==1)
                                    <a href="{{ route('company-status',['id'=> $companyDetail->id]) }}" class="btn btn-outline-success">Unpublished</a>
                                @else
                                    <a href="{{ route('company-status',['id'=> $companyDetail->id]) }}" class="btn btn-outline-primary">Published</a>
                                @endif
                                    <a href="" class="btn btn-outline-primary">Edit</a>
                                    <a href="" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


