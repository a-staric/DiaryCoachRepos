@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            {{-- Уведомление об успешном добавлении записи --}}
            @include('layouts.components.session.default_success')

            <div class="card">

                <md-toolbar class="md-primary mb-2" md-fixed-header>
                    <div class="md-toolbar-row">
                        <h3 class="md-title">Планы</h3>
                        <div class="md-toolbar-section-end">
                                <md-button class="md-icon-button text-decoration-none" href="{{route('plan.create')}}">
                                  <md-icon>add</md-icon>
                                </md-button>
                                <md-button class="md-primary text-decoration-none" href="{{route('student.index')}}">Воспитанники</md-button>

                                <md-button class="md-primary text-decoration-none" href="{{route('trainingkind.index')}}">
                                    Виды тренировок
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
                            <th scope="col">Воспитанник</th>
                            <th scope="col">Вид тренировки</th>
                            <th scope="col">Дата</th>
                            <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($plans as $plan )
                                <tr>
                                <th scope="row">{{$plan->id}}</th>
                                <td>{{$plan->student->last_name}} {{$plan->student->first_name}}</td>
                                <td class="text-break">{{Str::limit($plan->training_kind->name, 100)}}</td>
                                <td>{{Date::parse($plan->plan_date)->format('j F Y г.')}}</td>
                                <td>
                                    <div class="float-right">
                                    <md-button class="md-icon-button md-raised md-dense text-decoration-none d-inline-block" href="{{route('plan.edit', $plan->id)}}">
                                        <md-icon>create</md-icon>
                                     </md-button>
                                    <form action="{{route('plan.destroy', $plan->id)}}" method="post" class="d-inline-block">
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
            {{ $plans->links() }}
        </div>
@endsection
