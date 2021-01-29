@extends('template-backend.home')
@section('title', 'MS Website | Tambah Tags')
@section('sub-judul','Tambah Tags')
@section('nav-menu','Tambah Tags')
@section('content')
<div class="col-lg-12 col-md-12 col-12 col-sm-12 p-0">
    <div class="row mt-5">
        <div class="col-lg-3 col-md-12 col-12 col-sm-12 p-0"></div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12 p-0">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('tag.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Tags</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan nama Tags">
                        </div>
                        <button id="toastr-2" type="submit" class="btn btn-primary px-4 float-right">Simpan
                            Tags</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom_script')
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
<!-- Flash tag -->
@if (Session::has('tag_store'))
<script>
    swal({
    title: "Selamat",
    text: "{{ Session::get('tag_store') }}",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif
<!-- End Flash tag -->
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