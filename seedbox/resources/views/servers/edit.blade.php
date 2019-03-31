@extends('layouts.app')

@section('content')
    <div class="container">
        {{ Form::model($server, array('route' => array('servers.update', $server->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
            @if ($errors->has('name'))
                <div class="error text-danger">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('url', 'Url') }}
            {{ Form::url('url', null, array('class' => 'form-control')) }}
            @if ($errors->has('url'))
                <div class="error text-danger">{{ $errors->first('url') }}</div>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('status', 'Status') }}
            {{ Form::select('status', array('New' => 'New', 'Up' => 'Up', 'Down' => 'Down', 'Warning' => 'Warning'), array('class' => 'form-control')) }}
            @if ($errors->has('status'))
                <div class="error text-danger">{{ $errors->first('status') }}</div>
            @endif
        </div>

        <a href="{{ URL::to('servers') }}" class="btn btn-danger">Cancel</a>
        {{ Form::submit('Edit the Server!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>
@endsection
