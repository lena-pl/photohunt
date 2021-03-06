@if(count($errors) > 0)
  <div class="alert alert-danger text-center">
    There were problems with your form. Please fix them.
  </div>
@endif

<div class="form-group {{ $errors->has('title') ? 'has-error text-danger' : '' }}">
  <label for="title" class="col-sm-2 control-label">Mission Title</label>
  <div class="col-sm-10">
    {!! Form::text('title', $mission->title, ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'title'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}
<div class="form-group {{ $errors->has('title') ? 'has-error text-danger' : '' }}">
  <label for="description" class="col-sm-2 control-label">Description</label>
  <div class="col-sm-10">
    {!! Form::textarea('description', $mission->description, ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'description'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}

<div class="form-group {{ $errors->has('photo') ? 'has-error text-danger' : '' }}">
  <label for="photo" class="col-sm-2 control-label">Answer Photo</label>
  <div class="col-sm-10">
    {!! Form::file('photo', ['class' => 'form-control']) !!}
    @include('partials.error-help-block', ['field' => 'photo'])
  </div> {{-- /.col-sm-10 --}}
</div> {{-- /.form-group --}}
