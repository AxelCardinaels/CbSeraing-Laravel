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
            <a href="" title="Afficher les chants de la catégorie " class="cats__link"></a>
          </li>
        @endforeach

        {{$chant}}

        {{$categories}}

      </ul>
    </nav>
  </div>
  <div class="card card--large card--home">
    <div class="card__inner-container clearfix">
      <div>test</div>
    </div>

  </div>
</main>



@endsection
