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
  <form class="form-signin" method="POST" action="{{ route('student.login') }}" aria-label="{{ __('Student Login') }}">
    @csrf
    <a href="/">
      <img class="mb-4" data-src="https://www.altijdverzorgd.nl/test/assets/img/logo/android-chrome-512x512.png" alt="" width="72" height="72">
    </a>
    <h1 class="h3 mb-3 font-weight-normal">Student Login</h1>

    <div>
      <label for="email" class="sr-only">Email address</label>
      <input type="email" id="email" placeholder="Email address"class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
    </div>

    <div>
<label for="password" class="sr-only">Password</label>
      <input type="password" id="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
      @if ($errors->has('password'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
    </div>
    <div class="checkbox float-left">
      <label>
        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
      </label>
    </div>
    <button class="btn btn-lg btn-success btn-block" type="submit">{{ __('Login') }}</button>
    <a class="btn btn-link" href="{{ route('student.register') }}">
        {{ __('Register') }}
    </a>
/
    <a class="btn btn-link" href="{{ route('student.password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
    <p class="mt-2 mb-3 text-muted">&copy;2019 Altijdverzorgd.nl</p>
  </form>
@include('components.scripts')
</body>
</html>
