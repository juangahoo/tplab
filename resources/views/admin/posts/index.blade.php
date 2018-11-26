@extends('layouts.master')

@section('content')

    <div class="container" style="background-color: #141417">
        <br>
        <div class="row">
            <div>
                <div class="panel panel-default" style="border-color: #08538c">
                    <div class="panel-heading" style="background-color: #08538c; border-color: #08538c; color:#e8e7e3">
                        Mis Posts
                    </div>
                    <div class="panel-body" style="background-color: #141417; color:#e8e7e3">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td width="10px">
                                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-sm btn-default">
                                        Ver
                                    </a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-default">
                                            Editar
                                        </a>
                                    </td>
                                    <td width="10px">
                                        {{ Form::open(['route' => ['post.destroy', $post->id], 'method' => 'DELETE']) }}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                    
                                @endforeach
                            </tbody>

                        </table>
                        <div class="container">
                            {{ $posts->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection