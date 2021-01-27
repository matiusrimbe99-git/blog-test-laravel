@extends('template-blog.content')
@section('isi')
<div class="col-sm-12">
    <div class="card" data-aos="fade-up">
        <div class="card-body">
            <div class="row">
                @foreach ($data as $content)
                <div class="col-lg-8">
                    <div>
                        <h1 class="font-weight-600 mb-1">
                            {{ $content->title }}
                        </h1>
                        <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">{{ $content->category->name }}
                            </span>{{ $content->created_at->diffForHumans() }}
                        </p>
                        <div class="rotate-img">
                            <img src="{{asset($content->image)}}" alt="banner"
                                class="img-fluid mt-4 mb-4" />
                        </div>
                        <p class="mb-4 fs-15">
                            {{$content->content}}
                        </p>
                    </div>
                    
                    <div class="d-lg-flex">
                        <span class="fs-16 font-weight-600 mr-2 mb-1">Tags</span>
                        @foreach ($content->tags as $tag)
                            <span class="badge badge-outline-dark mr-2 mb-1">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                    <div class="post-comment-section">
                        <h3 class="font-weight-600">Related Posts</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="post-author">
                                    <div class="rotate-img">
                                        <img src="{{asset('frontend/assets/images/inner/inner_5.jpg')}}" alt="banner"
                                            class="img-fluid" />
                                    </div>
                                    <div class="post-author-content">
                                        <h5 class="mb-1">
                                            Virus Kills Member Of Council Advising Iran’s
                                            Supreme Leader
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="post-author">
                                    <div class="rotate-img">
                                        <img src="{{asset('frontend/assets/images/inner/inner_6.jpg')}}" alt="banner"
                                            class="img-fluid" />
                                    </div>
                                    <div class="post-author-content">
                                        <h5 class="mb-1">
                                            Virus Kills Member Of Council Advising Iran’s
                                            Supreme Leader
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="rotate-img">
                                        <img src="{{asset('frontend/assets/images/faces/face1.jpg')}}" alt="banner"
                                            class="img-fluid img-rounded mr-3" />
                                    </div>
                                    <div>
                                        <p class="fs-12 mb-1 line-height-xs">
                                            Penulis
                                        </p>
                                        <p class="fs-16 font-weight-600 mb-0 line-height-xs">
                                            {{ $content->users->name }}
                                        </p>
                                    </div>
                                </div>
                                <ul class="social-media mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <p class="fs-12">
                                Praesent facilisis vulputate venenatis. In facilisis
                                placerat arcu, in tempor neque aliquet quis. Integer
                                lacinia in ligula eu sodales. Proin non lorem
                                iaculis, dictum lorem quis, bibendum leo.
                            </p>
                        </div>
                        <div class="comment-section">
                            <h5 class="font-weight-600">Comments</h5>
                            <div class="comment-box">
                                <div class="d-flex align-items-center">
                                    <div class="rotate-img">
                                        <img src="{{asset('frontend/assets/images/faces/face2.jpg')}}" alt="banner"
                                            class="img-fluid img-rounded mr-3" />
                                    </div>
                                    <div>
                                        <p class="fs-12 mb-1 line-height-xs">
                                            24 Jul 2020
                                        </p>
                                        <p class="fs-16 font-weight-600 mb-0 line-height-xs">
                                            Chigusa Kisa
                                        </p>
                                    </div>
                                </div>

                                <p class="fs-12 mt-3">
                                    Praesent facilisis vulputate venenatis. In
                                    facilisis placerat arcu, in tempor neque aliquet
                                    quis. Integer lacinia in ligula eu sodales. Proin
                                    non lorem iaculis, dictum lorem quis, bibendum
                                    leo.
                                </p>
                            </div>
                            <div class="comment-box from">
                                <div class="d-flex align-items-center">
                                    <div class="rotate-img">
                                        <img src="{{asset('frontend/assets/images/faces/face3.jpg')}}" alt="banner"
                                            class="img-fluid img-rounded mr-3" />
                                    </div>
                                    <div>
                                        <p class="fs-12 mb-1 line-height-xs">
                                            24 Jul 2020
                                        </p>
                                        <p class="fs-16 font-weight-600 mb-0 line-height-xs">
                                            Mohsen Salehi
                                        </p>
                                    </div>
                                </div>

                                <p class="fs-12 mt-3">
                                    Praesent facilisis vulputate venenatis. In
                                    facilisis placerat arcu, in tempor neque aliquet
                                    quis. Integer lacinia in ligula eu sodales. Proin
                                    non lorem iaculis, dictum lorem quis, bibendum
                                    leo.
                                </p>
                            </div>
                            <div class="comment-box mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="rotate-img">
                                        <img src="{{asset('frontend/assets/images/faces/face3.jpg')}}" alt="banner"
                                            class="img-fluid img-rounded mr-3" />
                                    </div>
                                    <div>
                                        <p class="fs-12 mb-1 line-height-xs">
                                            24 Jul 2020
                                        </p>
                                        <p class="fs-16 font-weight-600 mb-0 line-height-xs">
                                            Lucy Miller
                                        </p>
                                    </div>
                                </div>

                                <p class="fs-12 mt-3">
                                    Praesent facilisis vulputate venenatis. In
                                    facilisis placerat arcu, in tempor neque aliquet
                                    quis. Integer lacinia in ligula eu sodales. Proin
                                    non lorem iaculis, dictum lorem quis, bibendum
                                    leo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-4">
                    <h2 class="mb-4 text-primary font-weight-600">
                        Latest news
                    </h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border-bottom pb-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            Ways to stay social online while in self..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="{{asset('frontend/assets/images/inner/inner_7.jpg')}}"
                                                alt="banner" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border-bottom pb-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            Premier League players join charity..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="{{asset('frontend/assets/images/inner/inner_8.jpg')}}"
                                                alt="banner" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            UK Athletics board changed stance on..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="{{asset('frontend/assets/images/inner/inner_9.jpg')}}"
                                                alt="banner" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trending">
                        <h2 class="mb-4 text-primary font-weight-600">
                            Trending
                        </h2>
                        <div class="mb-4">
                            <div class="rotate-img">
                                <img src="{{asset('frontend/assets/images/inner/inner_10.jpg')}}" alt="banner"
                                    class="img-fluid" />
                            </div>
                            <h3 class="mt-3 font-weight-600">
                                Virus Kills Member Of Advising Iran’s Supreme
                            </h3>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                        </div>
                        <div class="mb-4">
                            <div class="rotate-img">
                                <img src="{{asset('frontend/assets/images/inner/inner_11.jpg')}}" alt="banner"
                                    class="img-fluid" />
                            </div>
                            <h3 class="mt-3 font-weight-600">
                                Virus Kills Member Of Advising Iran’s Supreme
                            </h3>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                        </div>
                        <div class="mb-4">
                            <div class="rotate-img">
                                <img src="{{asset('/frontend/assets/images/inner/inner_12.jpg')}}" alt="banner"
                                    class="img-fluid" />
                            </div>
                            <h3 class="mt-3 font-weight-600">
                                Virus Kills Member Of Advising Iran’s Supreme
                            </h3>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection