@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}

        {{ Form::open(array('url' => 'servers')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('url', 'Url') }}
            {{ Form::url('url', Input::old('url'), array('class' => 'form-control', 'placeholder' => 'http://www.google.fr')) }}
        </div>

        <a href="{{ URL::previous() }}" class="btn btn-danger">Cancel</a>
        {{ Form::submit('Create the Server!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
@endsection
