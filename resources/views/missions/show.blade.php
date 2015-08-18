@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>{{ $mission->title }}</h1>
		<p>{{ $mission->description }}</p>
		</ul>
	</div>

@endsection