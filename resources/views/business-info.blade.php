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
            <h1 class="text-white display-5 py-5">Wat kan Altijd verzorgd voor jou betekenen?</h1>
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
        <div class="container color-green">
          <h1 class="text-green display-5 pt-4"> Vul hieronder het <br> aanmeldingsformulier in</h1>
          <p class="text-green display-6 py-4">Vul vrijblijvend het aanmeldingsformulier in zodat wij telefonisch contact met je kunnen opnemen.</p>
         
        </div>
      </section>




      
@include('components.footer')
@include('components.scripts')
</body>
</html>
