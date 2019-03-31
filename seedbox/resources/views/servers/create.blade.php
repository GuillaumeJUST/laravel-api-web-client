@extends('layouts.app')

@section('content')
    <div class="container">

        {{ Form::open(array('url' => 'servers')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
            @if ($errors->has('name'))
                <div class="error text-danger">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('url', 'Url') }}
            {{ Form::url('url', Input::old('url'), array('class' => 'form-control', 'placeholder' => 'http://www.google.fr')) }}
            @if ($errors->has('url'))
                <div class="error text-danger">{{ $errors->first('url') }}</div>
            @endif
        </div>

        <a href="{{ URL::to('servers') }}" class="btn btn-danger">Cancel</a>
        {{ Form::submit('Create the Server!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
@endsection
