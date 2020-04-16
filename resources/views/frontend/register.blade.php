
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Tivo - SaaS App HTML Landing Page Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('css/frontend/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/custom.css') }}" rel="stylesheet">
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top" style="background:#3B3B98;">
@if($errors->any())
	
	
@endif
<!------ Include the above in your HEAD tag ---------->

<div class="container register" style="background:transparent">
                <div class="row">
                    <div class="col-md-3 register-left" >
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Bienvenue!</h3>
                        <p>Avec sbo,votre entreprise,desormais à votre porté mains</p>
                        <input type="submit" name="" onclick="redirection()" value="Se connecter" style="padding-top:7px;padding-bottom:7px;"/><br/>
                    </div>
                    <div class="col-md-9 register-right" style=" box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);background:#fff;">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="background:#3B3B98 !important;">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">utilisateur</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">entreprise</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent" >
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Ouvrir un compte</h3>
				<form method="post" action="{{ route('register') }}">
				{{ csrf_field() }}
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="nom *" value="{{ old('name') }}" name="name" />
					 @if ($errors->has('name'))
		                            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $errors->first('name') }}</strong>
		                            </span>
		                        @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="email *" value="{{ old('email') }}" name="email" />
					 @if ($errors->has('email'))
		                            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $errors->first('email') }}</strong>
		                            </span>
		                        @endif
                                        </div>
					<div class="form-group">
                                            <input type="text" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" placeholder="téléphone *" value="{{ old('telephone') }}" name="telephone" />
					 @if ($errors->has('telephone'))
		                            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $errors->first('telephone') }}</strong>
		                            </span>
		                        @endif
                                        </div>
					<div class="form-group">
                                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="mot de passe *" value="{{ old('password') }}" name="password" />
					 @if ($errors->has('password'))
		                            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $errors->first('password') }}</strong>
		                            </span>
		                        @endif
                                        </div>
					<div class="form-group">
                                            <input type="password" class="form-control" placeholder="confirmation du mot de passe *" value="" name="password_confirmation" 		 />
                                        </div>



                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control{{ $errors->has('denomination') ? ' is-invalid' : '' }}" placeholder="denomination *" value="{{ old('name') }}" name="denomination" />
					 @if ($errors->has('denomination'))
		                            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $errors->first('denomination') }}</strong>
		                            </span>
		                        @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  class="form-control{{ $errors->has('denomination') ? ' is-invalid' : '' }}" placeholder="coordonnée*" value="{{ old('coordonnee') }}" name="coordonnee"/>
					 @if ($errors->has('coordonnee'))
		                            <span class="invalid-feedback" role="alert">
		                                <strong>{{ $errors->first('coordonnee') }}</strong>
		                            </span>
		                        @endif
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="secteur">
                                                <option class="hidden"  selected disabled>Veuillez choisir un secteur d'activité</option>
                                                <option value="1">Télécommunication et nouvelles technologies</option>
						<option value="2">Transport</option>
						<option value="3">Agroalimentaire</option>
						<option value="4">Minier</option>
                                            </select>
                                        </div>
                                     
                                        <input type="submit" class="btnRegister"  value="Register" style="background:#3B3B98 !important;"/>
                                    </div>
				</form>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Ouvrir un compte</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register" style="background:#3B3B98 !important;"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




    <!-- Scripts -->
    <script src="{{ asset('js/frontend/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('js/frontend/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('js/frontend/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script>
	function redirection()
        {
		window.location="{{ url('/login') }}";
	}
    </script>
</body>
</html>




