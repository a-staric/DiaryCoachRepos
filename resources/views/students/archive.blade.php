@extends('layouts.app')

@section('content')
        <div class="col-md-12">

            <div class="card">

                <md-toolbar class="md-primary" md-fixed-header>
                    <div class="md-toolbar-row">
                    <h3 class="md-title">Архив: @if(count($items) == 0) здесь пусто:) все воспитанники всё ещё с вами! @else {{count($items)}} @endif</h3>

                        <div class="md-toolbar-section-end">

                                @include('layouts.components.routes.home')

                        </div>
                    </div>
                </md-toolbar>
                @if(count($items) != 0)
                @livewire('search')

                <div class="p-4">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                            <th scope="col">Фамилия-Имя</th>
                            <th scope="col">Дата рождения</th>
                            <th scope="col">Рост</th>
                            <th scope="col">Вес</th>
                            <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($items as $item )
                                <tr>
                                <th scope="row">{{$item->last_name}} {{$item->first_name}}</th>
                                <td>{{Date::parse($item->dob)->format('j F Y г.')}}</td>
                                <td>{{$item->height}} см</td>
                                <td>{{$item->weight}} кг</td>
                                <td>
                                    <div class="float-right">

                                    <form action="{{route('student.recover', $item->id)}}" method="post" class="d-inline-block">
                                    @method('POST')
                                    @csrf
                                    <md-button class="md-icon-button md-raised md-dense text-decoration-none" type="submit">
                                        <md-icon>settings_backup_restore</md-icon>
                                    </md-button>
                                    </form>
                                    <form action="{{route('student.destroy', $item->id)}}" method="post" class="d-inline-block">
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

                @endif
            </div>
            {{ $items->links() }}
        </div>
@endsection
