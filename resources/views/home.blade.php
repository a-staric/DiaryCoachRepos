@extends('layouts.app')

@section('content')

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Добро пожаловать, тренер!</div>

                <div class="card-body">

                    @livewire('search')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card border-info mb-3" >
                                <div class="card-header">Воспитанники</div>
                                <div class="card-body text-info">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/student') }}">
                                                Список воспитанников
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/student/create') }}">
                                                Новый воспитанник
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/progress') }}">
                                                Рекорды
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/progress/create') }}">
                                               Новый рекорд
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-info mb-4" >
                                <div class="card-header">Новости и соревнования</div>
                                <div class="card-body text-info">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/competition') }}">
                                                Последние соревнования
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/news') }}">
                                                Последние новости
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/news/create') }}">
                                                Создать новость
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/news/create') }}">
                                                Создать соревнование
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-info mb-3" >
                                <div class="card-header">Медиа</div>
                                <div class="card-body text-info">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/album') }}">
                                                Альбомы
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/photo/create') }}">
                                                Добавить фото
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-info mb-3" >
                                <div class="card-header">Планы</div>
                                <div class="card-body text-info">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/distance') }}">
                                               Список дистанций
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/distance/create') }}">
                                               Добавить дистанцию
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/plan') }}">
                                            Список планов
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/plan/create') }}">
                                               Добавить план
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
