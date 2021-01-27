@extends('template-blog.content')
@section('isi')
<div class="col-sm-12">
    <div class="card" data-aos="fade-up">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="font-weight-600 mb-4">
                        DAFTAR POSTINGAN
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($data as $posts)
                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="rotate-img">
                                <img src="{{ asset($posts->image) }}" alt="banner" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                            <h2 class="font-weight-600 mb-2">
                                {{ $posts->title }}
                            </h2>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">{{ $posts->users->name }}
                                </span>{{ $posts->created_at }}
                            </p>
                            <p class="fs-15">
                                {{substr($posts->content, 0, 100)}}
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