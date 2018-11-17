@extends('layouts.master')

@section('content')
<div class="container">

    <h1>Publicar un Post</h1>

    <hr>

    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contenido</label>
            <textarea id="body" class="form-control" name="body"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Publicar</button>
        </div>

        @include('layouts.errors')

    </form>
    <hr>
</div>
@endsection