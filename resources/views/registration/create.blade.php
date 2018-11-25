@extends('layouts.master')

@section('content')

    <div class="container" style="background-color: #141417">
        <br>
        <h1 style="color:#e8e7e3">Registrarse</h1>
        <br>

        <form method="POST" action="/register" style="color:#e8e7e3">
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
                <button type="submit" class="btn btn-primary" style="background-color: #08538c">Registrarse</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>
    <br>

@endsection