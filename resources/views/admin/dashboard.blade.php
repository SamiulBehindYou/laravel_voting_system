@extends('admin.layouts')

@section('admin')

<div class="row">
    <div class="col-md-9 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-center text-white">Active users</h1>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Change Access</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $sl=>$user)

                        <tr>
                            <td>{{ $sl+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->status == 0)
                                <a class="btn btn-outline-primary btn-sm" href="#">Admin</a>
                                @else
                                <a class="btn btn-outline-info btn-sm" href="#">Modarator</a>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-outline-primary" href="#"><i class="link-icon" data-feather="eye-off"></i></a>
                                <a class="btn btn-outline-danger" href="#"><i class="link-icon" data-feather="user-x"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
