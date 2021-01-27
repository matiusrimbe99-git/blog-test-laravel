<div class="col-lg-4">
    <h2 class="mb-4 text-primary font-weight-600">
        Berita Terbaru
    </h2>
    @foreach ($data as $berita)
    <div class="row">
        <div class="col-sm-12">
            <div class="border-bottom pb-4 pt-4">


                <div class="row">
                    <div class="col-sm-8">
                        <a class="nav-link text-dark pt-0 pl-0" href="{{ route('blog.isi',$berita->slug) }}">
                            <h5 class="font-weight-600 mb-1">
                                {{ $berita->title }}
                            </h5>
                        </a>
                        <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">{{ $berita->users->name }} </span>{{ $berita->created_at }}
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="rotate-img">
                            <a href="{{ route('blog.isi',$berita->slug) }}">
                                <img src="{{asset($berita->image)}}" alt="banner" class="img-fluid" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="trending">
        <h2 class="mb-4 text-primary font-weight-600">
            Postingan Populer
        </h2>
        <div class="mb-4">
            <div class="rotate-img">
                <img src="{{asset('frontend/assets/images/inner/inner_10.jpg')}}" alt="banner" class="img-fluid" />
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
                <img src="{{asset('frontend/assets/images/inner/inner_11.jpg')}}" alt="banner" class="img-fluid" />
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
                <img src="{{asset('/frontend/assets/images/inner/inner_12.jpg')}}" alt="banner" class="img-fluid" />
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