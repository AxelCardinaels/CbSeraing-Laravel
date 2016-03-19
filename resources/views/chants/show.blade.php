@extends('app')

@section('content')
<main class="wrapper wrapper--large wrapper--centered">
  <div class="page__upper clearfix">
    <h2 class="page__title page__title--float">Les chants</h2>
    <nav class="page__cats">
      <h3 class="hide">Type de chants</h3>
      <ul class="cats__list list-inline">

        @foreach($categories as $categorieSolo)
          <li class="cats__item">
            <a href="{{ route('chants.show', $categorieSolo->slug) }}" title="Afficher les chants {{$categorieSolo->name}}"
              class="cats__link @if ($categorieSolo->slug == $categorie->slug) cats__link--current @endif">{{$categorieSolo->name}}</a>
          </li>


        @endforeach
      </ul>
    </nav>
  </div>

      @foreach($categorie->chants as $chantSolo)
      <div class="card card--large card--chant">
        <div class="card__inner-container clearfix">
          <h3 class="card__subtitle">{{$chantSolo->titre}}</h3>
          <p>{!! nl2br($chantSolo->chant) !!}</p>
        </div>
      </div>
      @endforeach

</main>



@endsection
