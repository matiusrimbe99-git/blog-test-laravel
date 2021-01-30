@extends('template-backend.home')
@section('title', 'MS Website | Tambah Kategori')
@section('sub-judul','Tambah Kategori')
@section('nav-menu','Tambah Kategori')
@section('content')
<div class="col-lg-12 col-md-12 col-12 col-sm-12 p-0">
    <div class="row mt-5">
        <div class="col-lg-3 col-md-12 col-12 col-sm-12 p-0"></div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12 p-0">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan nama Kategori">
                        </div>
                        <button id="toastr-2" type="submit" class="btn btn-primary px-4 float-right">Simpan
                            Kategori</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom_script')
<!-- Flash Category -->
@if (Session::has('category_store'))
<script>
    swal({
    title: "Selamat",
    text: "{{ Session::get('category_store') }}",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif
<!-- End Flash Category -->
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