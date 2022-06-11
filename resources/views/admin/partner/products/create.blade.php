@extends('admin.index')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создание карточки товара</h1>
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

                    <form action="{{route('partner.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                                <div class="row" >
{{--                                        <div class="form-group col-sm-6">--}}
{{--                                            <label for="exampleInputEmail1"><ya-tr-span data-index="106-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email address" data-translation="Эл. адрес" data-type="trSpan">Введите артикул товара</ya-tr-span></label>--}}
{{--                                            <input type="input-group-text" class="form-control"  placeholder="Введите артикул товара" name="article" value="{{old('article')}}">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-2">--}}
{{--                                            <!-- select -->--}}
{{--                                            <div class="form-group col-sm">--}}
{{--                                                <label><ya-tr-span data-index="276-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Select" data-translation="Выберите" data-type="trSpan">Выберите пол:</ya-tr-span></label>--}}
{{--                                                <select class="form-control" id="gender" name="gender">--}}
{{--                                                    <option value="" selected>Тип:</option>--}}
{{--                                                    <option value="man"><ya-tr-span data-index="98-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="option 1" data-translation="вариант 1" data-type="trSpan">Мужчины</ya-tr-span></option>--}}
{{--                                                    <option value="woman"><ya-tr-span data-index="99-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="option 2" data-translation="вариант 2" data-type="trSpan">Женщины</ya-tr-span></option>--}}
{{--                                                    <option value="children"><ya-tr-span data-index="100-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="option 3" data-translation="вариант 3" data-type="trSpan">Дети</ya-tr-span></option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    <div class="form-group d-none col-sm-2">--}}
{{--                                        <label for="exampleInputEmail1"><ya-tr-span data-index="106-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email address" data-translation="Эл. адрес" data-type="trSpan">Введите артикул товара</ya-tr-span></label>--}}
{{--                                        <input type="input-group-text" class="form-control"  placeholder="Введите артикул товара" name="partner_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">--}}
{{--                                    </div>--}}
                                </div>


                                <!-- select -->

                       <div id="selects">
                           <div class="form-group" id="man">
                               <label><ya-tr-span data-index="98-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="option 1" data-translation="вариант 1" data-type="trSpan">Выберите категорию:</label>
                               <select class="form-control"  name="subcategory_id">
                                   <option value=""selected>Выберите категорию:</option>
                                   @foreach($categories as $category)

                                   <option value="{{$category->id}}">{{$category->title}}</option>
                                   @endforeach
                               </select>
                           </div>

                       </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><ya-tr-span data-index="107-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email address" data-translation="Эл. адрес" data-type="trSpan">Бренд товара</ya-tr-span></label>
                                <input type="input-group-text" class="form-control" name="brand" placeholder="Введите бренд товара">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><ya-tr-span data-index="108-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-type="trSpan">Название товара</ya-tr-span></label>
                                <input type="input-group-text" class="form-control" name="title" placeholder="Введите название товра (например: ''Рубашка Zarina'')">
                            </div>

                            <div class="container">
                                <div class="row" >
                                    <div class="form-group col-sm">
                                        <label for="exampleInputPassword1"><ya-tr-span data-index="109-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-type="trSpan">Актуальная стоимость товара</ya-tr-span></label>
                                           <div class="input-group">
                                               <input type="input-group-text" class="form-control" name="price" placeholder="Введите актуальную стоимость товара">
                                               <div class="input-group-append">
                                                   <span class="input-group-text">₽</span>
                                               </div>
                                           </div>
                                    </div>
                                    <div class="form-group col-sm">
                                        <label for="exampleInputPassword1"><ya-tr-span data-index="110-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-type="trSpan">Цена если на товар действует скидка</ya-tr-span></label>
                                        <div class="input-group">
                                            <input type="input-group-text" class="form-control" name="old_price" placeholder="Введите неактуальную стоймость товара, (будет отображаться как скидка)">
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
                                <textarea class="form-control" rows="3" name="short_description" placeholder="Введите короткое описание товара (максимально 150 символов)" style="margin-top: 0px; margin-bottom: 0px; height: 60px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label><ya-tr-span data-index="134-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Textarea" data-translation="Textarea" data-type="trSpan">Полное описание товара</ya-tr-span></label>
                                <textarea class="form-control" rows="3" name="description" placeholder="Полное описание товара" style="margin-top: 0px; margin-bottom: 0px; height: 94px;"></textarea>
                            </div>

                            <div class="container">
                                <label for="exampleInputPassword1"><ya-tr-span data-index="108-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-type="trSpan">Количество размеров:</ya-tr-span></label>
                                <div class="row" >
                                    <div class="form-group col-sm">
                                        <input type="input-group-text" class="form-control" name="s" placeholder="S">
                                    </div>
                                    <div class="form-group col-sm">
                                        <input type="input-group-text" class="form-control" name="m" placeholder="M">
                                    </div>
                                    <div class="form-group col-sm">
                                        <input type="input-group-text" class="form-control" name="x" placeholder="X">
                                    </div>
                                    <div class="form-group col-sm">
                                        <input type="input-group-text" class="form-control" name="xl" placeholder="XL">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="exampleInputPassword1"><ya-tr-span data-index="110-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-type="trSpan">Загрузите три изображения товара</ya-tr-span></label>
                            </div>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label" for="exampleInputFile"><ya-tr-span data-index="309-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Choose file" data-translation="Выберите файл" data-type="trSpan">Выберите изображение</ya-tr-span></label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text"><ya-tr-span data-index="310-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Upload" data-translation="Загрузка" data-type="trSpan">Загрузка</ya-tr-span></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="second_image">
                                    <label class="custom-file-label" for="exampleInputFile"><ya-tr-span data-index="309-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Choose file" data-translation="Выберите файл" data-type="trSpan">Выберите изображение</ya-tr-span></label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text"><ya-tr-span data-index="310-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Upload" data-translation="Загрузка" data-type="trSpan">Загрузка</ya-tr-span></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="third_image">
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
