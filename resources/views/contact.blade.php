@extends('layouts.app')

@section('container')
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Venue & Contact</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Venue & Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> Jl. Ir. Sutami No. 36, Kentingan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://089629191999">+62 896-2919-1999</a> (Naning ) | <a href="tel://085817672485">+62 858-1767-2485</a> (Fitri) | <a href="tel://0885799417600">+62 857-9941-7600</a> (Evi)</p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:icgci@mail.uns.ac.id">icgci@mail.uns.ac.id</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website:</span> <a href="icgci.uns.ac.id">icgci.uns.ac.id</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white">
              <iframe
                  style="border: 0;"
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d506221.26758651267!2d110.874343!3d-7.590903000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbda63b32997616ad!2sSebelas%20Maret%20University!5e0!3m2!1sen!2sus!4v1629285564716!5m2!1sen!2sus"
                  width="100%"
                  height="100%"
                  allowfullscreen="allowfullscreen"
              ></iframe>;
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection