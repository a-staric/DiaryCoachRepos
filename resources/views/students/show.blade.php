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
    @if(session('success'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>
                             {{ session()->get('success') }}
                            </strong>
                        </div>

         @endif
    <div class="card">

        <md-toolbar class="md-primary" md-fixed-header>
            <div class="md-toolbar-row">
            <h3 class="md-title" style="flex:1">{{$student->last_name}} {{$student->first_name}}</h3>
            <md-button class="md-primary text-decoration-none" href="{{route('student.edit', $student->id)}}">Редактировать</md-button>
            <form action="{{route('student.destroy', $student->id)}}" method="post">
              @csrf
              @method('DELETE')
              <md-button class="md-primary" type="submit">Удалить</md-button>
            </form>
            </div>
        </md-toolbar>
        <md-card-header>

            <div class="md-title">Дата рождения: {{$student->dob}}</div>
            <div class="md-subhead">Рост: {{$student->height}}</div>
            <div class="md-subhead">Вес: {{$student->weight}}</div>
        </md-card-header>


        <md-card>

            <md-card-expand>
              <md-card-actions md-alignment="space-between">
                <md-button class="md-icon-button md-raised text-decoration-none" href="{{route('progress.show', $student->id)}}">
                   <md-icon>add</md-icon>
                </md-button>
                <md-card-expand-trigger>
                  <md-button>Достижения</md-button>
                </md-card-expand-trigger>
              </md-card-actions>

              <md-card-expand-content>
                <md-card-content>
                    <ul class="list-group">
                        <li class="list-group-item active">Личные рекорды</li>
                    @foreach ($records as $info)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Дистанция: {{$info->name}} Время: {{$info->result_time}} Дата выполнения {{$info->result_date}}

                          <form action="{{route('progress.destroy', $info->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <md-button class="md-icon-button md-raised md-dense text-decoration-none" type="submit">
                                <md-icon>clear</md-icon>
                            </md-button>
                          </form>
                        </li>
                    @endforeach
                </ul>
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
                        <li class="list-group-item active">Последние соревнования</li>
                    @foreach ($competitions as $info)
                    <li class="list-group-item list-group-item-success">Название соревнования:{{$info->comp_name}}</li>
                    <li class="list-group-item ">Дата:{{$info->event_date}} Место: {{$info->place}}</li>
                    <li class="list-group-item ">Название дистанции:{{$info->dist_name}} Время: {{$info->result_time}}</li>
                    @endforeach
                </ul>
                </md-card-content>
              </md-card-expand-content>

            </md-card-expand>
          </md-card>


          <md-card>
            <md-card-expand>
              <md-card-actions md-alignment="space-between">
                <div></div>

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
                      <md-table-cell md-label="Дата" md-sort-by="plan_date">{{$info->plan_date}}</md-table-cell>
                      <md-table-cell md-label="Описание" md-sort-by="description">{{$info->description}}</md-table-cell>
                    </md-table-row>
                    @endforeach
                    {{ $plans->links() }}
                  </md-table>
                </md-card-content>
              </md-card-expand-content>

            </md-card-expand>
          </md-card>

    </div>
</div>
@endsection
