@extends('template-backend.home')
@section('sub-judul','Daftar Tag')
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
<a href="{{ route('tag.create') }}" class="btn btn-info mb-4">Tambah Tag</a>
<table class="table table-bordered table-striped table-hover table-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Tag</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tags as $index=>$tag)
        <tr>
            <td>{{ $index + $tags->firstItem() }}</td>
            <td>{{ $tag->name }}</td>
            <td>
                <form action="{{ route('tag.destroy', $tag->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $tags->links() }}

@endsection