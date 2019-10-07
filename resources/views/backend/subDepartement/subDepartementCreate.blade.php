@extends('layouts.app')


@section('content')
	
	<div class="container">
			<div class="col-md-12">
			<div clas="row">
				<div class="col-md-6">
					@if (session('subDepartement'))
    						<div class="alert alert-success">
        						{{ session('subDepartement') }}
    						</div>
					@endif
				</div>
			</div>
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
				<h4>Création du sous département</h4>
				<form method="post" action="{{route('subdepartement.store')}}">
					@csrf
					<div class="form-group">
						<label class="control-label">Nom du sous département</label>	
						<input type="text" class="form-control" name="name"/>
					</div>
					<div class="form-group">
						<label class="control-label">Selectionner le département parent</label>
						<select class="form-control" name="parent">
								<option>Departement:</option>
								@foreach($departements as $departement)
									<option value="{{'departement-'.$departement->id}}">{{$departement->name}}</option>
								@endforeach
								<option>Sous département:</option>
								
											
						</select>

					</div>
					<div class="form-group">
						<button class="btn btn-primary">Créer</button>
					</div>
				</form>
				</div>
			</div>
	</div>
	</div>
	
@stop
