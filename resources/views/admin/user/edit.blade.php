@extends('template-backend.home')
@section('sub-judul','Edit User')
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

<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Nama User</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan nama User" value="{{ $user->name }}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Masukkan email" value="{{ $user->email }}"
            readonly>
    </div>
    <div class="form-group">
        <label>Tipe User</label>
        <select name="type_user" class="form-control">
            <option value="1" @if ($user->type_user == 1)
                selected
                @endif
                >Administrator</option>
            <option value="0" @if ($user->type_user == 0)
                selected
                @endif
                >Penulis</option>
        </select>
    </div>
    <div class="form-group">
        <label>Password (<span class="text-danger">*Kosongkan jika tidak mengubah password</span>)</label>
        <input type="text" name="password" class="form-control" placeholder="Masukkan password">
    </div>
    <button type="submit" class="btn btn-primary px-4 float-right">Simpan User</button>
</form>
@endsection