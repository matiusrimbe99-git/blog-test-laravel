@extends('template-backend.home')
@section('title', 'MS Website | Kategori')
@section('sub-judul','Daftar Kategori')
@section('nav-menu','Daftar Kategori')
@section('content')
<div class="col-lg-12 col-md-12 col-12 col-sm-12 p-0">
    <a href="{{ route('category.create') }}" class="btn btn-info mb-4">Tambah Kategori</a>
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
                                    <th>Nama Kategori</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $index=>$category)
                                <tr>
                                    <td>{{ $index + $categories->firstItem() }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td class="text-nowrap">
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('category.edit', $category->id) }}"
                                                class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <button type="submit" class="btn btn-danger btn-action" data-toggle="tooltip"
                                        title="Hapus"><i class="fas fa-trash"></i></button>
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
<div class="pagination justify-content-center">{{ $categories->links() }}</div>


@endsection
@push('custom_script')
<!-- Flash Category -->
@if (Session::has('category_update'))
<script>
    swal({
    title: "Selamat",
    text: "{{ Session::get('category_update') }}",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif

@if (Session::has('category_delete'))
<script>
    swal({
    title: "Selamat",
    text: "{{ Session::get('category_delete') }} ",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif
<!-- End Flash Category -->
@endpush