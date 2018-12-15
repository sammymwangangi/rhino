@extends('layouts.home_page')
@section('welcome')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images/slide1.jpg')}}"  class="img-fluid" style="height:600px;" alt="First slide">
            <div class="carousel-caption d-none d-md-block mx-auto" 
            style="background-color: #000;opacity: 0.5;margin-bottom: 50px;font-weight: bold;font-size:25px;width:600px;">
                <h3 class="text-white"><strong>Become a member and be part of the <br> movement to save the rhino.</strong></h3>
                <p>
                    <a style="color: #000;background-color: #6eff00;" href="{{url('/login')}}" class="btn btn-primary">
                        Get Started
                    </a>
                </p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/slide_2.jpeg')}}" class="img-fluid" style="height:600px" alt="Second slide">
            <div class="carousel-caption d-none d-md-block mx-auto" 
            style="background-color: #000;opacity: 0.5;margin-bottom: 50px;font-weight: bold;font-size:25px;width:600px;">
                <h3 class="text-white">
                    <strong>
                            Success stories show the real impact of 
                            effective conservation programmes at a time when rhinos are under constant threat. 
                            We’re excited to see what more can come from the Trust’s continued efforts.
                    </strong></h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/slide_3.jpeg')}}" class="img-fluid" style="height:600px" alt="Third slide">
            <div class="carousel-caption d-none d-md-block mx-auto" 
            style="background-color: #000;opacity: 0.5;margin-bottom: 50px;font-weight: bold;font-size:25px;width:600px;">
                <h3 class="text-white">
                    <strong>
                            With your help, we are already making a difference.
                            Without our members, we could not fund the crucial fieldwork that is needed to protect 
                            threatened rhino species across Africa and Asia.
                    </strong></h3>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <section class="container">
          <div class="text-center">
              <h4 class="" style="letter-spacing: 15px;">
                  <span><hr style="width: 395px;"></span>
                WE SAVE RHINOS
                <span><hr style="width: 395px;"></span>
            </h4>
          </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="zoom-effect-container">
                        <div class="image-card">
                            <img src="{{asset('images/rangers.jpg')}}" class="img-fluid" alt="">
                        </div>    
                    </div>
                    <div class="card-body bg-dark text-white">
                        <h3 class="">Supporting rangers</h3>
                        <p>
                            We ensure that ranger
                            teams have the equipment, training and facilities they need to stay safe and protect wildlife.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img src="{{asset('images/community.jpeg')}}" style="height: 209px;width: 348px;" class="img-fluid" alt="">
                            </div>    
                        </div>                    <div class="card-body bg-dark text-white">
                        <h3 class="">Involving communities</h3>
                        <p>
                            We support community-led conservation, so that 
                            people living near rhinos are inspired 
                            to protect wildlife.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img src="{{asset('images/poaching.jpg')}}" class="img-fluid" alt="">
                            </div>    
                        </div>               
                        <div class="card-body bg-dark text-white">
                        <h3 class="">Tackling illegal trade</h3>
                        <p>
                            We are committed to addressing the consumer 
                            demand for rhino horn and changing consumer 
                            behaviour across South East Asia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section>
          <!-- Second Parallax Section -->
        <div class="jumbotron paral paralsec1 text-center">
            <h1 class="display-3 ">Make a donation to <br> Save the Rhino</h1>
            <p class="lead">Rhino Watch will allow the redusing <br> number of rhino to get attention and also reaching <br> out to help the Rhino.</p>
            <p class="lead">
            <a class="btn btn-warning btn-lg btn-md" href="{{url('/shop')}}" role="button">Donate</a>
            </p>
        </div>
      </section>
      <section class="container" style="margin-top:70px;">
          <div class="row">
              <div class="col-md-6">
                  <div class="text-center">
                      <h3>Why Rhino Watch ?</h3>
                      <p>
                        “The rhino and the elephant were great charismatic animals 
                        that one could raise money for because they were well known 
                        and people knew they were endangered…but the problem was, not 
                        through any malice or ill practice, the money wasn’t being spent 
                        in all the right areas. 
                        That is where Johnny and I stepped in to set up a charity.”
                      </p>
                      <p class="text-center text-muted">
                        Dave Stirling, Founder Director and Trustee, Save the Rhino International.
                      </p>
                  </div>
                  <a href="{{url('/about')}}" class="btn btn-block btn-dark">
                      Read More ...
                  </a>
              </div>
              <div class="col-md-6">
                  <img src="{{asset('images/rhino-baby.jpg')}}" alt="" class="img-fluid float-right" style="height: 450px">
              </div>
          </div>
      </section>
@endsection