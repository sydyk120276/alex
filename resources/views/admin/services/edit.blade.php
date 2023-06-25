@extends('admin.layouts.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование проекта</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <h3 class="card-title">Проект {{ $service->title }}</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <form role="form" method="post" action="{{ route('services.update', ['service' => $service->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Название</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" value="{{ $service->title }}">
                        </div>
                        <div class="form-group">
                            <label for="title_item">Название сервиса</label>
                            <input type="text" name="title_item" class="form-control @error('title_item') is-invalid @enderror"
                                id="title_item" value="{{ $service->title_item }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea name="description" type="text" id="description" rows="3" class="form-control @error('description') is-invalid @enderror"
                                >{{ $service->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="platform1">Платформа1</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="platform1" id="platform1">
                                    <label class="custom-file-label" for="platform1">Выбрать другой файл</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $service->getPlatform1() }}" alt=""></div>
                        </div>

                        <div class="form-group">
                            <label for="platform2">Платформа02</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="platform2" id="platform2">
                                    <label class="custom-file-label" for="platform2">Выбрать другой файл</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $service->getPlatform2() }}" alt=""></div>
                        </div>
                        <div class="form-group">
                            <label for="platform3">Платформа03</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="platform3" id="platform3">
                                    <label class="custom-file-label" for="platform3">Выбрать другой файл</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $service->getPlatform3() }}" alt=""></div>
                        </div>
                        <div class="form-group">
                            <label for="platform4">Платформа04</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="platform4" id="platform4">
                                    <label class="custom-file-label" for="platform4">Выбрать другой файл</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $service->getPlatform4() }}" alt=""></div>
                        </div>
                        <div class="form-group">
                            <label for="platform5">Платформа05</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="platform5" id="platform5">
                                    <label class="custom-file-label" for="platform5">Выбрать другой файл</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $service->getPlatform5() }}" alt=""></div>
                        </div>
                        <div class="form-group">
                            <label for="platform6">Платформа06</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="platform6" id="platform6">
                                    <label class="custom-file-label" for="platform6">Выбрать другой файл</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $service->getPlatform6() }}" alt=""></div>
                        </div>


                        <div class="form-group">
                            <label for="thumbnail">Изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnail" id="thumbnail">
                                    <label class="custom-file-label" for="thumbnail">Choose file</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $service->getImage() }}" alt=""></div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        </div>
        <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->
@endsection
