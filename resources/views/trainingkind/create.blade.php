@extends('layouts.app')

    @section('content')
        

        <div class="col-md-12">
            <form action="{{route('trainingkind.store')}}" method="post">
                @csrf

                @include('layouts.components.inc_trainingkind')

            </form>
        </div>
@endsection
