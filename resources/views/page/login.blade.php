@extends('app')

@section('content')
<main class="wrapper wrapper--login wrapper--centered">
  <div class="page__upper clearfix">
    <h2 class="page__title">Se connecter</h2>
  </div>

  <section class="card card--login">
    <h3 class="hide">Se connecter</h3>
    <div class="card__inner-container clearfix">
      <div class="login__login">
        @include('user.forms.login')
      </div>

    </div>
  </section>
</main>



@endsection
