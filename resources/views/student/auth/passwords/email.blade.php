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
  max-width: 330px;
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
</style>
<body class="text-center">
  <form class="form-signin bg-white rounded" method="POST" action="{{ route('student.password.email') }}" aria-label="{{ __('Reset Password') }}">
    @csrf
    <a href="/">
      <img class="mb-4" data-src="https://www.altijdverzorgd.nl/test/assets/img/logo/android-chrome-512x512.png" alt="" width="72" height="72">
    </a>
    <h1 class="h3 mb-3 font-weight-normal">{{ __('Reset Password') }}</h1>
    <div class="form-group row">
      <label for="email" class="col-2 col-form-label text-md-right">{{ __('Email') }}</label>
      <div class="col">
        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <div class="form-group row mb-0">
      <div class="col ">
        <button type="submit" class="btn btn-success btn-block">
          {{ __('Send Password Reset Link') }}
        </button>
      </div>
    </div>
    <a class="btn btn-link" href="{{ route('student.login') }}">
        {{ __('Login') }}
    </a>
/
    <a class="btn btn-link" href="{{ route('student.register') }}">
        {{ __('Register') }}
    </a>
<p class="mt-2 mb-0 text-muted">&copy;2019 Altijdverzorgd.nl</p>
  </form>
  @include('components.scripts')
</body>
</html>
