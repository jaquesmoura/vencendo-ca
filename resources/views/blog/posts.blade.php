@extends('template-blog')

@section('posts')
    <h1 class="my-4">Blog
        <small>{{$text}}</small>
    </h1>

    <!-- Blog Post -->
    @foreach($posts as $post)
    <div class="card mb-4">
        <img class="card-img-top" src="{{$post->getFoto()}}" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">{{$post->getTitulo()}}</h2>
            <p class="card-text">{{$post->getTexto()}}</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
        </div>
    </div>
    @endforeach
@stop
