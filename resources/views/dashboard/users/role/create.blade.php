@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between">
        <h5>Role Information</h5>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
        </div>

        <div class="col-lg-8">

                <div id="v-pills-home" class="tab-pane fade active show">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Role Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="admin">
                        </div>
                        <button class="btn btn-primary">Create</button>
                    </form>
                </div>

        </div>

        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">.gfghfhdfh</div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">dfhdfhdfhfhsdfhsdfhsdfhdsfh</div>
        </div>

    </div>


@endsection
