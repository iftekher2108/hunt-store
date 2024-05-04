@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between">
        <h5>Role Information</h5>
    </div>


    <div class="row ">
        <div class="col-lg-3 col-md-5 col-sm-12">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#parvez"
                    type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Genarel</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                    type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Permissions</button>

            </div>
        </div>


        <div class="col-lg-9 col-md-7 col-sm-12">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="parvez" role="tabpanel" aria-labelledby="v-pills-home-tab"
                        tabindex="0">

                        @csrf
                        <div class="form-group mb-2">
                            <label>Role Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control my-1" placeholder="admin">
                        </div>


                    </div>


                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                        tabindex="0">

                        permissions

                    </div>
                </div>
                <button class="btn btn-primary">Create Role</button>
            </form>
        </div>

    </div>
@endsection
