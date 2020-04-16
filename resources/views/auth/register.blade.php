@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

			<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Téléphone</label>

                            <div class="col-md-6">
                                <input id="email" type="telephone" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required>

                                @if ($errors->has('telephone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

			<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Denomination de l'entreprise</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('denomination') ? ' is-invalid' : '' }}" name="denomination" value="{{ old('denomination') }}" required autofocus>

                                @if ($errors->has('denomination'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('denomination') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

			<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Coordonnée</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('coordonnee') ? ' is-invalid' : '' }}" name="coordonne" value="{{ old('coordonnee') }}" required autofocus>

                                @if ($errors->has('coordonnee'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('coordonnee') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
			
			<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Secteur d'activité</label>

                            <div class="col-md-6">
				<select name="secteur" class="form-control">
					<option value="1">Télécommunication et nouvelles technologies</option>
					<option value="2">Transport</option>
					<option value="3">Agroalimentaire</option>
					<option value="4">Minier</option>
				</select>
                                @if ($errors->has('secteur'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('secteur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
