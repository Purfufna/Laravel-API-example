@extends('master')
@section('content')
    <div style="margin-left:20%;width:50%">
        @if(count($leaderboard) == 0)
            <p>Sure..."Leaderboard", there are no entries yet. Why don't you add some first?</p>
        @else
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>Place</th>
                    <th>Username</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody class="align">
            @foreach($leaderboard as $key => $leader)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$leader->username}}</td>
                    <td>{{$leader->score}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
            @endif
    </div>
@endsection