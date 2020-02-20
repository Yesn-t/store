@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de tareas</div>
                <div class="card-body">
                    <a href="{{ action('TareaController@create') }}" class="btn btn-success"> crear tarea </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
