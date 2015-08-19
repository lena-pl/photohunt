@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>Missions</h1>
		<ul>
			@foreach($missions as $mission)
				<li>
					<a href="{{ route('missions.show', $mission->id) }}">
						{{ $mission->title }} 
					</a>
					— {{ $mission->user->name }}
				</li>
			@endforeach
		</ul>
		<p>
			<a href="{{ route('missions.create') }}" class="btn btn-success">
				<span class="glyphicon glyphicon-plus"></span> Create Mission
			</a>
		</p>
	</div>

@endsection