@include ('components.head')
<style>
body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 500px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
}

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
}
/* This is the checked state */
.custom-radio .custom-control-input:checked~.custom-control-label::before,
.custom-radio .custom-control-input:checked~.custom-control-label::after {
    background-color: #8fbd40;  /* my green green */
    border-radius: 50%;
}

</style>
<body class="text-center">
  <form class="form-signin bg-white rounded" method="POST" action="{{ route('member.register') }}" aria-label="{{ __('Register') }}">
      @csrf
      <a href="/">
        <img class="mb-4" data-src="https://www.altijdverzorgd.nl/test/assets/img/logo/android-chrome-512x512.png" alt="" width="72" height="72">
      </a>
      <h1 class="h3 mb-3 font-weight-normal">Member registration</h1>
      <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

          <div class="col">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

              @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

          <div class="col">
              <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

              @if ($errors->has('surname'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('surname') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

          <div class="col row d-flex justify-content-around ml-0">
              <div class="custom-control custom-radio">
                <input id="customRadio1" type="radio" name="gender" value="men" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Men</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="customRadio2" type="radio" name="gender" value="women" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Women</label>
              </div>
              @if ($errors->has('surname'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('surname') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

          <div class="col">
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group row">
          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

          <div class="col">
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group row">
          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

          <div class="col">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
      </div>
      <div class="form-group row">
          <label for="work_location" class="col-md-4 col-form-label text-md-right">{{ __('Work location') }}</label>

          <div class="col">
              <input id="work_location" type="text" class="form-control" name="work_location" required>
          </div>
      </div>
      <div class="form-group row">
            <label for="specialisation" class="col-md-4 col-form-label text-md-right">{{ __('Specialisation') }}</label>

            <div class="col">
                <input id="specialisation" type="text" class="form-control" name="specialisation" required>
            </div>
      </div>
      <!-- <div class="form-group row">
          <label for="exampleFormControlSelect1" class="col-md-4 col-form-label text-md-right">{{ __('Specialisation') }}</label>
          <select class="form-control col" id="specialisation" required>
            <option>Kapper</option>
            <option>Massagist</option>
            <option>Manicure</option>
            <option>Pedicure</option>
          </select>
      </div> -->
      <div class="form-group row mb-0">
          <div class="col">
              <button type="submit" class="btn btn-success btn-block">
                  {{ __('Register') }}
              </button>
          </div>
      </div>
      <a class="btn btn-link" href="{{ route('member.login') }}">
          {{ __('Login') }}
      </a>
  /
      <a class="btn btn-link" href="{{ route('member.password.request') }}">
          {{ __('Forgot Your Password?') }}
      </a>
      <p class="mt-2 mb-3 text-muted">&copy;2019 Altijdverzorgd.nl</p>
  </form>
@include('components.scripts')
</body>
</html>
