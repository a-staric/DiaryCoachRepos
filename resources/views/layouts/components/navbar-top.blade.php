<nav class="navbar navbar-expand-lg navbar-light bg-dark p-0">
    <md-toolbar class="md-primary">
        <md-button class="md-icon-button bg-danger m-2">
            <md-icon>directions_run</md-icon>
          </md-button>
                <h2 class="md-title" style="flex:1">{{ config('app.name', 'Laravel') }}</h2>


                <md-button class="navbar-toggler md-icon-button" type="button" data-toggle="collapse"
                        data-target="#navbarTop" aria-controls="navbarTop"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <md-icon>menu</md-icon>
                </md-button>

                <div class=" collapse navbar-collapse" id="navbarTop">
                    <ul class="navbar-nav ml-auto">
                        @guest
                        <li class="nav-item">
                            <md-button class="navbar-link" href="{{ url('/news') }}">
                                Новости
                            </md-button>
                        </li>
                        <li class="nav-item">
                            <md-button class="navbar-link" href="{{ url('/album') }}">
                                Галерея
                            </md-button>
                        </li>
                        <li class="nav-item">
                            <md-button class="navbar-link" href="{{ url('/competition') }}">
                                Соревнования
                            </md-button>
                        </li>
                        <li class="nav-item ">
                            <md-button class="nav-link" href="{{ route('login') }}">
                                {{ __('Вход') }}
                            </md-button>
                        </li>

                        {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <md-button class="nav-link" href="{{ route('register') }}">
                                {{ __('Регистрация') }}
                            </md-button>
                        </li>
                        @endif --}}
                        @else
                        <li class="nav-item">
                            <md-menu class="h-100 d-flex">
                                <md-button class="navbar-link m-auto"  md-menu-trigger>Воспитанники</md-button>

                                <md-menu-content>
                                  <md-menu-item>
                                    <md-button  href="{{ url('/student') }}">
                                        Список воспитанников
                                    </md-button>
                                  </md-menu-item>
                                  <md-menu-item>
                                    <md-button  href="{{ url('/student/create') }}">
                                        Добавить воспитанника
                                    </md-button>
                                  </md-menu-item>
                                  <md-menu-item>
                                    <md-button  href="{{ url('/progress') }}">
                                        Рекорды
                                    </md-button>
                                  </md-menu-item>
                                </md-menu-content>
                              </md-menu>

                        </li>
                        <li class="nav-item">
                            <md-menu class="h-100 d-flex" md-direction="bottom-start">
                                <md-button class="navbar-link m-auto"  md-menu-trigger>Планы</md-button>
                                <md-menu-content>

                                    <md-menu-item>
                                        <md-button href="{{ url('/distance') }}">
                                            Список дистанций
                                        </md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                        <md-button href="{{ url('/distance/create') }}">
                                            Добавить дистанцию
                                        </md-button>
                                    </md-menu-item>

                                </md-menu-content>
                            </md-menu>

                        </li>
                        <li class="nav-item">
                            <md-button class="navbar-link" href="{{ url('/news') }}">
                                Новости
                            </md-button>
                        </li>
                        <li class="nav-item">
                            <md-button class="navbar-link" href="{{ url('/albume') }}">
                                Галерея
                            </md-button>
                        </li>
                        <li class="nav-item">
                            <md-menu class="h-100 d-flex" md-align-trigger>
                                <md-button class="navbar-link m-auto"  md-menu-trigger>Соревнования</md-button>
                                <md-menu-content>

                                    <md-menu-item>
                                        <md-button href="{{ url('/competition') }}">
                                            Список соревнований
                                        </md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                        <md-button href="{{ url('/competition/create') }}">
                                            Добавить соревнование
                                        </md-button>
                                    </md-menu-item>

                                </md-menu-content>
                            </md-menu>

                        </li>
                        <li class="nav-item">
                            <md-button class="d-flex" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                {{__('Выход')}}
                            </md-button>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                        </form>


                    @endguest
                    </ul>
        </div>
    </md-toolbar>
</nav>
