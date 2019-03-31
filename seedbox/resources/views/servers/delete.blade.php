@extends('layouts.app')

@section('content')
    <div class="container">
        {{ Form::model($server, array('route' => array('servers.destroy', $server->id), 'method' => 'DELETE')) }}

        <div class="form-group">
            Are you sure you want to delete <b>"{{$server->name}}"</b> ?
        </div>

        <a href="{{ URL::to('servers') }}" class="btn btn-danger">Cancel</a>
        {{ Form::submit('Delete the Server!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>
@endsection
