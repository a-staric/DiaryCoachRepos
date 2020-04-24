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



{{-- <a href="{{asset('storage/file.txt')}}">Открыть справку</a> --}}
@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$('.carousel').carousel({
  interval: 2000
})
</script>



