@extends('layouts.master')

@section('content')

	<div class="container">
		<div class="text-center heading">
	    	<h1>{{ $user->name }}</h1> 
	    	@if(Auth::check() && ($user->id === Auth::user()->id))
	    		<a href="{{ route('profile.edit', $user->id) }}">Edit Profile</a>
	    	@endif
		</div>

	    @if($attempts)
		    <table class="table table-striped table-bordered">
		      <tr>
		        <th>Mission title</th>
		        <th>Attempt Status</th>
		      </tr>

		      @foreach($attempts as $item)
		        <tr>
		          <td><a href="{{ route('missions.show', $item->mission_id) }}">{{ $item->mission_title }}</a></td>
		          <td>{{ $item->status }}</td>
		        </tr>
		      @endforeach

		    </table>
		@else
	        <p class="lead text-center">No attempts founds</p>
	    @endif
	</div>

@endsection