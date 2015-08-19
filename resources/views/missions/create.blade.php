@extends('layouts.master')

@section('content')
  <div class="container">
    <h1 class="text-center">Create a new mission</h1>
    {!! Form::open(['route' => 'missions.store', 'class' => 'form-horizontal']) !!}
      <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Mission Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="title" name="title">
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}
      <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="description" name="description"></textarea>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Create Mission</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}
    {!! Form::close() !!} {{-- /.form --}}
  </div> {{-- /.container --}}
@endsection