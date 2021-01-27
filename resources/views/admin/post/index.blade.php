@extends('template-backend.home')
@section('sub-judul','Daftar Postingan')
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
<a href="{{ route('post.create') }}" class="btn btn-info mb-4">Tambah Postingan</a>
<table class="table table-bordered table-striped table-hover table-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Postingan</th>
            <th>Creator</th>
            <th>Kategori</th>
            <th>Tags</th>
            <th>Thumbnail</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $index=>$post)
        <tr>
            <td>{{ $index + $posts->firstItem() }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->users->name }}</td>
            <td>{{ $post->category->name }}</td>
            <td>@foreach ($post->tags as $tag)
                <ul>
                    <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
                </ul>
                @endforeach</td>
            <td>
                <img src="{{ asset($post->image) }}" alt="thumbnail" class="img-fluid" style="width:100px">
            </td>
            <td>
                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $posts->links() }}

@endsection