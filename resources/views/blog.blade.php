@extends('layout')

@section('content')

    <div class="card" style="margin: 20px;">
        <div class="card-header text-center font-weight-bold">
            <h1>Prueba de uso de un API</h1>
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                @csrf
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" id="title" name="title" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea name="description" class="form-control" required=""></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>

    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('blog.show', $post->slug) }}">{{$post->slug}}</a>
            </li>
        @endforeach
    </ul>
@endsection
