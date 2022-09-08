@extends('layouts.app')

@section('container')

	<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Scopes</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2">About <i class="ion-ios-arrow-forward"></i></span><span>Scopes <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Scopes</span>
            <h2 class="mb-4"><span>Event</span> Scopes</h2>
          </div>
        </div>
        <div class="ftco-search">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">History <span>& Culture</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Literature <span>& Art</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Linguistics<span></span></a>

	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Education<span></span></a>

	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">

	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="text pl-md-5">
	              			<h2>Reviewer</h2>
	              			<p>Research on the history of the arrival of the Chinese in the local area.</p>
							<p>Research on the culture inherited in the local area, such as eating habits, way of life, socializing, etc.</p>
	              			<h3 class="speaker-name">&mdash; Dr. Susanto, M.Hum. <span class="position">Head of History Study Program</span></h3>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="text pl-md-5">
						  <h2>Reviewer</h2>
	              			<p>Research on the study of Chinese literature in the local area, for example in Indonesia, there is a work of Peranakan Chinese writer, Koo Phing Hoo.</p>
	              			<h3 class="speaker-name">&mdash; Dr. Dwi Susanto, S.S., M.Hum. <span class="position">Head of Indonesian Language Study Program</span></h3>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="text pl-md-5">
						  <h2>Reviewer</h2>
							<p>Research on Linguistics, where there are Chinese vocabulary that is absorbed by the local language.</p>
	              			<h3 class="speaker-name">&mdash; Dr. FX Sawardi, M.Hum. <span class="position">Head of Masters Degree in Linguistics</span></h3>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="text pl-md-5">
						  <h2>Reviewer</h2>
							<p>Research on the development of Chinese language teaching in the local area.</p>
	              			<h3 class="speaker-name">&mdash; Soen AiLing. <span class="position"></span></h3>
	              		</div>
	              	</div>
	              </div>
	            </div>
	          </div>
	        </div>
        </div>
			</div>
	</section>

@endsection