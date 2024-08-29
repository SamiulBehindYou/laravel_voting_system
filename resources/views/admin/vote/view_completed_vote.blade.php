@extends('admin.layouts')

@section('admin')
    <div class="row">
        <div class="col-md-9 m-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h1 class="text-center text-white">View Completed Votes</h1>
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
                                <td>Option 1/Result</td>
                                <td>{{ $vote->option1 }}/{{ $vote->option1vote }}</td>
                            </tr>
                            <tr>
                                <td>Option 2/Result</td>
                                <td>{{ $vote->option2 }}/{{ $vote->option2vote }}</td>
                            </tr>
                            <tr>
                                <td>Option 3/Result</td>
                                <td>{{ $vote->option3 }}/{{ $vote->option3vote }}</td>
                            </tr>
                            <tr>
                                <td>Option 4/Result</td>
                                <td>{{ $vote->option4 }}/{{ $vote->option4vote }}</td>
                            </tr>
                            <tr>
                                <td>Total vote</td>
                                <td>{{ $total_vote }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    @if ($vote->complete_status == 1)
                                    <p class="text-success">Vote Completed</p>
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
