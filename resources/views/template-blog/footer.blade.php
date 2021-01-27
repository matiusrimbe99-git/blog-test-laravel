<!-- partial:partials/_footer.html -->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <a class="navbar-brand mt-1" href="#">
                        <h1 class="text-white font-weight-lighter font-weight-bolder">MS Website</h1>
                    </a>
                    <h5 class="font-weight-normal mt-4 mb-5">
                        Newspaper is your news, entertainment, music fashion website. We
                        provide you with the latest breaking news and videos straight from
                        the entertainment industry.
                    </h5>
                    <ul class="social-media mb-3">
                        <li>
                            <a href="https://www.facebook.com/matius.septi.14052017/" target="blank">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com" target="blank">
                                <i class="mdi mdi-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/matiusrimbe" target="blank">
                                <i class="mdi mdi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="footer-border-bottom pb-2">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{asset('frontend/assets/images/dashboard/home_1.jpg')}}" alt="thumb"
                                            class="img-fluid" />
                                    </div>
                                    <div class="col-9">
                                        <h5 class="font-weight-600">
                                            Cotton import from USA to soar was American traders
                                            predict
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="footer-border-bottom pb-2 pt-2">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{asset('frontend/assets/images/dashboard/home_2.jpg')}}" alt="thumb"
                                            class="img-fluid" />
                                    </div>
                                    <div class="col-9">
                                        <h5 class="font-weight-600">
                                            Cotton import from USA to soar was American traders
                                            predict
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div>
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{asset('frontend/assets/images/dashboard/home_3.jpg')}}" alt="thumb"
                                            class="img-fluid" />
                                    </div>
                                    <div class="col-9">
                                        <h5 class="font-weight-600 mb-3">
                                            Cotton import from USA to soar was American traders
                                            predict
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h3 class="font-weight-bold mb-3">KATEGORI</h3>
                    @foreach ($category_widget as $category3)
                    <div class="footer-border-bottom pb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 font-weight-600">{{ $category3->name }}</h5>
                            <div class="count">{{ $category3->posts->count() }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <div class="fs-14 font-weight-600">
                            © 2020 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">
                                BootstrapDash</a>. All rights reserved.
                        </div>
                        <div class="fs-14 font-weight-600">
                            Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank"
                                class="text-white">BootstrapDash</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- partial -->
</div>
</div>
<!-- inject:js -->
<script src="{{asset('frontend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{asset('frontend/assets/vendors/aos/dist/aos.js/aos.js')}}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('frontend/assets/js/demo.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.easeScroll.js')}}"></script>
<!-- End custom js for this page-->
</body>

</html>