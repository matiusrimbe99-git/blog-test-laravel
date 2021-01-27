@extends('template-backend.home')
@section('sub-judul','Daftar User')
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
<a href="{{ route('user.create') }}" class="btn btn-info mb-4">Tambah User</a>
<table class="table table-bordered table-striped table-hover table-sm">
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
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $users->links() }}

@endsection