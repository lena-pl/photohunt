@extends('layouts.master')

@section('content')
  <div class="container">

    <h1 class="text-center">Edit mission</h1>

    {!! Form::open(['route' => ['missions.update', $mission->id], 'class' => 'form-horizontal', 'files' => true]) !!}

      {!! Form::hidden('_method', 'PUT') !!}

      @include('missions._form')

      <div class="form-group">
      <label class="col-sm-2 control-label">Current Photo</label>
        <div class="col-sm-10">
          <p><img src="{{ $mission->photo->url('thumb') }}" alt="" class="img-rounded"></p>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Update Mission</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}

    {!! Form::close() !!} {{-- /.form --}}

  </div> {{-- /.container --}}
@endsection
