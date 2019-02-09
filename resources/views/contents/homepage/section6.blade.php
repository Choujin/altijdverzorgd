<section id="cijfers" class="fst page1-6">
  <div class="steps-inner color-green container">
    <div class="text-center">
      <h2 class="">Dit is hoe wij het doen</h2>
      <p class="lead mb-2 text-muted">Laatste afspraak gemaakt op 1 februari 2018 om 22:25</p>
    </div>
    <button href="#" class="steps-btn steps-btn-backward" aria-label="reks"><i class="fas fa-angle-left"></i></button>
    <button href="#" class="steps-btn steps-btn-forward" aria-label="links"><i class="fas fa-angle-right"></i></button>
    <div id="resizecijfers" class="listbox-boxes steps-wrapper align-step0" data-name="howto" data-steps="5">
      @foreach ($datainfos as $datainfo)
      <div class="step-wrapper w-20 p-2">
        <div class="card text-center border-0" style="background:none;">
          <div class="card-body">
            <h1 class="card-title"><i class="{{$datainfo->fas}}"></i></h1>
            <h5 class="card-title">{{$datainfo->totaal}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$datainfo->title}}</h6>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="steps-slider-dots-wrap">
      <span class="steps-slider-dots steps-slider-dot-active"></span>
      <span class="steps-slider-dots"></span>
      <span class="steps-slider-dots"></span>
      <span class="steps-slider-dots"></span>
      <span class="steps-slider-dots"></span>
    </div>
  </div>
</section>
