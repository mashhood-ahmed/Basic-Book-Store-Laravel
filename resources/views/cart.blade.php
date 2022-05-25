
@extends('layout.app')

@section('title', 'My Cart')

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
                <h2>{{ __('Cart List') }}</h2>
              </div>
            </div>
            <div class="col-sm-12">

              @if(count($cartItems))

                <table class="table table-striped text-center">
                    <thead>
                        <th>#</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Delivery</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                            $totalAmount = 0;
                        @endphp
                        @foreach ($cartItems as $item)
                            <tr>
                                <td> {{ $loop->index + 1 }} </td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->category }} </td>
                                <td> <img height="50" src="{{ $item->image }}" alt=""> </td>
                                <td> {{ $item->price }} </td>
                                <td> {{ __('Rs.180') }} </td>
                                <td> {{ $item->price + 180 }} </td>
                                <td> <button onclick="event.preventDefault();document.querySelector('#form-{{ $item->cartId }}').submit();" class="btn btn-danger" >Remove Item</button> </td>
                            </tr>

                            <form method="post" action="{{ route('removeCart', $item->cartId) }}" id="form-{{ $item->cartId }}">
                                @csrf
                                @method('delete')
                            </form>
                            @php
                                $totalAmount += $item->price + 180;
                            @endphp

                        @endforeach
                    </tbody>
                </table>

                <h4 class="text-right">Total Amount - {{ $totalAmount }}/- PKR</h4>

                <form action="{{ route('addOrder') }}" method="post" >
                    @csrf

                    <input type="hidden" name="status" value="pending">
                    <input type="hidden" name="payment_status" value="pending">

                    <div class="mb-3">
                      <label for="address" class="form-label">Postal Address</label>
                      <input type="text" id="address" name="address" class="form-control" id="">
                    </div>
                    <div class="mb-3 form-radio">
                      <input type="radio" class="form-radio-input" checked value="cash" name="payment_method" id="exampleCheck1">
                      <label class="form-radio-label" for="exampleCheck1">Cash On Delivery</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Buy Now</button>
                  </form>
              
              @else
                  <h4>No Item In The Cart</h4>
                  <a class="btn btn-danger" href="/">Back</a>
              @endif

            </div>
          </div>
        </div>
      </div>

  
      @endsection