@extends('layouts.main_layout')

@section('content')
    <!-- Hero section -->
    @php
        $products = \App\Models\Product::with('categories')->orderBy('id')->get();
        //dd($products);
    @endphp
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            @foreach($products as $product)
            <div class="hs-item set-bg" data-setbg="{{$product->image}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>New Arrivals</span>
                            <h2>{{$product->name}}</h2>
                            <p> Dhaka (originally called Thaka) is traditional hand made fabric of the indigenous Limbu people of eastern Nepal. ... It has its origins in Terhathum districtTaplejung district of Nepal. The art of making dhaka is taught by one generation to another. Dhaka fabric represents Limbu cultural dress.</p>
                            <a href="/product/{{$product->id}}" class="site-btn sb-line">DISCOVER</a>
                            <a href="/cart?id={{$product->id}}" class="site-btn sb-white">ADD TO CART</a>
                        </div>
                    </div>
                    <div class="offer-card text-white">
                        <span>from</span>
                        <h2>2900</h2>
                        <p>SHOP NOW</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <!-- Hero section end -->



    <!-- letest product section -->
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>LATEST PRODUCTS</h2>
            </div>

            <div class="product-slider owl-carousel">
                @foreach($products as $product)
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{$product->image}}" alt="">
                        <div class="pi-links">
                            <a href="/cart?id={{$product->id}}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>Rs {{$product->rating}}</h6>
                        <p><a href="/product/{{$product->id}}" class="text-body">{{$product->name}}</a>  </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- letest product section end -->



    <!-- Product filter section -->
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>BROWSE TOP SELLING PRODUCTS</h2>
            </div>
{{--            <ul class="product-filter-menu">--}}
{{--                <li><a href="#">Product1</a></li>--}}
{{--                <li><a href="#">Product2</a></li>--}}
{{--                <li><a href="#">Product3</a></li>--}}
{{--            </ul>--}}
            <div class="row">
                @foreach($products as $key=>$product)
                    @if($key<=10)
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{$product->image}}" alt="">
                            <div class="pi-links">
                                <a href="/cart?id={{$product->id}}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>{{$product->rating}}</h6>
                            <p>{{$product->name}} </p>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
            </div>
            @if(count($products)>10)
            <div class="text-center pt-5">
                <button class="site-btn sb-line sb-dark">LOAD MORE</button>
            </div>
            @endif
        </div>
    </section>
    <!-- Product filter section end -->


{{--    <!-- Banner section -->--}}
{{--    <section class="banner-section">--}}
{{--        <div class="container">--}}
{{--            <div class="banner set-bg" data-setbg="img/banner-bg.jpg">--}}
{{--                <div class="tag-new">NEW</div>--}}
{{--                <span>New Arrivals</span>--}}
{{--                <h2>STRIPED SHIRTS</h2>--}}
{{--                <a href="#" class="site-btn">SHOP NOW</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Banner section end  -->--}}
@endsection
