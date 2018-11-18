@extends('layouts.master')

@section('content')

    <div class="container text-center">

        <header class="card-header text-center">
            <h1 class="card-title">{{ $post->title }}</h1>
        </header>
        
        <p class="blg-post-meta">
            {{ $post->user->name }} &nbsp; | &nbsp;
            {{ $post->created_at->toFormattedDateString() }}
        </p>

        <br>

        <img class="card-img" src="/images/thumbs/1.jpg" alt="">

        <br>
        <br>

        <div class="card-body">
                {{ $post->body }}
        </div>

        <hr>

        <h3>Comentarios:</h3>

        <br>

        <div class="comments">
            <ul class="list-group">

                @foreach ($post->comments as $comment)
                    
                    <li class="list-group-item">
                        <strong>
                                {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>

                            {{ $comment->body }}
                    </li>

                @endforeach
            </ul>
        </div>

        <hr>

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder="Escribe aquí tu comentario." class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="float:right">Añadir comentario</button>
                    </div>
                </form>

                @include ('layouts.errors')

            </div>
        </div>

    </div>
    <hr>

@endsection