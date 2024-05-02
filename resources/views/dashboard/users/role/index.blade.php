@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between">
        <h5>Role Information</h5>
        <a href="{{ route('role.create') }}" class="btn btn-primary">Create Role</a>
    </div>

            <div class="table-responsive">
                <table class="table text-dark">
                    <thead>
                        <tr>
                            <th class=""><input type="checkbox" id="checkAll" class="form-check" ></th>
                            <th>#</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check"></td>
                            <td>1</td>
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
