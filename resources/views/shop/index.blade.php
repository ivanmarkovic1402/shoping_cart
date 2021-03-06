@extends('layouts.master')

@section('title')
    Laravel Shoping-cart
@endsection

@section('content')
@if(Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            {{ Session::get('success')}}
        </div>
    </div>
@endif
@foreach($products->chunk(3) as $productChunk)
    <div class="row">
      @foreach($productChunk as $product)
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
             <img src="{{$product->imagePath}}" alt="..." class="img-responsive">
              <div class="caption">
                <h3>{{$product->ititle}}</h3>
                <p class="description">{{$product->description}}</p>
                <div class="clearfix">
                    <div class="pull-left price">${{$product->price}}</div>
                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to cart</a>
                </div>
              </div>
            </div>
        </div>
      @endforeach      
    </div>
@endforeach
            
@endsection
