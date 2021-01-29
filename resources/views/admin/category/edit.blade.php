@extends('template-backend.home')
@section('title', 'MS Website | Edit Kategori')
@section('sub-judul','Edit Kategori')
@section('nav-menu','Edit Kategori')
@section('content')
<div class="col-lg-12 col-md-12 col-12 col-sm-12 p-0">
    <div class="row mt-5">
        <div class="col-lg-3 col-md-12 col-12 col-sm-12 p-0"></div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12 p-0">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan nama Kategori" value="{{ $category->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary px-4 float-right">Simpan
                            Kategori</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom_script')
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>

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