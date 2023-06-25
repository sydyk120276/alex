@extends('admin.layouts.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Header</h1>
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

    <!-- header content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <h3 class="card-title">Header</h3>

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
                <form role="form" method="post" action="{{ route('headers.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title_logo">Текс лого</label>
                            <input type="text" name="title_logo" class="form-control @error('title_logo') is-invalid @enderror"
                                id="title_logo" placeholder="Название">
                        </div>
                        <div class="form-group">
                            <label for="logo">Картинка лого</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="logo" id="logo">
                                    <label class="custom-file-label" for="logo">Выбрать файл</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="link1">Ссылка 1</label>
                            <input type="text" name="link1" class="form-control @error('link1') is-invalid @enderror"
                                id="link1" placeholder="Название">
                        </div>
                        <div class="form-group">
                            <label for="link2">Ссылка 2</label>
                            <input type="text" name="link2" class="form-control @error('link2') is-invalid @enderror"
                                id="link2" placeholder="Название">
                        </div>
                        <div class="form-group">
                            <label for="link3">Ссылка 3</label>
                            <input type="text" name="link3" class="form-control @error('link3') is-invalid @enderror"
                                id="link3" placeholder="Название">
                        </div>
                        <div class="form-group">
                            <label for="link4">Ссылка 4</label>
                            <input type="text" name="link4" class="form-control @error('link4') is-invalid @enderror"
                                id="link4" placeholder="Название">
                        </div>
                        <div class="form-group">
                            <label for="link5">Ссылка 5</label>
                            <input type="text" name="link5" class="form-control @error('link5') is-invalid @enderror"
                                id="link5" placeholder="Название">
                        </div>

                        <div class="form-group">
                            <label for="mode_button_image">Картинка кнопки режима</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mode_button_image" id="mode_button_image">
                                    <label class="custom-file-label" for="mode_button_image">Выбрать файл</label>
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
