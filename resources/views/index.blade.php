@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Choississez votre plan</h1>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
			
				@foreach($offers as $offer)	
				<div class="col-md-4">
					<h3>{{$offer->name}}</h3>
					<h3>{{$offer->price}}</h3>
					@foreach($offer->convertToArray() as $key => $characteristic)
					
						{{$key}}
						<br/>
						{{$characteristic}}
						<br/>	
					@endforeach
				 <a class="btn btn-primary" href="{{url('offer/subscribe/'.$offer->abbr)}}">Souscrire</a>		
				</div>
				
							
				@endforeach
		
			</div>

		</div>
	</div>
@stop
