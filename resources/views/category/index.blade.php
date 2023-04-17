@extends('layouts.master')

@section('title')
    Category
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Category</a></li>
@endsection

@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Data Category</h3>
                <a href="{{ route('category.create') }}"><button type="button" class="btn btn-outline-primary">Tambah
                        Data</button></a>
            </div>
            @include('alert.alert')
            <div class="box-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th style="width: 3%">No</th>
                        <th>Nama Category</th>
                        <th style="width: 8%"><i class="bx bx-cog"></i></th>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem(); ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href='{{ url('category/' . $item->id . '/edit') }}'
                                        class="btn btn-primary btn-sm"><span class="bx bx-edit"></span></a>
                                    <form class="d-inline" action="{{ url('category/' . $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm"><span
                                                class="bx bx-trash"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    </tbody>

                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
