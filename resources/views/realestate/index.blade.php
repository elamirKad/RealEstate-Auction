@extends('layouts.app')

@section('content')
    <div class="justify-center flex">
        <div class="w-8/12 bg-gray-300 text-black p-6 rounded-lg">
            <h1>Home</h1>
            @if (count($lots) > 0)
            @foreach ($lots as $lot)
                <div class="card p-3 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/offers/{{$lot->id}}">{{$lot->name}}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <p>No posts found</p>
            @endif
        </div>
    </div>
    
@endsection