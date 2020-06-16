@extends('layouts.app')

    @section('content')

        <div class="col-md-12">
            <form action="{{route('competition.update', $comp->id)}}" method="post">
                @method('PATCH')
                @csrf

                @include('layouts.components.inc_competition')

            </form>
        </div>
@endsection
