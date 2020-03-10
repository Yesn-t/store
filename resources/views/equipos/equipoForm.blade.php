@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">
            <div class="card">
                <div class="card-header">Creacion de equipos</div>
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
                @isset($equipo)
                    {!! Form::model($equipo, ['route'=>['equipo.update', $equipo->id], 'method'=>'PATCH']) !!}
                @else
                    {!! Form::open(['route' => 'equipo.store']) !!}
                @endisset

                        {{-- Nombre --}}
                        <div class="form-group">
                            {!! Form::label('nombre_equipo', 'Nombre de equipo') !!}
                            <div class="col-lg-3">
                                {!! Form::text('nombre_equipo', null, ['class'=>"form-control input-md", 'placeholder'=>'equipo 1']) !!}
                            </div>
                        </div>

                        {{-- Categoria --}}
                        <div class="form-group">
                            {!! Form::label('user_id', 'Intergrates', ['class'=>"col-md-3 control-label"]) !!}
                            <div class="col-md-9">
                                {!! Form::select('user_id[]', $users, null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        {{-- Envio --}}
                        <div class="form-group">
                            <div class="col-md-8">
                                <button class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    {{-- </form> --}}
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
