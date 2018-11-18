@extends('layouts.master')

@section('content')

    <div class="container">
        <h1>Ingresar</h1>

        <br>

        <form method="POST" action="/login">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>

@endsection