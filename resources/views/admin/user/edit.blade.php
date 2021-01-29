@extends('template-backend.home')
@section('title', 'MS Website | Edit User')
@section('sub-judul','Edit User')
@section('nav-menu','Edit User')
@section('content')
<div class="col-lg-12 col-md-12 col-12 col-sm-12 p-0">
    <div class="row mt-5">
        <div class="col-lg-3 col-md-12 col-12 col-sm-12 p-0"></div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12 p-0">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label>Nama User</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan nama User"
                                value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Masukkan email"
                                value="{{ $user->email }}" readonly>
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
                            <label>Password (<span class="text-danger">*Kosongkan jika tidak mengubah
                                    password</span>)</label>
                            <input type="text" name="password" class="form-control" placeholder="Masukkan password">
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