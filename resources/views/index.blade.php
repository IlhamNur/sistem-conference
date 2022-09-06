@extends('layouts.app')

@section('container')

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> ICGCI <br><span>Universitas Sebelas Maret</span></h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">November 2, 2022. International Conference of Global Confucius Institute</p>
            <div id="timer" class="d-flex mb-3">
						  <div class="time" id="days"></div>
						  <div class="time pl-4" id="hours"></div>
						  <div class="time pl-4" id="minutes"></div>
						  <div class="time pl-4" id="seconds"></div>
						</div>
          </div>
        </div>
      </div>
    </div>

	<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>ICGCI 2022</h2>
			  <p>According to statistical data, Chinese people are scattered in various parts of the world which can be referred to as overseas Chinese. They come from ethnic groups in China. such as the Khek tribe. Minnan tribe. Cantonese tribe etc. These overseas Chinese brought Chinese culture which was passed on to their children and grandchildren. This of course affects the local community where they live usually there is a China Town. The diversity of the Chinese in each overseas area has its own unigueness. The Chinese culture that is acculturated to the local community needs to be studied and studied by researchers as a form of effort to preserve culture in the world.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Scopes</span>
            <h2 class="mb-4"><span>Our</span> Scopes</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name">Literature</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name">Culture</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name">Art</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/5.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name">Linguistics</p>
                  </div>
                </div>
              </div>
			  <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/6.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name">Education</p>
                  </div>
                </div>
              </div>
			  <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name">History</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<div class="row justify-content-center mt-5 pt-1">
		  <div class="speaker-wrap ftco-animate d-flex">
	        <div class="text-center pl-md-5">
	          <h2>“The Diversity and Uniqueness of Chinese Cultural Heritage Around the World”</h2>
	        </div>
	      </div>
		</div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">ICGCI 2022</span>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6 speaker text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Opening</span> Speech</h2>
        		<img src="images/speech-1.png" class="img-fluid" alt="Prof. Dr. Ir. Ahmad Yunus, M.S.">
        		<div class="text text-center pt-3">
        			<h3>Prof. Dr. Ir. Ahmad Yunus, M.S.</h3>
        			<span class="position">Vice Rector for Academic and student Affairs UNS</span>
        		</div>
        	</div>
			  <div class="col-md-6 speaker text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Welcoming</span> Speech</h2>
        		<img src="images/speech-2.png" class="img-fluid" alt="LU Yu, M.Sc">
        		<div class="text text-center pt-3">
        			<h3>LU Yu, M.Sc</h3>
        			<span class="position">Chinese Director of Confucius UNS</span>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">ICGCI 2022</span>
            <h2 class="mb-4"><span>Keynote</span> Speakers</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-12 ftco-animate">
        		<div class="carousel-testimony owl-carousel">
        			<div class="item">
        				<div class="speaker">
			        		<img src="images/speaker-1.png" class="img-fluid" alt="Prof. WANG Xuedong, Ph.D.">
			        		<div class="text text-center py-3">
			        			<h3>Prof. WANG Xuedong, Ph.D.</h3>
			        			<span class="position">Xihua University, China</span>
			        		</div>
			        	</div>
        			</div>

        			<div class="item">
        				<div class="speaker">
			        		<img src="images/speaker-2.png" class="img-fluid" alt="Dr. Bagus Sekar Alam, S.S., M.Si.">
			        		<div class="text text-center py-3">
			        			<h3>Dr. Bagus Sekar Alam, S.S., M.Si.</h3>
			        			<span class="position">Universitas Sebelas Maret, Indonesia</span>
			        		</div>
			        	</div>
        			</div>

        			<div class="item">
        				<div class="speaker">
			        		<img src="images/speaker-3.png" class="img-fluid" alt="GülhanımTaşkıran, Ph.D.">
			        		<div class="text text-center py-3">
			        			<h3>GülhanımTaşkıran, Ph.D.</h3>
			        			<span class="position">Erciyes University, Turkey</span>
			        		</div>
			        	</div>
        			</div>

        			<div class="item">
        				<div class="speaker">
			        		<img src="images/speaker-4.png" class="img-fluid" alt="Tanyarat Malasri, B.Ed., M.TCSOL.">
			        		<div class="text text-center py-3">
			        			<h3>Tanyarat Malasri, B.Ed., M.TCSOL.</h3>
			        			<span class="position">Phranakhon Si Ayutthaya Rajabhat University</span>
			        		</div>
			        	</div>
        			</div>

        		</div>
        	</div>
        </div>
    	</div>
    </section>

	<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">ICGCI 2022</span>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6 speaker text-center heading-section ftco-animate">
				<h2 class="mb-4"><span></span>Moderator</h2>
        		<img src="images/moderator.png" class="img-fluid" alt="Mr. Cavin F. Pamintuan, M.TCSOL">
        		<div class="text text-center pt-3">
        			<h3>Mr. Cavin F. Pamintuan, M.TCSOL</h3>
        			<span class="position">Philippines Director of Confucius Institute Angeles University Foundation</span>
        		</div>
        	</div>
			  <div class="col-md-6 speaker text-center heading-section ftco-animate">
				<h2 class="mb-4"><span></span>MC</h2>
        		<img src="images/mc.png" class="img-fluid" alt="LU Yu, M.Sc">
        		<div class="text text-center pt-3">
        			<h3>Safitri Bonea Palakkarisma, M.As</h3>
        			<span class="position">Staff for International Partnership and Mobility Program International Office UNS</span>
        		</div>
        	</div>
        </div>
		</div>
	</section>

	<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Dates</span>
            <h2 class="mb-4"><span>Important</span> Dates</h2>
          </div>
        </div>
        <div class="ftco-search">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">August 2nd -<span> September 2nd</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">September 3rd -<span> October 3rd </span></a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">October 11th -<span> October 15th </span></a>

	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">October 18th -<span> October 22nd</span></a>

	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">

	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="text pl-md-5">
	              			<h2><a href="#">Registration and Abstract</a></h2>
	              		</div>
	              	</div>
				  </div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="text pl-md-5">
	              			<h2><a href="#">Full Paper Deadline</a></h2>
	              		</div>
	              	</div>
				  </div>

	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="text pl-md-5">
	              			<h2><a href="#">Payment</a></h2>
	              		</div>
	              	</div>
				  </div>

	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="text pl-md-5">
	              			<h2><a href="#">Presenter Seminar Registration</a></h2>
	              		</div>
	              	</div>
				  </div>

	              </div>
	            </div>
	          </div>
	        </div>
        </div>
			</div>
	</section>

	<section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image:url(images/pamplet.jpeg);"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">ICGCI 2022</span>
		            <h2 class="mb-4"><span>Our</span> Pamphlet</h2>
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="justify-content-center align-items-center">
		              		<img src="images/hanban-150x150.png" alt="hanban" style="width: 200px; height: 100%">
		              	</div>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="justify-content-center align-items-center">
		              		<img src="images/logo-pusat-bahasa-mandarin-uns-200x200.png" alt="pusat bahasa mandarin" >
		              	</div>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="justify-content-center align-items-center">
		              		<img src="images/logo-CI-World-150x150.png" alt="ci" style="width: 200px; height: 100%">
		              	</div>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="justify-content-center align-items-center">
		              		<img src="images/logo-Xihua_University-200x200.png" alt="xihua">
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

	<section class="ftco-section services-section bg-light">
      <div class="container">
	  	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Manuscripts Publication</span>
            <h2 class="mb-4"><span>Indexing</span> Proceding Publisher</h2>
			<p>* All presented and selected manuscript will be published in:</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span><img src='images/pngegg-200x94.png' style="height: 141px;"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">International Proceeding (Scopus/WoS)</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span><img src='images/scopusdark_webbutton-removebg-preview-200x141.png'></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">International Journal (Scopus/WoS)</h3>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span><img src='images/sinta_logo.png'></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">National Journal Journal (Sinta)</h3>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>ICGCI 2022</h2>
              <p>Become Participant and Get the Benefit</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="/account" method="get" class="subscribe-form">
                    <div class="form-group d-flex justify-content-center">
                      <input type="submit" value="Register" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
@endsection