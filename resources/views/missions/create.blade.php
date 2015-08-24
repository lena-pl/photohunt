@extends('layouts.master')

@section('content')
  <div class="container">

    <h1 class="text-center">Create a new mission</h1>

    {!! Form::open(['route' => 'missions.store', 'class' => 'form-horizontal', 'files' => true]) !!}

      @include('missions._form')

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Create Mission</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}

    {!! Form::close() !!} {{-- /.form --}}

  </div> {{-- /.container --}}
@endsection
