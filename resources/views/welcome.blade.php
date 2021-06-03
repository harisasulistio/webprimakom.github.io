<!DOCTYPE html>
<html lang="en">
<link href='http://fonts.googleapis.com/css?family=Roboto:300,300italic,400,500,700%7cCourgette%7cRaleway:400,700,500%7cCourgette%7cLato:700%7cCourgette%7cOpen+Sans:300,400%7cCourgette%7cOpen+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{URL::to('assets_web/logo/logo_black.png')}}" type="image/x-icon">
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- ========================================= Css files -->
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/owl.carousel.min.css') !!}
    {!! Html::style('assets/css/owl.theme.default.min.html') !!}
    {!! Html::style('assets/css/slick.css') !!}
    {!! Html::style('assets/css/slick-theme.css') !!}
    {!! Html::style('assets/css/aos.css') !!}
    {!! Html::style('assets/css/all.min.css') !!}
    {!! Html::style('assets/css/style.css') !!}
	{!! Html::style('assets/css/elementor.css') !!}
    <title><?php if(isset($pageName)) { echo $pageName; } ?></title>
    <style>
    /*@font-face {
        font-family: 'myFirstFont';
        src: url('https://primakom.co.id/assets/fonts/FontsFree-Net-SFProText-Semibold.ttf');
        }
    @font-face {
        font-family: 'SecondFont';
        src: url('https://primakom.co.id/assets/fonts/FontsFree-Net-SFProText-Regular.ttf');
    }
    a,p,h1,h2,h3,h4,h5{
        font-family: 'SecondFont';
    }
    * {
        font-family: 'SecondFont';
    }*/
    .container {
        max-width: 1350px;
    }
    .kotak1{
        border-radius: 10px 10px 10px 10px;
    }
    .img_bundar{
        border-radius: 150px;
        width:200px;
    }
    .navbar .logo {
        height: 6rem;
    }
    .elementor-element.elementor-element-470b758:not(.elementor-motion-effects-element-type-background), .elementor-8803 .elementor-element.elementor-element-470b758 > .elementor-motion-effects-container > .elementor-motion-effects-layer > .elementor-shape-fill {
        background: linear-gradient(45deg, #462377, #e62c91);
        fill:#ffffff;
    }
	.logo_footer{
		width:150px;
		height: 100% !important;
	}
	.float{
		position:fixed;
		width:60px;
		height:60px;
		bottom:40px;
		right:40px;
		background-color:#25d366;
		color:#FFF;
		border-radius:50px;
		text-align:center;
	font-size:30px;
		box-shadow: 2px 2px 3px #999;
	z-index:100;
	}

	.my-float{
		margin-top:16px;
	}
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZTFF18TNSQ"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZTFF18TNSQ');
    </script>
</head>

<body style="overflow-x: hidden !important;">
	<a href="https://api.whatsapp.com/send?phone=6285602826794" class="float" target="_blank">
		<i class="fab fa-whatsapp my-float"></i>
	</a>
    @include('header')

    @yield('content')

    @include('footer')

    {!! Html::script('assets/js/plugins/jQuery.min.js') !!}
    {!! Html::script('assets/js/plugins/modernizr.min.js') !!}
    {!! Html::script('assets/js/plugins/bootstrap.min.js') !!}
    {!! Html::script('assets/js/plugins/feather-icons.js') !!}
    {!! Html::script('assets/js/plugins/slick.min.js') !!}
    {!! Html::script('assets/js/plugins/owl.carousel.min.js') !!}
    {!! Html::script('assets/js/plugins/aos.js') !!}
    {!! Html::script('assets/js/plugins/typed.js') !!}
    {!! Html::script('assets/js/plugins/all.min.js') !!}
    {!! Html::script('assets/js/plugins/jquery.waypoints.min.js') !!}
    {!! Html::script('assets/js/plugins/jquery.counterup.min.js') !!}
    {!! Html::script('assets/js/main.js') !!}
</body>
</html>