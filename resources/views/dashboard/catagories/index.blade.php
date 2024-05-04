@extends('layouts.app')

@section('content')
    <h5>Catagory Information</h5>

    @if (session('success'))
        <div class="alert bg-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close shadow-none " data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('delete'))
    <div class="alert bg-success alert-dismissible fade show" role="alert">
        {{ session('delete') }}
        <button type="button" class="btn-close shadow-none " data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <div class="d-flex justify-content-between">
        <h5>Catagory</h5>
        <a href="{{ route('catagory.create') }}" class="btn btn-primary">Create Catagory</a>
    </div>

    <div class="table-responsive">
        <table class="table text-dark">
            <thead>
                <tr class="bg-primary">
                    <th class=""><input type="checkbox" id="checkAll" class="form-check"></th>
                    <th>#</th>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($catagories as $key=>$catagory)
                    <tr>
                        <td><input type="checkbox" class="form-check"></td>
                        <td>{{ ++$key }}</td>
                        <td>
                            <img src="{{ asset('storage/catagory/'.$catagory->catagory_picture) }}" class="img-fluid" height="40" width="40" alt="img">
                        </td>
                        <td>{{ $catagory->catagory_title }}</td>
                        <td> <span class="badge {{ $catagory->status == 'publish' ? 'bg-success' : 'bg-danger' }}">{{ $catagory->status }}</span></td>
                        <td>{{ $catagory->created_at }}</td>
                        <td><a href="" class="btn btn-success mx-2 my-1">Edit</a>
                            <a href="{{ route('catagory.delete',$catagory->id) }}" class="btn btn-danger mx-2 my-1">Delete</a>
                        </td>
                    </tr>
                @endforeach



            </tbody>
        </table>

        {{ $catagories->links('pagination.bootstrap-5') }}


    </div>

    <hr>
    <div class="d-flex justify-content-between">
        <h5>Sub-Catagory</h5>
        <a href="{{ route('catagory.create') }}" class="btn btn-primary">Create Sub-Catagory</a>
    </div>
    <div class="table-responsive">
        <table class="table text-dark">
            <thead>
                <tr>
                    <th class=""><input type="checkbox" id="checkAll" class="form-check"></th>
                    <th>#</th>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><input type="checkbox" class="form-check"></td>
                    <td>1</td>
                    <td>
                        <img src="" class="img-fluid" alt="img">
                    </td>
                    <td>Kolor Tea Shirt For Man</td>
                    <td>January 22</td>
                    <td><a href="" class="btn btn-success mx-2 my-1">Edit</a>
                        <a href="" class="btn btn-danger mx-2 my-1">Delete</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
@endsection
