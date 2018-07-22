<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Panel de Control</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/plugins/themify/css/themify.css') }}" rel="stylesheet">

    <!-- Angular Tooltip Css -->
    <link href="{{ asset('assets/plugins/angular-tooltip/angular-tooltips.css') }}" rel="stylesheet">

    <!-- Page level plugin CSS -->
    <link href="{{ asset('assets/dist/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dist/css/glovia.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/glovia-responsive.min.css') }}" rel="stylesheet">

    <!-- Custom styles for Color -->
    <link href="{{ asset('assets/dist/css/skins/default.css') }}" rel="stylesheet">
    @yield('styles')

    <link href="{{ asset('assets/toastr/css/toastr.min.css') }}" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer sidenav-toggled" id="page-top">

<!-- ================  Login starts ====================== -->

@include('admin.layouts.navbar')

<!-- ================  Login ends====================== -->

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- ========= Content ========= -->

    @yield('content')

    <!-- ========= content ========= -->
    </div>
</div>




<!-- Footer -->
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small class="font-15">Manu © Made With no <i class="fa fa-heart cl-danger"></i> In Peru</small>
        </div>
    </div>
</footer>

<!-- Switcher -->
<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin theme-cl fa fa-cog" aria-hidden="true"></i></button>
<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
    <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large theme-bg">Close &times;</button>
    <div class="title-logo">

        <h4>Choose Your Color</h4>
    </div>
    <ul id="styleOptions" title="switch styling">
        <li>
            <a href="javascript: void(0)" class="cl-box cl-red" data-theme="skins/red"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-green" data-theme="skins/green"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-orange" data-theme="skins/orange"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-blue" data-theme="skins/blue"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-default" data-theme="skins/default"></a>
        </li>
    </ul>
</div>
<!-- /Switcher -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded cl-white gredient-bg" href="#page-top">
    <i class="ti-angle-double-up"></i>
</a>

<!-- Scripts para las alertas  -->




<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/plugins/jquery/jquery-1.12.4.js') }}"></script>

<!-- Notifications  -->
<script src="{{ asset('assets/toastr/js/toastr.min.js') }}"></script>
<script>
    @if(Session::has('success'))

toastr.success("{{ Session::get('success') }}")

    @endif

    @if(Session::has('info'))

toastr.info("{{ Session::get('info') }}")

    @endif

</script>


<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('assets/plugins/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Slick Slider Js -->
<script src="{{ asset('assets/plugins/slick-slider/slick.js') }}"></script>

<!-- Slim Scroll -->
<script src="{{ asset('assets/plugins/slim-scroll/jquery.slimscroll.min.js') }}"></script>

<!-- Angular Tooltip -->
<script src="{{ asset('assets/plugins/angular-tooltip/angular.js') }}"></script>

<script src="{{ asset('assets/plugins/angular-tooltip/angular-tooltips.js') }}"></script>

<script src="{{ asset('assets/plugins/angular-tooltip/index.js') }}"></script>


<!-- Custom scripts for all pages-->
<script src="{{ asset('assets/dist/js/glovia.js') }}"></script>


<script>
    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }
    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }
</script>


<script>
    $('.dropdown-toggle').dropdown()
</script>


@yield('scripts')


<!-- Wrapper -->

</body>


</html>
