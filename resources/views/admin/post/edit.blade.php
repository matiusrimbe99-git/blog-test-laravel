@extends('template-backend.home')
@section('sub-judul','Edit Postingan')
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

@if (count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ $error }}
    </div>
</div>
@endforeach

@endif

<form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Judul Postingan</label>
        <input type="text" name="title" class="form-control" placeholder="Masukkan judul Postingan" value="{{ $post->title }}">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select name="category_id" class="form-control">
            <option value="" holder>Pilih Kategori</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" 
                @if ($post->category_id == $category->id)
                    selected
                @endif
                >{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Pilih Tags</label>
        <select class="form-control select2" multiple="" name="tags[]">
            @foreach ($tags as $tag)
            <option value="{{ $tag->id }}"
                @foreach ($post->tags as $value)
                    @if ($tag->id == $value->id)
                        selected
                    @endif
                @endforeach
                >{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Konten</label>
        <textarea name="content" class="summernote">{{ $post->content }}</textarea>
    </div>
    <div class="form-group">
        <label>Thumbnail (<span class="text-danger text-weight-bold">*Kosongkan jika tidak ingin mengubah gambar</span>)</label>
        
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary px-4 float-right">Update Postingan</button>
</form>
@endsection