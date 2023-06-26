@extends('admin.layouts.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Новости</h1>
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
          <h3 class="card-title">Новости</h3>

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
        <div class="card-body">
            <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Свежая новость</a>
            @if (count($allnews))
            <div class="table-responsive">
            <table class="table table-bordered table-hover text-nowrap">
                <thead>
                <tr>
                <th style="width: 10px">#</th>
                <th>Загаловок</th>
                <th>Описание</th>
                <th>Дата</th>
                <th style="width: 200px">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($allnews as $news)
                <tr>
                <td>{{ $news->id }}</td>
                <td>{{ $news->title }}</td>
                <td>{{ $news->description }}</td>
                <td>{{ $news->created_at }}</td>
                <td>
                <a href="{{ route('news.edit', ['news' => $news->id]) }}" class="btn btn-info btn-sm float-left mr-1"><i class="fas fa-pencil-alt"></i></a>
                <form action="{{ route('news.destroy', ['news' => $news->id]) }}" method="post" class="float-left">
                    @csrf
                       @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
                    <i class="fas fa-trash-alt"></i></button>
                </form>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
                @else 
                <p>Новостей пока нет...</p>
                @endif
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            {{-- <div class="card-footer clearfix">
                {{ $news->links('vendor.pagination.bootstrap-4') }}
                </div> --}}
                </div>
                    </div>
                </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
@endsection