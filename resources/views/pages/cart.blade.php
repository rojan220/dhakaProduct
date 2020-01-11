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


    <!-- cart section end -->
    <section class="cart-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table">
                        <h3>Your Cart</h3>
                        <div class="cart-table-warp">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-th">Product</th>
                                    <th class="quy-th">Quantity</th>
{{--                                    <th class="size-th">SizeSize</th>--}}
                                    <th class="total-th">Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $t=0;
                                    $pro = array();
                                    $products=session()->get('product');
                                @endphp
                                @if($products)
                                @foreach($products as $product)
                                    <tr>
                                        @php
                                            $e = new stdClass();
                                            $e->id = $product->id;
                                            if(isset($product->quantity)){
                                                $e->quantity = $product->quantity;
                                            }else{
                                                 $e->quantity = 1;
                                                 $product->quantity = $e->quantity;
                                            }
                                            $e->total = $e->quantity * $product->rating;
                                            $t = $t+$e->total;
                                            array_push($pro,$e);
                                        @endphp
                                        <td class="product-col">
                                            <img src="{{$product->image}}" alt="">
                                            <div class="pc-title">
                                                <h4>{{$product->name}}</h4>
                                                <p>Rs. {{$product->rating}}</p>
                                            </div>
                                        </td>
                                        <td class="quy-col">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input id="{{'product-'.$product->id}}" onchange="alterQuantity({{$product->id}})" type="text" value="{{$product->quantity}}">
                                                </div>
                                            </div>
                                        </td>
{{--                                        <td class="size-col"><h4>Size M</h4></td>--}}
                                        <td class="total-col"><h4>Rs. {{$e->total}}</h4></td>
                                        <td><a href="/cart/{{$product->id}}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                                    @endif
                                </tbody>
                            </table>

                        </div>
                        <div class="total-cost">
                            <h6>Total <span>Rs. {{$t??0}}</span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 card-right">
                    <form method="post" action="/checkout">
                        @csrf
                        <input id="all-product" type="hidden" name="all-products" value="{{json_encode($pro)}}"/>
                        <a href="#" onclick="console.log(this.parentElement.submit());" class="site-btn">Proceed to checkout</a>
                    </form>

                    <a href="" class="site-btn sb-dark">Continue shopping</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cart section end -->

    <!-- Related product section -->
    <section class="related-product-section">
        <div class="container">
            <div class="section-title text-uppercase">
                <h2>Continue Shopping</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <div class="tag-new">New</div>
                            <img src="./img/product/2.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Black and White Stripes Dress</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/5.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/9.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/product/1.jpg" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>$35,00</h6>
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related product section end -->
    <script>
        function alterQuantity(id) {
            console.log(id);
        }
    </script>
    @endsection
