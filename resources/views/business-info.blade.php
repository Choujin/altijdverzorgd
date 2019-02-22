@include ('components.head')
@section('title','Altijd verzorgd | jouw business partner')

<body id="app">
    @include('components.headers.hpheader')

    <section class="business-info-bg pb-5">
            <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-12 mx-auto">
                            <div class="text-center text-white">
                                    <h1>Meer klanten, hogere omzet <br> en minder no-shows...</h1>
                                    <h2 class="py-4">Interesse?</h2>
                                    <a href="#form-business"><button type="button"class="btn btn-green btn-lg auto my-5s">Vraag nu demo aan</button></a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section class="text-center py-5">
        <div class="container color-green">
            <h1 class="text-green display-5 pt-4">We zullen je kennis laten maken met nieuwe klanten en geven jou de
                software, tools en marketing support om ze ook terug te laten keren.</h1>
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
                <div class="col-md-4">
                        <a href="#form-business"><button type="button" class="btn btn-success btn-lg auto mt-5">Ik wil een demo</button></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-green pb-1">
        <div class="container text-center">
            <h1 class="text-white py-5">Wat kan Altijd verzorgd voor jou betekenen?</h1>
            <div class="row">
                <div class="col-sm-12 col-md-6 pt-5">
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
              </div>
              <section class="container text-center align-items-center pb-4">

                    <div class="col-md-12 col-md-offset-3 pt-5" id="form_container">
                        <h1 class="text-green">Vraag hier een demo aan</h1>
                        <p class="py-4">
                            Stuur hieronder uw bericht. We nemen zo snel mogelijk contact met u op!
                        </p>
                        <form role="form" method="post" action="{{ route('member.register') }}" aria-label="{{ __('Register') }}" id="form-business">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-sm-4 form-group">
                                    <label for="name">{{ __('Voornaam') }}</label>
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="name">{{ __('Achternaam') }}</label>
                                    <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required>
                
                                        @if ($errors->has('surname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('surname') }}</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                
                
                            <div class="row justify-content-center">
                                    <div class="col-sm-4 form-group">
                                            <label for="name">{{ __('Geslacht') }}</label><br>
                                            
                                                    <div class="form-check form-check-inline px-2">
                                                        <input id="customRadio1" type="radio" name="gender" value="male" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio1">Man</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input id="customRadio2" type="radio" name="gender" value="female" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio2">Vrouw</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                            <input id="customRadio3" type="radio" name="gender" value="female" class="form-check-input">
                                                            <label class="form-check-label" for="customRadio3">Other</label>
                                                        </div>
                                                    @if ($errors->has('surname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('surname') }}</strong>
                                                    </span>
                                                    @endif
                                             
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label for="email">{{ __('E-Mail') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                
                
                                <div class="row justify-content-center">
                                        <div class="col-sm-4 form-group">
                                            <label for="name">{{ __('Wachtwoord') }}</label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="password-confirm">{{ __('Wachtwoord bevestigen') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        
                                        </div>
                                </div>

                                <div class="row justify-content-center">
                                        <div class="col-sm-4 form-group">
                                                <label for="telephone_number">{{ __('Telefoon nummer') }}</label>
                                                <input id="telephone_number" type="tel" class="form-control" name="telephone_number" required>
                                                
                                                @if ($errors->has('telephone_number'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('telephone_number') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="col-sm-4 form-group">
                                                <label for="home_address">{{ __('Adres') }}</label>
                                                <input id="home_address" type="text" class="form-control" name="home_address" required>
                                                
                                                @if ($errors->has('home_address'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('home_address') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                </div>
                
                
                                <div class="row justify-content-center">
                                        <div class="col-sm-4 form-group">
                                            <label for="work_location">{{ __('Woonplaats') }}</label>
                                            <input id="work_location" type="text" class="form-control" name="work_location" required>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="specialisation">{{ __('Beroep') }}</label>
                                            <input id="specialisation" type="text" class="form-control" name="specialisation" required>
                                        </div>
                                </div>

                                <div class="row justify-content-center">
                                        <div class="col-md-4 form-group py-4">
                                            <button type="submit" class="btn btn-success btn-block">
                                                {{ __('Gegevens versturen') }}
                                            </button>
                                        </div>
                                    </div>

            </form>

        </div>
    </section>





    @include('components.footer')
    @include('components.scripts')
</body>

</html>
