@extends('template-backend.home')
@section('sub-judul','Daftar Kategori')
@section('content')
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ Session('success') }}
    </div>
</div>
@endif
<a href="{{ route('category.create') }}" class="btn btn-info mb-4">Tambah Kategori</a>
<table class="table table-bordered table-striped table-hover table-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $index=>$category)
        <tr>
            <td>{{ $index + $categories->firstItem() }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $categories->links() }}

@endsection