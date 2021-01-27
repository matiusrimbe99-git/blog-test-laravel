@extends('template-backend.home')
@section('sub-judul','Tambah Kategori')
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

<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan nama Kategori">
    </div>
    <button id="toastr-2" type="submit" class="btn btn-primary px-4 float-right">Simpan Kategori</button>
</form>
@endsection