<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="shortcut icon" type="image/png" href="{{asset('images/rhino-watch.png')}}"/>
            <title>Rhino Watch Global</title>

            <!-- Scripts -->
            <script src="{{ asset('js/js1/app.js') }}" defer></script>


       <!-- JS From Vivid -->


    <script src="{{asset('dist/js/jquery.scrollUp.min.js')}}"></script>




    <script src="{{asset('dist/js/price-range.js')}}"></script>

  

    <script src="{{asset('dist/js/jquery.prettyPhoto.js')}}"></script>

            <!-- Fonts -->
            <link rel="dns-prefetch" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
            <!-- Styles -->
            <link href="{{ asset('css/css1/app.css') }}" rel="stylesheet">
            <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">

       <style>
body{

    overflow-x: hidden;
}
/* .zoom-effect-container {
    float: left;
    position: relative;
    width: 640px;
    height: 360px;
    margin: 0 auto;
    overflow: hidden;
} */
{{--
.image-card {
  position: absolute;
  top: 0;
  left: 0;

} --}}

  * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }

.image-card img {
  -webkit-transition: 0.4s ease;
  transition: 0.4s ease;
}

.zoom-effect-container:hover .image-card img {
  -webkit-transform: scale(1.08);
  transform: scale(1.08);
}
/* Header Parallax Element Style*/
.paral {
min-height: 600px;
background-attachment: fixed;
background-size: cover;
background-position: 50% 50%;
}

/* Paragrapgh for Parallax Section */
.paral p {
font-size: 24px;
color:#f5f5f5;
text-align: center;
line-height: 60px;
}

/* Heading for Parallax Section */
.paral h1 {
color: rgba(255, 255, 255, 0.8);
font-size: 60px;
font-weight: bold;
text-align: center;
padding-top: 60px;
line-height: 100px;
}

/* Image for Parallax Section */
.paralsec1 {
background-image: url("{{asset('images/parallax.jpeg')}}");
background-repeat: no-repeat;
/* opacity: 0.5; */
filter: gray; /* IE5+ */
      -webkit-filter: grayscale(1); /* Webkit Nightlies & Chrome Canary */
      -webkit-transition: all .8s ease-in-out;
}


/* Add more images for more sections */

/* Remove Bottom Margin from Jumbotron */
.jumbotron{margin-bottom: 0;}

/* Footer */
.wn-footer {
padding: 2.5rem 0;
text-align: center;
color: white;
background-color: #607D8B;
border-top: .05rem solid #e5e5e5;
}

