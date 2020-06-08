@extends('layouts.app')

    @section('content')

        <div class="col-md-12">
            <form action="{{route('news.update', $news->id)}}" method="post">
                @method('PATCH')
                @csrf

                @include('layouts.components.inc_news')

            </form>
        </div>
@endsection
