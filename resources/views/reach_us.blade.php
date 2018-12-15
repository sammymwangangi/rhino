@extends('layouts.home_page')

@section('welcome')
    <div class="container" style="margin-top: 20px">
        <div class="text-center">
            <h4 class="" style="letter-spacing: 15px;">
                <span><hr style="width: 395px;"></span>
                    Reach To The Rhinos
                <span><hr style="width: 395px;"></span>
            </h4>
        </div>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-6" >
               <div class="card bg-dark">
                <div class="card-body">
                    <form action="" method="post">
                       <div class="form-group">
                        <input type="text" class="form-control" required="" placeholder="Full Name">
                       </div>
                       <div class="form-group">
                        <input type="email" class="form-control" required placeholder="Email Address">
                       </div>
                       <div class="form-group">
                           <textarea class="form-control" required placeholder="Message" name="" id="" cols="30" rows="5"></textarea>
                       </div>
                       <div class="form-group">
                        <button class="btn btn-outline" type="reset">Clear</button>
                        <button class="btn btn-outline float-right" type="submit">Submit</button>                           
                       </div>
                    </form>
                </div>
               </div>
            </div>
            <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="text-center">
                                <div> <i class="fas fa-globe-africa" style="font-size: 45px"></i></div>
                                <div>
                                    10685B hazelhurst drive
                                    Suite 13204
                                    Houston Tx 77043
                                </div>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center">
                                <div> <i class="fas fa-envelope" style="font-size: 45px"></i></div>
                                <div>
                                 Send as a mail<br>
                                 rhinowatchglobal.@gmx.com
                                </div>
                             </p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center">
                                <div> <i class="fas fa-phone" style="font-size: 45px"></i></div>
                                <div>
                                 Make a call to :<br>
                                 +1832 324 3453
                                </div>
                             </p>
                        </div>
                    </div>
                    <p>
                        We always love to hear from our rhino supporters.
                        We are here to help and we’ll do our best to 
                        accommodate your enquiry.
                    </p>
            </div>
        </div>
    </div>
@endsection