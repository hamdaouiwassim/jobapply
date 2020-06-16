<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jobpply</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("css/open-iconic-bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/animate.css")}}">
    
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css")}}">

    <link rel="stylesheet" href="{{ asset("css/aos.css")}}">

    <link rel="stylesheet" href="{{ asset("css/ionicons.min.css")}}">

    <link rel="stylesheet" href="{{ asset("css/bootstrap-datepicker.css")}}">
    <link rel="stylesheet" href="{{ asset("css/jquery.timepicker.css")}}">

    
    <link rel="stylesheet" href="{{ asset("css/flaticon.css")}}">
    <link rel="stylesheet" href="{{ asset("css/icomoon.css")}}">
    <link rel="stylesheet" href="{{ asset("css/style.css")}}">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Jobpply</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
	           <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
	          
              @if (Route::has('login'))
              
                  @auth
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/home') }}">Home</a>
                  </li>
                  @else
                  <li class="nav-item cta mr-md-1">
                      <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                      @if (Route::has('register'))
                      <li class="nav-item cta cta-colored">
                          <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                      @endif
                  @endauth
            @endif
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="ftco-section img" style="background-image: url({{asset('images/bg_1.jpg')}}); background-position: top center;">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="browse-job p-5">
                      
                        <hr />
                        <h2> Liste des societes </h2>
                        <hr />
                        <div class="row">

                        
                        @foreach ($societes as $societe)
                            <div class="col-md-4">

                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('/images/'.$societe->society->avatar)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title"><span style="color:orange"> {{ $societe->name }} </span>  </h5>
                                      <p class="card-text">{{ $societe->society->description }}</p>
                                      <a href="/societe/{{ $societe->society->id }}" class="btn btn-primary">Consulter</a>
                                    </div>
                                  </div>


                               
                            </div>
                                                                
                        @endforeach
                    </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    
    


		


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Employers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post a Job</a></li>
                <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
                <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Faq</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Workers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
                <li><a href="#" class="py-2 d-block">Job Search</a></li>
                <li><a href="#" class="py-2 d-block">Emploer Search</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset("js/jquery.min.js")}}"></script>
  <script src="{{ asset("js/jquery-migrate-3.0.1.min.js")}}"></script>
  <script src="{{ asset("js/popper.min.js")}}"></script>
  <script src="{{ asset("js/bootstrap.min.js")}}"></script>
  <script src="{{ asset("js/jquery.easing.1.3.js")}}"></script>
  <script src="{{ asset("js/jquery.waypoints.min.js")}}"></script>
  <script src="{{ asset("js/jquery.stellar.min.js")}}"></script>
  <script src="{{ asset("js/owl.carousel.min.js")}}"></script>
  <script src="{{ asset("js/jquery.magnific-popup.min.js")}}"></script>
  <script src="{{ asset("js/aos.js")}}"></script>
  <script src="{{ asset("js/jquery.animateNumber.min.js")}}"></script>
  <script src="{{ asset("js/scrollax.min.js")}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset("js/google-map.js")}}"></script>
  <script src="{{ asset("js/main.js")}}"></script>
    
  </body>
</html>
            
               