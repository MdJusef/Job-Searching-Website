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
                        <th>Category Id</th>
                        <th>Company Id</th>
                        <th>Vacancy</th>
                        <th>Employment Status</th>
                        <th>Experience</th>
                        <th>Job Location</th>
                        <th>salary</th>
                        <th>job_responsibilities</th>
                        <th>educational</th>
                        <th>skills</th>
                        <th>compensation</th>
                        <th>job_source</th>
                        <th>published_date</th>
                        <th>Application_deadline_date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($jobs as $job)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $job->category_id }}</td>
                            <td>{{ $job->company_id }}</td>
                            <td>{{ $job->vacancy }}</td>
                            <td>{{ $job->employment_status }}</td>
                            <td>{{ $job->experience }}</td>
                            <td>{{ $job->job_location }}</td>
                            <td>{{ $job->salary }}</td>
                            <td>{{ $job->job_responsibilities }}</td>
                            <td>{{ $job->educational }}</td>
                            <td>{{ $job->skills }}</td>
                            <td>{{ $job->compensation }}</td>
                            <td>{{ $job->job_source }}</td>
                            <td>{{ $job->published_date }}</td>
                            <td>{{ $job->Application_deadline_date }}</td>
                            <td>
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



