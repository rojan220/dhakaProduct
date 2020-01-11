@extends('layouts.main_layout')
@section('content')
    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>Product PAge</h4>
            <div class="site-pagination">
                <a href="/">Home</a> /
                <a href="/product">Product</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- product section -->
    <section class="product-section">
        <div class="container">
            <div class="back-link">
                <a href="/"> &lt;&lt; Back to Home</a>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-pic-zoom">
                        <img class="product-big-img" src="{{$product->image}}" alt="">
                    </div>
{{--                    <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">--}}
{{--                        <div class="product-thumbs-track">--}}
{{--                            <div class="pt active" data-imgbigurl="img/single-product/1.jpg"><img src="img/single-product/1.jpg" alt=""></div>--}}
{{--                            <div class="pt" data-imgbigurl="img/single-product/1.jpg"><img src="img/single-product/1.jpg" alt=""></div>--}}
{{--                            <div class="pt" data-imgbigurl="img/single-product/1.jpg"><img src="img/single-product/1.jpg" alt=""></div>--}}
{{--                            <div class="pt" data-imgbigurl="img/single-product/1.jpg"><img src="img/single-product/1.jpg" alt=""></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-6 product-details">
                    <h2 class="p-title">{{$product->name}}</h2>
                    <h3 class="p-price">Rs {{$product->rating}}</h3>
                    <h4 class="p-stock">{!! ($product->in_stock?'Available:<span>In Stock</span>':'Unavailable')!!}</h4>
                    <div class="p-rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o fa-fade"></i>
                    </div>
{{--                    <div class="p-review">--}}
{{--                        <a href="">3 reviews</a>|<a href="">Add your review</a>--}}
{{--                    </div>--}}
{{--                    <div class="fw-size-choose">--}}
{{--                        <p>Size</p>--}}
{{--                        <div class="sc-item">--}}
{{--                            <input type="radio" name="sc" id="xs-size">--}}
{{--                            <label for="xs-size">32</label>--}}
{{--                        </div>--}}
{{--                        <div class="sc-item">--}}
{{--                            <input type="radio" name="sc" id="s-size">--}}
{{--                            <label for="s-size">34</label>--}}
{{--                        </div>--}}
{{--                        <div class="sc-item">--}}
{{--                            <input type="radio" name="sc" id="m-size" checked="">--}}
{{--                            <label for="m-size">36</label>--}}
{{--                        </div>--}}
{{--                        <div class="sc-item">--}}
{{--                            <input type="radio" name="sc" id="l-size">--}}
{{--                            <label for="l-size">38</label>--}}
{{--                        </div>--}}
{{--                        <div class="sc-item disable">--}}
{{--                            <input type="radio" name="sc" id="xl-size" disabled>--}}
{{--                            <label for="xl-size">40</label>--}}
{{--                        </div>--}}
{{--                        <div class="sc-item">--}}
{{--                            <input type="radio" name="sc" id="xxl-size">--}}
{{--                            <label for="xxl-size">42</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="quantity">
                        <p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="5"></div>
                    </div>
                    <a href="/cart?id={{$product->id}}" class="site-btn">Add to Cart</a>
                    <div id="accordion" class="accordion-area">
                        <div class="panel">
                            <div class="panel-header" id="headingOne">
                                <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
                            </div>
                            <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="panel-body">
                                    <p> Dhaka (originally called Thaka) is traditional hand made fabric of the indigenous Limbu people of eastern Nepal. ... It has its origins in Terhathum districtTaplejung district of Nepal. The art of making dhaka is taught by one generation to another. Dhaka fabric represents Limbu cultural dress.</p>

                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-header" id="headingTwo">
                                <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="panel-body">
                                    <img src="/img/cards.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-header" id="headingThree">
                                <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="panel-body">
                                    <h4>7 Days Returns</h4>
                                    <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-sharing">
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->


    <!-- RELATED PRODUCTS section -->
    <section class="related-product-section">
        <div class="container">
            <div class="section-title">
                <h2>RELATED PRODUCTS</h2>
            </div>
            <div class="product-slider owl-carousel">
                @php
                    $products = \App\Models\Product::orderBy('id','desc')->where('category_id',$product->category_id)->where('id','!=',$product->id)->get();
                @endphp
                @if(isset($products)&&!is_null($products))
                    @foreach($products as $product)
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{$product->image}}" alt="">
                        <div class="pi-links">
                            <a href="/cart?id={{$product->id}}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="/product/{{$product->id}}" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>Rs. {{$product->rating}}</h6>
                        <p>{{$product->name}} </p>
                    </div>
                </div>
                    @endforeach
                    @endif
            </div>
        </div>
    </section>
    <!-- RELATED PRODUCTS section end -->

@endsection
