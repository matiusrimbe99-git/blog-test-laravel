@extends('template-blog.content')
@section('isi')
<div class="row" data-aos="fade-up">
    <div class="col-xl-8 stretch-card grid-margin">
        <div class="card bg-dark">
            <div class="position-relative">
                <img src="{{asset('frontend/assets/images/dashboard/banner.jpg')}}" alt="banner" class="img-fluid" />
                <div class="banner-content">
                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                        global news
                    </div>
                    <h1 class="mb-0">BERITA POPULER</h1>
                    <h1 class="mb-2">
                        Coronavirus Outbreak LIVE Updates
                    </h1>
                    <div class="fs-12">
                        <span class="mr-2">Photo </span>10 Minutes ago
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="card-title mb-0">
                        <h2>Berita Terbaru</h2>
                    </div>
                </div>

                @foreach ($data as $berita)
                <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                    <div class="pr-3">
                        <a class="nav-link text-white pl-0" href="{{ route('blog.isi', $berita->slug) }}">
                            <h5>{{ $berita->title }}</h5>
                        </a>
                        <div class="fs-12">
                            <span class="mr-2">{{ $berita->users->name }}
                            </span>{{ $berita->created_at }}
                        </div>
                    </div>
                    <div class="rotate-img">
                        <a href="{{ route('blog.isi', $berita->slug) }}"><img src="{{asset($berita->image)}}"
                                alt="thumb" class="img-fluid img-lg" /></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row" data-aos="fade-up">
    <div class="col-lg-3 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="card-title mt-0">
                    <h2>KATEGORI</h2>
                </div>
                <ul class="vertical-menu">
                    @foreach ($category_widget as $category2)
                    <li>
                        <div class="footer-border-bottom pb-0">
                            <a href="{{ route('blog.category', $category2->slug) }}">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0 font-weight-600">{{ $category2->name }}</h4>
                                    <div class="mt-2">
                                        <h4 class="badge badge-danger">{{ $category2->posts->count() }}
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-9 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="card-title mt-0">
                        <h2>POSTINGAN TERBARU</h2>
                    </div>
                    <div class="card-title mt-0">
                        <a class="nav-link" href="{{ route('blog.list-post') }}"><h5>Lihat
                        Semua</h5>
                        </a>
                    </div>
                </div>
                @foreach ($data as $post)
                <div class="row">
                    <div class="col-sm-4 grid-margin pb-0">
                        <div class="position-relative">
                            <div class="rotate-img">
                                <a href="{{ route('blog.isi', $post->slug) }}">
                                    <img src="{{asset($post->image)}}" alt="thumb" class="img-fluid" />
                                </a>
                            </div>
                            <div class="badge-positioned">
                                <span class="badge badge-danger font-weight-bold">{{ $post->category->name }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 grid-margin">
                        <h2 class="mb-2 font-weight-600">
                            <a class="nav-link text-dark pt-0 pl-0"
                                href="{{ route('blog.isi', $post->slug) }}">{{$post->title}}</a>
                        </h2>
                        <div class="fs-13 mb-2">
                            <span class="mr-2">{{ $post->users->name }}
                            </span>{{ $post->created_at }}
                        </div>
                        <p class="mb-0">
                            <div class="d-lg-flex">
                                <span class="fs-16 font-weight-600 mr-2 mb-1">Tags:</span>
                                @foreach ($post->tags as $tag)
                                <span class="badge badge-outline-dark mr-2 mb-1">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row" data-aos="fade-up">
    <div class="col-sm-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-title">
                            Video
                        </div>
                        <div class="row">
                            <div class="col-sm-6 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="{{asset('frontend/assets/images/dashboard/home_7.jpg')}}" alt="thumb"
                                            class="img-fluid" />
                                    </div>
                                    <div class="badge-positioned w-90">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge badge-danger font-weight-bold">Lifestyle</span>
                                            <div class="video-icon">
                                                <i class="mdi mdi-play"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="{{asset('frontend/assets/images/dashboard/home_8.jpg')}}" alt="thumb"
                                            class="img-fluid" />
                                    </div>
                                    <div class="badge-positioned w-90">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge badge-danger font-weight-bold">National
                                                News</span>
                                            <div class="video-icon">
                                                <i class="mdi mdi-play"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="{{asset('frontend/assets/images/dashboard/home_9.jpg')}}" alt="thumb"
                                            class="img-fluid" />
                                    </div>
                                    <div class="badge-positioned w-90">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge badge-danger font-weight-bold">Lifestyle</span>
                                            <div class="video-icon">
                                                <i class="mdi mdi-play"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="{{asset('frontend/assets/images/dashboard/home_10.jpg')}}" alt="thumb"
                                            class="img-fluid" />
                                    </div>
                                    <div class="badge-positioned w-90">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge badge-danger font-weight-bold">National
                                                News</span>
                                            <div class="video-icon">
                                                <i class="mdi mdi-play"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="card-title">
                                Berita Populer
                            </div>
                            <p class="mb-3">See all</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                            <div class="div-w-80 mr-3">
                                <div class="rotate-img">
                                    <img src="{{asset('frontend/assets/images/dashboard/home_11.jpg')}}" alt="thumb"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <h3 class="font-weight-600 mb-0">
                                Apple Introduces Apple Watch
                            </h3>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <div class="div-w-80 mr-3">
                                <div class="rotate-img">
                                    <img src="{{asset('frontend/assets/images/dashboard/home_12.jpg')}}" alt="thumb"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <h3 class="font-weight-600 mb-0">
                                SEO Strategy & Google Search
                            </h3>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <div class="div-w-80 mr-3">
                                <div class="rotate-img">
                                    <img src="{{asset('frontend/assets/images/dashboard/home_13.jpg')}}" alt="thumb"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <h3 class="font-weight-600 mb-0">
                                Cycling benefit & disadvantag
                            </h3>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <div class="div-w-80 mr-3">
                                <div class="rotate-img">
                                    <img src="{{asset('frontend/assets/images/dashboard/home_14.jpg')}}" alt="thumb"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <h3 class="font-weight-600">
                                The Major Health Benefits of
                            </h3>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-3">
                            <div class="div-w-80 mr-3">
                                <div class="rotate-img">
                                    <img src="{{asset('frontend/assets/images/dashboard/home_15.jpg')}}" alt="thumb"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <h3 class="font-weight-600 mb-0">
                                Powerful Moments of Peace
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection