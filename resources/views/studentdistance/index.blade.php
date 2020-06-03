@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            <div class="card">

                <md-toolbar class="md-primary mb-2" md-fixed-header>
                    <div class="md-toolbar-row">
                        <h3 class="md-title">Рекорды</h3>
                    </div>
                </md-toolbar>
                <div class="p-4">
                @foreach ($items as $item )

                        {{-- <progress-student :progress_info='@json($item)'></progress-student> --}}
                    <h5>{{$item->name}}</h5>
                    @if($item->records)
                    <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Время</th>
                        <th scope="col">Дата</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = 1; @endphp
                        @foreach($item->records as $record)
                        <tr onclick="window.open('/student/'+{{$record->id}})">
                        <th scope="row">{{$index++}}</th>
                        <td>{{$record->last_name}}</td>
                        <td>{{$record->first_name}}</td>
                        <td>{{$record->result_time}}</td>
                        <td>{{$record->result_date}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    @else
                        <p>Нет рекордов.</p>
                    @endif
                    <br>
                @endforeach
                </div>
            </div>
            {{-- {{ $items->links() }} --}}
        </div>
@endsection
