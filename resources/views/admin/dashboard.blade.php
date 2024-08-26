@extends('admin.layouts')

@section('admin')

<div class="row">
    <div class="col-md-9 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-center text-white">Active votes</h1>
            </div>
            <small class="text-center">Maximum 4 running vote </small>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Vote title</th>
                            <th>Total votes</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>
                                <a class="btn btn-outline-primary btn-sm" href="#">Disable</a>
                                <a class="btn btn-outline-danger btn-sm" href="#">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
