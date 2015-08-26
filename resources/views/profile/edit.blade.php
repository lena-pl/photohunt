@extends('layouts.master')

@section('content')
  <div class="container">

    <h1 class="text-center">Edit Your Profile</h1>

    {!! Form::open(['route' => ['profile.update', $user->id], 'class' => 'form-horizontal form-signin', 'method' => 'PUT']) !!}

      @if(count($errors) > 0)
        <div class="alert alert-danger">There were problems with your form. Please fix them.</div>
      @endif

      <div class="form-group required {{ $errors->has('name') ? 'has-error text-danger' : '' }}">
        <label for="name" class="control-label">Full Name</label>
        {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
        @include('partials.error-help-block', ['field' => 'name'])
      </div>

      <div class="form-group required {{ $errors->has('email') ? 'has-error text-danger' : '' }}">
        <label for="email" class="control-label">Email Address</label>
        {!! Form::email('email', $user->email, ['class' => 'form-control']) !!}
        @include('partials.error-help-block', ['field' => 'email'])
      </div>

      <div class="form-group {{ $errors->has('password') ? 'has-error text-danger' : '' }}">
        <label for="password" class="control-label">New Password</label>
        {!! Form::password('password', ['class' => 'form-control']) !!}
        @include('partials.error-help-block', ['field' => 'password'])
      </div>

      <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error text-danger' : '' }}">
        <label for="password_confirmation" class="control-label">Confirm New Password</label>
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        @include('partials.error-help-block', ['field' => 'password_confirmation'])
      </div>

      <div class="form-group">
      <div class="help-block text-center">Leave passwords blank to keep your existing password.</div>
          <button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span> Update Profile</button>
      </div> {{-- /.form-group --}}

    {!! Form::close() !!} {{-- /.form --}}

  </div> {{-- /.container --}}
@endsection
