@extends('layouts.main_layout')
@section('content')
    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>Your cart</h4>
            <div class="site-pagination">
                <a href="">Home</a> /
                <a href="">Your cart</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- checkout section  -->
    <section class="checkout-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1">
                    <form class="checkout-form" action="/makepurchase" method="post">
                        @csrf
                        <div class="cf-title">Billing Address</div>
                        <div class="row">
                            <div class="col-md-7">
                                <p>*Billing Information</p>
                            </div>
                            <div class="col-md-5">
                                <div class="cf-radio-btns address-rb">
                                    <div class="cfr-item">
                                        <input  type="radio" name="ra" id="one" value=1>
                                        <label for="one">Use my regular address</label>
                                    </div>
                                    <div class="cfr-item">
                                        <input type="radio" name="ra" id="two" checked value=0>
                                        <label for="two">Use a different address</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row address-inputs">
                            <div class="col-md-12">
                                <input required="true" type="text" name="address" placeholder="Address">
                                <input required="true" type="text" name="address1" placeholder="Address line 2">
                                <input required="true" type="text" name="country" placeholder="Country">
                            </div>
                            <div class="col-md-6">
                                <input required="true" type="text" name="zip_code" placeholder="Zip code">
                            </div>
                            <div class="col-md-6">
                                <input required="true" type="text" name="phone" placeholder="Phone no.">
                            </div>
                        </div>
                        @php
                            $products=session()->get('cart');
                        @endphp
                        <input required="true" type="hidden" name="cart" value="{{$products}}"/>
                        <input required="true" type="hidden" name="status" value="active"/>
                        <div class="cf-title">Payment</div>
                        <ul class="payment-list">
                            <li>Pay when you get the package</li>
                        </ul>
                        <button class="site-btn submit-order-btn">Place Order</button>
                    </form>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="checkout-cart">
                        <h3>Your Cart</h3>
                        @php
                            $all_products=json_decode($products);
                            $total =0;
                        @endphp
                        <ul class="product-list">
                            @if($all_products)
                            @foreach($all_products as $p)
                                @php
                                    $product = \App\Models\Product::find($p->id);
                                    $total+=$product->rating*$p->quantity;
                                @endphp
                                <li>
                                    <div class="pl-thumb"><img src="{{$product->image}}" alt=""></div>
                                    <h6>{{$product->name}}</h6>
                                    <p>Rs. {{$product->rating*$p->quantity}}</p>
                                </li>
                                @endforeach
                                @endif
                        </ul>
                        <ul class="price-list">
{{--                            <li>Total<span>Rs. {{$total}}</span></li>--}}
{{--                            <li>Shipping<span>free</span></li>--}}
                            <li class="total">Total<span>Rs. {{$total}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout section end -->
@endsection
