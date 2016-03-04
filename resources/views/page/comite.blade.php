@extends('app')

@section('content')
<main class="wrapper wrapper--large wrapper--centered">
  <div class="page__upper clearfix">
    <h2 class="page__title page__title--float">Notre comité</h2>
    <nav class="page__cats">
      <h3 class="hide">Groupes des Membres du Comité de Baptême de Seraing</h3>
      <ul class="cats__list list-inline">

        @foreach($types as $type)
          <li class="cats__item">
            <a href="{{ route('comite.show', $type->type) }}" title="Afficher les {{$type->plurial}} du Comité de Baptême de Seraing" class="cats__link">{{$type->plurial}}</a>
          </li>
        @endforeach


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
