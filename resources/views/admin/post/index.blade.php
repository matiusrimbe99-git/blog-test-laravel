@extends('template-backend.home')
@section('title', 'MS Website | Postingan')
@section('sub-judul','Daftar Postingan')
@section('nav-menu','Daftar Postingan')
@section('content')
<div class="col-lg-12 col-md-12 col-12 col-sm-12 p-0">
    <a href="{{ route('post.create') }}" class="btn btn-info mb-4">Tambah Postingan</a>
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th class="text-nowrap">No</th>
                            <th>Judul</th>
                            <th class="text-nowrap">Penulis</th>
                            <th class="text-nowrap">Kategori</th>
                            <th>Tags</th>
                            <th>Thumbnail</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $index=>$post)
                        <tr>
                            <td class="text-nowrap">
                                {{ $index + $posts->firstItem() }}
                            </td>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="font-weight-600"><img src="{{ asset($post->users->image) }}"
                                        alt="avatar" width="30" class="rounded-circle mr-1">
                                    {{ $post->users->name }}</a>
                            </td>
                            <td class="text-nowrap">
                                {{ $post->category->name }}
                            </td>
                            <td>
                                @foreach ($post->tags as $tag)
                                <span class="badge badge-info mb-1">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td>
                            <img src="{{ asset($post->image) }}" alt="thumbnail" class="img-fluid p-1" style="width:100px">
                            </td>
                            <td class="text-nowrap">
                                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('post.edit', $post->id) }}"
                                        class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i
                                            class="fas fa-pencil-alt"></i></a>
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
<div class=" pagination justify-content-center">{{ $posts->links() }}</div>
@endsection
@push('custom_script')
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/page/modules-sweetalert.js') }}"></script>
@if (Session::has('post_update'))
<script>
    swal({
    title: "Berhasil",
    text: "{{ Session::get('post_update') }}",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif
@if (Session::has('post_trash'))
<script>
    swal({
    title: "Berhasil",
    text: "{{ Session::get('post_trash') }}",
    icon: "success",
    button: "Tutup",
    });
</script>
@endif
@endpush