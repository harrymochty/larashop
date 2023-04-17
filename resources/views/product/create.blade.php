@extends('layouts.master')

@section('title')
    Create Product
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Create Product</a></li>
@endsection



@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Create Data Product</h3>
            </div>
            @include('alert.alert')
            <!-- START FORM -->
            <form action='{{ url('product') }}' method='post' enctype="multipart/form-data">
                @csrf
                <div class="my-3 p-3">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nama Product</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='name' id="name" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="category_id" class="col-sm-2 col-form-label">Category Product</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="category_id" id="category_id">
                                <option selected="true" disabled>Pilih Category</option>
                                @foreach ($cate as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='price' id="price"
                                value="{{ Session::get('price') }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='stock' id="stock"
                                value="{{ Session::get('stock') }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-sm-2 col-form-label">Deskripsi Product</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name='description' id="description" rows="5" cols="100"></textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" placeholder="image">
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary float-end"
                            name="submit">Submit</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <!-- AKHIR FORM -->
    </div>
    </div>
@endsection
