@extends('layouts.app')

@section('content')
<div class="col-md-12">

    <div class="card">
        <md-toolbar class="md-primary mb-2" md-fixed-header>
            <div class="md-toolbar-row">
            <h3 class="md-title">Альбом: {{$album->name}}</h3>
                <div class="md-toolbar-section-end">
                        {{-- <md-button class="md-icon-button text-decoration-none" href="{{route('plan.create')}}">
                          <md-icon>add</md-icon>
                        </md-button>

                        <md-button class="" href="{{route('trainingkind.index')}}">
                            Виды тренировок
                        </md-button> --}}
                </div>
            </div>
        </md-toolbar>

        <div class="p-4 col-md-12">
            <div class="row">

                @foreach($album->photos as $photo)
                <div class="col-md-4 pb-4">
                    <img class="img-thumbnail"
                                    src="{{asset('images/'.$photo->path)}}" data-toggle="modal"
                                    style="object-fit: contain; height:250px; width: 100%;"
                                    data-target="#{{date_format(date_create(now()),"Fd")}}{{$photo->id}}"
                                    {{-- height:350px; width: 100% --}}
                                    alt="{{$photo->path}}"
                                    >
                </div>

                 <!-- Modal -->
                 <div class="modal fade" id="{{date_format(date_create(now()),"Fd")}}{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="{{date_format(date_create(now()),"Fd")}}{{$photo->id}}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        {{-- <h5 class="modal-title">{{$item->competitions->name}}</h5> --}}
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">

                                <img class="card-img-top"
                                style="object-fit: contain; height:450px; width: 100%"
                                {{-- src="{{$photo}}"> --}}
                                src="{{asset('images/'.$photo->path)}}">

                        </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>


    </div>
</div>












@endsection
