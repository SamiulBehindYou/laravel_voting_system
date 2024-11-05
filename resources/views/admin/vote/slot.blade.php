@extends('admin.layouts')

@section('admin')
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h1 class="text-center text-white">Create Voter</h1>
                </div>
                <div class="card-body">
                    @if (session('success_slot'))
                        <div class="alert alert-success">{{ session('success_slot') }}</div>
                    @endif
                    <form action="{{ route('bind_slot') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Vote</label>
                            <select name="vote" class="form-control">
                                @foreach ($votes as $vote)
                                @if ($vote->slot == null)
                                <option value="{{ $vote->id }}">{{ $vote->title }}</option>
                                @endif
                                @endforeach
                                <option value="">Select Vote to bind</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slot</label>
                            <select name="slot" class="form-control">
                                @foreach ($slots as $slot)
                                <option value="{{ $slot->id }}">{{ $slot->id }}</option>
                                @endforeach
                                <option readonly>No slot to bind</option>
                            </select>
                        </div>

                        @error('nid')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Bind Slot</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
