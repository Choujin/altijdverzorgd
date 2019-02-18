@extends('member.layouts.app')

@section('content')

<h1 class="color-green display-5 pt-4 text-center"> Wijzig hier uw profiel </h1>


<form id="form-edit" class="form-edit pl-5 ml-5 bg-white rounded" method="POST" action="{{ route('member.edit') }}" aria-label="{{ __('Edit') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Voornaam') }}</label>

        <div class="col-3">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                name="name" value="{{ $members->name }}" required>

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
                name="surname" value="{{ old('surname') }}" required>

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
            <input id="work_location" type="text" class="form-control" name="work_location" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="specialisation" class="col-md-4 col-form-label text-md-right">{{ __('Telefoon nummer')
            }}</label>

        <div class="col-3">
            <input id="specialisation" type="text" class="form-control" name="specialisation" required>
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
                name="email" value="{{ old('email') }}" required>

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
                    name="email" value="{{ old('email') }}" required>

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
                    name="password" required>

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
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                    required>
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

        </div>
    </section>
@endsection
