@extends('layout2')
@section('content')
<!-- <style>
    .containers {
	 display: flex;
	 width: 100%;
	 padding: 4% 2%;
	 box-sizing: border-box;
	 /* height: 100vh; */
}
 .boxs {
	 flex: 1;
	 overflow: hidden;
	 transition: 0.5s;
	 margin: 0 2%;
	 box-shadow: 0 20px 30px rgba(0, 0, 0, .1);
	 line-height: 0;
}
 .boxs > img {
	 width: 100%;
	 height: calc(100% - 10vh);
	 object-fit: cover;
	 transition: 0.5s;
}
 .boxs > span {
	 font-size: 3.8vh;
	 display: block;
	 text-align: center;
	 height: 10vh;
	 line-height: 2.6;
}
 .boxs:hover {
	 flex: 1 1 50%;
}
 .boxs:hover > img {
	 width: 100%;
}

</style>
<section class="section is-sm section-plans">
    <div class="container" style="max-width:1140px">
        <div class="section-head">
            <h2 class="section-title is-center">Our Partnet & Client<span class="text-primary">. </span>
            </h2>
            <p class="section-description is-center  ml-auto mr-auto mt-20">
                We understand the importance of approaching each work integrally and believe in the power of
                simple
                and easy communication.
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="containers">
                    <div class="boxs" style="border-radius:20px !important">
                        <img src="{{URL::to('/assets_web/logo/dell.png')}}">
                        <span>Dell</span>
                    </div>
                    <div class="boxs" style="border-radius:20px !important">
                        <img src="{{URL::to('/assets_web/logo/miles.png')}}">
                        <span>Milestone</span>
                    </div>
                    <div class="boxs" style="border-radius:20px !important">
                        <img src="{{URL::to('/assets_web/logo/cisco.png')}}">
                        <span>Cisco</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="containers">
                    <div class="boxs" style="border-radius:20px !important">
                        <img src="{{URL::to('/assets_web/logo/samsung.png')}}">
                        <span>Samsung</span>
                    </div>
                    <div class="boxs" style="border-radius:20px !important">
                        <img src="{{URL::to('/assets_web/logo/bluebird.png')}}">
                        <span>Bluebird</span>
                    </div>
                    <div class="boxs" style="border-radius:20px !important">
                        <img src="{{URL::to('/assets_web/logo/rans.png')}}">
                        <span>Rans</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<style>
.img_rounded {
  border-radius: 3%;
  width: 100%;
}
</style>
<section class="section is-sm section-plans mt-5">
    <div class="container" style="max-width:1100px">
        <div class="section-head" data-aos="fade-up" data-aos-delay="100">
            <h2 class="section-title is-center">Our Partner & Client<span class="text-primary">. </span>
            </h2>
            <p class="section-description is-center  ml-auto mr-auto mt-20">
                We understand the importance of approaching each work integrally and believe in the power of
                simple
                and easy communication.
            </p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
            <h2 class="section-title is-center">Our Partner<hr/>
            </h2><br/><br/>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="300">
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_partner_baru/dell.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_partner_baru/milistone.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_partner_baru/cisco.png')}}" class="img_rounded">
            </div>
        </div>
        <br/>
        <div class="row" data-aos="fade-up" data-aos-delay="300">
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_partner_baru/samsung.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_partner_baru/bluebird.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_partner_baru/rans.png')}}" class="img_rounded">
            </div>
        </div>
        <br/><br/><br/>
        <div class="row" data-aos="fade-up" data-aos-delay="300">
            <h2 class="section-title is-center">Our Clients<hr/>
            </h2>
        </div>
        <br/><br/>
        <div class="row" data-aos="fade-up" data-aos-delay="300">
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/indosat.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/mitratel.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/pelindo.png')}}" class="img_rounded">
            </div>
        </div>
        <br/><br/>
        <div class="row" data-aos="fade-up" data-aos-delay="300">
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/pjb.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/lifepod.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/seactiv.png')}}" class="img_rounded">
            </div>
        </div>
        <br/><br/>
        <div class="row" data-aos="fade-up" data-aos-delay="300">
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/angkasapura.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/bisnet.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/wika.png')}}" class="img_rounded">
            </div>
        </div>
        <br/><br/>
        <div class="row" data-aos="fade-up" data-aos-delay="300">
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/dsi.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/fiberstar.png')}}" class="img_rounded">
            </div>
            <div class="col-md-4">
                <img src="{{URL::to('/assets_web/logo_clients_baru/pusbang.png')}}" class="img_rounded">
            </div>
		</div>
		<br/><br/><br/>
        <div class="row" data-aos="fade-up" data-aos-delay="300">
            <h2 class="section-title is-center">Our Certificate<hr/>
            </h2>
        </div>
		<br/><br/>
		<div class="row" data-aos="fade-up" data-aos-delay="300">
            <div class="col-md-4">
				<img src="{{URL::to('/assets_web/sertifikat/9001.jpg')}}" class="img_rounded">
				<a href="{{URL::to('/assets_web/sertifikat/9001.jpg')}}"><p class="section-subtitle is-center font-weight-bold">ISO 9001</p></a>
                {{--<img src="{{URL::to('/assets_web/logo_clients_baru/dsi.png')}}" class="img_rounded">--}}
            </div>
            <div class="col-md-4">
				<img src="{{URL::to('/assets_web/sertifikat/14001.jpg')}}" class="img_rounded">
				<a><p class="section-subtitle is-center font-weight-bold">ISO 14001</p></a>
                {{--<img src="{{URL::to('/assets_web/logo_clients_baru/fiberstar.png')}}" class="img_rounded">--}}
            </div>
            <div class="col-md-4">
				<img src="{{URL::to('/assets_web/sertifikat/18001.jpg')}}" class="img_rounded">
				<a><p class="section-subtitle is-center font-weight-bold">ISO 18001</p></a>
                {{--<img src="{{URL::to('/assets_web/logo_clients_baru/pusbang.png')}}" class="img_rounded">--}}
            </div>
		</div>
    </div>
</section>

@stop