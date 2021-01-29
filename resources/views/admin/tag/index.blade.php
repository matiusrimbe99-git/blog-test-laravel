@extends('template-backend.home')
@section('title', 'MS Website | Tags')
@section('sub-judul','Daftar Tags')
@section('nav-menu','Daftar Tags')
@section('content')
<div class="col-lg-12 col-md-12 col-12 col-sm-12 p-0">
    <a href="{{ route('tag.create') }}" class="btn btn-info mb-4">Tambah Tags</a>
    <div class="row">
        <div class="col-lg-3 col-md-12 col-12 col-sm-12"></div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tags</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $index=>$tag)
                                <tr>
                                    <td>{{ $index + $tags->firstItem() }}</td>
                                    <td>{{ $tag->name }}</td>
                                    <td class="text-nowrap">
                                        <form action="{{ route('tag.destroy', $tag->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('tag.edit', $tag->id) }}"
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
<div class="pagination justify-content-center">{{ $tags->links() }}</div>


@endsection
@push('custom_script')
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
<!-- Flash tag -->
@if (Session::has('tag_update'))
<script>
    swal({
    title: "Selamat",
    text: "{{ Session::get('tag_update') }}",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif

@if (Session::has('tag_delete'))
<script>
    swal({
    title: "Selamat",
    text: "{{ Session::get('tag_delete') }} ",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif
<!-- End Flash tag -->
@endpush