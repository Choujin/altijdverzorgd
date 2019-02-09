<!-- section for product page -->
<section id="diensten" class="fso row m-0">
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
          Alles
        </label>
        <label class="btn btn-outline-success btn-block control" data-filter=".kappers">
          Kappers
        </label>
        <label class="btn btn-outline-success btn-block control" data-filter=".pedicures">
          Pedicures
        </label>
        <label class="btn btn-outline-success btn-block control" data-filter=".manicures">
          Manicures
        </label>
        <label class="btn btn-outline-success btn-block control" data-filter=".massage">
          Massage
        </label>
      </div>
      <h5>Sorteren</h5>
      <div class="btn-group btn-group-toggle sort-group d-flex justify-content-center" data-filter-group="categorieën">
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
  <div class="grid col" data-ref="container">
    <div class="row filterresultaat ">
      @foreach ($products as $product)
      <div class="card dinsten border-0 m-0 col-xl-3 col-lg-4 col-md-6 {{$product->name}} {{$product->category}} {{$product->tags}} " data-name="{{$product->name}}">
        <div class="front" style="background-image: url('{{$product->src_img}}');">
          <div class="title-front-card">
            <h5>{{ucfirst($product->name)}}</h5>
          </div>
        </div>
        <div class="back">
          <span>
            <h1>{{ucfirst($product->name)}}</h1>
            {{$product->description}}
            <ul>
              <li>
                <a href="/members" class="btn btn-success">Verder</a>
              </li>
            </ul>
          </span>
        </div>
      </div>
      @endforeach
      @foreach ($products as $product)
      <div class="card dinsten border-0 m-0 col-xl-3 col-lg-4 col-md-6 {{$product->name}} {{$product->category}} {{$product->tags}} " data-name="{{$product->name}}">
        <div class="front" style="background-image: url('{{$product->src_img}}');">
          <div class="title-front-card">
            <h5>{{ucfirst($product->name)}}</h5>
          </div>
        </div>
        <div class="back">
          <span>
            <h1>{{ucfirst($product->name)}}</h1>
            {{$product->description}}
            <ul>
              <li>
                <a href="/members" class="btn btn-success">Verder</a>
              </li>
            </ul>
          </span>
        </div>
      </div>
      @endforeach
      @foreach ($products as $product)
      <div class="card dinsten border-0 m-0 col-xl-3 col-lg-4 col-md-6 {{$product->name}} {{$product->category}} {{$product->tags}} " data-name="{{$product->name}}">
        <div class="front" style="background-image: url('{{$product->src_img}}');">
          <div class="title-front-card">
            <h5>{{ucfirst($product->name)}}</h5>
          </div>
        </div>
        <div class="back">
          <span>
            <h1>{{ucfirst($product->name)}}</h1>
            {{$product->description}}
            <ul>
              <li>
                <a href="/members" class="btn btn-success">Verder</a>
              </li>
            </ul>
          </span>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
