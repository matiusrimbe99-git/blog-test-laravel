@push('custom_css')
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
@endpush

@extends('template-backend.home')
@section('title', 'MS Website | Edit Postingan')
@section('sub-judul','Edit Postingan')
@section('content')
<div class="col-lg-12 col-md-12 col-12 col-sm-12 p-0">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label>Judul Postingan</label>
                    <input type="text" name="title" class="form-control" placeholder="Masukkan judul Postingan" value="{{ $post->title }}">

                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($post->category_id == $category->id)
                            selected
                            @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Tags</label>
                    <div class="selectgroup selectgroup-pills">
                        @foreach ($tags as $tag)
                        <label class="selectgroup-item">
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="selectgroup-input" @foreach ($post->tags as $value)
                            @if ($tag->id == $value->id)
                            checked
                            @endif
                            @endforeach>
                            <span class="selectgroup-button">{{ $tag->name }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <label>Konten</label>
                    <textarea name="content" class="summernote">{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <label>Thumbnail (<span class="text-danger">*Kosongkan jika tidak mengubah
                        Thumbnail</span>)</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary px-4 float-right">Simpan Postingan</button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('custom_script')
<script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/page/modules-sweetalert.js') }}"></script>

@if (count($errors)>0)
<script>
    swal({
    title: "Gagal",
    text: "{{ $errors->first() }}",
    icon: "error",
    button: "Tutup",
    });
</script>

@endif

@endpush


