@extends('layouts.app')


@section('content')
	
	<div class="container">
			<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					@if (session('departement'))
					    <div class="alert alert-success">
        					{{ session('departement') }}
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
				<h4>Création du departement</h4>
				<form method="post" action="{{route('departement.store')}}">
					@csrf
					<div class="form-group">
						<label class="control-label">Nom du departement</label>	
						<input type="text" class="form-control" name="name"/>
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
