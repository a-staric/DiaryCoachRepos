@extends('layouts.app')

@section('content')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добро пожаловать, тренер!</div>

                <div class="card-body">

                   @livewire('search')
                   

                </div>
            </div>
        </div>
@endsection
