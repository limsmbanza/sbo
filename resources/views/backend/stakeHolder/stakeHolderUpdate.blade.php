
@extends('layouts.app')


@section('content')
	
	<div class="container">
			<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
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
				<div class="col-md-6">
					@if(session('warning'))
					   <h4>{{session('warning')}}</h4>
					@endif
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					@if(session('success'))
					   <h4>{{session('success')}}</h4>
					@endif
					@if(session('failed'))
						<h4>{{session('failed')}}</h4>
					@endif
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">	
				<h4>Création du personnel</h4>
				<form method="post" action="{{route('stakeholder.update',['id'=>$stakeHolder->id])}}">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label class="control-label">Nom</label>	
						<input type="text" class="form-control" name="name" value="{{old('name')?$old('name'):$stakeHolder->name}}"/>
					</div>
					<div class="form-group">
						<label class="control-label">Postnom</label>
						<input type="text" class="form-control" name="lastname" value="{{old('lastname')?old('lastname'):$stakeHolder->lastname}}"/>
 					</div>
					<div class="form-group">
						<label class="control-label">Prénom</label>
						<input type="text" class="form-control" name="firstname" value="{{old('firstname')?old('firstname'):$stakeHolder->firstname}}"/>
 					</div>
					<div class="form-group">
						<label class="control-label">Adresse</label>
						<input type="text" class="form-control" name="adresse" value="{{old('adresse')?old('adresse'):$stakeHolder->adresse}}"/>
 					</div>
					<div class="form-group">
						<label class="control-label">Téléphone</label>
						<input type="text" class="form-control" name="phone" value="{{old('phone')?old('phone'):$stakeHolder->phone_number}}"/>
 					</div>
					<div class="form-group">
						<label class="control-label">Selectionner le département d'appartenance</label>
						<select class="form-control" name="parent">
								<option>Departement:</option>
								@foreach($departements as $departement)
									<option value="{{'departement-'.$departement->id}}">{{$departement->name}}</option>
								@endforeach
								<option>Sous département:</option>
								
											
						</select>

					</div>
					<h4>Information d'identification</h4>
					<div class="form-group">
							<label class="control-label">Pseudo</label>
							<input type="text" class="form-control" name="pseudo" value="{{old('pseudo')?old('pseudo'):$user->name}}"/>
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="text" class="form-control" name="email" value="{{old('email')}}"/>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Mot de passe</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="form-group">
						   	<label for="" class="control-label">Confirmation du mot de passe</label>
							<input type="password" class="form-control" name="password_confirmation" 
							       value="{{old('password_confirmation')}}"/>
						</div>
						<input type="text" name="test"/>
					<div class="form-group">
						<button class="btn btn-primary">Créer</button>
					</div>
				</form>
				</div>
			</div>
	</div>
	</div>
	
@stop
