@extends('layouts.app')

    @section('content')
                   
        <div class="col-md-12">
            <form action="{{route('progress.store')}}" method="post">
                @csrf
              
                @include('layouts.components.inc_progress')

            </form>
        </div>
@endsection
