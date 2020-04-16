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
    <link href="{{ asset('css/frontend/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('css/frontend/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('css/frontend/styles.css') }}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" style="background:#fff;height:67px;padding-right:90px;padding-left:90px;">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" style="color:#3B3B98;" href="#header">A<span style="text-transform:lowercase;">ccueil</span> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" style="color:#3B3B98;" href="#features">F<span style="text-transform:lowercase;">onctionnalités</span></a>
                    </li>
		      <li class="nav-item" style="text-transform: capitalize !important;">
                        <a class="nav-link page-scroll" style="color:#3B3B98;" href="#details">C<span style="text-transform:lowercase;">ontact</span></a>
                    </li>
                    <li class="nav-item" style="text-transform: capitalize !important;">
                        <a class="nav-link page-scroll" style="color:#3B3B98;" href="#details">Q<span style="text-transform:lowercase;">ui sommes-nous</span></a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" style="background:#3B3B98;border-radius:0;padding:20px 20px;" href="{{ url('/login') }}">Se connecter</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header" style="background:#fff;">
        <div class="header-content" style="height:575px;">
            <div class="container">
                <div class="row" style="">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1 style="color:#3B3B98;">SaaS App HTML Landing Page</h1>
                            <p class="p-large" style="color:#6f5858;">Use Tivo to automate your marketing actions in order to reach a much larger audience</p>
                            <a class="btn-solid-lg page-scroll" href="{{ url('register') }}" style="background:#fff;color:#3B3B98;border:2px solid #3B3B98;">SIGN UP</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="{{ asset('img/undraw_data_trends_b0wg.png') }}" alt="alternative">
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->

    <!-- end of header -->
	

    <!-- Customers -->
    <div class="slider-1">
        <div class="container" style="padding-top:-6%;">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Image Slider -->
                    <div class="slider-container" style="box-shadow:0 0 25px rgba(0, 0, 0, 0.3);padding:20px 6px;border-radius:6px;">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('img/customer-logo-1.png') }}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('img/customer-logo-2.png') }}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('img/customer-logo-3.png') }}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('img/customer-logo-4.png') }}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('img/customer-logo-5.png') }}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('img/customer-logo-6.png') }}" alt="alternative">
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->


     <!-- Details -->
    <div id="details" class="basic-1" style="background:#f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Now Is The Time To Upgrade Your Marketing Solution</h2>
                        <p>Target the right customers for your business with the help of Tivo's patented segmentation technology and deploy efficient marketing campaigns. Keep your customers happy and loyal.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Understand customers and meet their requirements</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Targeted client base with Tivo's efficient technology</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg page-scroll" href="sign-up.html">SIGN UP</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('img/details.png') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->


	

    <!-- Features -->
    <div id="features" class="tabs" style="background:#fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">Fonctionnalités</div>
                    <h2 class="h2-heading">Marketing Automation</h2>
                    <p class="p-heading">Take your business strategy to the next level and automatize your marketing tasks to save time for product development. Tivo can provide results in less than 2 weeks</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-list"></i>List Builder</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-envelope-open-text"></i>Campaigns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-chart-bar"></i>Analytics</a>
                        </li>
			   
                    </ul>
                    <!-- end of tabs links -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="{{ asset('img/undraw_features_overview_jg7a.png') }}" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>List Building Is Easier Than Ever</h3>
                                        <p>It's very easy to start using Tivo. You just need to fill out and submit the <a class="blue page-scroll" href="sign-up.html">Sign Up Form</a> and you will receive access to the app and all of its features in no more than 24h.</p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Create and embed on websites newsletter sign up forms</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Manage forms and landing pages for your services</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Add and remove subscribers using the control panel</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" style="background:#3B3B98;border:0;" href="#details-lightbox-1">LIGHTBOX</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="{{ asset('img/undraw_server_status_5pbv.png') }}" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Campaigns Monitoring Tools</h3>
                                        <p>Campaigns monitoring is a feature we've developed since the beginning because it's at the core of Tivo and basically to any marketing activity focused on results.</p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Easily plan campaigns and schedule their starting date</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Start campaigns and follow their evolution closely</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Evaluate campaign results and optimize future actions</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2" style="background:#3B3B98;border:0;">LIGHTBOX</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="{{ asset('img/undraw_setup_analytics_8qkl.png') }}" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Analytics Control Panel</h3>
                                        <p>Analytics control  panel is important for every marketing team so it's beed implemented from the begging and designed to produce reports based on very little input information.</p>
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">If you set it up correctly you will get acces to great intel</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Easy to integrate in your websites and landing pages</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">The generated reports are important for your strategy</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-3" style="background:#3B3B98;border:0;">LIGHTBOX</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->
                  
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->



	<br><br>

	   <!-- Details -->
    <div id="details" class="basic-1" style="background:#f9f9f9;">
        <div class="container">
            <div class="row">
          
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('img/details.png') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->

		      <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Now Is The Time To Upgrade Your Marketing Solution</h2>
                        <p>Target the right customers for your business with the help of Tivo's patented segmentation technology and deploy efficient marketing campaigns. Keep your customers happy and loyal.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Understand customers and meet their requirements</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Targeted client base with Tivo's efficient technology</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg page-scroll" href="sign-up.html">SIGN UP</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->





	
    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">      
                    
                    <!-- Text Slider -->
                    <div class="slider-container">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="{{ asset('img/testimonial-1.jpg') }}" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">I started to use Tivo with the free trial about a year ago and never stopped since then. It does all the repeating marketing tasks and allows me to focus on core development activities like new product research and design. I love it and recommend it to everyone.</div>
                                        <div class="testimonial-author">Jude Thorn - Online Marketer</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="{{ asset('img/testimonial-2.jpg') }}" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">Awesome features for the money. I never thought such a low ammount of money would bring me so many leads per month. Before Tivo I used the services of an agency which cost 10x more and delivered far less. Highly recommended to marketers focused on results.</div>
                                        <div class="testimonial-author">Roy Smith - Developer</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="{{ asset('img/testimonial-3.jpg') }}" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">Tivo is the best marketing automation app for small and medium sized business. It understands the mindset of young entrepreneurs and provides the necessary data for wise marketing decisions. Just give it a try and you will definitely not regret spending your time.</div>
                                        <div class="testimonial-author">Marsha Singer - Online Marketer</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="{{ asset('img/testimonial-4.jpg') }}" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">Tivo is one of the greatest marketing automation apps out there. I especially love the Reporting Tools module because it gives me such a great amount of information based on little amounts of input gathered in just few weeks of light weight usage. Recommended!</div>
                                        <div class="testimonial-author">Ronda Louis - Online Marketer</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->
                            
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->
	







    <!-- Footer -->
 
    <div class="footer" style="background:#f5f5f5;color:#3B3B98;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4 style="color:#3B3B98">About Tivo</h4>
                        <p class="p-small" style="color:#3B3B98">We're passionate about designing and developing one of the best marketing apps in the market</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4 style="color:#3B3B98">Important Links</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body" style="color:#3B3B98">Our business partners <a class="white" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body" style="color:#3B3B98">Read our <a class="white" href="terms-conditions.html" style="color:#3B3B98">Terms & Conditions</a>, <a class="white" href="privacy-policy.html" style="color:#3B3B98">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4 style="color:#3B3B98">Contact</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body" style="color:#3B3B98">22 Innovative, San Francisco, CA 94043, US</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white" href="mailto:contact@tivo.com" style="color:#3B3B98">contact@tivo.com</a> <i class="fas fa-globe"></i><a class="white" href="#your-link" style="color:#3B3B98">www.tivo.com</a></div>
                            </li>
                        </ul>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright" style="background:#f5f5f5;color:#3B3B98 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small" style="color:#3B3B98">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="{{ asset('js/frontend/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('js/frontend/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('js/frontend/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('js/frontend/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('js/frontend/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('js/frontend/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('js/frontend/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('js/frontend/scripts.js') }}"></script> <!-- Custom scripts -->
</body>
</html>
