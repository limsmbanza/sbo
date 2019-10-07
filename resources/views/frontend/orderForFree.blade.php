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
					@csrf
					<div class="col-md-4">
					
						
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
							<input type="password" class="form-control" name="password">
						</div>
						<div class="form-group">
						   	<label for="" class="control-label">Confirmation du mot de passe</label>
							<input type="password" class="form-control" name="password_confirmation" 
							       value="{{old('password_confirmation')}}"/>
						</div>
						<div class="form-group">
							<label class="control-label" ><input type="checkbox"  class="" name="termeofuse"/>J acccepte les <a href="#"> conditions d'utilisation</a></label>
						</div>
						<div cass="form-group">

							<button class="btn btn-primary pull-right">Ouvrir un compte</button>
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
