@extends('template-backend.home')
@section('sub-judul','Tambah User')
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

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama User</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan nama User">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Masukkan email">
    </div>
    <div class="form-group">
        <label>Tipe User</label>
        <select name="type_user" class="form-control">
            <option value="" holder>Pilih Tipe User</option>
            <option value="1">Administrator</option>
            <option value="0">Penulis</option>
        </select>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control" placeholder="Masukkan password">
    </div>
    <button type="submit" class="btn btn-primary px-4 float-right">Simpan User</button>
</form>
@endsection