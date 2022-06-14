@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="order-info">
                <h4>Мои покупки</h4>
                <div class="row">
                    <div class="col-md-12">
                        <p>Вы можете просмотреть здесь свои онлайн-заказы, оформленные в интернет магазине</p>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-lg-8">

            <table class="table">
                <tbody>


                @foreach($order as $item)
                    <tr>
                        <td>
                            <a href="{{route('personal.orders.view',$item->id)}}">{{$item->created_at}}</a>

                            <br>
                            Завершен
                            <br>
                            {{$item->amount}} ₽
                        </td>
                        <td>Интернет магазин</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
