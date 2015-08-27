@extends('layouts.master')

@section('content')

    <!-- Leaderboard with Ranking, Name, number of Attempts and number of Successes -->
    <div class="jumbotron">
        <div class="container">
            <h1>Leaderboard</h1>
            <p>See who the winners are!</p>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Ranking</th>
                    <th>Name</th>
                    <th>Successes</th>
                    <th>Attempts</th>
                </th>
            </thead>

            @foreach($leaders as $leader)
                <tr>
                    <th>{{ $i++ }}</th>
                    <th>{{$leader->name}}</th>
                    <th>{{$leader->success_count}}</th>
                    <th>{{$leader->attempt_count}}</th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
