@extends('admin.layouts')

@section('admin')

<div class="row">
    <div class="col-md-6 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-center text-white">Create Voter</h1>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NID</label>
                        <input type="number" name="nid" class="form-control">
                        <small>Voter id will create automatically!</small>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
