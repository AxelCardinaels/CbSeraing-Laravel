@extends('app')

@section('content')
<main class="wrapper wrapper--large wrapper--centered">
  <div class="page__upper clearfix">
    <h2 class="page__title page__title--float">Les {{$type->plurial}}</h2>
    <nav class="page__cats">
      <h3 class="hide">Groupes des Membres du Comité de Baptême de Seraing</h3>
      <ul class="cats__list list-inline">

        @foreach($types as $categorie)
          <li class="cats__item">
            <a href="{{ route('comite.show', $categorie->type) }}" title="Afficher les {{$categorie->plurial}} du Comité de Baptême de Seraing"
              class="cats__link @if ($categorie->type == $type->type) cats__link--current @endif">{{$categorie->plurial}}
            </a>
          </li>
        @endforeach

      </ul>
    </nav>
  </div>





    @if($type->id == 6)

      @if($users->count() == 0)
        <div class="card card--large card--home card--error">
          <div class="card__inner-container clearfix">
            <p class="subtitle__text">Personne pour le moment</p>
          </div>
        </div>
      @endif
      @foreach($users as $user)
      <article class="card card--large card--home card--user">
        <h3 class="card__title">
          <a href="{{ route('user.show', $user->id) }}" title="Afficher le profil de {{$user->surnom}}" class="card__title--linked link--hoverable">
            @if($user->surnom == "")
             {{$user->nomreel}}
            @else
              @if($user->nomreel == "")
               {{$user->surnom}}
              @else
               {{$user->surnom}} ({{$user->nomreel}})
             @endif
            @endif
          </a>
        </h3>
        <div class="card__inner-container clearfix">
            <div class="card__image-container card__image-container--large">
              <img src="@if($user->picture == ""){{ URL::to('/') }}/img/no-picture.jpg @else http://www.cbseraing.be/photos/profile/{{$user->picture}} @endif" class="card__image" alt=""></img>
              <div class="card__etoiles clearfix">
                @foreach($user->etoileCode as $etoile)
                  <span class="etoile {{$etoile}}"><span class="hide">{{$etoile}}</span></span><!-- -->
                @endforeach
              </div>

                @if($user->fonction == "")
                @else
                <h4 class="card__subtitle card__subtitle--center"><span class="hide">fonction occupée actuellement :</span>{{$user->fonction}}</h4>
                @endif
            </div>
            <div class="card__text card__text--middle">
              <h4 class="card__subtitle">Baptisé {{$user->anbapt}}</h4>
              <h4 class="card__subtitle">Actuellement</h4>
              <p class="subtitle__text">{!! $user->actu !!}</p>
              <h4 class="card__subtitle">Titres de guindaille</h4>
              <div class="subtitle__text text--date"><p>{!! $user->titres !!}</p></div>
              <h4 class="card__subtitle">Études</h4>
              <div class="subtitle__text text--oripeaux"><p>{!! $user->etudes !!}</p></div>
            </div>
        </div>
      </article>
      @endforeach

    @else

      @if($type->users->count() == 0)
        <div class="card card--large card--home card--error">
          <div class="card__inner-container clearfix">
            <p class="subtitle__text">Personne pour le moment</p>
          </div>
        </div>
      @endif

      @foreach($type->users as $user)


      <article class="card card--large card--home card--user">
        <h3 class="card__title">
          <a href="{{ route('user.show', $user->id) }}" title="Afficher le profil de {{$user->surnom}}" class="card__title--linked link--hoverable">
             @if($user->surnom == "")
              {{$user->nomreel}}
             @else
               @if($user->nomreel == "")
                {{$user->surnom}}
               @else
                {{$user->surnom}} ({{$user->nomreel}})
              @endif
             @endif
          </a>
        </h3>
        <div class="card__inner-container clearfix">
            <div class="card__image-container card__image-container--large">
              <img src="@if($user->picture == ""){{ URL::to('/') }}/img/no-picture.jpg @else http://www.cbseraing.be/photos/profile/{{$user->picture}} @endif" class="card__image" alt=""></img>
              <div class="card__etoiles clearfix">
                @foreach($user->etoileCode as $etoile)
                  <span class="etoile {{$etoile}}"><span class="hide">{{$etoile}}</span></span>
                @endforeach
              </div>

              @if($user->fonction == "")
              @else
              <h4 class="card__subtitle card__subtitle--center"><span class="hide">fonction occupée actuellement :</span>{{$user->fonction}}</h4>
              @endif
            </div>
            <div class="card__text card__text--middle">
              <h4 class="card__subtitle">Baptisé {{$user->anbapt}}</h4>
              <h4 class="card__subtitle">Actuellement</h4>
              <p class="subtitle__text">{!! $user->actu !!}</p>
              <h4 class="card__subtitle">Titres de guindaille</h4>
              <div class="subtitle__text text--date"><p>{!! $user->titres !!}</p></div>
              <h4 class="card__subtitle">Études</h4>
              <div class="subtitle__text text--oripeaux"><p>{!! $user->etudes !!}</p></div>
            </div>
        </div>
      </article>
      @endforeach

    @endif

</main>

@endsection
