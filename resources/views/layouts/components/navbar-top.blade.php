<nav class="navbar navbar-expand-lg navbar-light bg-dark p-0">
    <md-toolbar class="md-primary">
        <md-button class="md-icon-button bg-danger m-2">
            <md-icon>directions_run</md-icon>
          </md-button>
                <h2 class="md-title" style="flex:1">{{ config('app.name', 'Laravel') }}</h3>


                <md-button class="navbar-toggler md-icon-button" type="button" data-toggle="collapse"
                        data-target="#navbarTop" aria-controls="navbarTop"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <md-icon>menu</md-icon>
                </md-button>

                <div class=" collapse navbar-collapse" id="navbarTop">
                    <ul class="navbar-nav ml-auto">
                        @guest
                        <li class="nav-item ">
                            <md-button class="nav-link" href="{{ route('login') }}">
                                {{ __('Вход') }}
                            </md-button>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <md-button class="nav-link" href="{{ route('register') }}">
                                {{ __('Регистрация') }}
                            </md-button>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <md-button class="navbar-link" href="{{ url('/student') }}">
                                Воспитанники
                            </md-button>
                        </li>
                        <li class="nav-item">
                            <md-button class="navbar-link" href="{{ url('/') }}">
                                Планы
                            </md-button>
                        </li>
                        <li class="nav-item">
                            <md-button class="navbar-link" href="{{ url('/') }}">
                                Новости
                            </md-button>
                        </li>
                        <li class="nav-item">
                            <md-button class="navbar-link" href="{{ url('/') }}">
                                Галерея
                            </md-button>
                        </li>
                        <li class="nav-item">
                            <md-button class="navbar-link" href="{{ url('/') }}">
                                Соревнования
                            </md-button>
                        </li>
                            {{-- <span class="navbar-brand">{{Auth::user()->first_name }}</span> --}}
                            <md-button class="md-icon-button dropdown-toggle" href="#" id="navbarDropdown"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                                    <md-icon>person</md-icon>

                            </md-button>



                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Выход') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </ul>
        </div>
    </md-toolbar>
</nav>