.wn-footer a {
color: yellow;
}
       </style>
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent text-dark mb-3">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('images/rhino-watch.png')}}" style="height: 45px;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('shop')}}" style="background:red; color:#fff" class="nav-link">Donate</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{url('events')}}">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}">Reach Us</a>
                    </li>
                  </ul>
                    <ul class="navbar-nav ml-auto pr-4" style="align-items: center">

                      <!-- Start Of Dropdown of Cart Iems -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge badge-secondary badge-pill"><i class="fa fa-shopping-cart"></i>{{Cart::count()}}</span></a>
                          <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <div class="">
                          <h4 class="justify-content-md-center align-items-center mb-3">
                            <span class="badge badge-secondary badge-pill"><i class="fa fa-shopping-cart"></i>{{Cart::count()}}</span>
                            <span class="text-muted">Total: ({{Cart::total()}})</span>
                          </h4>
                          <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your cart</span>
                          </h4>
                          <ul class="list-group mb-3">
                            <?php $cartItems = Cart::content();?>
                                @foreach($cartItems as $cartItem)
                            <li class="list-group-item d-flex justify-content-between">
                              <div class="col-md-6">
                                <div>
                                  <img  class="dropdownimage" src="{{url('images',$cartItem->options->img)}}"  class="img-responsive dropdownimage" style="width:50px" />
                                </div>
                              </div>

                              <div class="col-md-6">
                                <h6 class="my-0">Name: {{$cartItem->name}}</h6>
                                <span class="text-muted">Price: {{$cartItem->price}}</span>
                                </br>
                                <small class="text-muted foat-right">Qty: {{$cartItem->qty}}</small>
                              </div>
                            </li>
                             @endforeach
                            <li class="list-group-item d-flex justify-content-between">
                              <a class="btn btn-primary" href="{{url('/')}}/checkout">Check Out</a>
                              <a class="btn btn-primary float-right" href="{{url('/cart')}}">View Cart
                              </a>
                            </li> 
                          </ul>
                        </li>

                      <!-- End of Dropdown Items Cart -->

                      <li class="nav-item dropdown">
                          {{-- <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a> --}}
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php  $cats = DB::table('categories')->get(); ?>
                               @foreach($cats as $cat)
                            <a class="dropdown-item" href="{{url('/')}}/products/{{$cat->name}}">{{ucwords($cat->name)}}</a>

                             @endforeach
                        
                          </div>
                        </li>

                        {{-- <li class="nav-item" style="margin-right: 10px;font-size:20px"><i class="fab fa-facebook"></i></li>
                        <li class="nav-item" style="margin-right: 10px;font-size:20px"><i class="fab fa-twitter-square"></i></li>
                        <li class="nav-item" style="margin-right: 10px;font-size:20px;"><i class="fab fa-google-plus"></i></li> --}}

                        @if (Auth::check())
                        <li class="nav-item dropdown">
                          {{-- <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a> --}}
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/')}}/profile">
                              Profile
                            </a>
                            <a class="dropdown-item" href="{{url('/logout')}}">
                              Logout
                            </a>
                          </div>
                        </li>
                        @else
                        <li class="nav-item">
                          <a href="{{url('/login')}}" class="nav-link">Login</a>
                        </li>/
                        <li class="nav-item">
                          <a href="{{url('/register')}}" class="nav-link">Register</a>
                        </li>
                        @endif

                    </ul>
                </div>
                </nav>

            <div class="content">
                    @yield('welcome')
            </div>

       <footer>
         <div class="bg-dark text-white">
             <div class="row" style="padding-top: 45px;
             padding-bottom: 20px;
             margin-top: 50px;">

                      <div class="col-sm-12 col-md-7 d-flex p-0 pt-sm-1 pb-sm-2">
                <div class="col col-sm-2 pr-4 pl-0 d-none d-lg-block bg-light" style="height: 45px;">
                  <img class="container-fluid" src="{{asset('images/rhino-watch.png')}}" alt="Save The Rhino">
                </div>
                <div class="col-12 col-lg-10 px-0">
                              <div id="text-4" class="">	
                                <div class="textwidget"><p>(Main)Rhino Watch Global-10685B hazelhurst drive
                                        Suite 13204
                                        Houston Tx 77043<br>
                                  <span class="s1"><a href="tel:+1832 324 3453">+1832 324 3453</a> |&nbsp;&nbsp;</span>
                                  <a href="mailto:info@savetherhino.org">
                                      <span class="s1">rhinowatchglobal.@gmx.com</span></a></p>
                                  <p class="p1"><span class="s1">(Secondary)Save the Rhino, Unit 3, Coach House Mews, 217 Long Lane, London, SE1 4PR<br>
                                  </span>
                                  <span class="s1"><a href="tel:+4402073577474">+44 (0)20 7357 7474</a> or email&nbsp;</span>
                                  <a href="mailto:press@savetherhino.org">
                                      <span class="s1">info@savetherhino.org</span></a></p>
                                 </div>
                              </div>
                              <!-- .footer-widget -->															</div>
                          </div>
                          <div class="col-md-5">
                              <div class="row">
                                  <div class="col-md-6">
                                          <h3>QuickLinks</h3>
                                          <ul style="list-style-type: none">
                                              <li><a href="{{url('donate')}}">Give Something</a></li>
                                              <li><a href="{{url('reach_us')}}">Contact Us</a></li>
                                              <li><a href="{{route('register')}}">Sign Up</a></li>
                                              <li><a href="{{route('login')}}">Sign In</a></li>
                                          </ul>
                                  </div>
                                  <div class="col-md-6">
                                      <br>
                                      <br>
                                          <ul style="list-style-type: none">
                                              <li><a href="http://">Link 1</a></li>
                                              <li><a href="http://">Link 1</a></li>
                                              <li><a href="http://">Link 1</a></li>
                                              <li><a href="http://">Link 1</a></li>
                                          </ul>
                                  </div>
                              </div>
                          </div>
             </div>
         </div>
       </footer>


    </body>
</html>
