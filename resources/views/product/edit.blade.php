@extends('layouts.master')

@section('title')
    Edit Product
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Edit Product</a></li>
@endsection



@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Edit Data Product</h3>
            </div>
            @include('alert.alert')
            <!-- START FORM -->
            <form action='{{ url('product/' . $data->id) }}' method='post'>
                @csrf
                @method('PUT')
                <div class="my-3 p-3">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nama Product</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='name' id="name"
                                value="{{ $data->name }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="category_id" class="col-sm-2 col-form-label">Category Product</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="category_id" id="category_id">
                                <option disabled>Pilih Category</option>
                                {{-- <option value="{{ $data->category_id }}">{{ $data->category->name }} --}}
                                </option>
                                @foreach ($cate as $item)
                                    {{-- <option value="{{ $item->id }}">{{ $item->name }}</option> --}}
                                    <option @selected($item->id == $data->category_id) value="{{ $item->id }}">
                                        {{ $item->category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="price" class="col-sm-2 col-form-label">Harga Product</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name='price' id="price"
                                value="{{ $data->price }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stock" class="col-sm-2 col-form-label">Stock Product</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name='stock' id="stock"
                                value="{{ $data->stock }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-sm-2 col-form-label">Deskripsi Product</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name='description' id="description" rows="5" cols="100">{{ $data->description }}</textarea>
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
