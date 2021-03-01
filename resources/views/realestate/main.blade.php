@extends('layouts.app')

@section('content')
    <div class="justify-center flex ">
        <div class="flex w-8/12 bg-gray-200 text-black p-6 rounded-lg justify-center">
            Hey, that is main page!
            {{ $test['rrr'] }}
        </div>
    </div>
@endsection