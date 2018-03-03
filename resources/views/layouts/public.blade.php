<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>@yield('meta-title', config('app.name') ." | serenacare.net")</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/css/animate.min.css" rel="stylesheet" />
    <link href="/assets/css/style.min.css" rel="stylesheet" />
    <link href="/assets/css/style-responsive.min.css" rel="stylesheet" />
    <link href="/assets/css/theme/default.css" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset('assets/plugins/pace/pace.min.js')}}"></script>

    @stack('styles')
    <!-- ================== END BASE JS ================== -->
</head>
<body>
<!-- begin #header -->
@include('partials.header')
<!-- end #header -->

<!-- begin #page-title -->
@stack('title')
<!-- end #page-title -->

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin container -->
    <div class="container">
        <!-- begin row -->
            @yield('content')
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end #content -->

<!-- begin #footer -->
@include('partials.footer')

<!-- end #footer -->

<!-- begin #footer-copyright -->
@include('partials.footerCr')
<!-- end #footer-copyright -->

<!-- begin theme-panel -->
@include('partials.themePanel')
<!-- end theme-panel -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="/assets/crossbrowserjs/html5shiv.js"></script>
<script src="/assets/crossbrowserjs/respond.min.js"></script>
<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<script src="/assets/plugins/masonry/masonry.min.js"></script>
<script src="/assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->
@stack('scripts')

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
</body>
</html>