@extends('admin.layouts.layout')

@section('content')



    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Redactirovanie categoriy</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </section>

    <section class="card" >
        <div class="card-header">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="card-title">Categoriya "{{  $category->title }}"></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                    <form role="form" method="post" action="{{ route('categories.update', ['category' => $category->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Nazvanie</label>
                                <input type="text" name="title" class="form-control" @error("title") is-invalid @enderror id="title" value="{{ $category->title }}">
                            </div>
                        </div>


                    </form>
                </div>

                <a href="{{ route('categories.create') }}" class="bin bin-primary mb-3">
                    Dobavit categoriyu
                </a>

                @if($category->count())
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th style="width: 30px">N</th>
                                <th>Naimenovanie</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>


                        </table>
                    </div>
                @else

                @endif

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Sohranit</button>

                </div>


            </div>



        </div>
    </section>


@endsection
