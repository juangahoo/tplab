@extends('layouts.master')

@section('content')

    <div class="container text-center">

        <header class="card-header text-center">
            <h1 class="card-title">{{ $post->title }}</h1>
        </header>

        <br>

        <img class="card-img" src="/images/thumbs/1.jpg" alt="">

        <br>
        <br>

        <div class="card-body">
                {{ $post->body }}
        </div>

    </div>
    <hr>

@endsection