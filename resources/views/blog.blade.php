@extends('layout')

@section('content')
    <h1>Contenido de blog</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('blog.show', $post->slug) }}">{{$post->slug}}</a>
            </li>
        @endforeach
    </ul>
@endsection
