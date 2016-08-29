

@extends('app')
@section('content')

<main class="wrapper wrapper--large wrapper--centered">
  <div class="page__upper clearfix">
    <h2 class="page__title">{{$categorie->nom}}</h2>
    <div class="forum__ariane">
      <p class="ariane__actual">
        <a href="{{ route('forum') }}" title="Afficher les catégories du forum du Comité de Baptême de Seraing" class="ariane__link">forum</a> /
        <a class="ariane__link">{{$categorie->nom}}</a> /
        <span class="ariane__actual">{{$sujet->subject}}</span>
      </p>
    </div>
  </div>
  @foreach($sujet->messages as $message)
  <div class="card card--large card--home card--forum-cats">
    <div class="card__inner-container clearfix container--message">
        <div class="card__text--message card__text">
          <div class="subject__message">{!! $message->message !!}</div>
        </div>

        <div class="card__text message__author">
          <img src="@if($message->auteur->picture == ""){{ URL::to('/') }}/img/no-picture.jpg @else http://www.cbseraing.be/photos/profile/{{$message->auteur->picture}} @endif" class="card__image author__image" alt="Photo de profil de {{$message->auteur->surnom}}"></img>
          <p class="author__description">posté par <span class="subject__author">{{$message->auteur->surnom}}</span> le {{$message->when}} </p>
        </div>
    </div>
  </div>
  @endforeach
</main>



@endsection
