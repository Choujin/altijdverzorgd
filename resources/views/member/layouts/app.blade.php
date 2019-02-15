@include('components.head')
<style>
#wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

#wrapper #content-wrapper {
  overflow-x: hidden;
  width: 100%;
  padding-top: 1rem;
  padding-bottom: 80px;
}

.scroll-to-top {
  position: fixed;
  right: 15px;
  bottom: 15px;
  display: none;
  width: 50px;
  height: 50px;
  text-align: center;
  color: #fff;
  background: rgba(52, 58, 64, 0.5);
  line-height: 46px;
}

.scroll-to-top:focus, .scroll-to-top:hover {
  color: white;
}

.scroll-to-top:hover {
  background: #343a40;
}

.scroll-to-top i {
  font-weight: 800;
}

.smaller {
  font-size: 0.7rem;
}

.o-hidden {
  overflow: hidden !important;
}

.z-0 {
  z-index: 0;
}

.z-1 {
  z-index: 1;
}

.navbar-nav .form-inline .input-group {
  width: 100%;
}

.navbar-nav .nav-item.active .nav-link {
  color: #fff;
}

.navbar-nav .nav-item.dropdown .dropdown-toggle::after {
  width: 1rem;
  text-align: center;
  float: right;
  vertical-align: 0;
  border: 0;
  font-weight: 900;
  content: '\f105';
  font-family: 'Font Awesome 5 Free';
}

.navbar-nav .nav-item.dropdown.show .dropdown-toggle::after {
  content: '\f107';
}

.navbar-nav .nav-item.dropdown.no-arrow .dropdown-toggle::after {
  display: none;
}

.navbar-nav .nav-item .nav-link:focus {
  outline: none;
}

.navbar-nav .nav-item .nav-link .badge {
  position: absolute;
  margin-left: 0.75rem;
  top: 0.3rem;
  font-weight: 400;
  font-size: 0.5rem;
}

@media (min-width: 768px) {
  .navbar-nav .form-inline .input-group {
    width: auto;
  }
}

.sidebar {
  width: 90px !important;
  background-color: #8fbd40;
  min-height: calc(100vh - 56px);
}

.sidebar .nav-item:last-child {
  margin-bottom: 1rem;
}

.sidebar .nav-item .nav-link {
  text-align: center;
  padding: 0.75rem 1rem;
  width: 90px;
}

.sidebar .nav-item .nav-link span {
  font-size: 0.65rem;
  display: block;
}

.sidebar .nav-item .dropdown-menu {
  position: absolute !important;
  -webkit-transform: none !important;
  transform: none !important;
  left: calc(90px + 0.5rem) !important;
  margin: 0;
}

.sidebar .nav-item .dropdown-menu.dropup {
  bottom: 0;
  top: auto !important;
}

.sidebar .nav-item.dropdown .dropdown-toggle::after {
  display: none;
}

.sidebar .nav-item .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.sidebar .nav-item .nav-link:active, .sidebar .nav-item .nav-link:focus, .sidebar .nav-item .nav-link:hover {
  color: rgba(255, 255, 255, 0.75);
}

.sidebar.toggled {
  width: 0 !important;
  overflow: hidden;
}

@media (min-width: 768px) {
  .sidebar.toggled {
    width: 225px !important;
  }
  .sidebar.toggled .nav-item .nav-link {
    display: block;
    width: 100%;
    text-align: left;
    padding: 1rem;
    width: 225px;
  }
  .sidebar.toggled .nav-item .nav-link span {
    font-size: 1rem;
    display: inline;
  }
  .sidebar.toggled .nav-item .dropdown-menu {
    position: static !important;
    margin: 0 1rem;
    top: 0;
  }
  .sidebar.toggled .nav-item.dropdown .dropdown-toggle::after {
    display: block;
  }
  .sidebar {
    overflow: visible;
    width: 90px !important;
  }
  .sidebar .nav-item:last-child {
    margin-bottom: 1rem;
  }
  .sidebar .nav-item .nav-link {
    text-align: center;
    padding: 0.75rem 1rem;
    width: 90px;
  }
  .sidebar.nav-item .nav-link span {
    font-size: 0.65rem;
    display: block;
  }
  .sidebar .nav-item .dropdown-menu {
    position: absolute !important;
    -webkit-transform: none !important;
    transform: none !important;
    left: calc(90px + 0.5rem) !important;
    margin: 0;
  }
  .sidebar.nav-item .dropdown-menu.dropup {
    bottom: 0;
    top: auto !important;
  }
  .sidebar .nav-item.dropdown .dropdown-toggle::after {
    display: none;
  }
}

.card-body-icon {
  position: absolute;
  z-index: 0;
  top: -1.25rem;
  right: -1rem;
  opacity: 0.4;
  font-size: 5rem;
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
}

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 1;
    column-count: 1;
  }
}

@media (min-width: 768px) {
  .card-columns {
    -webkit-column-count: 2;
    column-count: 2;
  }
}

@media (min-width: 1200px) {
  .card-columns {
    -webkit-column-count: 2;
    column-count: 2;
  }
}

:root {
  --input-padding-x: 0.75rem;
  --input-padding-y: 0.75rem;
}

.card-login {
  max-width: 25rem;
}

.card-register {
  max-width: 40rem;
}

.form-label-group {
  position: relative;
}

.form-label-group > input,
.form-label-group > label {
  padding: var(--input-padding-y) var(--input-padding-x);
  height: auto;
}

.form-label-group > label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  -webkit-transition: all 0.1s ease-in-out;
  transition: all 0.1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown) ~ label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

footer.sticky-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  right: 0;
  bottom: 0;
  width: calc(100% - 90px);
  height: 80px;
  background-color: #e9ecef;
}

footer.sticky-footer .copyright {
  line-height: 1;
  font-size: 0.8rem;
}

@media (min-width: 768px) {
  footer.sticky-footer {
    width: calc(100% - 225px);
  }
}

body.sidebar-toggled footer.sticky-footer {
  width: 100%;
}

@media (min-width: 768px) {
  body.sidebar-toggled footer.sticky-footer {
    width: calc(100% - 90px);
  }
}

</style>
<body>


        <nav class="navbar navbar-expand navbar-dark bg-green static-top d-flex justify-content-between">

            <div>
                <img href="#" data-src="https://www.altijdverzorgd.nl/test/assets/img/logo/mstile-144x144.png" alt="" width="27" height="27"></a>



                <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                  <i class="fas fa-bars"></i>
                </button>
            </div>



                <!-- Navbar -->
                <ul class="navbar-nav ml-auto ml-md-0">
                  <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bell fa-fw"></i>
                      <span class="badge badge-danger">9+</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-envelope fa-fw"></i>
                      <span class="badge badge-danger">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="#">Settings</a>
                      <a class="dropdown-item" href="#">Activity Log</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    </div>
                  </li>
                </ul>

              </nav>
              <div id="wrapper">
              <ul class="sidebar navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ route('member.dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                      </a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('member.edit') }}">
                            <i class="fas fa-user"></i>
                          <span>Profiel</span></a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Agenda</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <i class="fas fa-network-wired"></i>
                        <span>Ervaringen</span></a>
                    </li>
                  </ul>
        <div class="container-fluid">
                @yield('content')
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="dropdown-item" href="{{ route('member.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('member.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </div>
        </div>
      </div>
    </div>
@include('components.scripts')
<script>


  // Toggle the side navigation
  $("#sidebarToggle").on('click', function() {
    $(".sidebar").toggleClass("toggled");
  });

</script>

</body>
</html>
