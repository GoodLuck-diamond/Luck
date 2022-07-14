@extends('admin.layouts.layout')

@section('content')



        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sozdanie categoriy</h1>
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


        <section class="card" >
            <div class="card-header">
                <div class="row mb-2">
                    <div class="col-sm-6">
                <form role="form" method="post" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Nazvanie</label>
                            <input type="text" name="title" class="form-control" @error("title") is-invalid @enderror id="title" placeholder="Name">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sohranit</button>


                </form>
            </div>


                    <div class="card-footer">

                    </div>


                </div>



        </div>
        </section>


@endsection
