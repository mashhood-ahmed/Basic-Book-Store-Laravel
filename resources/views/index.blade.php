    @extends('layout.app')

    @section('title', 'Home')

    <x-header-component :total="$totalItems" />

    @section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
            </div>
          </div>

          @foreach ($products as $product)
            <!-- Product Item -->
            <div class="col-md-4">
              <div class="product-item">
                <a href="#"><img height="200" src="{{ $product->image }}" alt=""></a>
                <div class="down-content">
                  <a href="#"><h4>{{ $product->name }}</h4></a>
                  <h6>Rs. {{ $product->price }} </h6>
                  <p>{{ Str::limit($product->description, 30, $end='...')  }}</p>
                  <a href="{{ route('productDetail', $product->id) }}" class="btn btn-danger" > Add to Cart </a>                                                                                                                
                </div>
              </div>
            </div>
          @endforeach


        </div>
      </div>
    </div>
    
    @endsection

