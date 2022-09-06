<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="icon/cropped-cropped-UNS-biru-300x300-1-1-32x32.png" sizes="32x32">
    <link rel="icon" href="icon/cropped-cropped-UNS-biru-300x300-1-1-192x192.png" sizes="192x192">
    <link rel="appale-touch-icon" href="icon/cropped-cropped-UNS-biru-300x300-1-1-180x180.png">

  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <!-- <a class="navbar-brand" href="/">Even<span>talk.</span></a> -->
        <a class="navbar-brand" href="/">
          <span>
            <img width="210" height="70" src="icon/icgci-logo-emas-2.png" alt="icgci logo emas 2" sizes="247px">
          </span>
        </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item {{ ($title === 'International Conference of Global Confucius Institute') ? 'active' : '' }}"><a href="/" class="nav-link">Home</a></li>
	          <!-- <li class="nav-item"><a href="/about" class="nav-link">About</a></li> -->
            <li class="nav-item dropdown {{ ($title === 'Scopes - International Conference of Global Confucius Institute') || ($title === 'Committee - International Conference of Global Confucius Institute') ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/about-scopes">Scopes</a>
                <a class="dropdown-item" href="/about-committee">Committee</a>
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
            <li class="nav-item dropdown {{ ($title === 'Payment Method - International Conference of Global Confucius Institute') || ($title === 'Registration/Submission - International Conference of Global Confucius Institute') ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Registration
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/registration/payment-method">Payment Method</a>
                <a class="dropdown-item" href="/registration/registration-submission">Registration/Submission</a>
              </div>
            </li>
            <li class="nav-item dropdown {{ ($title === 'Pamphlet - International Conference of Global Confucius Institute') || ($title === 'Template - International Conference of Global Confucius Institute') || ($title === 'Payment Guideline - International Conference of Global Confucius Institute') ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Download
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/download/pamphlet">Pamphlet</a>
                <a class="dropdown-item" href="/download/template">Template</a>
                <a class="dropdown-item" href="/download/payment-guideline">Payment Guideline</a>
              </div>
            </li>
	          <!-- <li class="nav-item"><a href="/speakers" class="nav-link">Speakers</a></li>
	          <li class="nav-item"><a href="/schedule" class="nav-link">Schedule</a></li>
	          <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li> -->
	          <li class="nav-item {{ ($title === 'Venue & Contact - International Conference of Global Confucius Institute') ? 'active' : '' }}"><a href="/venue-contact" class="nav-link">Venue & Contact</a></li>
	          <li class="nav-item {{ ($title === 'Account - International Conference of Global Confucius Institute') ? 'active' : '' }} cta mr-md-2"><a href="/account" class="nav-link">Account</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    @yield('container')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">ICGCI</h2>
              <p>International Conference of Global Confucius Institute</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="mailto:icgci.uns.ac.id"><span class="icon-envelope"></span></a></li>
                <li class="ftco-animate"><a href="mailto:icgci@mail.uns.ac.id"><span class="icon-envelope"></span></a></li>
                <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Speakers</a></li>
                <li><a href="#" class="py-2 d-block">Shcedule</a></li>
                <li><a href="#" class="py-2 d-block">Events</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <!-- <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div> -->
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Organized By</h2>
              <ul class="list-unstyled">
                <li class="py-2 d-block">Confucius Institute</li>
                <li class="py-2 d-block">Pusat Bahasa Mandarin</li>
                <li class="py-2 d-block">Universitas Sebelas Maret</li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Ir. Sutami No. 36, Kentingan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126</span></li>
	                <li><a href="tel:089629191999"><span class="icon icon-phone"></span><span class="text">+62 896-2919-1999 (Naning)</span></a></li>
                  <li><a href="tel:085817672485"><span class="icon icon-phone"></span><span class="text">+62 858-1767-2485 (Fitri)</span></a></li>
                  <li><a href="tel:085799417600"><span class="icon icon-phone"></span><span class="text">+62 857-9941-7600 (Evi)</span></a></li>
	                <li><a href="mailto:icgci@mail.uns.ac.id"><span class="icon icon-envelope"></span><span class="text">icgci@mail.uns.ac.id</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> | ICGCI - International Conference of Global Confucius Institute | <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>