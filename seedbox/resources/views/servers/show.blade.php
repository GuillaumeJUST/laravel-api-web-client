@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h2>{{ $server->name }}</h2>
            <p>
                <strong>Url:</strong> {{ $server->url }}<br>
                <strong>Status:</strong> {{ $server->status }}
            </p>
        </div>
    </div>
@endsection
