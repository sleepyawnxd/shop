@extends('layouts.adminpartner')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование карточки товара {{$products->id}}</h1>
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

                <div class="card card-primary">
                    <!--
                    <div class="card-header">
                        <h3 class="card-title"><ya-tr-span data-index="105-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Quick Example" data-translation="Быстрый пример" data-type="trSpan">Быстрый пример</ya-tr-span></h3>
                    </div>
                     -->
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.partner.products.update',$products)}}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="card-body">
                                <div class="row" >
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1"><ya-tr-span data-index="106-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email address" data-translation="Эл. адрес" data-type="trSpan">Введите артикул товара</ya-tr-span></label>
                                            <input type="input-group-text" class="form-control"  placeholder="Введите артикул товара" name="article" value="{{$products->article}}">
                                        </div>
                                    <div class="col-sm-2">
                                        <!-- select -->
                                        <div class="form-group col-sm">
                                            <label><ya-tr-span data-index="276-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Select" data-translation="Выберите" data-type="trSpan">Выберите пол:</ya-tr-span></label>
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="{{$products->gender}}" selected>{{$products->gender}}</option>
                                                <option value="man"><ya-tr-span data-index="98-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="option 1" data-translation="вариант 1" data-type="trSpan">Мужчины</ya-tr-span></option>
                                                <option value="woman"><ya-tr-span data-index="99-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="option 2" data-translation="вариант 2" data-type="trSpan">Женщины</ya-tr-span></option>
                                                <option value="children"><ya-tr-span data-index="100-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="option 3" data-translation="вариант 3" data-type="trSpan">Дети</ya-tr-span></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group d-none col-sm-2">
                                        <label for="exampleInputEmail1"><ya-tr-span data-index="106-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email address" data-translation="Эл. адрес" data-type="trSpan">Введите артикул товара</ya-tr-span></label>
                                        <input type="input-group-text" class="form-control"  placeholder="Введите артикул товара" name="partner_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                    </div>
                                </div>

                            <div id="selects">
                                <div class="form-group" id="man">
                                    <label>Выберите тип:</label>
                                    <select class="form-control"  name="ManType_id">
                                        <option value=" " selected>null</option>
                                        <option value="{{$products->ManType_id}}" selected>{{$products->ManTypes['Translate']}}</option>
                                        @foreach($mans as $man)
                                            <option value="{{$man->id}}">{{$man->Translate}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group"  id="woman">
                                    <label><ya-tr-span data-index="276-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Select" data-translation="Выберите" data-type="trSpan">Выберите тип:</ya-tr-span></label>
                                    <select class="form-control" name="WomanType_id">
                                        <option value=" " selected>null</option>
                                        <option value="{{$products->WomanType_id}}" selected>{{$products->types['Translate']}}</option>
                                        @foreach($womans as $woman)
                                            <option value="{{$woman->id}}">{{$woman->Translate}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group" id="children" >
                                    <label><ya-tr-span  data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Select" data-translation="Выберите" data-type="trSpan">Выберите тип:</ya-tr-span></label>
                                    <select class="form-control"  name="ChildType_id">
                                        <option value=" " selected>null</option>
                                        <option value="{{$products->ChildType_id}}" selected>{{$products->ChildTypes['Translate']}}</option>
                                        @foreach($childs as $child)
                                            <option value="{{$child->id}}">{{$child->Translate}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><ya-tr-span data-index="107-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email address" data-translation="Эл. адрес" data-type="trSpan">Бренд товара</ya-tr-span></label>
                                <input type="input-group-text" class="form-control" name="brand" value="{{$products->brand}}" placeholder="Введите бренд товара">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><ya-tr-span data-index="108-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-type="trSpan">Название товара</ya-tr-span></label>
                                <input type="input-group-text" class="form-control" name="title" value="{{$products->title}}" placeholder="Введите название товра (например: ''Рубашка Zarina'')">
                            </div>

                            <div class="container">
                                <div class="row" >
                                    <div class="form-group col-sm">
                                        <label for="exampleInputPassword1"><ya-tr-span data-index="109-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-type="trSpan">Актуальная стоимость товара</ya-tr-span></label>
                                           <div class="input-group">
                                               <input type="input-group-text" class="form-control" name="price" value="{{$products->price}}" placeholder="Введите актуальную стоимость товара">
                                               <div class="input-group-append">
                                                   <span class="input-group-text">₽</span>
                                               </div>
                                           </div>
                                    </div>
                                    <div class="form-group col-sm">
                                        <label for="exampleInputPassword1"><ya-tr-span data-index="110-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-type="trSpan">Цена если на товар действует скидка</ya-tr-span></label>
                                        <div class="input-group">
                                            <input type="input-group-text" class="form-control" name="old_price" value="{{$products->old_price}}" placeholder="Введите неактуальную стоймость товара, (будет отображаться как скидка)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">₽</span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Оставьте поле пустым, если не предусмотрена скидка.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label><ya-tr-span data-index="134-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Textarea" data-translation="Textarea" data-type="trSpan">Короткое описание товара</ya-tr-span></label>
                                <textarea class="form-control" rows="3" name="description"placeholder="Введите короткое описание товара (максимально 150 символов)" style="margin-top: 0px; margin-bottom: 0px; height: 60px;">{{$products->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label><ya-tr-span data-index="134-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Textarea" data-translation="Textarea" data-type="trSpan">Полное описание товара</ya-tr-span></label>
                                <textarea class="form-control" rows="3" name="full_description" placeholder="Полное описание товара" style="margin-top: 0px; margin-bottom: 0px; height: 94px;">{{$products->full_description}}</textarea>
                            </div>

                            <div class="container">
                                <label for="exampleInputPassword1"><ya-tr-span data-index="108-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-type="trSpan">Количество размеров:</ya-tr-span></label>
                                <div class="row" >
                                    <div class="form-group col-sm">
                                        <input type="input-group-text" class="form-control" name="s" value="{{$products->s}}" placeholder="S">
                                    </div>
                                    <div class="form-group col-sm">
                                        <input type="input-group-text" class="form-control" name="m" value="{{$products->m}}"  placeholder="M">
                                    </div>
                                    <div class="form-group col-sm">
                                        <input type="input-group-text" class="form-control" name="x" value="{{$products->x}}" placeholder="X">
                                    </div>
                                    <div class="form-group col-sm">
                                        <input type="input-group-text" class="form-control" name="xl" value="{{$products->xl}}" placeholder="XL">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="exampleInputPassword1"><ya-tr-span data-index="110-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-type="trSpan">Загрузите три изображения товара</ya-tr-span></label>
                            </div>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="img1">
                                    <label class="custom-file-label" for="exampleInputFile"><ya-tr-span data-index="309-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Choose file" data-translation="Выберите файл" data-type="trSpan">Выберите изображение</ya-tr-span></label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text"><ya-tr-span data-index="310-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Upload" data-translation="Загрузка" data-type="trSpan">Загрузка</ya-tr-span></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="img2">
                                    <label class="custom-file-label" for="exampleInputFile"><ya-tr-span data-index="309-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Choose file" data-translation="Выберите файл" data-type="trSpan">Выберите изображение</ya-tr-span></label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text"><ya-tr-span data-index="310-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Upload" data-translation="Загрузка" data-type="trSpan">Загрузка</ya-tr-span></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="img3">
                                    <label class="custom-file-label" for="exampleInputFile"><ya-tr-span data-index="309-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Choose file" data-translation="Выберите файл" data-type="trSpan">Выберите изображение</ya-tr-span></label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text"><ya-tr-span data-index="310-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Upload" data-translation="Загрузка" data-type="trSpan">Загрузка</ya-tr-span></span>
                                </div>
                            </div>

                            <!-- Момент с модерацие и id_partner -->
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <div class=" container">
                                <div class="row">
                                    <div class="col">
                                        Убедитесь что все поля заполнены и не допущено ошибок.
                                    </div>
                                    <div class="col d-grid gap-2 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-warning "><ya-tr-span data-index="112-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Submit" data-translation="Отправить" data-type="trSpan">Создать карточку товара</ya-tr-span></button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script src="{{asset('js/selects.js')}}"></script>

@endsection
