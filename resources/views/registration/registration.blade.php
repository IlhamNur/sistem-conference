@extends('layouts.app')

@section('container')

	<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Registration/Submission</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2">Registration <i class="ion-ios-arrow-forward"></i></span> <span>Registration/Submission <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Registration</span>
            <h2 class="mb-1"><span>Registration/Submission</span></h2>
          </div>
        </div>
        <div class="row d-flex justify-content-center mb-5 pb-3">
	        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Participant</h2>
	            <div class="media block-6 services d-block">
                    <div class="icon"><span class="icon-paste"></span></div>
	            <span class="excerpt d-block">If you want to register as a <strong>participant</strong> please click the button below</span>
                </div>
	            <a href="https://forms.gle/37oMALhhYtcWjwR68" class="btn btn-primary d-block px-2 py-3">Registration</a>
	            </div>
	          </div>
	        </div>
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Participant</h2>
	            <div class="media block-6 services d-block">
                    <div class="icon"><span class="icon-copy"></span></div>
	            <span class="excerpt d-block">If you want to <strong>submit a paper</strong>, please click the button below<br><br></span>
                </div>
	            <a href="https://theconference.id/index.php/icgci/icgci2021" class="btn btn-primary d-block px-2 py-3">Submission</a>
	            </div>
	          </div>
	        </div>
	    </div>
    </section>

@endsection