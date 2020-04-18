@extends('layouts.dash')




@section('content')

	<div class="main-panel">
          <div class="content-wrapper" style="background:#fbfbfb;">
        
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span style="color:#fff;">Site d'exploitation > liste </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Aperçu <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
	
	   <div class="row">
		<div class="col-lg-8 grid-margin stretch-card">
                <div class="card"  style="">
                  <div class="card-body">
                    <h4 class="card-title">Site d'exploitation</h4>
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th> User </th>
                          <th> First name </th>
                          <th> Progress </th>
                          <th> Amount </th>
                          <th> Deadline </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image">
                          </td>
                          <td> Herman Beck </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
       			     <tr>
                          <td class="py-1">
                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image">
                          </td>
                          <td> Herman Beck </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
       
			     <tr>
                          <td class="py-1">
                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image">
                          </td>
                          <td> Herman Beck </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
	      
	      
		<div class="col-lg-4 grid-margin stretch-card">
                <div class="card"  style="">
			 <div class="card-body">
                   		 <h4 class="card-title">Quelques détails du site d'exploitation</h4>
			</div>
		</div>

		</div>

	  </div>

	</div>
	
 @stop



