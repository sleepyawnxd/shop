@extends('layouts.adminpartner')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Товары прошедшие модерацию</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <!-- СЮДА РОДНАЯ! -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><ya-tr-span data-index="329-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Expandable Table" data-translation="Расширяемая таблица" data-type="trSpan">Расширяемая таблица</ya-tr-span></h3>


                    </div>
                    <!-- ./card-header -->
                    <div class="card-body overflow-auto">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th><ya-tr-span data-index="330-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Status" data-translation="Статус" data-type="trSpan">Фотография товара</ya-tr-span></th>
                                <th><ya-tr-span data-index="330-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Status" data-translation="Статус" data-type="trSpan">Бренд</ya-tr-span></th>
                                <th><ya-tr-span data-index="330-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Status" data-translation="Статус" data-type="trSpan">Раздел</ya-tr-span></th>
                                <th><ya-tr-span data-index="331-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="User" data-translation="Пользователь" data-type="trSpan">Тип товара</ya-tr-span></th>
                                <th><ya-tr-span data-index="332-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Date" data-translation="Дата" data-type="trSpan">Название товара</ya-tr-span></th>
                                <th><ya-tr-span data-index="333-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Reason" data-translation="Причина" data-type="trSpan">Старая цена</ya-tr-span></th>
                                <th><ya-tr-span data-index="334-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Reason" data-translation="Причина" data-type="trSpan">Новая цена</ya-tr-span></th>
                                <th><ya-tr-span data-index="335-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Reason" data-translation="Причина" data-type="trSpan">S</ya-tr-span></th>
                                <th><ya-tr-span data-index="336-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Reason" data-translation="Причина" data-type="trSpan">M</ya-tr-span></th>
                                <th><ya-tr-span data-index="337-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Reason" data-translation="Причина" data-type="trSpan">X</ya-tr-span></th>
                                <th><ya-tr-span data-index="338-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Reason" data-translation="Причина" data-type="trSpan">XL</ya-tr-span></th>
                                <th><ya-tr-span data-index="338-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Reason" data-translation="Причина" data-type="trSpan">Редактировать</ya-tr-span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr data-widget="expandable-table" aria-expanded="false">
                              @foreach($products as $product)
                                  @if($product->partner_id == auth()->user()->id && $product->moderation === 1)
                                        <td>{{$product->id}}</td>
                                        <td class="d-flex justify-content-center"><ya-tr-span data-index="334-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="John Doe" data-translation="Джон Доу" data-type="trSpan" data-selected="false">
                                                <img src="{{asset('/storage/' . $product->img1)}}" width="100" height="100" alt=""></ya-tr-span></td>
                                        <td>{{$product->brand}}</td>
                                        <td>{{$product->gender}}</td>
                                        <td>@if($product->WomanType_id != null)
                                                {{$product->types['Translate']}}
                                            @endif
                                            @if($product->ManType_id != null)
                                                {{$product->ManTypes['Translate']}}
                                            @endif
                                            @if($product->ChildType_id != null)
                                                {{$product->ChildTypes['Translate']}}
                                            @endif
                                        </td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->old_price}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->s}}</td>
                                        <td>{{$product->m}}</td>
                                        <td>{{$product->x}}</td>
                                        <td>{{$product->xl}}</td>
                                        <td> <a href="{{route('admin.partner.products.edit',$product)}}"class="btn btn-primary mr-2 mb-2" >Редактировать</a>
                                            <form action="{{route('admin.partner.products.destroy',$product)}}" method="post" >@csrf <button class="btn btn-danger mr-2" >Удалить</button></form>
                                        </td>
                            <tr class="expandable-body d-none">
                                <td colspan="10">
                                    <h4>Краткое описание</h4>
                                    <p style="display: none;">{{$product->description}} </p>
                                    <h4>Полное описание</h4>
                                    <p style="display: none;">{{$product->full_description}} </p>
                                </td>




                            </tr>
                                      @endif
                                @endforeach
                            </tr>


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
