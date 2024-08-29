@extends('admin.layouts')

@section('admin')

<div class="row">
    <div class="col-md-9 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-center text-white">Completed Votes</h1>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Vote Title</th>
                            <th>Vote Result</th>
                            <th>Winner's vote</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($votes as $sl=>$vote)
                        <tr>
                            <td>{{ $sl }}</td>
                            <td>{{ $vote->title }}</td>
                            <td>
                                @if ($vote->option1vote > $vote->option2vote && $vote->option1vote > $vote->option3vote && $vote->option1vote > $vote->option4vote)
                                {{ $vote->option1 }}
                                @elseif ($vote->option2vote > $vote->option1vote && $vote->option2vote > $vote->option3vote && $vote->option2vote > $vote->option4vote)
                                {{ $vote->option2 }}
                                @elseif ($vote->option3vote > $vote->option1vote && $vote->option3vote > $vote->option2vote && $vote->option3vote > $vote->option4vote)
                                {{ $vote->option3 }}
                                @elseif ($vote->option4vote > $vote->option1vote && $vote->option4vote > $vote->option2vote && $vote->option4vote > $vote->option3vote)
                                {{ $vote->option4 }}
                                @else
                                {{ 'Qualified' }}
                                @endif
                            </td>
                            <td>
                                @if ($vote->option1vote > $vote->option2vote && $vote->option1vote > $vote->option3vote && $vote->option1vote > $vote->option4vote)
                                {{ $vote->option1vote }}
                                @elseif ($vote->option2vote > $vote->option1vote && $vote->option2vote > $vote->option3vote && $vote->option2vote > $vote->option4vote)
                                {{ $vote->option2vote }}
                                @elseif ($vote->option3vote > $vote->option1vote && $vote->option3vote > $vote->option2vote && $vote->option3vote > $vote->option4vote)
                                {{ $vote->option3vote }}
                                @elseif ($vote->option4vote > $vote->option1vote && $vote->option4vote > $vote->option2vote && $vote->option4vote > $vote->option3vote)
                                {{ $vote->option4vote }}
                                @else
                                {{ 'Qualified' }}
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-outline-primary btn-sm" href="{{ route('view_completed_vote', $vote->id) }}">View</a>
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
