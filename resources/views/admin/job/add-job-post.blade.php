@extends('admin.master')
@section('title')
    Job Post
@endsection
@section('content')
    <form action="{{ route('new-job-post') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Add Job Post</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Job Post</h5>
                            </div>
                            <hr/>

                            <div class="row mb-3">
                                <label for="inputCategoryId" class="col-sm-3 col-form-label">Category Id</label>
                                <div class="col-sm-9">
                                    <input name="category_id" type="number" class="form-control" id="inputCategoryId" placeholder="Category Id">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputCompanyId" class="col-sm-3 col-form-label">Company Id</label>
                                <div class="col-sm-9">
                                    <input name="company_id" type="number" class="form-control" id="inputCompanyId" placeholder="Company Id">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputVacancy" class="col-sm-3 col-form-label">Vacancy</label>
                                <div class="col-sm-9">
                                    <input name="vacancy" type="number" class="form-control" id="inputVacancy" placeholder="Vacancy">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmploymentStatus" class="col-sm-3 col-form-label">Employment Status</label>
                                <div class="col-sm-9">
                                    <input name="employment_status" type="text" class="form-control" id="inputEmploymentStatus" placeholder="Worker/Employee/Self-employed">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputExperience" class="col-sm-3 col-form-label">Experience</label>
                                <div class="col-sm-9">
                                    <input name="experience" type="text" class="form-control" id="inputExperience" placeholder="2+ years/ 1 years">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputAge" class="col-sm-3 col-form-label">Age</label>
                                <div class="col-sm-9">
                                    <input name="age" type="text" class="form-control" id="inputAge" placeholder=".... years">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputJobLocation" class="col-sm-3 col-form-label">Job Location</label>
                                <div class="col-sm-9">
                                    <input name="job_location" type="text" class="form-control" id="inputJobLocation" placeholder="Input Job Location">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputSalary" class="col-sm-3 col-form-label">Salary</label>
                                <div class="col-sm-9">
                                    <input name="salary" type="text" class="form-control" id="inputSalary" placeholder="Input Salary">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputJobResponsibilities" class="col-sm-3 col-form-label">job responsibilities</label>
                                <div class="col-sm-9">
                                    <textarea name="job_responsibilities" type="text" class="form-control" rows="3" id="inputJobResponsibilities" placeholder="job responsibilities"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEducational" class="col-sm-3 col-form-label">educational</label>
                                <div class="col-sm-9">
                                    <textarea name="educational" type="text" class="form-control" rows="3" id="inputEducational" placeholder="educational"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputSkills" class="col-sm-3 col-form-label">skills</label>
                                <div class="col-sm-9">
                                    <textarea name="skills" type="text" class="form-control" rows="3" id="inputSkills" placeholder="educational"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputCompensation" class="col-sm-3 col-form-label">compensation and others benefits</label>
                                <div class="col-sm-9">
                                    <textarea name="compensation" type="text" class="form-control" rows="3" id="inputCompensation" placeholder="compensation and others benefits"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputJobSource" class="col-sm-3 col-form-label">Job Source link</label>
                                <div class="col-sm-9">
                                    <input name="job_source" type="text" class="form-control" id="inputJobSource" placeholder="Input Job Source">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPublishedDate" class="col-sm-3 col-form-label">Published Date</label>
                                <div class="col-sm-9">
                                    <input name="published_date" type="date" class="form-control" id="inputPublishedDate" placeholder="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputDeadlineDate" class="col-sm-3 col-form-label">Application Deadline Date</label>
                                <div class="col-sm-9">
                                    <input name="Application_deadline_date" type="date" class="form-control" id="inputDeadlineDate" placeholder="">
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

