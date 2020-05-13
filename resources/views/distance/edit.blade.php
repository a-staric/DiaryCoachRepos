@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            <form action="{{route('distance.update', $item->id)}}" method="post">
                @method('PATCH')
                @csrf

                @include('layouts.components.inc_distance')

            </form>
        </div>
@endsection
