@extends('layouts.app')

@section('content')
<div class="col-md-12">

    <div class="card">
        <md-toolbar class="md-primary mb-2" md-fixed-header>
            <div class="md-toolbar-row">
            <h3 class="md-title">{{$news->title}}</h3>
                <div class="md-toolbar-section-end">
                    <div class="float-left">
                        <md-button class="text-decoration-none d-inline-block" href="{{route('news.edit', $news->id)}}">
                            Редактировать
                         </md-button>
                        <form action="{{route('news.destroy', $news->id)}}" method="post" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <md-button class="text-decoration-none" type="submit">
                           Удалить
                        </md-button>
                        </form>
                        <md-button class="text-decoration-none" href="{{route('news.index')}}">
                            К другим новостям
                        </md-button>
                    </div>
                </div>
            </div>
        </md-toolbar>

        <div class="p-4 col-md-12">
            <div class="row">
              <div class="col-md-12 p-4">
                  <div class="md-subhead">
                      {{$news->description}}
                  </div>
              </div>
                @foreach($news->album->photos as $photo)
                <div class="col-md-3 pb-4">
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
