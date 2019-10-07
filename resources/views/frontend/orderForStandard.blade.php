@extends('layouts.app')

@section('content')

	
	<div class="container">
		<div class="row">	
			<div class="col-md-12">
				<h2>Création du compte</h2>
				<form method="post" action="{{route('order.store')}}">
					<div class="col-md-4">
						@csrf

						<div class="form-group">
							<label class="control-label">Name</label>
							<input type="text" class="form-control" name="name"/>
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="text" class="form-control" name="email"/>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Mot de passe</label>
							<input type="password" class="form-control" name="password">
						</div>	
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label">Unité de paiement</label>
							<br/>
							@foreach($unities as $unity)
								<input type="checkbox" name="unity" selected="selected" value="{{$unity->reduction}}"/><span>{{$unity->number_of_months}} Mois</span><br/>

							@endforeach
						</div>
						<div class="form-group">
							<label for="" class="control-label">Mot de passe</label>
							<input type="password" class="form-control" name="password">
						</div>	
						<div class="form-group">
							<button class="btn btn-primary">souscrire</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

@stop
