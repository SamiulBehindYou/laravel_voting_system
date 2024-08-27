@extends('admin.layouts')

@section('admin')
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h1 class="text-center text-white">Create Voter</h1>
                </div>
                <div class="card-body">
                    @if (session('success_voter'))
                        <div class="alert alert-success">{{ session('success_voter') }}</div>
                    @endif
                    <form action="{{ route('add_voter') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NID</label>
                            <input type="number" name="nid" class="form-control">
                            <small>Voter ID will be created automatically!</small>
                        </div>
                        @error('nid')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
