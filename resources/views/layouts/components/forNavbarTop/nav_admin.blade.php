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
            <md-menu-item>
                <md-button href="{{ url('/plan') }}">
                    Список планов
                </md-button>
            </md-menu-item>
            <md-menu-item>
                <md-button href="{{ url('/plan/create') }}">
                    Новый план
                </md-button>
            </md-menu-item>
        </md-menu-content>
    </md-menu>

</li>
<li class="nav-item">
    <md-menu class="h-100 d-flex" md-direction="bottom-start">
        <md-button class="navbar-link m-auto"  md-menu-trigger>Новости</md-button>
        <md-menu-content>
            <md-menu-item>
                <md-button href="{{ url('/news') }}">
                    Последние новости
                </md-button>
            </md-menu-item>

            <md-menu-item>
                <md-button href="{{ url('/news/create') }}">
                    Создание новости
                </md-button>
            </md-menu-item>
        </md-menu-content>
    </md-menu>
</li>
<li class="nav-item">
    <md-menu class="h-100 d-flex" md-direction="bottom-start">
        <md-button class="navbar-link m-auto"  md-menu-trigger>Галерея</md-button>
        <md-menu-content>
            <md-menu-item>
                <md-button href="{{ url('/album') }}">
                    Открыть галерею
                </md-button>
            </md-menu-item>
            <md-menu-item>
                <md-button href="{{ url('/photo/create') }}">
                    Загрузить фото
                </md-button>
            </md-menu-item>
        </md-menu-content>
     </md-menu>
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
