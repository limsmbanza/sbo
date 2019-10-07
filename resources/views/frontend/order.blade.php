@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">	
			<div class="col-md-12">
				<h2>Création du compte</h2>
				<form method="post" action="">
					@csrf
					
					<div class="form-group">
						<label class="control-label">Email</label>
						<input type="text" class="form-control"/>
					</div>
					
				</form>
			</div>
		</div>
	</div>

@stop
