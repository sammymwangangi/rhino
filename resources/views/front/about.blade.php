@extends('layouts.home_page')

@section('welcome')
    <div class="thumbnail">
        <img src="{{asset('images/slide_2.jpeg')}}"  style="height: 250px" width="100%" alt="">
    </div>
    <section class="container">
            <div class="text-center">
                <h4 class="" style="letter-spacing: 15px;">
                    <span><hr style="width: 395px;"></span>
                    Our Story
                    <span><hr style="width: 395px;"></span>
                </h4>
            </div>
        <div class="row">
            <div class="col-md-6">
                    In 1970, a rhino poaching epidemic began that hit black rhino populations severely. The crisis continued to deplete populations right through to the early 1990s, so much so that by 1993, there were only 2,475 black rhinos left in the world.
                    <br>
                    Our founders and rhino enthusiasts, Dave Stirling and Johnny Roberts took themselves on a ‘Rhino Scramble’ across Africa, raising money and meeting many rhino conservationists along the way.
                    <br>
                    Filled with inspiration from their journey, the two returned to the UK, started Save the Rhino and began raising more money for rhino conservation. In keeping with the times, they found that their most popular way 
                    of raising money was a good old-fashioned rave.
                    <br>
                    <div style="margin-left: 200px;margin-top: 20px">
                        <a href="{{url('/shop')}}" class="btn btn-success">
                            Donate
                        </a>
                    </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('images/baby_rhino.jpeg')}}" class="mx-auto float-center img-fluid" style="height: 400px" alt="" >
            </div>
        </div>
    </section>
@endsection