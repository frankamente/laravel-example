@extends('layout')

@section('content')

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="card" style="margin: 20px;">
        <div class="card-header text-center font-weight-bold">
            <h1>Prueba de uso de un CRUD contra base de datos.</h1>
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
                <form action='{{ route("blog.delete", $post->id) }}' method="POST">
                    @method('DELETE')
                    @csrf
                    <a href="{{ route('blog.show', $post->slug) }}">{{$post->slug}}</a>
                    <button type="submit" style="background-color: transparent; border: transparent;">
                        <i class="fa fa-times" style="color: red;"></i>
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
