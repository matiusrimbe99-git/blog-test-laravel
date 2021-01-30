<footer class="main-footer">
    <div class="footer-center">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a target="blank" href="https://nauval.in/">Muhamad
            Nauval Azhar</a>
        <div class="bullet"></div> Develop By <a target="blank"
            href="https://www.facebook.com/matius.septi.14052017/">Matius Rimbe</a>
    </div>
    <div class="footer-right">

    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->

<script src="{{asset('assets/modules/jquery.min.js')}}"></script>
<script src="{{asset('assets/modules/popper.js')}}"></script>
<script src="{{asset('assets/modules/tooltip.js')}}"></script>
<script src="{{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('assets/modules/moment.min.js')}}"></script>
<script src="{{asset('assets/js/stisla.js')}}"></script>

<!-- JS Libraries -->
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
@stack('custom_script')

<!-- Page Specific JS File -->
<script src="{{ asset('assets/js/page/modules-sweetalert.js') }}"></script>
@stack('custom_script')


<!-- Template JS File -->
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>


</body>

</html>