<!DOCTYPE html>
<html class="not-ie no-js" lang="en">
<link href='http://fonts.googleapis.com/css?family=Roboto:300,300italic,400,500,700%7cCourgette%7cRaleway:400,700,500%7cCourgette%7cLato:700%7cCourgette%7cOpen+Sans:300,400%7cCourgette%7cOpen+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	{{--<link rel="shortcut icon" href="../assets/img/logos/fav.html" type="image/x-icon">--}}
	<link rel="shortcut icon" href="{{URL::to('assets_web/logo/logo_black.png')}}" type="image/x-icon">
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/owl.carousel.min.css') !!}
    {!! Html::style('assets/css/owl.theme.default.min.html') !!}
    {!! Html::style('assets/css/slick.css') !!}
    {!! Html::style('assets/css/slick-theme.css') !!}
    {!! Html::style('assets/css/aos.css') !!}
    {!! Html::style('assets/css/all.min.css') !!}
    {!! Html::style('assets/css/style.css') !!}
    {!! Html::style('assets/css/team_style.css') !!}
    <title>Primakom | <?php if(isset($pageName)) { echo $pageName; } ?></title>
    <style type="text/css">
        body {
    background-color: #ffffff;
}
        .navbar .logo {
    height: 5.5rem;
}
.img_bundar{
        border-radius: 150px;
        width:200px;
    }
.kotak1{
        border-radius: 10px 10px 10px 10px;
    }
