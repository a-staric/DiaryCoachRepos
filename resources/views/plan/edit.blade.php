@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            <form action="{{route('plan.update', $plan->id)}}" method="post">
                @method('PATCH')
                @csrf

                @include('layouts.components.inc_plan')

            </form>
        </div>
@endsection
