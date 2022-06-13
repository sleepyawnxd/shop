@extends('layouts.main')
@section('content')
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Billing Address</h5>
                        </div>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">First Name <span>*</span></label>
                                    <input type="text" class="form-control" id="first_name" value="" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Last Name <span>*</span></label>
                                    <input type="text" class="form-control" id="last_name" value="" required="">
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="country">Страна <span>*</span></label>
                                    <select class="w-100" id="country" style="display: none;">
                                        <option value="ru">Россия</option>
                                    </select>
                                    <div class="nice-select w-100" tabindex="0">
                                        <span class="current">Выберете страну</span>
                                        <ul class="list">
                                            <li data-value="ru" class="option selected">Россия</li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="street_address">Адресс <span>*</span></label>
                                    <input type="text" class="form-control mb-3" id="street_address" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="postcode">ZIP <span>*</span></label>
                                    <input type="text" class="form-control" id="postcode" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="city">Город <span>*</span></label>
                                    <input type="text" class="form-control" id="city" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Номер телефона <span>*</span></label>
                                    <input type="number" class="form-control" id="phone_number" min="0" value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">Email <span>*</span></label>
                                    <input type="email" class="form-control" id="email_address" value="">
                                </div>

                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Terms and conitions</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Create an accout</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Subscribe to our newsletter</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Ваш заказ</h5>
                            <p>Детали</p>
                        </div>

                        <ul class="order-details-form mb-4">
                            <li><span>Товар</span> <span>Итог</span></li>

                            @foreach($cart as $item)
                            <li><span>{{$item->name}}</span> <span>{{$item->price}} ₽</span></li>
                            @endforeach
                            <li><span>Промежуточный итог</span> <span>$59.90</span></li>
                            <li><span>Доставка</span> <span>Бесплатно</span></li>
                            <li><span>Итог</span> <span>{{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotal()}} ₽</span></li>
                        </ul>

                        <div id="accordion" role="tablist" class="mb-4">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-circle-o mr-3"></i>Наличка</a>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Оплата при получении</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="btn essence-btn">Оставить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
