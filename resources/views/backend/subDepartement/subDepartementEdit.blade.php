@extends('layouts.app')


@section('content')

		<div class="container">
			<div class="row">
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
							<form method="post" action="{{route('departement.update',['id'=>$departement])}}">
								@method('PUT')
								@csrf
								<div class="form-group">
									<label class="label-control">Nom du departement</label>
									<input type="text" name="name" class="form-control"/>
								</div>
								<div class="form-group">
									<input type="hidden" name="id" value="{{$departement}}"/>
								</div>
								<div class="form-group">
									<button class="btn btn-primary">Créer</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	
		</div>

@endsection
