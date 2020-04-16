@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            <div class="card">

                <md-toolbar class="md-primary" md-fixed-header>
                    <div class="md-toolbar-row">
                        <h3 class="md-title">Воспитанники</h3>
                    </div>
                </md-toolbar>

                @foreach ($items as $item )

                        <avatar-student :student_info='@json($item)'></avatar-student>

                @endforeach
            </div>
        </div>
@endsection
