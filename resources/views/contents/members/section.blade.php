<!-- section for memeebers page -->
<section id="diensten" class="fso page2-1 row m-0">
  <div class="productfilterbox col-lg-2 border-right text-center">
    <div class="collapse2 mb-1" id="navbarNav">
      <h5>Zoeken</h5>
      <form class="input-group pt-1">
        <input class="form-control rounded-left border-right-0 quicksearch" data-ref="input-search" id="gridsearch" type="search" placeholder="Zoeken">
        <div class="input-group-append">
          <span class="input-group-text bg-white" id="basic-addon2"><i class="fas fa-search"></i></span>
        </div>
      </form>
    </div>
    <div class="collapse2 mb-1" id="navbarNav2">
      <h5>Aantal resultaten</h5>
      <h6><span class="itemCount"><i class="fa fa-cog fa-spin"></i></span></h6>
      <h5>Alles filters resetten</h5>
      <button class="btn btn-outline-success btn-block reset-button"><i class="fas fa-undo-alt"></i></button>
      <h5>Categorieën</h5>
      <div class="btn-group-toggle productfilter" data-filter-group="categorieën">
        <label class="btn btn-outline-success btn-block control active" data-filter="all">
          Allemaal
        </label>
        <label class="btn btn-outline-success btn-block control" data-filter=".man">
          Mannen
        </label>
        <label class="btn btn-outline-success btn-block control" data-filter=".vrouw">
          Vrouwen
        </label>
      </div>

      <h5>Sorteren</h5>
      <div class="btn-group-toggle productfilter" data-filter-group="categorieën">
        <label class="btn btn-outline-success btn-block control" data-sort="cijfer:desc">
          Cijfers
        </label>
        <label class="btn btn-outline-success btn-block control" data-sort="comments:desc">
          Comments
        </label>
        <label class="btn btn-outline-success btn-block control" data-sort="likes:desk">
          Like's
        </label>
      </div>
      <div class="btn-group btn-group-toggle sort-group d-flex justify-content-center mt-2" data-filter-group="categorieën">
        <label class="btn btn-outline-success col control active" data-sort="default:asc">
          <i class="fas fa-sort-amount-up"></i>
        </label>
        <label class="btn btn-outline-success col control" data-sort="name:asc">
          <i class="fas fa-sort-alpha-down"></i>
        </label>
        <label class="btn btn-outline-success col control" data-sort="random">
          <i class="fas fa-random"></i>
        </label>
      </div>
      <h5>Uitzicht</h5>
      <div class="btn-group btn-group-toggle d-flex justify-content-center" data-toggle="buttons">
        <label class="btn btn-outline-success col control active">
          <input type="radio" name="options" id="option1" autocomplete="off" checked> <i class="fas fa-th-list"></i>
        </label>
        <label class="btn btn-outline-success col control">
          <input type="radio" name="options" id="option2" autocomplete="off"><i class="fas fa-th"></i>
        </label>
      </div>
    </div>
  </div>
  <div class="grid col text-center" data-ref="container">
    <div class="row filterresultaat">
      @foreach($memberinfos as $memberinfo)
      <div class="card col-xl-3 col-lg-4 col-md-6 p-0 {{$memberinfo->gender}}" data-name="{{$memberinfo->name}} {{$memberinfo->surname}}" data-cijfer="{{$memberinfo->digit}}" data-comments="{{$memberinfo->comments}}" data-likes="{{$memberinfo->likes}}">
        <img class="profileimgbg" data-src="images/workers/{{$memberinfo->src_img}}">
        <img class="col-8 rounded-circle img-fluid profileimg" data-src="images/workers/{{$memberinfo->src_img}}">
        <h4 class="card-title m-0">{{$memberinfo->name}} {{$memberinfo->surname}}</h4>
        <div class="row justify-content-center m-1">
          <div class="col">
            <i class="fa fa-star"></i> {{$memberinfo->digit}}
          </div>
          <div class="col">
            <i class="fa fa-comment"></i> {{$memberinfo->comments}}
          </div>
          <div class="col">
            <i class="fa fa-heart"></i> {{$memberinfo->likes}}
          </div>
        </div>
      </div>
      @endforeach
      <div class="card member col-xl-3 col-lg-4 col-md-6 p-0 vrouw" data-name="" data-cijfer="7,8" data-comments="45" data-likes="158">
        <div class="front">
          <img class="profileimgbg" data-src="images/workers/cv.jpg">
          <img class="col-8 rounded-circle img-fluid profileimg" data-src="images/workers/cv.jpg">
          <h4 class="card-title m-0">Jettaz Frankenstein</h4>
          <div class="row justify-content-center m-1">
            <div class="col">
              <i class="fa fa-star"></i> 7,8
            </div>
            <div class="col">
              <i class="fa fa-comment"></i> 45
            </div>
            <div class="col">
              <i class="fa fa-heart"></i> 158
            </div>
          </div>
        </div>
        <div class="back">
          <span>
            <h1>Lorem, ipsum.</h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, quo nobis minima id provident
            deserunt.
            <ul>
              <li>
                <a href="profile.html" class="btn btn-success">Verder</a>
              </li>
            </ul>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>
