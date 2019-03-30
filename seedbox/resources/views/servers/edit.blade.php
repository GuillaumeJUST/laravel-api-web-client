@extends('layouts.app')

@section('content')
    <div class="container">
        {{ Form::model($server, array('route' => array('servers.update', $server->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('url', 'Url') }}
            {{ Form::url('url', null, array('class' => 'form-control')) }}
        </div>

        <a href="{{ URL::previous() }}" class="btn btn-danger">Cancel</a>
        {{ Form::submit('Edit the Server!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>
@endsection
