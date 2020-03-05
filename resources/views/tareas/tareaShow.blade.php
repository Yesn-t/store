@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tarea {{ $tarea->id }}</div>

                <table>
                    <th>
                        Usuario: {{ $tarea->user->name}}  ({{ $tarea->user->email }}) <br>
                        Categoria: {{ $tarea->categoria->nombre_categoria }}
                    </th>
                </table>

                {{-- Nombre --}}
                <label class="col-lg-3 control-label">Nombre de tarea</label>
                <div class="col-lg-3">
                    <input type="text" placeholder="{{ $tarea->nombre_tarea }}" class="form-control input-md" disabled>
                </div>

                {{-- Inicio --}}
                <label class="col-lg-3 control-label">Fecha Inicio</label>
                <div class="col-lg-3">
                    <input type="text" placeholder="{{ $tarea->fecha_inicio }}" class="form-control input-md" disabled>
                </div>

                {{-- Termino --}}
                <label class="col-lg-3 control-label">Fecha Termino</label>
                <div class="col-lg-3">
                    <input type="text" placeholder="{{ $tarea->fecha_termino }}" class="form-control input-md" disabled>
                </div>

                {{-- Descripcion --}}
                <label class="col-lg-3 control-label">Descripcion</label>
                <div class="col-lg-3">
                    <input type="text" placeholder="{{ $tarea->descripcion }}" class="form-control input-md" disabled>
                </div>

                {{-- Prioridad --}}
                <label class="col-lg-3 control-label">Prioridad</label>
                <div class="col-lg-3">
                    <input type="text" placeholder="{{ $tarea->prioridad }}" class="form-control input-md" disabled>
                </div>

                {{-- Estatus --}}
                <label class="col-lg-3 control-label">Estatus</label>
                <div class="col-lg-3">
                    <input type="text" placeholder="{{ $tarea->estatus }}" class="form-control input-md" disabled>
                </div>

                {{-- Categoria --}}
                <label class="col-lg-3 control-label">Categoria</label>
                <div class="col-lg-3">
                    <input type="text" placeholder="{{ $tarea->categoria->nombre_categoria }}" class="form-control input-md" disabled>
                </div>

                {{-- Editar --}}
                <div class="form-group">
                    <label class="col-md-3 control-label" for="editar"></label>
                    <div class="col-md-8">
                        <br>
                        <a href=" {{ route('tarea.edit', $tarea->id) }}">
                            <button name="editar" class="btn btn-success">Editar</button>
                        </a>
                        <form action=" {{ route('tarea.destroy', $tarea->id) }} " method="POST">
                            @csrf
                            @method('DELETE')
                                <button name="delete" class="btn btn-danger">Borrar</button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
