@extends('layouts.blank')
@section('content')
    <h3>FORMULARIO -> <small><a href="/">Volver</a></small>|<small><a href="/users/create">CrearUsuario</a></small></h3>
    <form action="/users/{$id}">
        <div class="form-group row col-md-4">
        <label class="col-sm-2 col-form-label">User</label>
            <div class="col-sm-10">
                <select id="select_a" class="form-control">
                    <option selected>Elija un Usuario</option>
                    @forelse($data as $dato)
                        <option value="{{ $dato->email }}">{{ $dato->user_id }}. {{ $dato->name }}</option>
                    @empty
                        <option>NO HAY DATA</option>
                    @endforelse
                </select>
            </div>
        </div>
    </form>
    <h3>Lista de ticket's por usuario</h3>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Subject</th>
            <th scope="col">Description</th>
            <th scope="col">Prioridad</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $info)
                <tr>
                    <th>{{ $info->user_id }}</th>
                    <td>{{ $info->email }}</td>
                    <td>{{ $info->name }}</td>
                    <td>Otto</td>
                    <td>Hulk</td>
                </tr>
            @empty
                <tr>NO HAY DATA</tr>
            @endforelse
            <tr>
                <th scope="row">3</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>
    <p class="text-center">Tiempo estimado de solución (5 dias, 2 horas)</p>
@endsection
@section('title')
    TICKET's
@endsection