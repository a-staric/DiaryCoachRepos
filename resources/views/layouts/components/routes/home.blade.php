@guest
<md-button class="md-icon-button text-decoration-none" href="{{route('welcome')}}">
    <md-icon>home</md-icon>
</md-button>
@else
<md-button class="md-icon-button text-decoration-none" href="{{route('home')}}">
    <md-icon>home</md-icon>
</md-button>
@endguest
