@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">
            <div class="card">
                <div class="card-header">Creacion de tareas</div>
                <!-- Select Basic -->
                @isset($tarea)
                    <form action="{{ route('tarea.update', $tarea->id) }}" method="POST">
                        @method('PATCH')
                @else
                    <form action="{{ route('tarea.store') }}" method="POST">
                @endisset
                        @csrf

                        {{-- Nombre --}}
                        <div class="form-group">
                            <label class="col-lg-3 control-label" for="nombre_tarea">Nombre de tarea</label>
                            <div class="col-lg-3">
                                <input name="nombre_tarea" type="text" placeholder="Tarea 1"
                            class="form-control input-md" value="{{ $tarea->nombre_tarea ?? null }}">
                            </div>
                        </div>

                        {{-- Fechas --}}
                        <div class="form-group">
                            <label class="col-lg-1 control-label" for="fecha_inicio">Fecha de inicio: </label>
                            <div class="col-lg-4">
                                <input name="fecha_inicio" type="date" placeholder="placeholder"
                                    class="form-control input-md" value="{{ $tarea->fecha_inicio ?? null }}">
                            </div>

                            <label class="col-lg-1 control-label" for="fecha_termino">Fecha de Finalizacion: </label>
                            <div class="col-lg-4">
                                <input name="fecha_termino" type="date" placeholder="placeholder"
                                    class="form-control input-md" value="{{ $tarea->fecha_termino ?? null }}">
                            </div>
                        </div>

                        {{-- Descripcion --}}
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="descripcion">Descripcion</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="descripcion">{{ $tarea->descripcion ?? null }}</textarea>
                            </div>
                        </div>

                        {{-- Prioridad --}}
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="prioridad">Prioridad</label>
                            <div class="col-md-9">
                                <select name="prioridad" class="form-control">
                                    <option value="1" {{ isset($tarea) && $tarea->prioridad == 1 ? 'selected' : ''}}>Alta</option>
                                    <option value="2" {{ isset($tarea) && $tarea->prioridad == 2 ? 'selected' : ''}}>Media</option>
                                    <option value="3" {{ isset($tarea) && $tarea->prioridad == 3 ? 'selected' : ''}}>Baja</option>
                                </select>
                            </div>
                        </div>

                        {{-- Envio --}}
                        <div class="form-group">
                            <div class="col-md-8">
                                <button name="enviar" class="btn {{ isset($tarea) && $tarea != null ? 'btn-success' : 'btn-primary'}}">Guardar</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
