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
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($votes as $sl=>$vote)
                        <tr>
                            <td>{{ $sl+1 }}</td>
                            <td>{{ $vote->title }}</td>
                            <td>{{ $vote->description }}</td>
                            <td>
                                <a class="btn btn-outline-success btn-sm" href="{{ route('view_vote', $vote->id) }}">View</a>
                                <a class="btn btn-outline-danger btn-sm" href="{{ route('delete_vote', $vote->id) }}">Delete</a>
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
