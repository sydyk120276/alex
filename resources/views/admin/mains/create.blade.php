@extends('admin.layouts.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Основная секция</h1>
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
                            <h3 class="card-title">Основная секция</h3>

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
                <form role="form" method="post" action="{{ route('mains.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title_item">Название</label>
                            <input type="text" name="title_item" class="form-control @error('title_item') is-invalid @enderror"
                                id="title_item" placeholder="Название">
                        </div>

                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea name="description" type="text" id="description" rows="3" class="form-control @error('description') is-invalid @enderror"
                                placeholder="Описание ..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description_button">Описание кнопки</label>
                            <textarea name="description_button" type="text" id="description_button" rows="3" class="form-control @error('description_button') is-invalid @enderror"
                                placeholder="Описание ..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="thumbnail">Картинка для фона 1</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnail" id="thumbnail">
                                    <label class="custom-file-label" for="thumbnail">Выбрать файл</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thumbnail2">Картинка для фона 2</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnail2" id="thumbnail2">
                                    <label class="custom-file-label" for="thumbnail2">Выбрать файл</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thumbnail3">Картинка для фона 3</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnail3" id="thumbnail3">
                                    <label class="custom-file-label" for="thumbnail3">Выбрать файл</label>
                                </div>
                            </div>
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
