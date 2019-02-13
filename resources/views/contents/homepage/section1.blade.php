<section id="home" class="fst page1-1">
  <div class="zoekform p-2 col-lg-6">
    <form class="form-home" method="get" action="/products">
      <label class="input-group">
        <div class="input-group-append p-0">
          <!-- data-toggle="tooltip" data-placement="top" title="Uw adres" -->
          <button type='button' class="btn btn-success rounded-left" aria-label="uw adres"><i class="fas fa-map-marker" title="uw adres"></i></button>
        </div>
        <input type="text" id="searchadres" name="address" class="form-control" placeholder="Uw adres, b.v. Van Heekplein 300">
      </label>
      <div class="row no-gutters">
        <div class="col-lg-5 mr-lg-1">
          <label class="input-group date" id="pickdays" data-target-input="nearest" data-toggle="tooltip" data-placement="top" title="Gewenste datum">
            <div class="input-group-append" data-target="#pickdays" data-toggle="datetimepicker">
              <button type='button' class="btn btn-success rounded-left" aria-label="datum"><i class="far fa-calendar-alt" title="datum"></i></button>
            </div>
            <input type="text" id="datum" name="datum" class="form-control datetimepicker-input" data-target="#pickdays" data-toggle="datetimepicker" readonly="readonly"/>
            <div class="input-group-append">
              <button type='button' class="btn btn-success btn-prev-day" aria-label="volgende dag"><i class="fas fa-angle-left"></i></button>
              <button type='button' class="btn btn-success btn-next-day" aria-label="vorige dag"><i class="fas fa-angle-right"></i></button>
            </div>
          </label>
        </div>
        <div class="col-lg-5 mr-lg-1">
          <label class="input-group date" id="picktime" data-target-input="nearest" data-toggle="tooltip" data-placement="top" title="Gewenste tijd">
            <div class="input-group-append" data-target="#picktime" data-toggle="datetimepicker">
              <button type='button' class="btn btn-success rounded-left" aria-label="tijd"><i class="far fa-clock fa-sm" title="tijd"></i></button>
            </div>
            <input type="text" name="time" class="form-control datetimepicker-input" data-target="#picktime" data-toggle="datetimepicker" readonly="readonly"/>
            <div class="input-group-append">
              <button type='button' class="btn btn-success btn-prev-min" aria-label="tijdstap"><i class="fas fa-angle-left"></i></button>
              <button type='button' class="btn btn-success btn-next-min" aria-label="tijdstap"><i class="fas fa-angle-right"></i></button>
            </div>
          </label>
        </div>
        <div class="col">
          <button type="button" class="btn btn-success btn-block btn-reset"><i class="fas fa-sync"></i> Nu</button>
        </div>
      </div>
      <div class="btn-group btn-group-toggle col-12 p-0 mt-1 my-lg-0 justify-content-between" data-toggle="buttons">
        <label class="btn btn-success col-lg-3 col-3 rounded" name="keuze" for="voorvrouwen" data-toggle="tooltip" data-placement="top" title="Voor vrouw">
          <input type="radio" name="keuze" id="voorvrouwen" value="female"><i class="fas fa-female fa-2x" title="Voor vrouw"></i>
        </label>
        <label class="btn btn-success col-lg-3 col-3 ml-1 mr-1 rounded" name="keuze" for="voormannen" data-toggle="tooltip" data-placement="top" title="Voor man">
          <input type="radio" name="keuze" id="voormannen" value="male"><i class="fas fa-male fa-2x" title="Voor man"></i>
        </label>
        <label class="btn btn-success col-lg-3 col-3 mr-1 rounded" name="keuze" for="voorkinderen" data-toggle="tooltip" data-placement="top" title="Voor je kind(eren)">
          <input type="radio" name="keuze" id="voorkinderen" value="kids"><i class="fas fa-child fa-2x" title="Voor je kind(eren)"></i>
        </label>
        <label class="btn btn-success col-lg-3 col-3 rounded" name="keuze" for="voorhuisdieren" data-toggle="tooltip" data-placement="top" title="Voor je huisdier(en)">
          <input type="radio" name="keuze" id="voorhuisdieren" value="pets"><i class="fas fa-paw fa-2x" title="Voor je huisdier(en)"></i>
        </label>
      </div>
      <button class="btn btn-success btn-block mt-1" type="submit">Zoek</button>
    </form>
  </div>
  <a href="#how"><button type="button" class="tohow btn btn-success" aria-label="naar bneden"><i class="fas fa-angle-double-down"></i></button></a>
  <div class="chevron"></div>
</section>
