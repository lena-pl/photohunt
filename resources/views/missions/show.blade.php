@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>{{ $mission->title }}</h1>
		<p><strong>Made by:</strong> {{ $mission->user->name }}</p>
		<p>{{ $mission->description }}</p>
		<p><img src="{{ asset('/images/missions/' . $mission->filename) }}" alt=""></p>
		</ul>
	</div>

@endsection