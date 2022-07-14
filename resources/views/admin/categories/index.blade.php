@extends('admin.layouts.layout')

@section('content')


        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Categorii</h1>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Naimenovanie categoriy</h3>

                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                    <a href="{{ route('categories.create') }}" class="bin bin-primary mb-3">

                        Dobavit categoriyu
                    </a>
                    @if (count($categories))
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th style="width: 30px">#</th>
                                    <th>Naimenovanie</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td><a href="{{ route('categories.edit',$category->id)}}" class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('categories.destroy', ['category' => $category->id ])}}" method="post" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Podtverdite udalenie')"name=""></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        @else
                        <p>There is no categories yet </p>
                    @endif
                </div>
                <div class="card-footer clearfix">
                    {{ $categories->links('vendor.pagination.bootstrap-4') }}
            </div>

            </div>
            </div>
            </section>



@endsection
