@extends('layouts.app')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('storage/running1.jpg')}}" alt="Первый слайд">
        <div class="carousel-caption d-none d-md-block">
            <h3>Дин Карназес</h3>
            <p>"Беги, если можешь, иди, если должен, ползи, если вынужден, но никогда не сдавайся."</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('storage/running3.jpg')}}" alt="Второй слайд">
        <div class="carousel-caption d-none d-md-block">
            <h3>Мо Фарах</h3>
            <p>"Не достаточно просто мечтать о победах. Для этого нужно тренироваться!"</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('storage/running2.jpg')}}" alt="Третий слайд">
        <div class="carousel-caption d-none d-md-block">
            <h3>Джон Коллинз</h3>
            <p>"Вы можете всегда сойти с дистанции, и всем будет наплевать. Но вы будете знать об этом всю оставшуюся жизнь."</p>
          </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="modal fade" id="{{date_format(date_create(now()),"Fd")}}" tabindex="-1" role="dialog" aria-labelledby="{{date_format(date_create(now()),"Fd")}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        {{-- <h5 class="modal-title">{{$item->competitions->name}}</h5> --}}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <p>Тренер:</p>
        <strong>{{$coach->last_name}} {{$coach->first_name}}</strong>
        <hr>
        <p>Связаться:</p>
        <strong>email:</strong>
        <a href="mailto:{{$coach->email}}" target="_blank" rel="noopener noreferrer">{{$coach->email}}</a>

        </div>
        </div>
    </div>
</div>
{{-- <a href="{{asset('storage/file.txt')}}">Открыть справку</a> --}}
@endsection





