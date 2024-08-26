@extends('admin.layouts')

@section('admin')

<div class="row">
    <div class="col-md-6 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-center text-white">Create Vote</h1>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Options</label>
                        <input type="text" name="option" class="form-control" placeholder="1st option">
                        <input type="text" name="option" class="form-control" placeholder="2nd option">
                        <input type="text" name="option" class="form-control" placeholder="3rd option">
                        <input type="text" name="option" class="form-control" placeholder="4th option">
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
