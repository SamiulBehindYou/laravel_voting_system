@extends('admin.layouts')

@section('admin')

<div class="row">
    <div class="col-md-9 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-center text-white">View Votes</h1>
            </div>
            <div class="card-body">
                <table class="table ">

                    <tbody>
                        <tr>
                            <td>Title</td>
                            <td>{{ $vote->title }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $vote->description }}</td>
                        </tr>
                        <tr>
                            <td>{{ $vote->option1 }}</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>{{ $vote->option2 }}</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>{{ $vote->option3 }}</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>{{ $vote->option4 }}</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>Total vote/Vote left</td>
                            <td>40/10</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>Active</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
