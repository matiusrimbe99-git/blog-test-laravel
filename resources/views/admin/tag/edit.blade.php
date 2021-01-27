@extends('template-backend.home')
@section('sub-judul','Edit Tag')
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

<form action="{{ route('tag.update', $tag->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Nama Tag</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan nama Tag" value="{{ $tag->name }}">
    </div>
    <button type="submit" class="btn btn-primary px-4 float-right">Update Tag</button>
</form>
@endsection