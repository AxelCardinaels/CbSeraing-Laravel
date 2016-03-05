<nav class="menu menu--principal">
  <h2 class="hide">Menu principal</h2>
  <ul class="menu__list wrapper--large wrapper--centered">
    <li class="menu__item">
      <a href="{{ route('home') }}" alt="Accéder à la page d'accueil de CbSeraing.be"
      class="menu__logo"><img src="{{ URL::to('/') }}/img/logo.png" alt="Logo du comité de Seraing" class="logo__image"/></a>
    </li>

    <div class="menu__textual-link">

    <li class="menu__item">
      <a href="{{ route('home') }}" alt="Accéder à la page d'accueil de CbSeraing.be"
      class="menu__link--principal @if (Request::route()->getName() == 'home') menu__link--current @endif">Accueil</a>
    </li>
      <li class="menu__item">
      <a href="{{ route('comite') }}" alt="Accéder à la page du comité de CbSeraing.be"
      class="menu__link--principal @if (Request::route()->getName() == 'comite') menu__link--current @endif">Notre comité</a>
    </li>
    <li class="menu__item">
      <a href="{{ route('chants') }}" alt="Accéder à la page des chants de CbSeraing.be"
      class="menu__link--principal @if (Request::route()->getName() == 'chants') menu__link--current @endif">Chants</a>
    </li>
    <li class="menu__item">
      <a href="{{ route('forum') }}" alt="Accéder au forum de CbSeraing.be"
      class="menu__link--principal @if (Request::route()->getName() == 'forum') menu__link--current @endif">Forum</a>
    </li>
    <li class="menu__item">
      <a href="{{ route('albums') }}" alt="Accéder aux photos de CbSeraing.be"
      class="menu__link--principal @if (Request::route()->getName() == 'albums') menu__link--current @endif">Photos</a>
    </li>

    </div>
  </ul>
</nav>
