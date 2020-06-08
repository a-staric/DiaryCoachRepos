@extends('layouts.app')

    @section('content')
        
    
        <div class="col-md-12">
            <form action="{{route('plan.store')}}" method="post">
                @csrf

                @include('layouts.components.inc_plan')

            </form>
        </div>
@endsection
