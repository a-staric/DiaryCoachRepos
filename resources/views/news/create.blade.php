@extends('layouts.app')

    @section('content')

        <div class="col-md-12">
            <form action="{{route('news.store')}}" method="post">
                @csrf

                @include('layouts.components.inc_news')

            </form>
        </div>
@endsection
