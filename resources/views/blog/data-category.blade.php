@extends('template-blog.content')
@section('isi')
<div class="col-sm-12">
    <div class="card" data-aos="fade-up">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 mb-4">
                    <h1 class="font-weight-600 mb-4 text-uppercase">
                        Postingan Kategori
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($data as $datacategory)
                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <a href="{{ route('blog.isi', $datacategory->slug) }}">
                                <div class="rotate-img">
                                    <img src="{{ asset($datacategory->image) }}" alt="banner" class="img-fluid" />
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-8 grid-margin">
                            <a class="nav-link pl-0 pt-0 text-dark" href="{{ route('blog.isi', $datacategory->slug) }}">
                                <h2 class="font-weight-600 mb-0">
                                    {{ $datacategory->title }}
                                </h2>
                            </a>
                            <p class="text-muted mb-0">
                                <span class="mr-2 badge badge-danger text-uppercase">{{$datacategory->category->name}}</span>
                                <span class="mr-2">{{ $datacategory->users->name }}
                                </span>{{ $datacategory->created_at }}
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