  @if (count($errors) > 0)
<div class="form__message-container message--error">
  <p class="error__message">Oups, il y a {{count($errors)}} erreur(s) dans le formulaire !</p>
  <ul class="error__list">
      @foreach ($errors->all() as $error)
          <li class="error__item">{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif

@if (session('status'))
    <div class="form__message-container message--success">
        <p class="success__message">{{ session('status') }}</p>
    </div>
@endif

        <form role="form" method="POST" action="#">
            <!-- { !! csrf_field() !! } -->
            <div class="login__inputs">
              <div class="form__group">
                <label for="email" class="form__label label--login">Ton email</label>
                <input type="text" class="form__input input--login" name="email" id="email" placeholder="Ton email" value="{{ old('email') }}">
              </div>
              <div class="form__group">
                <label for="mdp" class="form__label label--login">Ton mot de passe</label>
                <input type="password" class="form__input input--login" name="mdp" id="mdp" placeholder="Ton mot de passe" value="">
              </div>
            </div>

              <button type="submit" class="form__bouton bouton--login">
                Me connecter
              </button>
        </form>
