@extends('layouts.app')

@section('content')
<div class="col-md-12">
    {{-- Уведомление об успешном добавлении записи --}}
    @include('layouts.components.session.default_success')
    <div class="card">
        <md-toolbar class="md-primary" md-fixed-header>
            <div class="md-toolbar-row">
                <h3 class="md-title" style="flex:1">{{$competition->name}}</h3>
                <md-button class="md-primary text-decoration-none" href="{{route('student.edit', $competition->id)}}">Редактировать</md-button>
                <form action="{{route('competitionresult.create')}}" method="post">
                    @csrf
                    @method('GET')
                    <input type="text" name="comp_id" value="{{$competition->id}}" hidden>
                    <md-button class="md-primary" type="submit">Результат</md-button>
                  </form>
                <form action="{{route('student.destroy', $competition->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <md-button class="md-primary" type="submit">Удалить</md-button>
                </form>
                </div>
        </md-toolbar>
        <md-card-header>

            <div class="md-title">{{$competition->place}}</div>
        <div class="md-title">Источник -> <a href="http://{{$competition->event_link}}" target="_blank">+</a></div>
        </md-card-header>
        <md-card-content>
            {{$competition->description}}


            <md-list class="md-dense m-0 p-0">
                @if(!$results)
                <p>Нет результатов</p>
                @else
                <div class="md-title">Результаты соревнования</div>
                @foreach ($results as $result)
                <md-list-item class="">
                    <md-button href="{{ url('/student', $result->student_id ) }}">
                    {{$result->first_name}} {{$result->last_name}}
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
        @foreach ($photos as $photo)
        <img class="card-img-top"
        style="object-fit: contain; height:350px; width: 100%"
                     {{-- src="{{$photo->path}}"> --}}
          src="{{asset('images/'.$photo->path)}}">
          @endforeach
    </div>
</div>












@endsection
