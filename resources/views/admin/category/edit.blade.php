@extends('template-backend.home')
@section('sub-judul','Edit Kategori')
@section('content')

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

<form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan nama Kategori" value="{{ $category->name }}">
    </div>
    <button type="submit" class="btn btn-primary px-4 float-right">Update Kategori</button>
</form>
@endsection