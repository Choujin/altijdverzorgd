<div class="modal fade" id="mijn-av-users" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-block">
        <h5 class="modal-title text-center" id="exampleModalLabel">Zoek naar mensen</h5>
        <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-x: hidden;">
        <!-- inside modal -->
        <form class="input-group">
          <input class="form-control" id="inputSearch" type="search" placeholder="Zoeken" aria-label="Search" required="">
          <button class="btn btn-outline-success" type="submit">Zoeken</button>
        </form>
        <div class="peopleview">
          <div class="steps-inner">
            <a href="#" class="steps-btn steps-btn-backward" aria-label="reks"><i class="fas fa-angle-left"></i></a>
            <a href="#" class="steps-btn steps-btn-forward" aria-label="links"><i class="fas fa-angle-right"></i></a>
            <div id="resizepeopleview" class="listbox-boxes steps-wrapper number-of-steps-3 align-step1" data-name="howto" data-steps="3">
              <div class="step-wrapper w-33 p-2">
                <div class="card randompeople">
                  <div class="card-header text-center bg-green">Populair</div>
                  <ul class="list-group list-group-flush" style="overflow-y:auto;">
                    @foreach ($memberinfos->sortByDesc('digit')->take(5) as $memberinfo)
                    <a class="list-group-item list-group-item-action  p-1" href="{{$memberinfo->profile_link}}">
                      <div class="d-flex">
                        <div class="thumbs">
                          <img class="rounded-left" data-src="images/workers/{{$memberinfo->src_img}}" alt="{{$memberinfo->name}} {{$memberinfo->surname}}" />
                        </div>
                        <div class="d-flex flex-column">
                          <span class="badge"><i class="fas fa-star"></i> {{$memberinfo->digit}}</span>
                          <span class="badge"><i class="fas fa-heart"></i> {{$memberinfo->likes}}</span>
                          <span class="badge"><i class="fas fa-comment"></i> {{$memberinfo->comments}}</span>
                        </div>
                        <div class="d-flex flex-column">
                          {{$memberinfo->name}} {{$memberinfo->surname}}
                          <small class="form-text workkind">{{$memberinfo->specialisation}}</small>
                        </div>
                      </div>
                    </a>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="step-wrapper w-33 p-2">
                <div class="card populairpeople">
                  <div class="card-header text-center bg-green">Mensen</div>
                  <ul class="list-group list-group-flush">
                    @foreach ($memberinfos->shuffle()->take(5) as $memberinfo)
                    <a class="list-group-item list-group-item-action  p-1" href="{{$memberinfo->profile_link}}">
                      <div class="d-flex">
                        <div class="thumbs">
                          <img class="rounded-left" data-src="images/workers/{{$memberinfo->src_img}}" alt="{{$memberinfo->name}} {{$memberinfo->surname}}" />
                        </div>
                        <div class="d-flex flex-column">
                          <span class="badge"><i class="fas fa-star"></i> {{$memberinfo->digit}}</span>
                          <span class="badge"><i class="fas fa-heart"></i> {{$memberinfo->likes}}</span>
                          <span class="badge"><i class="fas fa-comment"></i> {{$memberinfo->comments}}</span>
                        </div>
                        <div class="d-flex flex-column">
                          {{$memberinfo->name}} {{$memberinfo->surname}}
                          <small class="form-text workkind">{{$memberinfo->specialisation}}</small>
                        </div>
                      </div>
                    </a>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="step-wrapper w-33 p-2">
                <div class="card recentpeople">
                  <div class="card-header text-center bg-green">Nieuwkomers</div>
                  <ul class="list-group list-group-flush">
                    @foreach ($memberinfos->sortByDesc('created_at')->take(5) as $memberinfo)
                    <a class="list-group-item list-group-item-action  p-1" href="{{$memberinfo->profile_link}}">
                      <div class="d-flex">
                        <div class="thumbs">
                          <img class="rounded-left" data-src="images/workers/{{$memberinfo->src_img}}" alt="{{$memberinfo->name}} {{$memberinfo->surname}}" />
                        </div>
                        <div class="d-flex flex-column">
                          <span class="badge"><i class="fas fa-star"></i> {{$memberinfo->digit}}</span>
                          <span class="badge"><i class="fas fa-heart"></i> {{$memberinfo->likes}}</span>
                          <span class="badge"><i class="fas fa-comment"></i> {{$memberinfo->comments}}</span>
                        </div>
                        <div class="d-flex flex-column">
                          {{$memberinfo->name}} {{$memberinfo->surname}}
                          <small class="form-text workkind">{{$memberinfo->specialisation}}</small>
                        </div>
                      </div>
                    </a>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="steps-slider-dots-wrap">
              <span class="steps-slider-dots"></span>
              <span class="steps-slider-dots steps-slider-dot-active"></span>
              <span class="steps-slider-dots"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
