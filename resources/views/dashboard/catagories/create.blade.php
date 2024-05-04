@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between ">
        <h5>Catagory Create Information</h5>
    </div>

    <form action="{{ route('catagory.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row mb-2">

            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="form-group mb-2">
                    <label>Catagory Title <span class="text-danger">*</span></label>
                    <input type="text" name="catagory_title" class="form-control title @error('catagory_title') is-invalid  @enderror my-1" placeholder="title">
                    @error('catagory_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="form-group mb-2">
                    <label>Slug Title<span class="text-danger">*</span></label>
                    <input type="text" name="catagory_slug" readonly tabindex="-1"
                        class="form-control slug shadow-none my-1" placeholder="Slug">
                        @error('catagory_slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="form-group mb-2">
                    <label>Catagory Picture<span class="text-danger">*</span></label>
                    <input type="file" name="catagory_picture"
                        class="form-control my-1">
                        @error('catagory_picture')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="form-group mb-2">
                    <label>Status </label>
                    <select name="status" class="form-select" id="">
                        <option value="publish">Publish</option>
                        <option value="unpublish">Unpublish</option>
                    </select>
                </div>
            </div>


        </div>

        <button class="btn btn-primary">Create Catagory</button>

    </form>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            title_gen('.title', '.slug')
        })
    </script>
@endsection
