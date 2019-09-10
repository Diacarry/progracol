@extends('layouts.blank')
@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="text-center"><br>
            <div class="">
                <h2>PROGRACOL TEST</h2>
                <h6>{{ $Name }}</h6>
            </div>
            <div class="">
                <a href="/tickets">Haga Click Aquí</a>
            </div>
        </div>
    </div>
@endsection