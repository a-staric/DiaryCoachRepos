@extends('layouts.app')

    @section('content')
        <div class="col-md-12">
            <form action="{{route('photo.store')}}" method="post"  enctype="multipart/form-data">
                @csrf


                @include('layouts.components.inc_photo')

            </form>
        </div>

@endsection

