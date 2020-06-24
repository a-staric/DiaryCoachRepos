<nav class="navbar navbar-expand-lg navbar-light bg-dark p-0">
    <md-toolbar class="md-primary">
          @guest
          <md-button class="md-icon-button bg-danger m-2 text-decoration-none" href="{{ url('/') }}">
            <md-icon>directions_run</md-icon>
          </md-button>
          @else
          <md-button class="md-icon-button bg-danger m-2 text-decoration-none" href="{{ url('/home') }}">
            <md-icon>directions_run</md-icon>
          </md-button>
          @endguest
                {{-- <h2 class="md-title" style="flex:1">{{ config('app.name', 'Laravel') }}</h2> --}}

                <h2 class="md-title" style="flex:1"  data-toggle="modal"
                data-target="#{{date_format(date_create(now()),"Fd")}}"
                >{{ config('app.name', 'Laravel') }}</h2>



                <md-button class="navbar-toggler md-icon-button" type="button" data-toggle="collapse"
                        data-target="#navbarTop" aria-controls="navbarTop"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <md-icon>menu</md-icon>
                </md-button>

                <div class=" collapse navbar-collapse" id="navbarTop">
                    <ul class="navbar-nav ml-auto">

                        @guest
                        {{-- гость --}}
                        @include('layouts.components.forNavbarTop.nav_guest')

                        {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <md-button class="nav-link" href="{{ route('register') }}">
                                {{ __('Регистрация') }}
                            </md-button>
                        </li>
                        @endif --}}
                        @else
                        @include('layouts.components.forNavbarTop.nav_admin')

                        @endguest
                    </ul>
        </div>
    </md-toolbar>
</nav>
