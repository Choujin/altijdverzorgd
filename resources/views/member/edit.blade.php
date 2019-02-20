@extends('member.layouts.app')

@section('content')

<h1 class="color-green display-5 pt-4 text-center"> Wijzig hier uw profiel </h1>


<form id="form-edit" class="form-edit pl-5 ml-5 bg-white rounded" method="POST" action="{{ route('member.edit') }}" aria-label="{{ __('Edit') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Voornaam') }}</label>


        <div class="col-3">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                name="v_name" value="{{ old('name') }}">

            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Achternaam') }}</label>

        <div class="col-3">
            <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                name="a_surname" value="{{ old('surname') }}">

            @if ($errors->has('surname'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('surname') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="work_location" class="col-4 col-form-label text-md-right">{{ __('Adres') }}</label>

        <div class="col-3">
            <input id="work_location" type="text" class="form-control" name="work_location">
        </div>
    </div>

    <div class="form-group row">
            <label for="example-text-input" class="col-4 col-form-label text-md-right">Werklocaties</label>
            <div class="col-3">
            <input class="form-control" type="text" value="Bijv, Enschede" id="example-text-input">
            </div>
          </div>

    <div class="form-group row">
        <label for="specialisation" class="col-md-4 col-form-label text-md-right">{{ __('Telefoon nummer')
            }}</label>

        <div class="col-3">
            <input id="specialisation" type="text" class="form-control" name="specialisation">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-3 offset-md-4">
            <button type="submit" class="btn btn-success btn-block">
                    <i class="fas fa-user-edit"></i>
                {{ __('Update') }}
            </button>
        </div>
    </div>

</form>

<h1 class="color-green display-5 pt-4 text-center"> Wijzig hier uw e-mail </h1>

<form id="form-edit" class="form-edit pl-5 ml-5 bg-white rounded" method="POST" action="{{ route('member.edit') }}" aria-label="{{ __('Edit') }}">
    @csrf

<div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Huidige e-mail') }}</label>

        <div class="col-3">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                name="o_email" value="{{ old('email') }}">

            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Je nieuwe e-mail') }}</label>

            <div class="col-3">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    name="n_email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group row mb-0">
                <div class="col-3 offset-md-4">
                    <button type="submit" class="btn btn-success btn-block">
                            <i class="fas fa-user-edit"></i>
                        {{ __('Update') }}
                    </button>
                </div>
            </div>

<h1 class="color-green display-5 pt-4 text-center"> Wijzig hier uw wachtwoord </h1>

<form id="form-edit" class="form-edit pl-5 ml-5 bg-white rounded" method="POST" action="{{ route('member.edit') }}" aria-label="{{ __('Edit') }}">
    @csrf

    <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Je oude wachtwoord') }}</label>

            <div class="col-3">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                    name="o_password">

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <form id="form-edit" class="form-edit pl-5 ml-5 bg-white rounded" method="POST" action="{{ route('member.edit') }}" aria-label="{{ __('Edit') }}">
                @csrf

                <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Je nieuwe wachtwoord') }}</label>

                        <div class="col-3">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="n_password">

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Nieuwe wachtwoord bevestigen') }}</label>

            <div class="col-3">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
            </div>
        </div>
        <div class="form-group row mb-0">
                <div class="col-3 offset-md-4">
                    <button type="submit" class="btn btn-success btn-block">
                            <i class="fas fa-user-edit"></i>
                        {{ __('Update') }}
                    </button>
                </div>
            </div>



            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Change password</div>

                            <div class="card-body">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form class="form-horizontal" method="POST" action="{{ route('member.edit') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                        <label for="new-password" class="col-md-4 control-label">Current Password</label>

                                        <div class="col-md-6">
                                            <input id="current-password" type="password" class="form-control" name="current-password" required>

                                            @if ($errors->has('current-password'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('current-password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                        <label for="new-password" class="col-md-4 control-label">New Password</label>

                                        <div class="col-md-6">
                                            <input id="new-password" type="password" class="form-control" name="new-password" required>

                                            @if ($errors->has('new-password'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('new-password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                                        <div class="col-md-6">
                                            <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Change Password
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header card-header-primary">
                          <h4 class="card-title">Edit Profile</h4>
                          <p class="card-category">Complete your profile</p>
                        </div>
                        <div class="card-body">
                          <form>
                            <div class="row">
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Company (disabled)</label>
                                  <input type="text" class="form-control" disabled>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Username</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Email address</label>
                                  <input type="email" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Fist Name</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Last Name</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Adress</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">City</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Country</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Postal Code</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label>About Me</label>
                                  <div class="form-group">
                                    <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                          </form>
                        </div>
                      </div>
                    </div>




        </div>
    </section>

@endsection





