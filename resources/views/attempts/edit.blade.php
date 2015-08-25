@extends('layouts.master')

@section('content')
  <div class="container">

    <h1 class="text-center">Edit mission attempt</h1>

    {!! Form::open(['route' => ['missions.attempts.update', $attempt->mission->id, $attempt->id], 'class' => 'form-horizontal', 'files' => true]) !!}

      {!! Form::hidden('_method', 'PUT') !!}

      @if(Auth::user()->id === $attempt->user->id)
        <div class="form-group {{ $errors->has('photo') ? 'has-error text-danger' : '' }}">
          <label for="photo" class="col-sm-2 control-label">Attempt Photo</label>
          <div class="col-sm-10">
            {!! Form::file('photo', ['class' => 'form-control']) !!}
            @include('partials.error-help-block', ['field' => 'photo'])
          </div> {{-- /.col-sm-10 --}}
        </div> {{-- /.form-group --}}

        <div class="form-group">
        <label class="col-sm-2 control-label">Current Photo</label>
          <div class="col-sm-10">
            <p><img src="{{ $attempt->photo->url('thumb') }}" alt="" class="img-rounded"></p>
          </div>
        </div>
      @endif

      @if(Auth::user()->id === $attempt->mission->user->id)
        <div class="form-group {{ $errors->has('status') ? 'has-error text-danger' : '' }}">
          <label class="col-sm-2 control-label">Status</label>
          <div class="col-sm-10">
            <p>
              <label class="checkbox-inline">
                {!! Form::radio('status', 'success', $attempt->status === 'success') !!} Success
              </label>

              <label class="checkbox-inline">
              {!! Form::radio('status', 'almost', $attempt->status === 'almost') !!} Almost
              </label>

              <label class="checkbox-inline">
                {!! Form::radio('status', 'miss', $attempt->status === 'miss') !!} Miss
              </label>

              <label class="checkbox-inline">
                {!! Form::radio('status', 'unchecked', $attempt->status === 'unchecked') !!} Unchecked
              </label>
            </p>
            @include('partials.error-help-block', ['field' => 'status'])
          </div>
        </div>
      @endif

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Update Mission Attempt</button>
        </div> {{-- /.col-sm-10 --}}
      </div> {{-- /.form-group --}}

    {!! Form::close() !!} {{-- /.form --}}

  </div> {{-- /.container --}}
@endsection
