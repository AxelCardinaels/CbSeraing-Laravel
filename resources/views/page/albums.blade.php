@extends('app')

@section('content')
<main class="wrapper wrapper--large wrapper--centered">
  <div class="page__upper clearfix">
    <h2 class="page__title page__title--float">Les photos</h2>
  </div>
  <div class="card card--large card--home">
    <div class="card__inner-container clearfix">
      @foreach ($albums as $album)


        <article class="card__album">
          {{$album}}<a href="" title="afficher le contenu de l'album {{$album->name}}" class='album__link'></a>

          <h3 class="card__subtitle card__subtitle--center">{{$album->name}}</h3>
        </article>
      @endforeach
    </div>

  </div>
</main>



@endsection


<!--@foreach ($album->childrens as $children)
  {{$children}}

  @foreach ($children->photos as $photo)
    {{$photo}}
  @endforeach
@endforeach -->
