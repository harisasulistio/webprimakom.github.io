@extends('welcome')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<style>
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    /*display: block;*/
	display: flex;
	align-items: center;
}


.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

/*product style*/
.card {
        background-color: #fff;
        max-width: 360px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        border-radius: 15px;
        border: none;
        box-shadow: 0px 1rem 1.5rem rgba(0, 0, 0, 0.5);
        margin-top: 20px;
    }

    .card .banner {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 15rem;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        box-sizing: border-box;
    }

    .card .banner svg {
        background-color: #fff;
        width: 8rem;
        height: 8rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.3);
        border-radius: 50%;
        transform: translateY(50%);
        transition: transform 200ms cubic-bezier(0.18, 0.89, 0.32, 1.28);
    }

    .card .banner svg:hover {
        transform: translateY(50%) scale(1.3);
    }

    .card .menu {
        width: 100%;
        height: 5.5rem;
        padding: 1rem;
        display: flex;
        align-items: flex-start;
        justify-content: flex-end;
        position: relative;
        box-sizing: border-box;
    }

    .card .menu .opener {
        width: 2.5rem;
        height: 2.5rem;
        position: relative;
        border-radius: 50%;
        transition: background-color 100ms ease-in-out;
    }

    .card .menu .opener:hover {
        background-color: #f2f2f2;
    }

    .card .menu .opener span {
        background-color: #404040;
        width: 0.4rem;
        height: 0.4rem;
        position: absolute;
        top: 0;
        left: calc(50% - 0.2rem);
        border-radius: 50%;
    }

    .card .menu .opener span:nth-child(1) {
        top: 0.45rem;
    }

    .card .menu .opener span:nth-child(2) {
        top: 1.05rem;
    }

    .card .menu .opener span:nth-child(3) {
        top: 1.65rem;
    }

    .card h2.name {
        text-align: center;
        padding: 0 2rem 0.5rem;
        margin: 0;
    }

    .card .title {
        color: #a0a0a0;
        font-size: 0.85rem;
        text-align: center;
        padding: 0 2rem 1.2rem;
    }

    .card .actions {
        padding: 0 2rem 1.2rem;
        display: flex;
        flex-direction: column;
        order: 99;
    }

    .card .actions .follow-info {
        padding: 0 0 1rem;
        display: flex;
    }

    .card .actions .follow-info h2 {
        text-align: center;
        width: 50%;
        margin: 0;
        box-sizing: border-box;
    }

    .card .actions .follow-info h2 a {
        text-decoration: none;
        padding: 0.8rem;
        display: flex;
        flex-direction: column;
        border-radius: 0.8rem;
        transition: background-color 100ms ease-in-out;
    }

    .card .actions .follow-info h2 a span {
        color: #1c9eff;
        font-weight: bold;
        transform-origin: bottom;
        transform: scaleY(1.3);
        transition: color 100ms ease-in-out;
    }

    .card .actions .follow-info h2 a small {
        color: #afafaf;
        font-size: 0.85rem;
        font-weight: normal;
    }

    .card .actions .follow-info h2 a:hover {
        background-color: #f2f2f2;
    }

    .card .actions .follow-info h2 a:hover span {
        color: #007ad6;
    }

    .card .actions .follow-btn button {
        color: inherit;
        font: inherit;
        font-weight: bold;
        background-color: #ffd01a;
        width: 100%;
        border: none;
        padding: 1rem;
        outline: none;
        box-sizing: border-box;
        border-radius: 1.5rem/50%;
        transition: background-color 100ms ease-in-out, transform 200ms cubic-bezier(0.18, 0.89, 0.32, 1.28);
    }

    .card .actions .follow-btn button:hover {
        background-color: #efb10a;
        transform: scale(1.1);
    }

    .card .actions .follow-btn button:active {
        background-color: #e8a200;
        transform: scale(1);
    }

    .card .desc {
        text-align: justify;
        margin: 0 2rem 2.5rem;
        order: 100;
        height: 96px;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .myButton {
        box-shadow: 0px 10px 14px -7px #274373;
        background: linear-gradient(to bottom, #9d59b3 5%, #5f36ad 100%);
        background-color: #9d59b3;
        border-radius: 10px;
        display: inline-block;
        width: auto;
        cursor: pointer;
        color: #ffffff;
        font-size: 20px;
        padding: 5px 45px;
        text-decoration: none;
        text-shadow: 0px 1px 0px #3e638a;
    }
.myButton:hover {
	background:linear-gradient(to bottom, #5f36ad 5%, #9d59b3 100%);
	background-color:#5f36ad;
    color:white;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>
    <!-- <section class="section is-sm section-works"> -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <section class="customer-logos slider" style="padding:50px;background-color:#f0efed;border-radius:20px" id="section2">
                <div class="slide">
                    <img src="{{URL::to('/assets_web/logo/dell.png')}}" alt="" style="background-image: none !important;" >
                </div>
                <div class="slide">
                    <img src="{{URL::to('/assets_web/logo/miles.png')}}" alt="" style="background-image: none !important;">
                </div>
                <div class="slide">
                    <img src="{{URL::to('/assets_web/logo/cisco.png')}}" alt="" style="background-image: none !important;">
                </div>
                <div class="slide">
                    <img src="{{URL::to('/assets_web/logo/rans.png')}}" alt="" style="background-image: none !important;">
                </div>
                <div class="slide">
                    <img src="{{URL::to('/assets_web/logo/samsung.png')}}" alt="" style="background-image: none !important;">
                </div>
                <div class="slide">
                    <img src="{{URL::to('/assets_web/logo/bluebird.png')}}" alt="" style="background-image: none !important;">
                </div>
            </section>
        </div>
        <script>
    $(document).ready(function(){
    $('.customer-logos').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1500,
			arrows: false,
			dots: false,
			pauseOnHover: false,
			responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 4
				}
			}, {
				breakpoint: 520,
				settings: {
					slidesToShow: 3
				}
			}]
		});
	});
    </script>
    <!-- </section> -->
    <!-- <div class="container" data-aos="fade-up" data-aos-delay="500">
        <section class="section is-sm pt-0 pb-0">
            <div class=" section section-companies has-style1">
                <div class="row min-30 flex center">
                    <div class="col-lg-2 col-md-3  col-6">
                        <div class="company-item">
                            <img src="{{URL::to('/assets_web/logo/dell.png')}}" alt="">
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="company-item">
                            <img src="{{URL::to('/assets_web/logo/miles.png')}}" alt="">
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="company-item">
                            <img src="{{URL::to('/assets_web/logo/cisco.png')}}" alt="">
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="company-item">
                            <img src="{{URL::to('/assets_web/logo/rans.png')}}" alt="">
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="company-item">
                            <img src="{{URL::to('/assets_web/logo/samsung.png')}}" alt="">
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="company-item">
                            <img src="{{URL::to('/assets_web/logo/bluebird.png')}}" alt="" >
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div> -->
    <!-- =========================== section About-->
    <section class="section is-sm section-about section-counter ">
        <div class="container">
            <div class="row flex vcenter px-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="500">
                    <div class="section-head mb-lg-0">
                        {{-- <h5 class="section-subtitle text-red "> What We Do Best </h5> --}}
                        <h2 class="section-title ">Hello You, Let's Get More Closer</h2>
                        <p class="section-desc">PT Prima Mandiri Komunikasi is a company engaged in the supply of pieces of equipment and services for Electronic Mechanical Equipment, and Telecmunications. Primakom is supported by a responsible expert and has to commitment at work to produce the maximum results</p>
                        <p class="section-desc">Take Your Business To The Next With Primakom</p>
                        
                        {{--<a href="#" class="btn btn-red btn-round">See our stadies</a>--}}
                    </div>
                </div>
                <div class="col-lg-6"  data-aos="fade-left" data-aos-delay="500">
                    <img class="about-img" src="https://digikit.netlify.app/assets/images/others/grad1.svg" alt="">
                    <img class="section-shape1" src="https://digikit.netlify.app/assets/images/others/shape-illustration-grad.svg" alt="">

                </div>

            </div>
            <!-- <div class="row counters flex center min-20">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="counter-item">
                        <h5 class="counter-number text-grad">+ <span class="counter">4510</span> </h5>
                        <p class="counter-name"> Clients </p>
                    </div>
                </div>
                <div class="col-lg-3  col-md-4 col-6">
                    <div class="counter-item">
                        <h5 class="counter-number text-grad ">+ <span class="counter">9500</span> </h5>
                        <p class="counter-name"> jobs </p>
                    </div>
                </div>
                <div class="col-lg-3  col-md-4 col-6">
                    <div class="counter-item">
                        <h5 class="counter-number text-grad "><span class="counter"> 98</span>k </h5>
                        <p class="counter-name"> invester </p>
                    </div>
                </div>
                <div class="col-lg-3  col-md-4 col-6">
                    <div class="counter-item">
                        <h5 class="counter-number counter text-grad"> 945</h5>
                        <p class="counter-name"> worker </p>
                    </div>
                </div>
            </div> -->
        </div>
	</section>

	{{--section product--}}
	<section class="section is-sm is-center section-plans ml-md-5">
		<div class="container">
			<div class="section-head" data-aos="fade-down" data-aos-delay="300">
				<h2 class="section-title is-center">Our Projects<span class="text-primary">. </span>
				</h2>
				<p class="section-description is-center  ml-auto mr-auto mt-20">
					We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.
				</p>
			</div>
			<div class="card-deck" data-aos="fade-up" data-aos-delay="500">
				<div class="col-md-4">
					<div class="card shadow mb-5">
						<div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/S3.png')}}');background-size:contain;">
						</div>
						{{--<div class="menu">
							<div><span></span><span></span></div>
						</div>--}}
						<h6 class="name text-center mb-3">Security Solusi Service (S3)</h6>
						{{-- <div class="title">Ant Collector</div> --}}
						<div class="desc">
							Solusi pengamanan dan pengawasan asset perusahaan, meliputi: CCTV Industrial, RFID, AI, Gate Automation, Flap Barier dll.
						</div>
						<div class="actions">
							<div class="follow-btn text-center">
								<!-- <button>Follow</button> -->
								<a href="{{URL::to('/products/security')}}" class="myButton col-md-12">Detail</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card shadow">
						<div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/IT.png')}}');background-size:contain;">
						</div>
						{{--<div class="menu">
							<div><span></span><span></span><span></span></div>
						</div>--}}
						<h6 class="name text-center mb-3">IT Infrastructure</h6>
						<div class="desc">
							Solusi layanan infrastruktur IT dengan mempertahankan dan mengantisipasi kebutuhan rangkaian proses dan fungsi.
						</div>
						<div class="actions">
							<div class="follow-btn text-center">
								<a href="{{URL::to('/products/infrastructure')}}" class="myButton col-md-12">Detail</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card shadow">
						<div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/primavillage.png')}}');background-size:contain;">
						</div>
						{{--<div class="menu">
							<div><span></span><span></span><span></span></div>
						</div>--}}
						<h6 class="name text-center mb-3">Prima Village</h6>
						<div class="desc">
							Digitalisasi Pengelolaan kebutuhan Masyarakat Desa oleh Badan Usaha Milik Desa dan Layanan Desa Mandiri menghadapi era Revolusi Industri 4.0.
						</div>
						<div class="actions">
							<div class="follow-btn text-center">
								<a href="{{URL::to('/products/prima-village')}}" class="myButton col-md-12">Detail</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card shadow">
						<div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/primaschool.png')}}');background-size:contain;">
						</div>
						{{--<div class="menu">
							<div><span></span><span></span><span></span></div>
						</div>--}}
						<h6 class="name text-center mb-3">Prima School</h6>
						<div class="desc">
							Platform sistem pembelajaran online yang dapat terintegrasi dengan beberapa fungsi layanan yang terdiri dari E-learning, Siakad, Tracer Study dan Virtual Class.
						</div>
						<div class="actions">
							<div class="follow-btn text-center">
								<a href="{{URL::to('/products/prima-school')}}" class="myButton col-md-12">Detail</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card shadow">
						<div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/primameet.png')}}');background-size:contain;background-position:center;">
						</div>
						{{--<div class="menu">
							<div><span></span><span></span><span></span></div>
						</div>--}}
						<h6 class="name text-center mb-3">Prima Meet</h6>
						<div class="desc">
							Layanan Meeting virtual yang diberikan dalam upaya meningkatkan koordinasi dan efektifitas kinerja meeting tanpa bertemu secara langsung.
						</div>
						<div class="actions">
							<div class="follow-btn text-center">
								<a href="{{URL::to('/products/prima-meet')}}" class="myButton col-md-12">Detail</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card shadow">
						<div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/PDS.png')}}'); background-size:contain;background-position: center;">
						</div>
							{{--<div class="menu">
								<div><span></span><span></span><span></span></div>
							</div>--}}
						<h6 class="name text-center mb-3">Prima Development Software</h6>
						<div class="desc">
							Solusi dalam pembuatan dan pengembangan software atau aplikasi yang digunakan untuk menunjang produktivitas berbagai instansi dan perusahaan.
						</div>
						<div class="actions">
							<div class="follow-btn text-center">
								<a href="{{URL::to('/products/prima-development')}}" class="myButton col-md-12">Detail</a>
							</div>
						</div>
					</div>
				</div> 
                <div class="col-md-4">
					<div class="card shadow">
						<div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/logo_smartcampus.JPG')}}'); background-size:contain;background-position: center;">
						</div>
							{{--<div class="menu">
								<div><span></span><span></span><span></span></div>
							</div>--}}
						<h6 class="name text-center mb-3">Smart Campus</h6>
						<div class="desc">
                                Sistem pembelajaran online yang mulai banyak di aplikasikan dalam dunia pendidikan membuat sistem daring menjadi lebih aktif. Kita membangun sebuah platform yang mampu mengintegrasikan beberapa aplikasi untuk memudahkan sistem pembelajaran dalam jaringan.
						</div>
						<div class="actions">
							<div class="follow-btn text-center">
								<a href="{{URL::to('/products/smart-campus')}}" class="myButton col-md-12">Detail</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- =========================== section Plans-->
    {{--<section class="section is-sm section-plans">
        <img class="section-particle" src="https://digikit.netlify.app/assets/images/others/particle.svg" alt="">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title is-center ">Plans maked for you<span class="text-primary">. </span>
                </h2>
                <p class="section-description is-center  ml-auto mr-auto mt-20">
                    We understand the importance of approaching each work integrally and believe in the power of
                    simple
                    and easy communication.
                </p>
            </div>
            <div class="row flex vcenter min-30 ">

                <!-- ====== plan item -->
                <div class="col-md-3 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                    <div class="plan-item has-style1  ">
                        <div class="plan-head">
                            <h4 class="plan-title"> Starter </h4>
                            <div class="flex center">
                                <div class="plan-price">Free</div> <span class="price-var ">$</span>
                            </div>
                            <div class="flex center mt-1">
                                <a href="#" class="btn btn-dark btn-round"> One Week </a>
                            </div>
                        </div>
                        <div class="plan-body">
                            <ul class="list-items">
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Akademik Basic
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Keuangan Mahasiswa
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Penerimaan Mahasiswa Baru
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul PDDIKTI Integrator

                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon>Modul Administrasi Aplikasi

                                </li>


                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                    <div class="plan-item has-style1  ">
                        <div class="plan-head">
                            <h4 class="plan-title"> Basic </h4>
                            <div class="flex center">
                                <div class="plan-price">$383</div> <span class="price-var ">$</span>
                            </div>
                            <div class="flex center mt-1">
                                <a href="#" class="btn btn-dark btn-round"> One Month </a>
                            </div>
                        </div>
                        <div class="plan-body">
                            <ul class="list-items">
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Akademik Basic
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Keuangan Mahasiswa
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Penerimaan Mahasiswa Baru
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul PDDIKTI Integrator
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon>Modul Administrasi Aplikasi
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon>Mobile Support
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon>Helpdesk
                                </li>


                            </ul>

                        </div>
                    </div>
                </div>
                <!-- ====== plan item -->
                <div class="  col-md-3">
                    <div class="plan-item has-style2 is-active  mt-2 is-grad1">
                        <div class="best-choose">
                            Best Choose
                        </div>
                        <div class="plan-head ">
                            <h4 class="plan-title">Pro</h4>
                            <div class="flex center">
                                <div class="plan-price">$627</div> <span class="price-var ">$</span>
                            </div>
                            <div class="flex center mt-1">
                                <a href="#" class="btn btn-white  btn-block btn-round"> Per month</a>
                            </div>
                        </div>
                        <div class="plan-body">
                            <ul class="list-items">

                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Akademik Basic
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Keuangan Mahasiswa
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Penerimaan Mahasiswa Baru
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul PDDIKTI Integrator
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Administrasi Aplikasi
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Mobile Support
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon>Helpdesk
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon>Modul Dashboard & Pelaporan
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- ====== plan item -->
                <div class="col-md-3 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                    <div class="plan-item has-style1 ">
                        <div class="plan-head">
                            <h4 class="plan-title"> Unlimited </h4>
                            <div class="flex center">
                                <div class="plan-price">$1184</div> <span class="price-var ">$</span>
                            </div>
                            <div class="flex center mt-1">
                                <a href="#" class="btn btn-dark btn-round"> Per month </a>
                            </div>
                        </div>
                        <div class="plan-body">
                            <ul class="list-items">
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Akademik Basic
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Keuangan Mahasiswa
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul Penerimaan Mahasiswa Baru
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon> Modul PDDIKTI Integrator
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon>Modul Administrasi Aplikasi
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon>Mobile Support
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon>Helpdesk
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon>Modul Dashboard & Pelaporan
                                </li>
                                <li class="item">
                                    <ion-icon name="checkmark"></ion-icon>Tracer Study
                                </li>


                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- =========================== section Blog-->
    <section class="section is-sm section-blog px-md-5">
        <div class="container">
            <div class="section-head flex between vcenter" data-aos="fade-right" data-aos-delay="500">
                <h2 class="section-title">What Happening<span class="text-blue">. </span></h2>
                <a href="{{URL::to('blog')}}" class="btn btn-opacity btn-blue mt-sm-30 sm-hidden "> see more </a>
			</div>
            <div class="work-boxes blog-boxes-slick" data-aos="fade-left" data-aos-delay="600">
				@foreach($getArticle as $key => $data)
                <div class="">
                    <div class="post-wrap mt-0">
                        <a href="{{ url('/blog/'.$data->slug) }}">
                            <div class="post-img">
                                <img src="{{ asset('storage/featured_images/'.$data->featured_images) }}" alt="" style="height:230px;width:100%;">
                            </div>
                        </a>
                        <div class="post-content mb-0">
                            <div class="post-meta">
							<div class="post-tag"> <span class="tag-item">{{ $data->category->category }}</span> </div>
                            </div>
                            <h3 class="post-title"><a href="{{ url('/blog/'.$data->slug) }}" class="hover-blue">{{ Str::limit(strip_tags($data->title), $limit = 50, $end = '...') }}
                                </a>
                            </h3>
							<p class="desc-blog">
								{!!Str::limit(strip_tags($data->article), $limit = 100, $end = '...') !!}
							</p>
                            <span class="post-author">By <a href="#" class="text-blue" rel="author">Admin Primakom</a></span>
                            <span class="post-date"> {{ $data->created_at->diffForHumans()}} </span>
                        </div>
                    </div>
				</div>
				@endforeach
			</div>
        </div>
    </section>
@stop