
@extends('layout.app')

@section('title', 'My Orders')

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
                <h2>{{ __('My Orders List') }}</h2>
              </div>
            </div>
            <div class="col-sm-12">

              @if(count($orderItems))

                <table class="table table-striped text-center">
                    <thead>
                        <th>#</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                    </thead>
                    <tbody>
                        @php
                            $totalAmount = 0;
                        @endphp
                        @foreach ($orderItems as $item)
                            <tr>
                                <td> {{ $loop->index + 1 }} </td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->category }} </td>
                                <td> <img height="50" src="{{ $item->image }}" alt=""> </td>
                                <td> {{ $item->price }} </td>
                                <td> {{ $item->status }} </td>
                                <td> {{ $item->payment_method }} </td>
                                <td> {{ $item->payment_status }} </td>
                            </tr>
                            @php
                                $totalAmount += $item->price + 180;
                            @endphp

                        @endforeach
                    </tbody>
                </table>

                <h4 class="text-right">Total Amount - {{ $totalAmount }}/- PKR</h4>
              
              @else
                  <h4>No Item In The Cart</h4>
                  <a class="btn btn-danger" href="/">Back</a>
              @endif

            </div>
          </div>
        </div>
      </div>

  
      @endsection