@extends('layouts.app')

    @section('content')

        <div class="col-md-12">
            <form action="{{route('distance.store')}}" method="post">
                @csrf

                @include('layouts.components.inc_distance')

            </form>
        </div>
@endsection
