@extends('admin.layouts')

@section('admin')
    <div class="row">
        <div class="col-md-9 m-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h1 class="text-center text-white">View Votes</h1>
                </div>
                <div class="card-body">
                    @if (session('success_unbind'))
                        <div class="alert alert-success">{{ session('success_unbind') }}</div>
                    @endif
                    <table class="table ">

                        <tbody>
                            <tr>
                                <td>Vote Title</td>
                                <td>{{ $vote->title }}</td>
                            </tr>
                            <tr>
                                <td>Vote Description</td>
                                <td>{{ $vote->description }}</td>
                            </tr>
                            <tr>
                                <td>Option 1</td>
                                <td>{{ $vote->option1 }}</td>
                            </tr>
                            <tr>
                                <td>Option 2</td>
                                <td>{{ $vote->option2 }}</td>
                            </tr>
                            <tr>
                                <td>Option 3</td>
                                <td>{{ $vote->option3 }}</td>
                            </tr>
                            <tr>
                                <td>Option 4</td>
                                <td>{{ $vote->option4 }}</td>
                            </tr>
                            <tr>
                                <td>Total vote</td>
                                <td>{{ $total_vote }}</td>
                            </tr>
                            <tr>
                                <td>Vote left</td>
                                <td>{{ $vote_left }}</td>
                            </tr>
                            <tr>
                                <td>Slot</td>
                                <td>
                                    @if ($vote->slot != null)
                                    {{ $vote->slot }}
                                    <a href="{{ route('unbind_slot', $vote->id) }}" class="ml-3 btn btn-outline-danger">Unbind</a>
                                    @else
                                        @if ($vote->complete_status == 1)
                                        {{ 'Vote Completed' }}
                                        @else
                                        <a href="{{ route('slot') }}" class="btn btn-outline-facebook">Assign a slot</a>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
