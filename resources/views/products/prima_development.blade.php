@extends('layout2')
@section('content')
<style type="text/css">
    .section.section-grey {
    background: #ffffff;
}
</style>
<section class="section is-sm section-about">
    <div class="container">
        <h2 class="section-title mt-3" data-aos="fade-up" data-aos-delay="200">Prima Development Software<span class="text-primary">. </span></h2>

        <div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-2">
                <img class="about-img" src="{{URL::to('/assets_web/produk/sales_performance.jpg')}}" alt="">
            </div>
            <div class="col-lg-8 p-5">
				<div class="section-head">
					<h2 class="section-title">Sales Performance<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Solusi digitalisasi terhadap konsen perusahaan tingkat target dari perusahaan dan kinerja sales	departemen terhadap target tersebut.</p>
                </div>
            </div>
		</div>
		<hr class="mt-5"/>
        <div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-8 p-5">
				<div class="section-head">
					<h2 class="section-title">Elamos<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Portal digital berupa berita dan pelaporan	bencana alam yang ditujukan untuk publik dalam menanggulangi bencana alam.</p>
                </div>
            </div>
            <div class="col-lg-2">
                <img class="about-img" src="{{URL::to('/assets_web/produk/elamos.jpg')}}" alt="">
            </div>
		</div>
		<hr class="mt-5"/>
		<div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-6">
                <img class="about-img" src="{{URL::to('/assets_web/produk/vsr.jpg')}}" alt="">
            </div>
            <div class="col-lg-6 p-5">
				<div class="section-head">
					<h2 class="section-title">Visitor Safety Register<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Aplikasi terkait sistem keamanan pengunjung dalam kawasan industri berdasarkan parameter yang diterapkan di perusahaan.</p>
                </div>
            </div>
		</div>
    </div>
</section>

@stop