
@extends('layout.app')

@section('title', 'Product Details')

<x-header-component :total="$totalItems" />

  @section('content')

        <!-- Page Content -->
        <div class="page-heading products-heading header-text">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="text-content">
                    <h4>new arrivals</h4>
                    <h2>sixteen products</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>


    <div class="best-features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>{{ $product->name }}</h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-content">
                <h4> {{ __('Product Description') }} </h4>
                <p> {{ $product->description }} </p>
                <p> <span> Category - </span> {{ $product->category }} </p>
                <p> <span> Price - Rs. </span> {{ $product->price }} </p>
                <a href="{{ route('addCart', $product->id) }}" class="filled-button">Add to Cart</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-image">
                <img src="{{ $product->image }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

  
      @endsection