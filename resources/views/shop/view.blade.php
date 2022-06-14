@extends('layouts.main')
@section('product_content')

    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel ">
                <div class="carousel-inner w-100">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('storage/' . $product->preview_image)}}" alt="First slide" >
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/' . $product->second_image)}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/' . $product->third_image)}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
{{--            <div class="product_thumbnail_slides owl-carousel owl-theme owl-loaded">--}}
{{--                <div class="owl-stage-outer">--}}
{{--                    <div class="owl-stage" style="transform: translate3d(-2022px, 0px, 0px); transition: all 1s ease 0s; width: 4718px;">--}}
{{--                        <div class="owl-item cloned" style="width: 674px; margin-right: 0px;">--}}
{{--                            <img src="../../../public/img/product-img/product-big-2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="owl-item cloned" style="width: 674px; margin-right: 0px;">--}}
{{--                            <img src="../../../public/img/product-img/product-big-3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="owl-item" style="width: 674px; margin-right: 0px;">--}}
{{--                            <img src="../../../public/img/product-img/product-big-1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="owl-item active" style="width: 674px; margin-right: 0px;">--}}
{{--                            <img src="../../../public/img/product-img/product-big-2.jpg" alt="">--}}
{{--                        </div><div class="owl-item" style="width: 674px; margin-right: 0px;">--}}
{{--                            <img src="../../../public/img/product-img/product-big-3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="owl-item cloned" style="width: 674px; margin-right: 0px;">--}}
{{--                            <img src="../../../public/img/product-img/product-big-1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="owl-item cloned" style="width: 674px; margin-right: 0px;">--}}
{{--                            <img src="../../../public/img/product-img/product-big-2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="owl-controls">--}}
{{--                    <div class="owl-nav">--}}
{{--                        <div class="owl-prev" style="">--}}
{{--                            <img src="img/core-img/long-arrow-left.svg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="owl-next" style="">--}}
{{--                            <img src="img/core-img/long-arrow-right.svg" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="owl-dots" style="display: none;">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span>-</span>
            <a href="cart.html">
                <h2>{{$product->title}}</h2>
            </a>
            <p class="product-price"><span class="old-price">{{$product->old_price}} ₽</span> {{$product->price}} ₽</p>
            <p class="product-desc">{{$product->description}}</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <select name="select" id="productSize" class="mr-5" style="display: none;">
                        <option value="value">Size: XL</option>
                        <option value="value">Size: X</option>
                        <option value="value">Size: M</option>
                        <option value="value">Size: S</option>
                    </select>
                    <div class="nice-select mr-5" tabindex="0">
                        <span class="current">Size: XL</span>
                        <ul class="list"><li data-value="value" class="option selected">Size: XL</li>
                            <li data-value="value" class="option">Size: X</li>
                            <li data-value="value" class="option">Size: M</li>
                            <li data-value="value" class="option">Size: S</li>
                        </ul>
                    </div>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->


                    <button type="submit" name="addtocart" value="5" class="btn essence-btn"><a href="{{route('addCart',['id' => $product->id])}}" class="">Добавить</a></button>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
