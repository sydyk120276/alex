@extends('admin.layouts.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование</h1>
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
                            <h3 class="card-title">Редактирование {{ $news->title }}</h3>

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
                <form role="form" method="post" action="{{ route('news.update', ['news' => $news->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Загаловок</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" value="{{ $news->title }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea name="description" type="text" id="description" rows="3" class="form-control @error('description') is-invalid @enderror"
                                >{{ $news->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="head_title">head-title</label>
                            <input type="text" name="head_title" class="form-control @error('head_title') is-invalid @enderror"
                                id="head_title" value="{{ $news->head_title }}">
                        </div>
                        <div class="form-group">
                            <label for="head_description">head-description</label>
                            <input type="text" name="head_description" class="form-control @error('head_description') is-invalid @enderror"
                                id="head_description" value="{{ $news->head_description }}">
                        </div>
                        <div class="form-group">
                            <label for="head_keywords">head-keywords</label>
                            <input type="text" name="head_keywords" class="form-control @error('head_keywords') is-invalid @enderror"
                                id="head_keywords" value="{{ $news->head_keywords }}">
                        </div>

                        <div class="form-group">
                            <label for="image">Изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $news->getImage() }}" alt=""></div>
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
