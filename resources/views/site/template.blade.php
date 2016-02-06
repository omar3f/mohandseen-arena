<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <title>@yield('title' or 'Mohandseen')</title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset("site/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/fonts/font-awesome/css/font-awesome.css")}}">
    <link rel="stylesheet" href="{{asset("site/vendor/owl-carousel/owl.carousel.css")}}" media="screen">
    <link rel="stylesheet" href="{{asset("site/vendor/owl-carousel/owl.theme.css")}}" media="screen">
    <link rel="stylesheet" href="{{asset("site/vendor/magnific-popup/magnific-popup.css")}}" media="screen">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset("site/css/theme.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/theme-elements.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/theme-animate.css")}}">

    <!-- Current Page Styles -->
    <link rel="stylesheet" href="{{asset("site/vendor/rs-plugin/css/settings.css")}}" media="screen">
    <link rel="stylesheet" href="{{asset("site/vendor/circle-flip-slideshow/css/component.css")}}" media="screen">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset("site/css/skins/blue.css")}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset("site/css/custom.css")}}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset("site/css/theme-responsive.css")}}" />

    <!-- Font's -->
    <link href="{{asset("site/css/icomoon.css")}}" type="text/css" rel="stylesheet" />

    <!-- Head Libs -->
    <script src="{{asset("site/vendor/modernizr.js")}}"></script>
    <link rel="stylesheet" href="{{asset("site/css/ie.css")}}">

    <!--[if IE]>
    <link rel="stylesheet" href="{{asset("site/css/ie.css")}}">
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="{{asset("site/vendor/respond.js")}}"></script>
    <![endif]-->
    @yield('head')

</head>
<body>

<div class="body">
@yield('header')
@yield('content')
@yield('footer')
</div>

<!-- Libs -->
<script src="{{asset("site/vendor/jquery.js")}}"></script>
<script src="{{asset("site/js/plugins.js")}}"></script>
<script src="{{asset("site/vendor/jquery.easing.js")}}"></script>
<script src="{{asset("site/vendor/jquery.appear.js")}}"></script>
<script src="{{asset("site/vendor/jquery.cookie.js")}}"></script>

<script src="{{asset("site/vendor/bootstrap.js")}}"></script>
<script src="{{asset("site/vendor/twitterjs/twitter.js")}}"></script>
<script src="{{asset("site/vendor/rs-plugin/js/jquery.themepunch.plugins.min.js")}}"></script>
<script src="{{asset("site/vendor/rs-plugin/js/jquery.themepunch.revolution.js")}}"></script>
<script src="{{asset("site/vendor/owl-carousel/owl.carousel.js")}}"></script>
<script src="{{asset("site/vendor/circle-flip-slideshow/js/jquery.flipshow.js")}}"></script>
<script src="{{asset("site/vendor/magnific-popup/magnific-popup.js")}}"></script>
<script src="{{asset("site/vendor/jquery.validate.js")}}"></script>

<!-- Current Page Scripts -->
<script src="{{asset("site/js/views/view.home.js")}}"></script>

<!-- Theme Initializer -->
<script src="{{asset("site/js/theme.js")}}"></script>

<!-- Custom JS -->
<script src="{{asset("site/js/custom.js")}}"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-12345678-1']);
    _gaq.push(['_trackPageview']);

    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
 -->
@yield('scripts')

</body>
</html>