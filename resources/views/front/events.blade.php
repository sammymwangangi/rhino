@extends('layouts.home_page')

@section('welcome')
    <div class="container">
            <div class="text-center">
                <h4 class="" style="letter-spacing: 15px;">
                    <span><hr style="width: 395px;"></span>
                    Rhino Watch Global Events
                    <span><hr style="width: 395px;"></span>
                </h4>
                <p class="text-muted">Release your inner rhino and take part in an event with us.</p>
            </div>

            <div class="row">
                <div class="col-md-4" style="margin: 10px">
                        <div class="card">
                            <div class="card-header">
                                Santa in the City
                            </div>
                                <img src="{{asset('images/event.jpeg')}}"  class="img-fluid" alt="">
                            <div class="card-footer">
                                You thought it couldn’t get better! Once again Santa 
                                in the City offers a truly iconic route! No previous
                                    experience is needed for a 5k like this.
                            </div>
                        </div>
                </div>
            </div>
    </div>
@endsection