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
                            <h3 class="card-title">Проект {{ $project->title }}</h3>

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
                <form role="form" method="post" action="{{ route('projects.update', ['project' => $project->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Название</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" value="{{ $project->title }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea name="description" type="text" id="description" rows="3" class="form-control @error('description') is-invalid @enderror"
                                >{{ $project->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="logo">Логотип</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="logo" id="logo">
                                    <label class="custom-file-label" for="logo">Выбрать другой файл</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $project->getLogo() }}" alt=""></div>
                        </div>

                        <div class="form-group">
                            <label for="platform1">Платформа1</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="platform1" id="platform1">
                                    <label class="custom-file-label" for="platform1">Выбрать другой файл</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $project->getPlatform1() }}" alt=""></div>
                        </div>

                        <div class="form-group">
                            <label for="platform2">Платформа02</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="platform2" id="platform2">
                                    <label class="custom-file-label" for="platform2">Выбрать другой файл</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $project->getPlatform2() }}" alt=""></div>
                        </div>



                        <div class="form-group">
                            <label for="thumbnail">Изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnail" id="thumbnail">
                                    <label class="custom-file-label" for="thumbnail">Выбрать другой файл</label>
                                </div>
                            </div>
                            <div class="w-25"><img class="img-thumbnail w-100" src="{{ $project->getImage() }}" alt=""></div>
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
