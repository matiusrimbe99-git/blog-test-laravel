@extends('template-blog.content')
@section('isi')
<div class="col-sm-12">
    <div class="card" data-aos="fade-up">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 mb-4">
                    <h1 class="font-weight-600 mb-4 text-uppercase">
                        Kategori {{ ($data['0']->category->name) }}
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($data as $listberita)
                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <a href="{{ route('blog.isi', $listberita->slug) }}">
                                <div class="rotate-img">
                                    <img src="{{ asset($listberita->image) }}" alt="banner" class="img-fluid" />
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-8 grid-margin">
                            <a class="nav-link pl-0 pt-0 text-dark" href="{{ route('blog.isi', $listberita->slug) }}">
                                <h2 class="font-weight-600 mb-2">
                                    {{ $listberita->title }}
                                </h2>
                            </a>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">{{ $listberita->users->name }}
                                </span>{{ $listberita->created_at }}
                            </p>
                            <p class="fs-15">
                                {{substr($listberita->content, 0, 100)}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    {{ $data->links() }}
                </div>
                @include('template-blog.content-sidebar')
            </div>
        </div>
    </div>
</div>
@endsection