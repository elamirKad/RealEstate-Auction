@extends('layouts.app')

@section('content')
    <a href="/offers" class="btn btn-default">Go back</a>
    <h1>{{$lot->title}}</h1>
    <br>
    <small>Written on: {{$lot->created_at}} by {{$lot->user->name ?? "unknown"}}</small>
    <hr>
    <div>
        {!!$lot->description!!}
    </div>
@endsection