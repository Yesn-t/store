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
                        <td>
                            <a href="{{ route('tarea.show', $tarea->id) }}">
                                {{ $tarea->nombre_tarea }}
                            </a>
                        </td>
                        <td>{{ $tarea->descripcion }}</td>
                    </tr>
                    @endforeach
                </table>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="editar"></label>
                    <div class="col-md-8">
                        <br>
                        <a href=" {{ route('tarea.create') }}">
                            <button name="crear" class="btn btn-success">Crear</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
