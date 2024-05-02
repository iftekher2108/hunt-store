@extends('layouts.app')

@section('content')
    <div class="card p-3">
        <h4 class="text-primary">Profile Information</h4>

        <div class="row mt-3">

            <div class="col-lg-4">
                <div class="profile-photo">
                    <img src="https://images.unsplash.com/photo-1507643179773-3e975d7ac515?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Z2FsbGVyeXxlbnwwfHwwfHx8MA%3D%3D"
                        class="img-fluid rounded" alt="">
                </div>
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                        <div class="profile-name">
                            <h4 class="text-primary">Mitchell C. Shay</h4>
                            <p>UX / UI Designer</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                        <div class="profile-email">
                            <h4 class="text-muted">hello@email.com</h4>
                            <p>Email</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
