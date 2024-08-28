@extends('admin.layouts')

@section('admin')

<div class="row">
    <div class="col-md-9 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-center text-white">Active users</h1>
            </div>
            @if (session('success_delete'))
                <div class="alert alert-success">{{ session('success_delete') }}</div>
            @endif
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            @if (Auth::user()->status == 0)
                            <th>Change Access</th>
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $sl=>$user)

                        <tr>
                            <td>{{ $sl+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            @if (Auth::user()->status == 0)
                            <td>
                                @if (Auth::user()->id != $user->id)
                                @if($user->status == 0)
                                <a class="btn btn-outline-primary btn-sm" href="#">Admin</a>
                                @else
                                <a class="btn btn-outline-info btn-sm" href="#">Modarator</a>
                                @endif
                                @else
                                <p class="text-success">You</p>
                                @endif
                            </td>
                            <td >
                                <a style="height: 27px" class="btn btn-outline-danger" href="{{ route('delete_user', $user->id) }}"><i style="height: 16px" class="link-icon" data-feather="user-x"></i></a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