.kotak7{
    border-radius: 200px 15px;
}
.svg-container{
	width: 100%;
	margin: 0 auto;
}
.elementor-element.elementor-element-470b758:not(.elementor-motion-effects-element-type-background), .elementor-8803 .elementor-element.elementor-element-470b758 > .elementor-motion-effects-container > .elementor-motion-effects-layer > .elementor-shape-fill {
        background: linear-gradient(45deg, #462377, #e62c91);
        fill:#ffffff;
		width: 100%;
		margin: 0 auto;
    }
    .elementor-element.elementor-element-470b759:not(.elementor-motion-effects-element-type-background), .elementor-8803 .elementor-element.elementor-element-470b759 > .elementor-motion-effects-container > .elementor-motion-effects-layer > .elementor-shape-fill {
        background-color: #ffffff;
        fill:#2d3088;
		width: 100%;
		margin: 0 auto;
    }
    .section.is-sm {
    padding-top: 5px;
    padding-bottom: 100px;
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZTFF18TNSQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZTFF18TNSQ');
    </script>
</head>
<body style="overflow-x: hidden !important;">
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v7.0&appId=3581103505252637" nonce="AsLlk7Rf"></script>
	<a href="https://api.whatsapp.com/send?phone=6285602826794" class="float" target="_blank">
		<i class="fab fa-whatsapp my-float"></i>
	</a>
    <header class="header-page">
        <nav class="navbar dark-bg ">
            <div class="container">
                <div class="flex">
                    <a href="{{URL::to('/')}}" class="navbar-brand flex vcenter" href="#"><img data-aos="fade-right"
                            class="logo" src="{{URL::to('assets_web/logo/logo_white.png')}}" alt=""></a>
                    {{--<ul class="navbar-menu">
                        <li data-aos="fade-left" data-aos-delay="100"> <a class="fade-page" href="{{URL::to('/')}}">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a>About Us</a>
                            <ul class="sub-menu">
                                <li><a class="fade-page" href="{{URL::to('/about/greeting')}}">Greeting</a>
                                </li>
                                <li><a class="fade-page" href="{{URL::to('/about/profile')}}">Company Profile</a>
                                </li>
                                <li><a class="fade-page" href="{{URL::to('/about/clients&partners')}}">Clients and Partners</a>
                                </li>

                            </ul>
                        </li>
                        <li data-aos="fade-left" data-aos-delay="400"> <a class="fade-page" href="{{URL::to('/products&projects')}}">Products & Projects</a> </li>
                        <li data-aos="fade-left" data-aos-delay="400"> <a class="fade-page" href="{{URL::to('contactus')}}">Contact Us</a> </li>
                        <li data-aos="fade-left" data-aos-delay="400"> <a class="fade-page" href="{{URL::to('blog')}}">News</a> </li>
                    </ul>--}}
                </div>
                <div class="level-right">
					<ul class="navbar-menu">
                        <li data-aos="fade-left" data-aos-delay="100"> <a class="fade-page" href="{{URL::to('/')}}">Home</a>
                        </li>
                        <li class="menu-item-has-children" data-aos="fade-left" data-aos-delay="200">
                            <a>About Us</a>
                            <ul class="sub-menu">
                                <li><a class="fade-page" href="{{URL::to('/about/greeting')}}">Greeting</a>
                                </li>
                                <li><a class="fade-page" href="{{URL::to('/about/profile')}}">Company Profile</a>
                                </li>
                                <li><a class="fade-page" href="{{URL::to('/about/clients&partners')}}">Clients and Partners</a>
                                </li>

                            </ul>
                        </li>
                        <li data-aos="fade-left" data-aos-delay="300">
							<a class="fade-page" href="{{URL::to('/products&projects')}}">Products & Projects</a>
							<ul class="sub-menu">
								<li><a class="fade-page" href="{{URL::to('/products/security')}}">Security Solusi Service</a>
								</li>
								<li><a class="fade-page" href="{{URL::to('/products/infrastructure')}}">IT Infrastructure</a>
								</li>
								<li><a class="fade-page" href="{{URL::to('/products/prima-village')}}">Prima Village</a>
								</li>
								<li><a class="fade-page" href="{{URL::to('/products/prima-school')}}">Prima School</a>
								</li>
								<li><a class="fade-page" href="{{URL::to('/products/prima-meet')}}">Prima Meet</a>
								</li>
								<li><a class="fade-page" href="{{URL::to('/products/prima-development')}}">Prima Development</a>
								</li>
                                <li><a class="fade-page" href="{{URL::to('/products/smart-campus')}}">Smart Campus</a>
								</li>
							</ul>
						</li>
                        <li data-aos="fade-left" data-aos-delay="400"> <a class="fade-page" href="{{URL::to('contactus')}}">Contact Us</a> </li>
                        <li data-aos="fade-left" data-aos-delay="500"> <a class="fade-page" href="{{URL::to('blog')}}">News</a> </li>
                    </ul>
                    <div class="mobile-menu">
                        <ul>
                            <ul>
                                <li><a class="fade-page" href="{{URL::to('/')}}">Home</a></li>
                                <li><a class="fade-page" href="{{URL::to('/about/greeting')}}">Greeting</a></li>
                                <li><a class="fade-page" href="{{URL::to('/about/profile')}}">Company Profile</a></li>
                                <li><a class="fade-page" href="{{URL::to('/about/clients&partners')}}">Clients and Partners</a></li>
                                <li><a class="fade-page" href="{{URL::to('contactus')}}">Contact Us</a></li>
                                <li><a class="fade-page" href="{{URL::to('blog')}}">News</a></li>
                            </ul>
                        </ul>
                    </div>
                    <div class="flex">
                        <div class="menu-toggle-icon">
                            <div class="menu-toggle">
                                <div class="menu">
                                    <input type="checkbox">
                                    <div class="line-menu"></div>
                                    <div class="line-menu"></div>
                                    <div class="line-menu"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-470b759 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default pertama" data-id="470b759" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;wave-brush&quot;}" style="width: 100%; left: 0px;">
        <div class="elementor-shape elementor-shape-top" data-negative="false">
			<div class="svg-container">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none">
					<path class="elementor-shape-fill" d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7 s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7   c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3  c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6 c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7  C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5 c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1  c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7  c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6  C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8   c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2    C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3    C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1 z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1    c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z"></path>
					<path class="elementor-shape-fill" d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3 C267.7,18.8,269.7,18,269.6,18z"></path>
					<path class="elementor-shape-fill" d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2   S227.6,9.9,227.4,9.8z"></path>
					<path class="elementor-shape-fill" d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4  C206.4,12.9,204.6,13.5,204.5,13.4z"></path>
					<path class="elementor-shape-fill" d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6  S201,10.7,201,10.6z"></path>
					<path class="elementor-shape-fill" d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3   C152.6,27.5,154.6,26.8,154.5,26.7z"></path>
					<path class="elementor-shape-fill" d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6  c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z"></path>
					<path class="elementor-shape-fill" d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0  C76.9,11.5,75.3,12.5,75.5,12.6z"></path>
					<path class="elementor-shape-fill" d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4    C19.9,13.7,15.7,13.3,15.6,13.2z"></path>
				</svg>

			</div>
        </div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8fdcdca" data-id="8fdcdca" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-78b3174 elementor-widget elementor-widget-spacer" data-id="78b3174" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
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