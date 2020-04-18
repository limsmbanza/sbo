@extends('layouts.dash')




@section('content')

	<div class="main-panel">
          <div class="content-wrapper" style="background:#fbfbfb;">
        
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span style="color:#fff;">Site d'exploitation > création </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Aperçu <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
	    
	    <div class="row">
			<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Création du site d'exercice de gestion</h4>
                    <p class="card-description"> </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Année</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="année">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Etat</label>
                        <select class="form-control">
				<option value="1">Ouvert</option>
				<option value="0">Fermer</option>
			</select>
                      </div>
		      <div class="form-group">
				<label for="exampleInputEmail1">Devise</label>
       				<select class="form-control">
					<option value="0">USD</option>
					<option value="1">EUR</option>
					<option value="2">FC</option>
				</select>
                      </div>
	              <div class="form-group">
                       		 <label for="exampleInputEmail1">Mouvements des stocks <br/><br/>Journalisation</label>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2" style="background:#3B3B98;">Ajouter</button>
                      <button class="btn btn-light" >Annuler la création</button>
                    </form>
                  </div>
                </div>
              </div>

	      <div class="col-md-6 grid-margin stretch-card text-center">
			<div class="card" style="background:#fbfbfb;">
                  <div class="card-body">
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			  <p>Associer facilement un site d'exploitation à une année d'exploitation</p>
			 <a href="#" class="btn btn-gradient-primary mr-2" style="background:#3B3B98;">Budgetisation</a>
		  </div>
		  </div>
	      </div>
	    </div>
	</div>

	
@stop
