@extends('template-backend.home')
@section('title', 'MS Website | Dashboard')
@section('sub-judul','Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Users</h4>
                </div>
                <div class="card-body">
                    {{ $users->count() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Posts Publish</h4>
                </div>
                <div class="card-body">
                    {{ $posts->count() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="far fa-trash-alt"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Posts Trash</h4>
                </div>
                <div class="card-body">
                    {{ $postTrash->count() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-layer-group"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Kategori</h4>
                </div>
                <div class="card-body">
                    {{ $categories->count() }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-7 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Post Terbaru</h4>
                <div class="card-header-action">
                    <a href="{{ route('post.index') }}" class="btn btn-primary">Lihat Semua</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th class="text-nowrap">Penulis</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $item)
                            <tr>
                                <td>
                                    {{ $item->title }}
                                    <div class="table-links">
                                        in <a>{{ $item->category->name }}</a>
                                        <div class="bullet"></div>
                                        <a>View</a>
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png"
                                            alt="avatar" width="30" class="rounded-circle mr-1">
                                        {{ $item->users->name }}</a>
                                </td>
                                <td class="text-nowrap">
                                    <form action="{{ route('post.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('post.edit', $item->id) }}"
                                            class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                            title="Edit"><i class="fas fa-pencil-alt"></i></a>
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
    <div class="col-lg-5 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Users</h4>
            </div>
            <div class="card-body">
                <div class="row pb-2">
                    @foreach ($users as $user)
                    <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                        <div class="avatar-item mb-3">
                            <img alt="image"
                                src="@if ($user->type_user){{asset('assets/img/avatar/avatar-4.png') }} @else {{asset('assets/img/avatar/avatar-1.png') }} @endif"
                                class="img-fluid" data-toggle="tooltip" title="{{ $user->name }}">
                            <div class="avatar-badge" title="@if ($user->type_user)Administrator @else Penulis @endif"
                                data-toggle="tooltip"><i
                                    class="@if ($user->type_user)fas fa-cog @else fas fa-pencil-alt @endif"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
