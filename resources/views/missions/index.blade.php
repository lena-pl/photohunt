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
	</div>

@endsection