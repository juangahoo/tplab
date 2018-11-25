@extends('layouts.master')

@section('content')

    <div class="container" style="background-color: #141417">
        <br>
        <h1 style="color:#e8e7e3">Ingresar</h1>
        <br>

        <form method="POST" action="/login" style="color:#e8e7e3">
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
                <button type="submit" class="btn btn-primary" style="background-color: #08538c">Ingresar</button>
                <a class="btn btn-link" onclick="document.getElementById('aviso').innerHTML = 'Que lástima que te olvidaste la contraseña, porque esto todavía no funciona jajajaja.'"> 
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
                <br>
                <br>
                <h4 id="aviso"></h4>
            </div>
            

            @include('layouts.errors')

        </form>
    </div>
    <br>

@endsection