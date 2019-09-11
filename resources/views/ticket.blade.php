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
            <th scope="col">Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Hours days</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $info)
                <tr>
                    <th>{{ $info->user_id }}</th>
                    <td>{{ $info->name }}</td>
                    <td>{{ $info->last_name }}</td>
                    <td>{{ $info->email }}</td>
                    <td>{{ $info->hours_days }}</td>
                </tr>
            @empty
                <tr>NO HAY DATA</tr>
            @endforelse
        </tbody>
    </table>
    <p class="text-center">Tiempo estimado de solución (5 dias, 2 horas)</p>
@endsection
@section('title')
    TICKET's
@endsection