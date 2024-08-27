@extends('admin.layouts')

@section('admin')

<div class="row">
    <div class="col-md-6 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-center text-white">Create Vote</h1>
            </div>
            <div class="card-body">
                @if (session('success_vote'))
                    <div class="alert alert-success">{{ session('success_vote') }}</div>
                @endif
                <form action="{{ route('create_vote') }}" method="POST">
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
                        <input type="text" name="option1" class="form-control" placeholder="1st option">
                        <input type="text" name="option2" class="form-control" placeholder="2nd option">
                        <input type="text" name="option3" class="form-control" placeholder="3rd option">
                        <input type="text" name="option4" class="form-control" placeholder="4th option">
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
