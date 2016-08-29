@extends('app')

@section('content')
<main class="wrapper wrapper--large wrapper--centered">
  <div class="page__upper clearfix">
    <h2 class="page__title">Le forum</h2>
  </div>

  @foreach($categories as $categorie)
  <article class="card card--large card--home card--forum-cats--hoverable card--forum-cats">
    <a href="{{ route('forum.show', $categorie->slug) }}" class="forum__link" title="Afficher les sujets du forum {{$categorie->nom}}">
    <div class="card__inner-container">
        <div class="card__text--middle">
          <h3 class="forum__title--cats">{{$categorie->nom}}</h3>
          <p class="cats__description">{{$categorie->description}}</p>
        </div>
    </div>
  </a>
  </article>
  @endforeach
</main>



@endsection
