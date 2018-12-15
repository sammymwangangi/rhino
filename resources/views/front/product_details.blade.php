@extends('layouts.home_page')
@section('welcome')



<script>
$(document).ready(function(){
  $('#size').change(function(){
    var size = $('#size').val();
    var proDum = $('#proDum').val();


    $.ajax({
        type: 'get',
        dataType: 'html',
        url: '<?php echo url('/selectSize');?>',
        data: "size=" + size + "& proDum=" + proDum,
        success: function (response) {
            console.log(response);
           $('#price').html(response);
        }
    });

  });
});

</script>

<br>
<br>
<br>
 
<section id="index-amazon"> 
  <div class="amazon">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="product">
            <div class="row">
              <div class="col-md-6 col-xs-12">
                @foreach($Products as $product)
                <div class="thumbnail">
                  <img src="{{url('images',$product->image)}}" class="card-img">
                    <br>
                </div>
              </div>
              <div class="col-md-5 col-md-offset-1">
                <div class="product-details">
                  <h2 class="product-title">
                  <h2><?php echo ucwords($product->pro_name);?></h2>
                  <h5>{{$product->pro_info}}</h5>
                  <form action="{{url('/cart/addItem')}}/<?php echo $product->id; ?>">
                    @if($product->spl_price ==0)
                    <span id="price">
                      ${{$product->pro_price}}
                      <input type="hidden" value="<?php echo $product->pro_price;?>" name="newPrice"/>
                      @else
                      <div class="d-flex justify-content-between align-items-center">

                        <input type="hidden" value="<?php echo $product->spl_price;?>" name="newPrice"/>
                        <p class="" style="text-decoration:line-through; color:#333">${{$product->spl_price}}</p>
                         <img src="{{URL::asset('dist/images/shop/sale.png')}}" alt="..."  style="width:60px">
                         <p class="">${{$product->pro_price}}</p>
                      </div>
                      @endif
                    </span>
                    </h2>
                    <p><b>Availability:</b>{{$product->stock}} In Stock</p>

                    <?php $sizes = DB::table('products_properties')->where('pro_id',$product->id)->get(); ?>

                    <select name="size" id='size'>
                     @foreach ($sizes as $size)
                      <option>{{$size->size}}</option>
                     @endforeach
                    </select>

                     @if($product->new_arrival==1)
                     <img src="{{URL::asset('dist/images/product-details/new.jpg')}}" alt="...">
                      @endif  
     
                      <button class="btn btn-outline-success cart" id="addToCart">
                         <i class="fa fa-shopping-cart"></i>
                         Add to cart
                      </button>

                      <input type="hidden" value="<?php echo $product->id; ?>" id="proDum"/>
                  </form>
                </div>
              </div>

                @endforeach
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
  </div>
</section>

@endsection