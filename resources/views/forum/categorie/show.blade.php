@extends('app')
@section('content')

<main class="wrapper wrapper--large wrapper--centered">
  <div class="page__upper clearfix">
    <h2 class="page__title">{{$categorie->nom}}</h2>
  </div>
  @foreach($categorie->subjects as $subject)
  <article class="card card--large card--home card--forum-cats">
    <a href="" class="forum__link" title="Afficher les sujets du forum">
    <div class="card__inner-container clearfix">
        <div class="card__text--middle card__text">
          <h3 class="forum__title--cats">{{$subject->subject}}</h3>
        </div>

        <div class="card__text card__text--author">
          <p class="cats__description">Le {{$subject->when}} par <span class="subject__author">{{$subject->author}}<span></p>
        </div>
    </div>
  </a>
  </article>
  @endforeach
</main>



@endsection
