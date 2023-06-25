@extends('admin.layouts.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>О нас</h1>
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
          <h3 class="card-title">О нас</h3>

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
          @if (!count($abouts))
            <a href="{{ route('abouts.create') }}" class="btn btn-primary mb-3">Добавить информацию</a>
            @endif
            @if (count($abouts))
            <div class="table-responsive">
            <table class="table table-bordered table-hover text-wrap">
                <thead>
                <tr>
                <th style="width: 10px">#</th>
                <th>Наименование</th>
                <th>Описание</th>
                <th>Контент</th>
                <th>Дата</th>
                <th style="width: 200px">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($abouts as $about)
                <tr>
                <td>{{ $about->id }}</td>
                <td>{{ $about->title }}</td>
                <td>{{ $about->description }}</td>
                <td>{{ $about->content }}</td>
                <td>{{ $about->created_at }}</td>
                <td>
                <a href="{{ route('abouts.edit', ['about' => $about->id]) }}" class="btn btn-info btn-sm float-left mr-1"><i class="fas fa-pencil-alt"></i></a>
                <form action="{{ route('abouts.destroy', ['about' => $about->id]) }}" method="post" class="float-left">
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
                <p>Информации о нас пока нет...</p>
                @endif
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
            <div class="card-footer clearfix">
                {{ $posts->links('vendor.pagination.bootstrap-4') }}
                </div>
                </div> --}}
                    </div>
                </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
@endsection