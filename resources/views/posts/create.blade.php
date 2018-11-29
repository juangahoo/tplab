@extends('layouts.master')

@section('content')
<div class="container" style="background-color: #141417">
    <br>
    <h1 style="color:#e8e7e3">Publicar un Post</h1>

    <hr>

    <form style="color:#e8e7e3" method="POST" action="/posts" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
                <label for="file">Imágen:</label>
                <input type="file" class="form-control" id="file" name="file" required>
            </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contenido</label>
            <textarea id="body" class="form-control" name="body" style="height:400px" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" style="background-color: #08538c">Publicar</button>
        </div>

        @include('layouts.errors')

    </form>
    <hr>
</div>
@endsection