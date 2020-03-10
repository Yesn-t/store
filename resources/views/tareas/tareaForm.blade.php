@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">
            <div class="card">
                <div class="card-header">Creacion de tareas</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Select Basic -->
                @isset($tarea)
                    {!! Form::model($tarea, ['route'=>['tarea.update', $tarea->id], 'method'=>'PATCH']) !!}
                @else
                    {!! Form::open(['route' => 'tarea.store']) !!}
                @endisset

                        {{-- Nombre --}}
                        <div class="form-group">
                            {!! Form::label('nombre_tarea', 'Nombre de tarea') !!}
                            <div class="col-lg-3">
                                {!! Form::text('nombre_tarea', null, ['class'=>"form-control input-md", 'placeholder'=>'Tarea 1']) !!}
                            </div>
                        </div>

                        {{-- Fechas --}}
                        <div class="form-group">
                            {!! Form::label('fecha_inicio', null, ['class'=>"col-lg-1 control-label"]) !!}
                            <div class="col-lg-4">
                                {!! Form::date('fecha_inicio', isset($tarea) ? $tarea->fecha_inicio->toDateString() : null, ['class'=>'form-control input-md']) !!}
                            </div>

                            {!! Form::label('fecha_termino', null, ['class'=>"col-lg-1 control-label"]) !!}
                            <div class="col-lg-4">
                                {!! Form::date('fecha_termino', isset($tarea) ? $tarea->fecha_termino->toDateString() : null, ['class'=>'form-control input-md']) !!}
                            </div>
                        </div>

                        {{-- Descripcion --}}
                        <div class="form-group">
                                {!! Form::label('descripcion', ' Descripcion') !!}
                                <div class="col-lg-3">
                                    {!! Form::textarea('descripcion', null, ['class'=>"form-control"]) !!}
                                </div>

                        </div>

                        {{-- Prioridad --}}
                        <div class="form-group">
                            {!! Form::label('prioridad', 'Prioridad', ['class'=>"col-md-3 control-label"]) !!}
                            <div class="col-md-9">
                                {!! Form::select('prioridad', [
                                    '1'=>'Alta',
                                    '2'=>'Media',
                                    '3'=>'Baja'
                                    ], null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        {{-- Categoria --}}
                        <div class="form-group">
                            {!! Form::label('categoria_id', 'Categoria', ['class'=>"col-md-3 control-label"]) !!}
                            <div class="col-md-9">
                                {!! Form::select('categoria_id', $categorias, null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        {{-- Envio --}}
                        <div class="form-group">
                            <div class="col-md-8">
                                <button class="btn {{ isset($tarea) && $tarea != null ? 'btn-success' : 'btn-primary'}}">Guardar</button>
                            </div>
                        </div>
                    {{-- </form> --}}
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
