@extends('admin.layouts')

@section('admin')

<div class="row">
    <div class="col-md-9 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-center text-white">Voters</h1>
            </div>
            <div class="card-body">
                @if (session('success_delete'))
                    <div class="alert alert-success">{{ session('success_delete') }}</div>
                @endif
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Vote name</th>
                            <th>NID</th>
                            <th>Voter id</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @forelse ($voters as $sl=>$voter)
                        <tr>
                            <td>{{ $sl+1 }}</td>
                            <td>{{ $voter->name }}</td>
                            <td>{{ $voter->nid }}</td>
                            <td>{{ $voter->voter_id }}</td>
                            <td>
                                <form action="{{ route('voter_delete', $voter->id) }}" method="POST">
                                    @csrf

                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5"><h5>No vote found!</h5></td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
