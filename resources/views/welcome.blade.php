@extends('layouts.app')

@section('content')
{{-- @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ route('login') }}">Новости</a>
                    <a href="{{ route('login') }}">Галерея</a>
                    <a href="{{ route('login') }}">Соревнования</a>
                </div>
                    @auth
                        <a href="{{ url('/home') }}">Дом</a>
                    @else
                        <a href="{{ route('login') }}">Вход</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Регистрация</a>
                        @endif
                    @endauth

            @endif --}}
@endsection




