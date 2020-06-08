@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            {{-- Уведомление об успешном добавлении записи --}}
            @include('layouts.components.session.default_success')

            <div class="card">

                <md-toolbar class="md-primary mb-2" md-fixed-header>
                    <div class="md-toolbar-row">
                        <h3 class="md-title">Список дистанций</h3>
                        <div class="md-toolbar-section-end">
                             
                            <md-button class="md-primary text-decoration-none" href="{{route('student.index')}}">Воспитанники</md-button>
 
                            <md-button class="md-icon-button text-decoration-none" href="{{route('distance.create')}}">
                              <md-icon>add</md-icon>
                            </md-button>

                            {{-- Домой --}}
                             @include('layouts.components.routes.home')
                    </div>
                    </div>
                </md-toolbar>
                <div class="p-4">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название дистанции</th>
                            <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($items as $item )
                                <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>
                                    <div class="float-right">
                                    <md-button class="md-icon-button md-raised md-dense text-decoration-none d-inline-block" href="{{route('distance.edit', $item->id)}}">
                                        <md-icon>create</md-icon>
                                     </md-button>
                                    <form action="{{route('distance.destroy', $item->id)}}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <md-button class="md-icon-button md-raised md-dense text-decoration-none" type="submit">
                                        <md-icon>clear</md-icon>
                                    </md-button>
                                    </form>
                                    </div>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $items->links() }}
        </div>
@endsection
