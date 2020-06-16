@extends('layouts.app')

@section('content')
<div class="col-md-12">
    {{-- Уведомление об успешном добавлении записи --}}
    @include('layouts.components.session.default_success')
    <div class="card">
        <md-toolbar class="md-primary" md-fixed-header>
            <div class="md-toolbar-row">
                <h3 class="md-title" style="flex:1">{{$competition->name}}</h3>
                <md-button class="md-primary text-decoration-none" href="{{route('competition.edit', $competition->id)}}">Редактировать</md-button>
                <form action="{{route('competitionresult.create')}}" method="post">
                    @csrf
                    @method('GET')
                    <input type="text" name="comp_id" value="{{$competition->id}}" hidden>
                    <md-button class="md-primary" type="submit">Результаты</md-button>
                  </form>
                <form action="{{route('competition.destroy', $competition->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <md-button class="md-primary" type="submit">Удалить</md-button>
                </form>
                <md-button class="text-decoration-none" href="{{route('competition.index')}}">
                    К другим соревнованиям
                </md-button>
                </div>
        </md-toolbar>
        <div class="p-4 col-md-12">
            <div class="row">
              <div class="col-md-12 p-4">
                <div class="md-title">
                    {{$competition->description}}
                </div>
                <div class="md-subhead">
                    {{$competition->place}}
                </div>
                <div class="md-subhead">
                    {{$competition->event_date}}
                </div>
              </div>
              @foreach($competition->album->photos as $photo)
              <div class="col-md-3 pb-4">
                  <img class="img-thumbnail"
                                  src="{{asset('images/'.$photo->path)}}" data-toggle="modal"
                                  style="object-fit: contain; height:250px; width: 100%;"
                                  data-target="#{{date_format(date_create(now()),"Fd")}}{{$photo->id}}"
                                  {{-- height:350px; width: 100% --}}
                                  alt="{{$photo->path}}"
                                  >
              </div>
              <!-- Modal -->
              <div class="modal fade" id="{{date_format(date_create(now()),"Fd")}}{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="{{date_format(date_create(now()),"Fd")}}{{$photo->id}}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    {{-- <h5 class="modal-title">{{$item->competitions->name}}</h5> --}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                            <img class="card-img-top"
                            style="object-fit: contain; height:450px; width: 100%"
                            {{-- src="{{$photo}}"> --}}
                            src="{{asset('images/'.$photo->path)}}">

                    </div>
                    </div>
                </div>
            </div>
            @endforeach

            </div>

        <md-card-header>

        @if(isset($competition->event_link))
        <div class="md-title"><a href="{{$competition->event_link}}" target="_blank">Источник</a></div>
        @endif




            <md-list class="md-dense m-0 p-0">
                @if(!$results)
                <p>Нет результатов</p>
                @else
                <div class="md-title">Результаты соревнования</div>
                @foreach ($results as $result)
                <md-list-item class="">
                    <md-button href="{{ url('/student', $result->student_id ) }}">
                    {{$result->student_place}} место, {{$result->first_name}} {{$result->last_name}}
                    Дистанция: {{$result->distance_name}}
                    Результат: {{$result->result_time}}
                    </md-button>

                    <form action="{{route('competitionresult.destroy', $result->comp_result_id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <md-button class="md-icon-button md-raised md-dense text-decoration-none" type="submit">
                            <md-icon>clear</md-icon>
                        </md-button>
                    </form>
                </md-list-item>
                @endforeach
                @endif
            </md-list>
        </md-card-content>

    </div>
</div>












@endsection
