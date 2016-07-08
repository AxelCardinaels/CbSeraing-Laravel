@extends('app')

@section('content')
<main class="wrapper wrapper--large wrapper--centered">
  <div class="page__upper clearfix">
    <h2 class="page__title">Nous contacter</h2>
  </div>

  <article class="card card--large">
    <div class="card__inner-container clearfix">
        <div class="card__text--middle">
          <h3 class="card__subtitle">Présidence</h3>
          <p class="subtitle__text">Question sur notre association, notre programme ou nos activités.</p>
          <h3 class="card__subtitle">Webmaster</h3>
          <p class="subtitle__text">Problème de compte ou une erreur sur une page.</p>
          <a href="mailto:web@cbseraing.be" title="Envoyer un email au webmaster" class="subtitle__text contact__link link--hoverable">web@cbseraing.be</a>
          <h3 class="card__subtitle">Secrétariat</h3>
          <p class="subtitle__text">Soucis de dernière minute, prévenir un retard.</p>
          <p class="subtitle__text contact__data">0491 52 90 27</p>
        </div>
    </div>
  </article>
</main>



@endsection
