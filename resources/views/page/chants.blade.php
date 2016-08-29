@extends('app')

@section('content')
<main class="wrapper wrapper--large wrapper--centered">
  <div class="page__upper clearfix">
    <h2 class="page__title page__title--float">Les chants</h2>
    <nav class="page__cats">
      <h3 class="hide">Type de chants</h3>
      <ul class="cats__list list-inline">

        @foreach($categories as $categorie)
          <li class="cats__item">
            <a href="{{ route('chants.show', $categorie->slug) }}" title="Afficher les chants {{$categorie->name}}" class="cats__link">{{$categorie->name}}</a>
          </li>
        @endforeach



      </ul>
    </nav>
  </div>


      <div class="card card--large card--chant">
        <div class="card__inner-container clearfix">
          <h3 class="card__subtitle">{{$chant->titre}}</h3>
          <p>{!! nl2br($chant->chant) !!}</p>
        </div>
      </div>


</main>



@endsection
