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
      <h1 class="mb-3 font-weight-normal">Member registration</h1>
<hr>
<h3 class="font-weight-normal mb-3">Sign-in Information</h3>
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
      <hr>
      <h3 class="font-weight-normal mb-3">Personal Information</h3>
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
                <input id="customRadio1" type="radio" name="gender" value="male" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Men</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="customRadio2" type="radio" name="gender" value="female" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Women</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="customRadio3" type="radio" name="gender" value="other" class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">Other</label>
              </div>
              @if ($errors->has('gender'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('gender') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      <div class="form-group row">
            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>
            <div class="col">
                <input id="birthday" type="text" class="form-control" name="birthday" required>
            </div>
            @if ($errors->has('birthday'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('birthday') }}</strong>
                </span>
            @endif
      </div>
      <div class="form-group row">
            <label for="telephone_number" class="col-md-4 col-form-label text-md-right">{{ __('Telephone number') }}</label>
            <div class="col">
                <input id="telephone_number" type="tel" class="form-control" name="telephone_number" required>
            </div>
            @if ($errors->has('telephone_number'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('telephone_number') }}</strong>
                </span>
            @endif
      </div>
      <div class="form-group row">
            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
            <div class="col">
                <input id="address" type="text" class="form-control" name="address" required>
            </div>
            @if ($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
      </div>
      <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
            <div class="col">
                <input id="city" type="text" class="form-control" name="city" required>
            </div>
            @if ($errors->has('city'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('city') }}</strong>
                </span>
            @endif
      </div>
      <div class="form-group row">
            <label for="postel_code" class="col-md-4 col-form-label text-md-right">{{ __('Postel code') }}</label>
            <div class="col">
                <input id="postel_code" type="text" class="form-control" name="postel_code" required>
            </div>
            @if ($errors->has('postel_code'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('postel_code') }}</strong>
                </span>
            @endif
      </div>
      <div class="form-group row">
            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
            <div class="col">
                <input id="country" type="text" class="form-control" name="country" required>
            </div>
            @if ($errors->has('country'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('country') }}</strong>
                </span>
            @endif
      </div>
      <div class="form-group row">
          <label for="work_location" class="col-md-4 col-form-label text-md-right">{{ __('Work location') }}</label>
          <div class="col">
              <input id="work_location" type="text" class="form-control" name="work_location" required>
          </div>
          @if ($errors->has('work_location'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('work_location') }}</strong>
              </span>
          @endif
      </div>
      <div class="form-group row">
            <label for="profession" class="col-md-4 col-form-label text-md-right">{{ __('Profession') }}</label>
            <div class="col">
                <input id="profession" type="text" class="form-control" name="profession" required>
            </div>
            @if ($errors->has('profession'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('profession') }}</strong>
                </span>
            @endif
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
