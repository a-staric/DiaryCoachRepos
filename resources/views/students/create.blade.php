@extends('layouts.app')

    @section('content')
                   
        <div class="col-md-12">
            <form action="{{route('student.store')}}" method="post">
                @csrf
              
                @include('layouts.components.inc_students')

            </form>
        </div>
@endsection
