@extends('layouts.master')

@section('content')

    <div class="container">
        <br>
        <h1>Registrarse</h1>
        <br>

        <form method="POST" action="/register">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirme la contraseña:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>
    <br>

@endsection