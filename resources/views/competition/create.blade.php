@extends('layouts.app')

    @section('content')

        <div class="col-md-12">
            <form action="{{route('competition.store')}}" method="post">
                @csrf

                @include('layouts.components.inc_competition')

            </form>
        </div>
@endsection
