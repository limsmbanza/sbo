@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Cher client,Veuillez suivre ce lien afin de procéder à la validation de votre compte</h2>
				<a href="{{url('/verify/',['emailToken'=>$emailToken])}}">Procéder à la validation</a>
			</div>
		</div>
	</div>
	

@endsection
