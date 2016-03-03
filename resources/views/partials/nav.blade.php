<nav class="menu menu--principal">
  <ul class="menu__list list-inline wrapper--large wrapper--centered">
    <li class="menu__item">

      <a href="{{ route('home') }}" alt="Accéder à la page d'accueil de CbSeraing.be"
      class="menu__link--principal @if (Request::route()->getName() == 'home') menu__link--current @endif">Home</a>

      <a href="{{ route('comite') }}" alt="Accéder à la page du comité de CbSeraing.be"
      class="menu__link--principal @if (Request::route()->getName() == 'comite') menu__link--current @endif">Notre comité</a>

      <a href="{{ route('chants') }}" alt="Accéder à la page des chants de CbSeraing.be"
      class="menu__link--principal @if (Request::route()->getName() == 'chants') menu__link--current @endif">Chants</a>

      <a href="{{ route('forum') }}" alt="Accéder au forum de CbSeraing.be"
      class="menu__link--principal @if (Request::route()->getName() == 'forum') menu__link--current @endif">Forum</a>

      <a href="{{ route('albums') }}" alt="Accéder aux photos de CbSeraing.be"
      class="menu__link--principal @if (Request::route()->getName() == 'albums') menu__link--current @endif">Photos</a>
    </li>
  </ul>
</nav>
