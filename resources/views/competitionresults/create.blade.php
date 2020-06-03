@extends('layouts.app')

    @section('content')

        <div class="col-md-12">
            <form action="{{route('competitionresult.store')}}" method="post">
                @csrf

                @include('layouts.components.inc_compresult')

            </form>
        </div>
@endsection
