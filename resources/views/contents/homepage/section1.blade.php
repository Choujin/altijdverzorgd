<section id="home" class="fst page1-1">
  <div class="zoekform p-2 col-lg-6">
    <!-- <div class="keuze d-flex justify-content-center  btn-group-toggle" data-toggle="buttons">
      <label class="btn btn-success btn-lg btn-home m-2 rounded active" name="keuze" for="voorvrouwen" data-toggle="tooltip" data-placement="top" title="Aan huis">
        <input type="radio" name="zoekhome"><i class="fas fa-home fa-4x"></i>
      </label>
      <label class="btn btn-success btn-lg btn-zaak m-2 rounded" style="width:124px;" name="keuze" for="voormannen" data-toggle="tooltip" data-placement="top" title="Op zaak">
        <input type="radio" name="zoekshop"><i class="fas fa-building fa-4x"></i>
      </label>
    </div> -->
    <form class="form-home zoekhome">
      <label class="input-group">
        <div class="input-group-append p-0">
          <!-- data-toggle="tooltip" data-placement="top" title="Uw adres" -->
          <button type='button' class="btn btn-success rounded-left" aria-label="uw adres"><i class="fas fa-map-marker" title="uw adres"></i></button>
        </div>
        <input type="text" id="searchadres" class="form-control" placeholder="Uw adres, b.v. Van Heekplein 300" required="">
      </label>
      <div class="row no-gutters">
        <div class="col-lg-5 mr-lg-1">
          <label class="input-group date" id="pickdays" data-target-input="nearest" data-toggle="tooltip" data-placement="top" title="Gewenste datum">
            <div class="input-group-append" data-target="#pickdays" data-toggle="datetimepicker">
              <button type='button' class="btn btn-success rounded-left" aria-label="datum"><i class="far fa-calendar-alt" title="datum"></i></button>
            </div>
            <input type="text" id="datum" class="form-control datetimepicker-input" data-target="#pickdays" data-toggle="datetimepicker" readonly="readonly" required="" />
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
            <input type="text" class="form-control datetimepicker-input" data-target="#picktime" data-toggle="datetimepicker" readonly="readonly" required="" />
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
        <label class="btn btn-success col-lg-3 col-3 rounded active" name="keuze" for="voorvrouwen" data-toggle="tooltip" data-placement="top" title="Voor vrouw">
          <input type="radio" name="voorvrouwen" id="voorvrouwen" autocomplete="on" checked><i class="fas fa-female fa-2x" title="Voor vrouw"></i>
        </label>
        <label class="btn btn-success col-lg-3 col-3 ml-1 mr-1 rounded" name="keuze" for="voormannen" data-toggle="tooltip" data-placement="top" title="Voor man">
          <input type="radio" name="voormannen" id="voormannen" autocomplete="off"><i class="fas fa-male fa-2x" title="Voor man"></i>
        </label>
        <label class="btn btn-success col-lg-3 col-3 mr-1 rounded" name="keuze" for="voorkinderen" data-toggle="tooltip" data-placement="top" title="Voor je kind(eren)">
          <input type="radio" name="voorkinderen" id="voorkinderen" autocomplete="off"><i class="fas fa-child fa-2x" title="Voor je kind(eren)"></i>
        </label>
        <label class="btn btn-success col-lg-3 col-3 rounded" name="keuze" for="voorhuisdieren" data-toggle="tooltip" data-placement="top" title="Voor je huisdier(en)">
          <input type="radio" name="voorhuisdieren" id="voorhuisdieren" autocomplete="off"><i class="fas fa-paw fa-2x" title="Voor je huisdier(en)"></i>
        </label>
      </div>
      <a href="/products" type="submit" class="btn btn-success col-12 mt-1">Zoek</a>
    </form>
    <!-- <form class="form-home zoekshop">
      <div class="form-row">
        <label class="input-group col-md-9">
          <div class="input-group-append p-0">
            <button type='button' class="btn btn-success rounded-left" aria-label="uw adres"><i class="fas fa-map-marker" title="uw adres"></i></button>
          </div>
          <input type="text" id="searchzaak" class="form-control" placeholder="Zoek op plaats of poscode" required="">
        </label>
        <div class="col-md-3">
          <select class="custom-select col">
            <option selected>Alle afstanden</option>
            <option value="1"> &lt; 3 km </option>
            <option value="2"> &lt; 5 km </option>
            <option value="3"> &lt; 10 km </option>
            <option value="4"> &lt; 15 km </option>
            <option value="5"> &lt; 25 km </option>
            <option value="6"> &lt; 50 km </option>
            <option value="7"> &lt; 75 km </option>
          </select>
        </div>
      </div>
      <a href="zaken.html" type="submit" class="btn btn-success col-12 mt-1">Zoek</a>
    </form> -->
  </div>
  <a href="#how"><button type="button" class="tohow btn btn-success" aria-label="naar bneden"><i class="fas fa-angle-double-down"></i></button></a>
  <div class="chevron"></div>
</section>
