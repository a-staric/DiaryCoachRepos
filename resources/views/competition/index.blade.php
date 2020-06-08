@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            {{-- Уведомление об успешном добавлении записи --}}
            @include('layouts.components.session.default_success')
            <div class="card">

                <md-toolbar class="md-primary md-dense" md-fixed-header>
                    <div class="md-toolbar-row">
                        <h3 class="md-title">Соревнования</h3>
                        <div class="md-toolbar-section-end">
                            @guest
                            @else
                                <md-button class="md-icon-button text-decoration-none" href="{{route('competition.create')}}">
                                <md-icon>add</md-icon>
                                </md-button>
                            @endguest
                                {{-- Домой --}}
                                @include('layouts.components.routes.home')

                            {{-- <md-button class="" href="{{route('trainingkind.index')}}">
                                    Виды тренировок
                                </md-button> --}}
                        </div>
                    </div>
                </md-toolbar>
                <div class="row p-2 m-1">
                    @foreach ($competitions as $comp )
                        <div class="col-md-6 card mt-2">
                            <md-card>
                                <md-card-media-cover md-text-scrim>

                                  <md-card-media md-ratio="16:9">
                                    @if(count($comp->album->photos) == 0)
                                    <img class="img-thumbnail"
                                    src="{{asset('images/include/default.jpg')}}"
                                    style="object-fit: contain;"
                                    {{--  width: 100% --}}
                                    alt=""
                                    >
                                    @else
                                    <img class="img-thumbnail"
                                    src="{{asset('images/'.$comp->album->photos->first()->path)}}"
                                    style="object-fit: contain; "
                                    {{-- height:350px; width: 100% --}}
                                    alt=""
                                    >
                                    @endif

                                  </md-card-media>

                                  <md-card-area>
                                    <md-card-header>
                                      <span class="md-title">{{Str::limit($comp->name, 45)}}</span>
                                      <span class="md-subhead">{{Date::parse($comp->event_date)->format('j F Y г.')}}</span>
                                    </md-card-header>

                                    <md-card-actions>

                                        <div class="float-left">
                                            <md-button class="text-decoration-none d-inline-block" href="{{route('competition.edit', $comp->id)}}">
                                                Редактировать
                                             </md-button>
                                            <form action="{{route('competition.destroy', $comp->id)}}" method="post" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <md-button class="text-decoration-none" type="submit">
                                               Удалить
                                            </md-button>
                                            </form>
                                            <md-button class="text-decoration-none" href="{{route('competition.show', $comp->id)}}">
                                                К прочтению
                                            </md-button>
                                        </div>

                                    </md-card-actions>
                                  </md-card-area>
                                </md-card-media-cover>
                              </md-card>
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $competitions->links() }}

        </div>
@endsection
