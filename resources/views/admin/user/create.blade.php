@extends('template-backend.home')
@section('title', 'MS Website | Tambah User')
@section('sub-judul','Tambah User')
@section('nav-menu','Tambah User')
@section('content')
<div class="col-lg-12 col-md-12 col-12 col-sm-12 p-0">
    <div class="row mt-5">
        <div class="col-lg-3 col-md-12 col-12 col-sm-12 p-0"></div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12 p-0">
            <div class="card">
                <div class="card-body">
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
                            <input type="text" name="password" class="form-control" placeholder="Jika tidak diisi, password default : password">
                        </div>
                        <button type="submit" class="btn btn-primary px-4 float-right">Simpan User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom_script')
<!-- Flash user -->
@if (Session::has('user_store'))
<script>
    swal({
    title: "Selamat",
    text: "{{ Session::get('user_store') }}",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif
<!-- End Flash user -->
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