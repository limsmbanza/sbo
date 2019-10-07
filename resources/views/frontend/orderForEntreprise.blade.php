@extends('layouts.app')

@section('content')

	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@if($errors->any())
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				@if(session('success'))
					<h4>{{session('success')}}</h4>
				@endif
				@if(session('failed'))
					<h4>{{session('failed')}}</h4>
				@endif
			</div>
		</div>

		<div class="row">	
			<div class="col-md-12">
				<h2>Création du compte</h2>
				<form method="post" action="{{route('order.store')}}">
					<div class="col-md-4">
						@csrf
						
						<div class="form-group">
							<label class="control-label">Nom</label>
							<input type="text" class="form-control" name="name" value="{{old('name')}}"/> 
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="text" class="form-control" name="email" value="{{old('email')}}"/>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Mot de passe</label>
							<input type="password" class="form-control" name="password" value="{{old('password')}}">
						</div>	
						<div class="form-group">
						   	<label for="" class="control-label">Confirmation du mot de passe</label>
							<input type="password" class="form-control" name="password_confirmation" 
							       value="{{old('password_confirmation')}}"/>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Denomination sociale</label>
							<input type="text" class="form-control" name="etablishment_name" value="{{old('etablishment_name')}}">
						</div>
						<div class="form-group">
						   	<label for="" class="control-label">Ville</label>
							<input type="text" class="form-control" name="city" 
							       value="{{old('city')}}"/>
						</div>
						<div class="form-group">
						   	<label for="" class="control-label">Code postal</label>
							<input type="text" class="form-control" name="postal_code" 
							       value="{{old('postal_code')}}"/>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Adresse</label>
							<input type="text" class="form-control" name="adresse" value="{{old('adresse')}}">
						</div>
						<div class="form-group">
						   	<label for="" class="control-label">Pays</label>
							<select class="form-control" name="contry">
								@foreach($contries as $contry)
									<option value="{{$contry->id}}">{{$contry->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
						   	<label for="" class="control-label">Domaine d'activité</label>
						
							<select class="form-control" name="speciality">
								@foreach($specialities as $speciality)		
									<option value="{{$speciality->id}}">{{$speciality->name}}</option>
								@endforeach
							</select>
						
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label">Unité de paiement</label>
							<br/>
							@foreach($unities as $unity)
								<input type="radio" name="unity" selected="selected" value="{{$unity->id}}"/><span>{{$unity->number_of_months}} Mois</span><br/>

							@endforeach
						</div>
						<div class="form-group">
							<label class="control-label" ><input type="checkbox"  class="" name="termeofuse"/>J acccepte les <a href="#"> conditions d'utilisation</a></label>
						</div>
						<div cass="form-group">
							<button class="btn btn-primary pull-right">Confirmer la commande</button>
							@if(session('showLoginBtn'))
							   <button class="btn btn-success pull-left">{{session('showLoginBtn')}}</button>
							@endif
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop
