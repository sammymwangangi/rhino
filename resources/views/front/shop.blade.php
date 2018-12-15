@extends('layouts.home_page')
@section('welcome')

 <main role="main">
<br>
<br>
<br>

    <div class="container" style="margin-top: 20px">
        <div class="text-center">
            <h4 class="" style="letter-spacing: 15px;">
                <span><hr style="width: 395px;"></span>
                Watch and Credit The Rhino
                <span><hr style="width: 395px;"></span>
            </h4>
        </div>
    </div>

<div class="container">
  <div class="card-columns">
  @forelse($products as $product)
  <div class="card">
    <img class="card-img-top" src="{{url('images',$product->image)}}" alt="Card image cap">
    <div class="card-body">
      <p id="price">
          <h4 class="card-text iphone"><a href="{{url('/product_details')}}/{{$product->id}}" style="width:30rem height: 20rem">{{$product->pro_name}}</a></h4>

            @if($product->spl_price==0)

            <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">${{$product->pro_price}}</p>
                 <p class="card-text"></p>
            </div>
            @else
            <div class="d-flex justify-content-between align-items-center">
              <p class="" style="text-decoration:line-through; color:#333">${{$product->spl_price}}</p>

              <img src="{{URL::asset('dist/images/shop/sale.png')}}" alt="..."  style="width:60px">
               <p class="">${{$product->pro_price}}</p>
            </div>
            @endif
      </p>
      <a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>" class="btn btn-primary btn-sm">Add ToCart<i class="fa fa-shopping-cart"></i></a>
    </div>
  </div>
  @empty
      <h3>No data Available.</h3>
  @endforelse
</div>
</div>

    </main>
    @endsection