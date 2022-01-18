@extends('layout')

@section('content')
    <h1>Ejemplo de llamadas a API</h1>
    @foreach($photos as $photo)
        <p>
        <h3>
            {{$photo->title}}
        </h3>
        <a href="{{ route('photo.detail', $photo->id) }}">
            <img src="{{$photo->thumbnailUrl}}" alt="">
        </a>
        </p>
    @endforeach
@endsection
