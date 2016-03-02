@extends('app')
@section('content')

<main class="wrapper wrapper--large wrapper--centered">
  <h2 class="page__title">Accueil</h2>
  <article class="card card--large card--home clearfix">
    <h3 class="card__title">Dernier évènement : {{$news->name}}</h3>
    <div class="card__inner-container clearfix">
      <div class="card__image-container card__image-container--large">
        <img src="http://www.cbseraing.be/images/covers/{{$news->cover}}" class="card__image" alt="Affiche de l'évènement {{$news->name}}"></img>
      </div>
      <div class="card__text card__text--middle">
        <div class="text__description">{{$news->description}}</div>
        <h4 class="card__subtitle">Où ?</h4>
        <p class="subtitle__text text--localisation">{{$news->where}}</p>
        <h4 class="card__subtitle">Quand ?</h4>
        <p class="subtitle__text text--date">Le {{$news->when}} à {{$news->hour}}</p>
        <h4 class="card__subtitle">Oripeaux ?</h4>
        <p class="subtitle__text text--oripeaux">{{$news->oripeaux}}</p>
        <h4 class="card__subtitle">Lien Facebook</h4>
        <a class="subtitle__text text--facebook" href="{{$news->link}}" title="Afficher le lien de l'évènement facebook pour l'évènement {{$news->name}}">{{$news->link}}</a>
      </div>
    </div>
  </acticle>
</main>

@endsection
