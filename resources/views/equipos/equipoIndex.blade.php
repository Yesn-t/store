@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de equipos</div>

                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Nombre Equipo</th>
                        <th>Integrantes</th>
                        <th>Accion</th>
                    </tr>
                    @foreach ($equipos as $equipo)
                    <tr>
                        <td>{{ $equipo->id }}</td>
                        <td>
                            <a href="{{ route('equipo.edit', $equipo->id) }}">
                                {{ $equipo->nombre_equipo }}
                            </a>
                        </td>
                        <td>
                            @foreach ($equipo->users as $user)
                               {{ $user->name }}
                            @endforeach
                        </td>
                        <td>
                            <a href=" {{ route('equipo.create') }}">
                                <button name="crear" class="btn btn-success">Crear</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
