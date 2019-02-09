<header id="navbar-example" class="navbar fixed-top navbar-expand-lg navbar-dark bg-green">
  <!-- bg-green -->
  <div class="container justify-content-between">
    <a class="navbar-brand" href="/products">
      <i class="fas fa-chevron-left"></i>
      <img data-src="images/logo/apple-touch-icon-76x76-precomposed.png" class="d-inline-block align-top" alt="" height="30" width="30">
      <span>Terug</span>
    </a>
    <!--<a class="navbar-brand d-lg-none searchinput" style="cursor:pointer;"><i class="fas fa-search"></i> <span>Zoeken</span></a>-->
    <!--<a class="navbar-brand d-lg-none" href="https://www.altijdverzorgd.nl/test"><i class="fas fa-filter"></i> <span>Filter</span></a>-->
    <button class="navbar-toggler navbar-brand" type="button" data-toggle="collapse" data-target="#navbarNav">
      <i class="fas fa-search"></i> <span>Zoeken</span>
    </button>
    <button class="navbar-toggler navbar-brand" type="button" data-toggle="collapse" data-target="#navbarNav2">
      <i class="fas fa-filter"></i> <span>Filter</span>
    </button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center justify-content-end" style="margin-left:-1rem;" id="navbarNav3">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#mijn-av-users" title="Zoek pagina van mensen of van het zaak "><i class="fas fa-users"></i> Leden</a>
        </li>
        @guest
        <li class="nav-item active">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#mijn-av-login" title="Mijn account"><i class="fas fa-user"></i> Mijn AV</a>
        </li>
        @else
        <li class="nav-item dropdown">
            <a  class="nav-link active dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fas fa-user"></i>&nbsp;{{ ucfirst(Auth::user()->name) }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 $('#logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
        <li class="nav-item active">
          <a class="nav-link" href="#" title="Change to English language"><i class="flag flag-gb"></i> English</a>
        </li>
      </ul>
    </div>
  </div>
</header>
@include('components.headers.contents.search')
@include('components.headers.contents.auth')
