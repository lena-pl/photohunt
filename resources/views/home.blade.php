@extends('layouts.master')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Photohunt<h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
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

    </div> <!-- /container -->
@endsection
