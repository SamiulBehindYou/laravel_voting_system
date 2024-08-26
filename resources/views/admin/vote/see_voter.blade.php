@extends('admin.layouts')

@section('admin')

<div class="row">
    <div class="col-md-9 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-center text-white">Voters</h1>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Vote name</th>
                            <th>Voter id</th>
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
