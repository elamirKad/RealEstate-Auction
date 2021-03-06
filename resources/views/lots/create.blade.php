
@extends('layouts.app')

@section('content')
    <div class="justify-center flex">
        <div class="w-8/12 bg-gray-200 text-black p-6 rounded-lg">
            <h1>Create Post</h1>
            {!! Form::open(['action' => 'App\Http\Controllers\LotsController@store', 'method' => 'POST', 'files' => true, 'ecntype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('address', 'Address')}}
                    {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address'])}}
                </div>
                <div class="form-group">
                    {{Form::label('price', 'Price')}}
                    {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => '100000'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>
                <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection