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
                @if (session('success_delete'))
                    <div class="alert alert-success">{{ session('success_delete') }}</div>
                @endif
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Slot</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($votes as $sl=>$vote)
                        {{-- @if ($vote->complete_status == 0) --}}
                        <tr>
                            <td>{{ $sl+1 }}</td>
                            <td>{{ $vote->title }}</td>
                            <td>{{ $vote->description }}</td>
                            <td>{{ $vote->slot }}</td>
                            <td>
                                <a class="btn btn-outline-success btn-sm" href="{{ route('view_vote', $vote->id) }}">View</a>
                                @if ($vote->slot == null)
                                <a class="btn btn-outline-danger btn-sm" href="{{ route('delete_vote', $vote->id) }}">Delete</a>
                                @else
                                <a href="{{ route('unbind_slot', $vote->id) }}" class="btn btn-outline-danger">Unbind</a>
                                @endif
                            </td>
                        </tr>
                        {{-- @endif --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
