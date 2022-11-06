<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#slider" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#category" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#company" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#job" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
        </ul>
    </div>

    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{ asset('adminAsset') }}/assets/images/brand-logo-2.png" width="140" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="slider">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Slider</h5>
                        </div>
                        <small class="mb-0"></small>
                    </div>
                    <a href="{{ route('add-slider') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Slider</a>
                    <a href="{{ route('manage-slider') }}" class="list-group-item"><i class="bi bi-wallet"></i>Manage Slider</a>
                </div>
            </div>
            <div class="tab-pane fade" id="category">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Category</h5>
                        </div>
                        <small class="mb-0"></small>
                    </div>
                    <a href="{{ route('add-category') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Category</a>
                    <a href="{{ route('manage-category') }}" class="list-group-item"><i class="bi bi-wallet"></i>Manage Category</a>
                </div>
            </div>
            <div class="tab-pane fade" id="company">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Add Company Info</h5>
                        </div>
                        <small class="mb-0"></small>
                    </div>
                    <a href="{{ route('add-company') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Company Info</a>
                    <a href="{{ route('manage-company') }}" class="list-group-item"><i class="bi bi-wallet"></i>Manage Company Info</a>
                </div>
            </div>
            <div class="tab-pane fade" id="job">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Add Job Post</h5>
                        </div>
                        <small class="mb-0"></small>
                    </div>
                    <a href="{{ route('add-job-post') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Job Post</a>
                    <a href="{{ route('manage-job-post') }}" class="list-group-item"><i class="bi bi-wallet"></i>Manage Job Post</a>
                </div>
            </div>
        </div>
    </div>

</aside>
