@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de tareas</div>
                
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Tarea</th>
                        <th>Descripcion</th>
                    </tr>
                    @foreach ($tareas as $tarea)
                        <tr>
                            <td>{{ $tarea->id }}</td>
                            <td>{{ $tarea->nombre_tarea }}</td>
                            <td>{{ $tarea->descripcion }}</td>
                        </tr>
                    @endforeach
                </table>

                <div class="card-body">
                    <a href="{{ action('TareaController@create') }}" class="btn btn-success"> crear tarea </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
