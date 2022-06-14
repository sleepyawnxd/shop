@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="order-info">
                <h4>Просмотр заказа</h4>
                <div class="row">
                    <div class="col-md-12">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Кол-во</th>
                    <th scope="col">Стоимость</th>

                </tr>
                </thead>
                <tbody>

                @foreach($order->items as $item)

                    <tr>
                        <th scope="row" style="width: 20%">
                            <div class="product-wrapper mb-50">
                                <div class="product-img mb-25">
                                    <a href="#">
                                        <img src="{{asset('storage/'. $item->preview_image)}}" alt="" style="border-radius: 10px">
                                        {{--                                        <img class="secondary-img" src="{{asset('storage/'. $item->second_image)}}" alt="">--}}
                                    </a>
                                </div>
                            </div>
                        </th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->cost}}</td>
                    </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </div>




    <a href="{{route('personal.index')}}">Назад</a>
@endsection
