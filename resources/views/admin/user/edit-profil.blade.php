@extends('template-backend.home')
@section('title', 'MS Website | Edit Profil')
@push('custom_css')
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
@endpush
@section('sub-judul','Edit Profil')
@section('nav-menu','Edit Profil')
@section('content')

<h2 class="section-title">Hi, {{ Auth::user()->name }}!</h2>
<p class="section-lead">
    Ubah informasi profil Anda di halaman ini!
</p>

<div class="row mt-sm-4">
    <div class="col-12 col-md-12 col-lg-5">
        <div class="card profile-widget">
            <div class="profile-widget-header">
                <img alt="image" src="{{ asset(Auth::user()->image) }}" class="rounded-circle profile-widget-picture">
                <div class="profile-widget-items">
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">@if (Auth::user()->type_user == 1)
                            Administrator
                            @else
                            Penulis
                            @endif</div>
                        <div class="profile-widget-item-value">{{ Auth::user()->name }}</div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Terdaftar</div>
                        <div class="profile-widget-item-value"> {{ Auth::user()->created_at }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile-widget-description">
                <div class="profile-widget-name">{{ Auth::user()->name }} <div
                        class="text-muted d-inline font-weight-normal">
                        <div class="slash"></div> @if (Auth::user()->type_user == 1)
                        Administrator
                        @else
                        Penulis
                        @endif
                    </div>
                </div>
                {!! Auth::user()->bio !!}
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
            <form method="post" action="{{ route('user.update-profil') }}" class="needs-validation" novalidate=""
                enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-header">
                    <h4>Edit Profil</h4>
                </div>
                <div class="card-body pt-0 pb-0">
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}"
                                required="">
                            <div class="invalid-feedback">
                                Masukkan nama Anda
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}"
                                readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label>Gambar Profil</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Bio</label>
                            <textarea name="bio"
                                class="form-control summernote-simple">{{ Auth::user()->bio }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right pt-0">
                    <button type="submit" class="btn btn-primary">Ubah Profil</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('custom_script')
<script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
@if (Session::has('user_update_profil'))
<script>
    swal({
    title: "Selamat",
    text: "{{ Session::get('user_update_profil') }}",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif
@endpush