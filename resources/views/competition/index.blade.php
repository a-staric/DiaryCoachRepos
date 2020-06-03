@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            <div class="card">

                <md-toolbar class="md-primary md-dense" md-fixed-header>

                        <h4 class="md-title">Соревнования</h4>
                </md-toolbar>
                <div class="row p-2 m-1">

                @foreach ($items as $item )
                    <div class="col-md-6 card mt-2">



                            <div class="card-header">
                            <h5 class="card-title">{{$item->competitions->name}}</h5>
                            </div>
                            <!-- Button trigger modal -->

                            @if(count($item->photos) > 0)
                            <div id="{{date_format(date_create($item->competitions->event_date),"FYd")}}" class="carousel slide">
                                <ol class="carousel-indicators">
                                  <li data-target="#{{date_format(date_create($item->competitions->event_date),"FYd")}}" data-slide-to="0" class="active"></li>
                                  <li data-target="#{{date_format(date_create($item->competitions->event_date),"FYd")}}" data-slide-to="1"></li>
                                  <li data-target="#{{date_format(date_create($item->competitions->event_date),"FYd")}}" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    @php $index = 0; @endphp
                                  @foreach ($item->photos as $photo )

                                  <div class="carousel-item {{$index == 0 ? 'active' : "" }}">
                                    <img class="img-thumbnail card-img-top" data-toggle="modal"
                                    data-target="#{{date_format(date_create($item->competitions->event_date),"Fd")}}{{$index}}"
                                    style="object-fit: contain; height:350px; width: 100%"
                                    src="{{asset('images/'.$photo)}}"
                                    >

                                  </div>



                                   <!-- Modal -->
                                <div class="modal fade" id="{{date_format(date_create($item->competitions->event_date),"Fd")}}{{$index}}" tabindex="-1" role="dialog" aria-labelledby="{{date_format(date_create($item->competitions->event_date),"FYFd")}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">{{$item->competitions->name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">

                                                <img class="card-img-top"
                                                style="object-fit: contain; height:350px; width: 100%"
                                                {{-- src="{{$photo}}"> --}}
                                                src="{{asset('images/'.$photo)}}">

                                        </div>
                                        </div>
                                    </div>
                                </div>
                                 @php $index++; @endphp
                                  @endforeach

                                </div>
                                 <a class="carousel-control-prev" href="#{{date_format(date_create($item->competitions->event_date),"FYd")}}" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#{{date_format(date_create($item->competitions->event_date),"FYd")}}" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                              @endif



                    <div class="card-body">

                    <p class="card-text">{{$item->competitions->description}}</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{date_format(date_create($item->competitions->event_date),"d F Y")}}</li>
                        <li class="list-group-item">{{$item->competitions->place}}</li>
                        <li class="list-group-item">
                            <a class="float-right" href="{{route('competition.show', $item->competitions->id)}}" class="card-link">Подробнее</a>
                        </li>
                      </ul>


                </div>

                @endforeach
            </div>
            </div>
            {{-- {{ $items->links() }} --}}


        </div>
@endsection
