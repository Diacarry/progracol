@extends('layouts.blank')
@section('content')
    <h3>REGISTRO -> <small><a href="/">Menú</a></small>|<small><a href="/">Users List</a></small></h3>
    @if($errors->any())
        <div class="alert alert-dander">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/users" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputregister1">Name</label>
                <input type="text" class="form-control" id="inputregister1" name="inputregister1" placeholder="Name" value="{{ old('inputregister1') }}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputregister2">Last Name</label>
                <input type="text" class="form-control" id="inputregister2" name="inputregister2" placeholder="Last Name" value="{{ old('inputregister2') }}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputregister3">E-mail</label>
            <input type="email" class="form-control" id="inputregister3" name="inputregister3" placeholder="Email" value="{{ old('inputregister3') }}">
        </div>
        <div class="form-group">
            <label for="inputregister4">Hours days</label>
            <input type="number" class="form-control" id="inputregister4" name="inputregister4" placeholder="Hours days" value="{{ old('inputregister4') }}">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection
@section('title')
    REGISTER
@endsection