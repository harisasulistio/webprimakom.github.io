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
</style>
    <!-- <section class="section is-sm section-works"> -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <section class="customer-logos slider" style="padding:50px;background-color:#f0efed;border-radius:20px">
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
                <div class="col-lg-6">
                    <div class="section-head mb-lg-0">
                        {{-- <h5 class="section-subtitle text-red "> What We Do Best </h5> --}}
                        <h2 class="section-title ">Hello You, Let's Get More Closer</h2>
                        <p class="section-desc">PT Prima Mandiri Komunikasi is a company engaged in the supply of pieces of equipment and services for Electronic Mechanical Equipment, and Telecmunications. Primakom is supported by a responsible expert and has to commitment at work to produce the maximum results</p>
                        <a href="#" class="btn btn-red btn-round">See our stadies</a>
                    </div>
                </div>
                <div class="col-lg-6">
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
    <!-- =========================== section Plans-->
    <section class="section is-sm section-plans">
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
    </section>
    <!-- =========================== section Blog-->
    <section class="section is-sm section-blog">
        <div class="container">
            <div class="section-head flex between vcenter">
                <h2 class="section-title">what happening<span class="text-blue">. </span></h2>
                <a href="#" class="btn btn-opacity btn-blue mt-sm-30 sm-hidden "> see more </a>
            </div>
            <div class="work-boxes blog-boxes-slick">
                <div class="">
                    <div class="post-wrap mt-0">
                        <a href="#">
                            <div class="post-img">
                                <img src="../assets/images/bg/post9.png" alt="">
                            </div>
                        </a>
                        <div class="post-content mb-0">
                            <div class="post-meta">
                                <div class="post-tag"> <span class="tag-item">Tech</span> </div>
                            </div>
                            <h3 class="post-title"><a href="#" class="hover-blue">Doing A Cross Country Road Trip
                                </a>
                            </h3>

                            <span class="post-author">By <a href="#" class="text-blue" rel="author">Albert
                                    Kerri</a></span>
                            <span class="post-date"> 02 september 2019 </span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="post-wrap mt-0">
                        <a href="#">
                            <div class="post-img">
                                <img src="../assets/images/bg/post8.png" alt="">
                            </div>
                        </a>
                        <div class="post-content mb-0">
                            <div class="post-meta">
                                <div class="post-tag"> <span class="tag-item">Tech</span> </div>
                            </div>
                            <h3 class="post-title"><a href="#" class="hover-blue">Teamwork is essential for small teams
                                </a>
                            </h3>

                            <span class="post-author">By <a href="#" class="text-blue" rel="author">Albert
                                    Kerri</a></span>
                            <span class="post-date"> 02 september 2019 </span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="post-wrap mt-0">
                        <a href="#">
                            <div class="post-img">
                                <img src="../assets/images/bg/post7.png" alt="">
                            </div>
                        </a>
                        <div class="post-content mb-0">
                            <div class="post-meta">
                                <div class="post-tag"> <span class="tag-item">Tech</span> </div>
                            </div>
                            <h3 class="post-title"><a href="#" class="hover-blue">Winning tactics for a new digital
                                    agency</a>
                            </h3>
                            <span class="post-author">By <a href="#" class="text-blue" rel="author">Albert
                                    Kerri</a></span>
                            <span class="post-date"> 02 september 2019 </span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="post-wrap mt-0">
                        <a href="#">
                            <div class="post-img">
                                <img src="../assets/images/bg/post6.png" alt="">
                            </div>
                        </a>
                        <div class="post-content mb-0">
                            <div class="post-meta">
                                <div class="post-tag"> <span class="tag-item">Tech</span> </div>
                            </div>
                            <h3 class="post-title"><a href="#" class="hover-blue">Even the all-powerful Pointing has no
                                    control
                                </a>
                            </h3>
                            <span class="post-author">By <a href="#" class="text-blue" rel="author">Albert
                                    Kerri</a></span>
                            <span class="post-date"> 02 september 2019 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop