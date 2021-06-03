@extends('layout2')
@section('content')
<style type="text/css">
    .section.section-grey {
    background: #ffffff;
}
</style>
<section class="section is-sm section-about">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" data-aos-delay="200">Prima School<span class="text-primary">. </span></h2>

        <div class="row flex vcenter pt-5 mt-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
                <img class="about-img" src="{{URL::to('/assets_web/produk/primaschool_landing.jpg')}}" alt="">
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
				<div class="section-head">
					<h2 class="section-title">Prima School<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc"><span class="text-primary font-weight-bold">Prima School</span> adalah aplikasi yang didevelope oleh PT Prima Mandiri Komunikasi untuk mendukung sistem pembelajaran Online yang memudahkan dalam segala kegiatan pembelajaran.</p>
					<p class="section-desc">Ekosistem Aplikasi yang kami bentuk dalam upaya untuk mempermudah sistem pembelajaran yang terdiri dari beberapa komponen aplikasi yang sudah terintegrasi dengan Kemenristek Dikti.</p>
					<p class="section-desc"><span class="text-primary font-weight-bold">Kelebihan:</span> <br> 1.	Data segala urusan sekolah akan lebih efisian dan terstruktur. <br> 2.	Paperless karena seluruh administrasi dilakukan secara digital. <br> 3.	Memudahkan sekolah mengelola data dan juga memperlancar proses belajar mengajar. <br> 4.	Data sekolah akan terjaga keamanannya. </p>
                </div>
            </div>
		</div>

		<hr class="mt-5"/>
        <div class="row flex vcenter mt-5">
            <div class="col-lg-12">
				<div class="section-head" data-aos="fade-up" data-aos-delay="200">
					<h2 class="section-title">Smart Campus<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body" data-aos="fade-up" data-aos-delay="350"
					<p class="section-desc">Sistem pembelajaran online yang mulai banyak di aplikasikan dalam dunia pendidikan membuat sistem daring menjadi lebih aktif. Kita membangun sebuah platform yang mampu mengintegrasikan beberapa aplikasi untuk memudahkan sistem pembelajaran dalam jaringan.</p>

					<h3 class="section-subtitle">Fitur Smart Campus </h3>
					<p class="section-desc"><span class="text-primary font-weight-bold">SIAKAD (Sistem Informasi Akademik)</span> adalah suatu sistem informasi yang dibangun untuk memberikan kemudahan kepada pengguna dalam kegiatan administrasi akademik kampus secara online.</p>
					<p class="section-desc"><span class="text-primary font-weight-bold">Kelebihan Aplikasi SIAKAD (Sistem Informasi Akademik)</span></p>
					<div class="d-flex justify-content-center">
						<div class="col-6">
							<img class="about-img" src="{{URL::to('/assets_web/produk/keunggulan_siakad.jpg')}}" alt="">
						</div>
					</div>

					<p class="section-desc"><span class="text-primary font-weight-bold">LMS (Learning Management System)</span></p>
					<div class="d-flex justify-content-center">
						<div class="col-6">
							<img class="about-img" src="{{URL::to('/assets_web/produk/lms.jpg')}}" alt="">
						</div>
					</div>

					<p class="section-desc"><span class="text-primary font-weight-bold">Tracer Study</span></p>
					<div class="d-flex justify-content-center">
						<div class="col-6">
							<img class="about-img" src="{{URL::to('/assets_web/produk/tracer_study.jpg')}}" alt="">
						</div>
					</div>

                </div>
            </div>
            {{--<div class="col-lg-4">
                <img class="about-img" src="{{URL::to('/assets_web/produk/wifi.png')}}" alt="">
            </div>--}}
		</div>
    </div>
</section>

@stop