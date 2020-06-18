@extends('layouts.app')

@section('content')
<div class="col-md-12">
   @error('msg_delete')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ $message }}
                        </div>
    @enderror

    {{-- Уведомление об успешном добавлении записи --}}
    @include('layouts.components.session.default_success')

    <div class="card">

        <md-toolbar class="md-primary" md-fixed-header>
            <div class="md-toolbar-row">
            <h3 class="md-title" style="flex:1">{{$student->last_name}} {{$student->first_name}}</h3>

            @auth
            <md-button class="md-primary text-decoration-none" href="{{route('student.edit', $student->id)}}">Редактировать</md-button>
            <form action="{{route('student.destroy', $student->id)}}" method="post">
              @csrf
              @method('DELETE')
              <md-button class="md-primary" type="submit">Удалить</md-button>
            </form>
            @endauth

            <md-button  class="md-icon-button text-decoration-none" href="{{route('student.index')}}">
                <md-icon >undo</md-icon>
            </md-button>
             {{-- Домой --}}
             @include('layouts.components.routes.home')

            </div>
        </md-toolbar>
        <md-card-header>
            <md-card-header-text>
            <div class="md-title">Дата рождения: {{Date::parse($student->dob)->format('j F Y г.')}}</div>
            <div class="md-subhead">Рост: {{$student->height}} см</div>
            <div class="md-subhead">Вес: {{$student->weight}} кг</div>
        </md-card-header-text>
             <md-card-media md-big>
                {{-- <img src="/assets/examples/avatar-2.jpg" alt="People"> --}}

                                    @if($student->image_path)
                                    <img class="img-thumbnail"
                                    src="{{asset('avatar/'.$student->image_path)}}"
                                    data-toggle="modal"
                                    data-target="#{{date_format(date_create(now()),"Fd")}}{{$student->id}}"
                                    style="object-fit: contain; height: 160px; width: 100%"
                                    alt="Avatar"
                                    >
                                    @else
                                    <img class="img-thumbnail"
                                    src="{{asset('images/include/default.jpg')}}"
                                    style="object-fit: contain; height: 160px; width: 100%"
                                    alt="Avatar"
                                    >
                                    @endif

              </md-card-media>
        </md-card-header>
        <!-- Modal -->
        @if($student->image_path)
        <div class="modal fade" id="{{date_format(date_create(now()),"Fd")}}{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="{{date_format(date_create(now()),"Fd")}}{{$student->id}}" aria-hidden="true">
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
                        src="{{asset('avatar/'.$student->image_path)}}">

                </div>
                </div>
            </div>
        </div>
        @endif
        <md-card>

            <md-card-expand>
              <md-card-actions md-alignment="space-between">
                  @guest
                    <div></div>
                    @else
                    <md-button class="md-icon-button md-raised text-decoration-none" href="{{route('progress.show', $student->id)}}">
                        <md-icon>add</md-icon>
                    </md-button>
                  @endguest
                <md-card-expand-trigger>
                  <md-button>Достижения</md-button>
                </md-card-expand-trigger>
              </md-card-actions>


              <md-card-expand-content>
                <md-card-content>
                    <ul class="list-group">
                        @if($records)
                            <li class="list-group-item active">Личные рекорды</li>
                            @foreach ($records as $info)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                Дистанция: {{$info->name}} Время: {{$info->result_time}} Дата выполнения {{Date::parse($info->result_date)->format('j F Y г.')}}
                                @auth
                                <form action="{{route('progress.destroy', $info->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <md-button class="md-icon-button md-raised md-dense text-decoration-none" type="submit">
                                        <md-icon>clear</md-icon>
                                    </md-button>
                                </form>
                                @endauth
                                </li>
                            @endforeach
                        @else
                            Нет рекордов
                        @endif
                </ul>
                {{ $records->links() }}
                </md-card-content>
              </md-card-expand-content>

            </md-card-expand>
          </md-card>

          <md-card>
            <md-card-expand>
              <md-card-actions md-alignment="space-between">
                <div></div>

                <md-card-expand-trigger>
                  <md-button>Cоревнования</md-button>
                </md-card-expand-trigger>
              </md-card-actions>

              <md-card-expand-content>
                <md-card-content>
                    <ul class="list-group">
                        @if($competitions)
                            <li class="list-group-item active">Последние соревнования</li>
                            @foreach ($competitions as $info)
                            <li class="list-group-item list-group-item-success">Название соревнования: {{$info->comp_name}}</li>
                            <li class="list-group-item ">Дата:{{Date::parse($info->event_date)->format('j F Y г.')}} Место: {{$info->place}}</li>
                            <li class="list-group-item ">Название дистанции: {{$info->dist_name}} Время: {{$info->result_time}} Место: {{$info->res}}</li>
                            @endforeach
                        @else
                            Нет соревнований
                        @endif
                    </ul>
                    {{ $competitions->links() }}
                </md-card-content>
              </md-card-expand-content>

            </md-card-expand>
          </md-card>

          @auth
          <md-card>
            <md-card-expand>
              <md-card-actions md-alignment="space-between">
                <md-button class="md-icon-button md-raised text-decoration-none" href="{{route('plan.create')}}">
                    <md-icon>add</md-icon>
                 </md-button>

                <md-card-expand-trigger>
                  <md-button>Планы</md-button>
                </md-card-expand-trigger>
              </md-card-actions>

              <md-card-expand-content>
                <md-table md-card>

                        <md-table-toolbar>
                        <h1 class="md-title">Планы воспитанника</h1>
                        </md-table-toolbar>

                        <md-table-row>
                            <md-table-head>Название</md-table-head>
                            <md-table-head>Дата</md-table-head>
                            <md-table-head>Описание</md-table-head>
                        </md-table-row>

                        @foreach ($plans as $info)
                        <md-table-row slot="md-table-row" md-selectable="single">
                        <md-table-cell md-label="Название" md-sort-by="name">{{$info->name}}</md-table-cell>
                        <md-table-cell md-label="Дата" md-sort-by="plan_date">{{Date::parse($info->plan_date)->format('j F Y г.')}}</md-table-cell>
                        <md-table-cell md-label="Описание" md-sort-by="description">{{$info->description}}</md-table-cell>
                        </md-table-row>
                        @endforeach

                    {{ $plans->links() }}
                  </md-table>
                </md-card-content>
              </md-card-expand-content>

            </md-card-expand>
          </md-card>
          @endauth
    </div>
</div>
@endsection
