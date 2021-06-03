@extends('layout2')
@section('content')
<style type="text/css">
    .section.section-grey {
    background: #ffffff;
}
</style>
<section class="section is-sm section-about">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" data-aos-delay="200">Prima Village<span class="text-primary">. </span></h2>
		<div class="col-lg-15">
                <div class="section-body">
                    <p class="section-desc">Platform yang digunakan untuk mempermudah masyarakat desa dalam menghadapi revolusi 4.0 dan	pengelolaan	keuangan masyarakat desa.</p>
                </div>
        </div>
        <div class="row flex vcenter justify-content-center mt-5">
			<div class="col-2" data-aos="fade-right" data-aos-delay="300">
                <img class="img-fluid" src="{{URL::to('/assets_web/produk/smartvillage.jpg')}}" alt="">
			</div>
			<div class="col-6" data-aos="fade-left" data-aos-delay="300">
                <img class="img-fluid" src="{{URL::to('/assets_web/produk/keunggulan_smartvillage.jpg')}}" alt="">
            </div>
			<div class="col-lg-12 mt-5">
				{{--<div class="section-head">
					<h2 class="section-title">Smart Village<span class="text-primary">. </span></h2>
				</div>--}}
                {{--<div class="section-body" data-aos="fade-up" data-aos-delay="200">
                    <p class="section-desc">Platform yang digunakan untuk mempermudah masyarakat desa dalam menghadapi revolusi 4.0 dan	pengelolaan	keuangan	masyarakat desa</p>
				</div>--}}
				<h2 class="section-title" data-aos="fade-up" data-aos-delay="200">Keunggulan Prima Village<span class="text-primary">. </span></h2>
				<h2 class="section-subtitle mt-2">Garansi Kerusakan<span class="text-primary">. </span></h2>
				<p>Garansi Kerusakan Program kami lakukan seumur hidup, artinya kalau suatu saat anda mengalami kerusakan system yang di sebabkan oleh adanya Virus, kerusakan Hardware, kerusakan Jaringan.</p>
				<h2 class="section-subtitle mt-2">System Online<span class="text-primary">. </span></h2>
				<p>Dengan didukung perangkat yang tepat aplikasi bisa dioperasikan dimana saja sehingga memudahkan pelaku usaha untuk mengontrol setiap kegiatan usahanya.</p>
				<h2 class="section-subtitle mt-2">Mobile Application<span class="text-primary">. </span></h2>
				<p>Dengan  perkembangan zaman yang sudah kekinian dan pesatnya gagdet atau smartfone, maka aplikasi peken juga dapat di akses dan dioperasikan melalui smartfone.</p>
				<h2 class="section-subtitle mt-2">Kemudahan Aplikasi<span class="text-primary">. </span></h2>
				<p>Aplikasi kami sangat mudah digunakan karena disusun dengan layout dan interface yang menarik tanpa mengurangi nilai fungsi dari aplikasi.</p>
				<h2 class="section-subtitle mt-2">Laporan Keuangan Terintegrasi pada induk  BUMDesa<span class="text-primary">. </span></h2>
				<p>Diantaranya  Simpan Pinjam, PPOB , Pasar Desa, Bank sampah, Unit Hippam dan unit perdagangan umum.<br/> Dan unit usaha yang lainnya diantaranya, unit peternakan, unit apotik, unit resto, unit transportasi, dan unit wisata.<br/> Layanan Mandiri yang bisa diakses melalui Mobile Phone.
					</p>
            </div>
		</div>
    </div>
</section>

@stop