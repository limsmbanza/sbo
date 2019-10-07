@extends('layouts.app')


@section('content')
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4>Tous les département</h4>
					<div class="col-md-6">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Nom du departement</th>
									<th>Date de création</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($departements as $departement)
									<td>{{$departement->name}}</td>
									<td>{{$departement->created_at}}</td>
									<td><a href="">Supprimer</a><br/>
									    <a href="">Voir les détails</a><br/>
									    <a href="{{route('departement.edit',['id'=>$departement->id])}}">Editer</a>
									</td>
									
								@endforeach
							</tbody>

						</table>
					</div>
				</div>
			</div>
		</div>
		
@endsection
