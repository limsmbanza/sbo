@extends('layouts.app')



@section('content')

	<div class="container">
		<div class="col-md-12">
			<table>
				<tr>
					<th>Nom</th>	
					<th>Postnom</th>
					<th>Prenom</th>
					<th>adresse</th>
					<th>Téléphone</th>
					<th>Action</th>
				</tr>
				
				@foreach($stakeHoldersByD as $stakeHolder)
					<tr>
						<td>{{$stakeHolder->name}}</td>
						<td>{{$stakeHolder->lastname}}</td>
						<td>{{$stakeHolder->firstname}}</td>
						<td>{{$stakeHolder->adresse}}</td>
						<td>{{$stakeHolder->phone_number}}</td>
						<td><a href="{{route('stakeholder.edit',['id'=>$stakeHolder->id])}}">Modifier</a></td>
						<td><a href="#">Supprimer</a></td>
					
					</tr>
					

				@endforeach 
			</table>
		</div>
	</div>

@stop



