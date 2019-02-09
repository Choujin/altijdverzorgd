<div class="modal fade" id="mijn-av-login" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-block">
        <h5 class="modal-title text-center">Log of registreer je in</h5>
        <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="login-tab" data-toggle="tab" href="#tab-mijn-av-login" role="tab" aria-controls="login" aria-selected="true">Inloggen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="register-tab" data-toggle="tab" href="#tab-mijn-av-register" role="tab" aria-controls="register" aria-selected="false">Registreren</a>
        </li>
      </ul>
      <div class="modal-body">
        <!-- inside modal -->
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade active show" id="tab-mijn-av-login" role="tabpanel" aria-labelledby="login-tab">
            <form method="POST" action="{{ route('login') }}">
            @csrf
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                  </div>
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" aria-describedby="emailHelp" placeholder="Email" type="email" required="" name="email" value="{{ old('email') }}">
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                  </div>
                  <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Wachtwoord" type="password" required="">
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary showpas" type="button"><i class="fas fa-eye showhide"></i></button>
                  </div>
                </div>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="customCheck1">Onthoud mijn inloggegevens</label>
              </div>
              <button type="submit" class="btn btn-success btn-lg btn-block">Inloggen</button>
            </form>
            <hr>
            <ul class="nav nav-fill">
              <li class="nav-item">
                <a class="nav-link launchExtra" id="forgot-tab" data-toggle="tab" href="#tab-mijn-av-forgot" role="tab" aria-controls="forgot" aria-selected="false">Wachtwoord vergeten?</a>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="tab-mijn-av-register" role="tabpanel" aria-labelledby="register-tab">
            <form method="POST" action="{{ route('register') }}">
            @csrf
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                  </div>
                  <input id="register-name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                  @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                  </div>
                  <input id="register-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                  </div>
                  <input id="register-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary showpas" type="button"><i class="fas fa-eye"></i></button>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
                  </div>
                  <input id="register-password-confirm" type="password" class="form-control" name="password_confirmation" required>
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary showpas" type="button"><i class="fas fa-eye"></i></button>
                  </div>
                </div>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="nieuwsandacties">
                <label class="custom-control-label" for="nieuwsandacties">Aanmelden voor nieuws en acties</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="voorwaardenchek" required="">
                <label class="custom-control-label" for="voorwaardenchek">Akkoord gaan met de algemene <a href="#" data-toggle="modal" data-target="#voorwaarden">voorwaarden</a></label>
              </div>
              <small id="akkoordInfo" class="form-text text-muted">U moet akkoord gaan met voorwaarden, om zich kunnen registreren.</small>
              <button type="submit" class="btn btn-success btn-lg btn-block">Registreren</button>
            </form>
          </div>
          <div class="tab-pane fade" id="tab-mijn-av-forgot" role="tabpanel" aria-labelledby="forgot-tab">
            <form method="POST" action="{{ route('password.email') }}">
            @csrf
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                  </div>
                  <input id="forgot-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <small id="vergetenInfo" class="form-text text-muted">U ontvangt een link op uw Email address om een nieuw wachtwoord aan te maken.</small>
              </div>
              <button type="submit" class="btn btn-success btn-lg btn-block">Wachtwoord reseten</button>
            </form>
            <hr>
            <ul class="nav nav-fill">
              <li class="nav-item">
                <a class="nav-link launchExtra2" data-toggle="tab" href="#tab-mijn-av-login" role="tab" aria-controls="login" aria-selected="false">Terug naar inloggen</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="voorwaarden" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Algemene voorwaarden</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="max-height: calc(100vh - 200px); overflow-y: auto;">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Gelezen</button>
      </div>
    </div>
  </div>
</div>
