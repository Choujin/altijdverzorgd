@include ('components.head')
@section('title','Altijd verzorgd | jouw business partner')
<body id="app">
@include('components.headers.hpheader')
    <section class="bg-green pb-5">
        <div class="container text-center">
            <h1 class="display-3 pt-4">Meer klanten, hogere omzet <br> en minder no-shows...</h1>
            <h2 class="display-4 py-4">Interesse?</h2>
            <button type="button" class="btn btn-light btn-lg auto my-5s">Vraag nu demo aan</button>
        </div>
    </section>

    <section class="text-center py-5">
      <div class="container color-green">
        <h1 class="text-green display-5 pt-4">We zullen je kennis laten maken met nieuwe klanten en geven jou de software, tools en marketing support om ze ook terug te laten keren.</h1>
        <h2 class="text-green display-6 py-4">Het is zo makkelijk...</h2>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img class="p-2" data-src="images/business-info-hands.svg" width="130px" alt="">
                <h4>Ontvang meer afspraken</h4>
                <p>'Ik houd van een lege agenda' hebben wij nog nooit iemand horen zeggen.</p>
            </div>
            <div class="col-sm-12 col-md-6">
                <img class="p-2" data-src="images/business-info-calendar.svg" width="130px" alt="">
              <h4>.. en meer terugkerende klanten</h4>
              <p>Deze klanten zijn bijna als familie</p>
            </div>
     
          <div class="col-sm-12 col-md-6">
            <img class="p-2" data-src="images/business-info-woman.svg" width="130px" alt="">
            <h4>Verminder het aantal no-shows</h4>
            <p>Geen vervelende verrassingen meer.</p>
          </div>
          <div class="col-sm-12 col-md-6">
            <img class="p-2" data-src="images/business-info-hands.svg" width="130px" alt="">
            <h4>... met een gemakkelijk te gebruiken systeem</h4>
            <p>Beheer afspraken onderweg.</p>
          </div>      
      </div>
      <div class="row justify-content-center">
          <div class="col-4">
              <button type="button" class="btn btn-success btn-lg auto mt-5">Ik wil een demo</button>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-green pb-5">
        <div class="container text-center">
            <h1 class="text-white display-5 mb-5 py-5">Wat kan Altijd verzorgd voor jou betekenen?</h1>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img class="img-fluid" data-src="images/business-info-desktop-phone.png" alt="Altijd verzorgd websites">
                </div>
                <div class="col-sm-12 col-md-6 text-left mt-5">
                    <h2>44%</h2>
                    <p>De gemiddelde groei in boekingen die je kunt <br> verwachten in het eerste jaar.</p>
                    <h2 class="pt-3">Elke 1.5 seconde</h2>
                    <p>Maakt een klant een boeking via Treatwell.</p>
                </div>
              </div>
                <div class="row my-5">
         
                <div class="col-sm-12 col-md-6 text-left my-5">
                    <h2 class="pt-3">47%</h2>
                    <p>Van de boekingen worden buiten openingsuren gemaakt.</p>
                    <h2 class="pt-3">4.8/5</h2>
                    <p>De App store score van onze Altijd verzorgd.</p>
                </div>
              <div class="col-sm-12 col-md-6">
                  <img class="img-fluid" data-src="images/business-info-calendar-view.png" alt="Altijd verzorgd websites">
              </div>      
          </div>
        </div>
    </section>
    
    <section class="text-center py-5">
        <div class="container">
          <h1 class="color-green display-5 pt-4"> Vul hieronder het <br> aanmeldingsformulier in</h1>
          <p class="display-6 py-4 text-dark">Vul vrijblijvend het aanmeldingsformulier in zodat wij telefonisch contact met je kunnen opnemen.</p>
          
          <form class="form-signin bg-white rounded" method="POST" action="{{ route('member.register') }}" aria-label="{{ __('Register') }}">
              @csrf
              
              <div class="form-group row ">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Voornaam') }}</label>
        
                  <div class="col-3">
                      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
        
                      @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Achternaam') }}</label>
        
                  <div class="col-3">
                      <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>
        
                      @if ($errors->has('surname'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('surname') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
        
              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Geslacht') }}</label>
        
                  <div class="col-3 row d-flex justify-content-around ml-0">
                      <div class="custom-control custom-radio">
                        <input id="customRadio1" type="radio" name="gender" value="men" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Man</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="customRadio2" type="radio" name="gender" value="women" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Vrouw</label>
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
        
                  <div class="col-3">
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
        
                  <div class="col-3">
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
        
                  <div class="col-3">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="work_location" class="col-md-4 col-form-label text-md-right">{{ __('Work location') }}</label>
        
                  <div class="col-3">
                      <input id="work_location" type="text" class="form-control" name="work_location" required>
                  </div>
              </div>
              <div class="form-group row">
                    <label for="specialisation" class="col-md-4 col-form-label text-md-right">{{ __('Specialisation') }}</label>
        
                    <div class="col-3">
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
                  <div class="col-3 offset-md-4">
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
              
          </form>

        </div>
      </section>




      
@include('components.footer')
@include('components.scripts')
</body>
</html>
