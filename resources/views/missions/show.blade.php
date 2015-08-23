@extends('layouts.master')

@section('content')
	<div class="container">
    @if(count($errors) > 0)
      <div class="alert alert-danger">There were problems with your attempt form. Please scroll down and fix them.</div>
    @endif

		<h1>{{ $mission->title }}</h1>
		<p><strong>Made by:</strong> {{ $mission->user->name }}</p>
		<p>{{ $mission->description }}</p>
		<p><img src="<?= $mission->photo->url('hero') ?>"></p>

		<h2>Attempts</h2>
		@foreach($attempts as $attempt)
			<p>
				<img src="{{ $attempt->photo->url('thumb') }}" alt="" class="img-rounded">
				By: {{ $attempt->user->name }}
			</p>
		@endforeach

		<h3>Add new Attempt</h3>
		{!! Form::open(['url' => '/missions/' . $mission->id . '/attempts', 'class' => 'form-horizontal', 'files' => true]) !!}
			<div class="form-group {{ $errors->has('photo') ? 'has-error text-danger' : '' }}">
        <label for="photo" class="col-sm-2 control-label">Attempt Photo</label>
        <div class="col-sm-10">
          {!! Form::file('photo', ['class' => 'form-control']) !!}
          @include('partials.error-help-block', ['field' => 'photo'])
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Submit Attempt</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}
		{!! Form::close() !!}
	</div>

@endsection