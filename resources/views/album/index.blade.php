@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            {{-- Уведомление об успешном добавлении записи --}}
            @include('layouts.components.session.default_success')

            <div class="card">

                <md-toolbar class="md-primary mb-2" md-fixed-header>
                    <div class="md-toolbar-row">
                        <h3 class="md-title">Альбомы</h3>
                        <div class="md-toolbar-section-end">
                                {{-- <md-button class="md-icon-button text-decoration-none" href="{{route('plan.create')}}">
                                  <md-icon>add</md-icon>
                                </md-button>

                                <md-button class="" href="{{route('trainingkind.index')}}">
                                    Виды тренировок
                                </md-button> --}}
                        </div>
                    </div>
                </md-toolbar>
                <div class="p-4 col-md-12">
                    <div class="row">

                        @foreach($albums as $album)

                        <div class="col-md-4 pb-4">

                            <md-card>
                                <md-card-media-cover md-text-scrim>

                                  <md-card-media md-ratio="16:9">
                                    @if(count($album->photos) == 0)
                                    <img class="img-thumbnail"
                                    src="{{asset('images/include/default.jpg')}}"
                                    style="object-fit: contain; "
                                    {{-- height:350px; width: 100% --}}
                                    alt=""
                                    >
                                    @else
                                    <img class="img-thumbnail"
                                    src="{{asset('images/'.$album->photos->first()->path)}}"
                                    style="object-fit: contain; "
                                    {{-- height:350px; width: 100% --}}
                                    alt=""
                                    >
                                    @endif

                                  </md-card-media>

                                  <md-card-area>
                                    <md-card-header>
                                      <span class="md-subhead">{{Str::limit($album->name, 20)}}</span>
                                    </md-card-header>

                                    <md-card-actions>
                                        @if(!$album->is_news)
                                        <md-badge class="md-primary" md-content="{{count($album->photos)}}">
                                            <md-button class="md-icon-button text-decoration-none" href="{{route('album.show', $album->id)}}">
                                                <md-icon>perm_media</md-icon>
                                            </md-button>
                                        </md-badge>
                                        @else
                                        <md-badge class="md-primary" md-content="{{count($album->photos)}}">
                                            <md-button class="md-icon-button text-decoration-none" href="{{route('album.show', $album->id)}}">
                                                <md-icon>perm_media</md-icon>
                                            </md-button>
                                        </md-badge>
                                        @endif


                                    </md-card-actions>
                                  </md-card-area>
                                </md-card-media-cover>
                              </md-card>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $albums->links() }}
        </div>
@endsection
