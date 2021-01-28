@extends('template-backend.home')
@section('title', 'MS Website | User')
@section('sub-judul','Daftar User')
@section('content')

<div class="col-lg-12 col-md-12 col-12 col-sm-12 p-0">
    <a href="{{ route('user.create') }}" class="btn btn-info mb-4">Tambah User</a>
    <div class="row">
        <div class="col-lg-1 col-md-12 col-12 col-sm-12"></div>
        <div class="col-lg-10 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index=>$user)
                                <tr>
                                    <td>{{ $index + $users->firstItem() }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->type_user)
                                        <span class="badge badge-info">Administrator</span>
                                        @else
                                        <span class="badge badge-warning">Penulis</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('user.edit', $user->id) }}"
                                                class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <button type="submit" class="btn btn-danger btn-action"
                                                data-toggle="tooltip" title="Hapus"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pagination justify-content-center">{{ $users->links() }}</div>

@endsection

@push('custom_script')
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
<!-- Flash user -->
@if (Session::has('user_update'))
<script>
    swal({
    title: "Selamat",
    text: "{{ Session::get('user_update') }}",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif

@if (Session::has('user_delete'))
<script>
    swal({
    title: "Selamat",
    text: "{{ Session::get('user_delete') }} ",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif
<!-- End Flash user -->
@endpush