@extends('layouts.app')

@section('content')
    <div class="justify-center flex">
        <div class="w-8/12 bg-gray-200 text-black p-6 rounded-lg">
            <div class="justify-center flex ">
                <p style="font-size: 32px;">Lots</p>
            </div>
            @if (count($lots) > 0)
            @foreach ($lots as $lot)
                <div class="card p-3 mt-3 mb-3 p-6 rounded-lg">
                    <div class="row ">
                        <div class="col-md-4 col-sm-4">
                            <img src="storage/cover_images/ddd1.jpeg" style="width: 100%;">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h2 style="font-size: 24px;"><a href="/offers?id={{$lot->id}}">{{$lot->name}}</a></h2>
                        </div>
                        <div class="col-md-8 col-sm-8 mt-2">
                            <p>Description: {{$lot->description}}</p>
                            <p>Price: {{number_format($lot->price)}}₸</p>
                            <p>Address: {{$lot->address}}</p>
                        </div>
                        <div class="col-md-8 col-sm-8 mt-1">
                            <p>Author: {{$lot->user->name}}</p>
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