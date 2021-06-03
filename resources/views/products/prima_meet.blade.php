@extends('layout2')
@section('content')
<style type="text/css">
    .section.section-grey {
    background: #ffffff;
}
</style>
<section class="section is-sm section-about">
    <div class="container">
        {{--<h2 class="section-title mt-5">Prima Meet<span class="text-primary">. </span></h2>--}}

        <div class="row flex vcenter pt-5 mt-5">
            <div class="col-lg-8" data-aos="fade-left" data-aos-delay="200">
				<div class="section-head">
					<h2 class="section-title">Prima Meet<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Layanan Meeting melalui virtual yang diberikan secara gratis kepada pelanggan PT Prima Mandiri Komunikasi didalam upaya meningkatkan koordinasi dan efektif untuk menekan waktu koordinasi.</p>
                    <p class="section-desc">Aplikasi konferensi web yang dapat diintegrasikan dengan perusahaan / aplikasi agensi dan dapat disesuaikan sesuai kebutuhan.</p>
                    <p class="section-desc">Fitur Prima Meet :<br>1. Personalized Room<br>2. Recording Management<br>3. Custom Design<br>4. User Authentication</p>
                </div>
			</div>
			<div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                <img class="about-img" src="{{URL::to('/assets_web/produk/primameet.png')}}" alt="">
            </div>
		</div>

		<div class="row flex vcenter justify-content-center pt-5 mt-5">
            <div class="col-12">
				<div class="section-head" data-aos="fade-up" data-aos-delay="200">
					<h2 class="section-title"> Keunggulan Prima Meet<span class="text-primary">. </span></h2>
				</div>
                {{--<div class="section-body">
                    <p class="section-desc">Layanan Meeting melalui virtual yang diberikan secara gratis kepada pelanggan PT Prima Mandiri Komunikasi didalam upaya meningkatkan koordinasi dan efektif untuk menekan waktu koordinasi.</p>
                    <p class="section-desc"></p>
                </div>--}}
                <!-- <div class="section-body">
                    <p class="section-desc">Bisa melakukan kustomisasi.</p>
                    <p class="section-desc">Keamanan data yang lebih aman.</p>
                    <p class="section-desc">Nama domain gratis.</p>
                    <p class="section-desc"></p>
                    <p class="section-desc"></p>
                    <p class="section-desc"></p>
                    <p class="section-desc"></p>
                </div> -->
			</div>
			<div class="col-lg-9" data-aos="fade-up" data-aos-delay="300">
                <img class="about-img" src="{{URL::to('/assets_web/produk/keunggulan_primameet.jpg')}}" alt="">
            </div>
            <div class="col-lg-12">
                <div class="section-body">
				<p class="section-subtitle font-weight-bold mt-2">Customizing</p>
				<p class="section-desc">Di dhasbor Anda dapat menyesuaikan logo perusahaan dan tampilan halaman Depan.</p>

				<p class="section-subtitle font-weight-bold mt-2">Mudah Membuat Ruangan (Room) </p>
				<p class="section-desc">Daftar / Masuk Google atau melalui aplikasi itu sendiri.</p>

				<p class="section-subtitle font-weight-bold mt-2">Merekam File di server khusus </p>
				<p class="section-desc">Lihat rekaman dan bagikan dengan orang lain.</p>

				<p class="section-subtitle font-weight-bold mt-2">Kelola Akses </p>
				<p class="section-desc">Izinkan pengguna menunggu kamar Anda dimulai, lalu otomatis bergabung jika sudah.</p>

				<p class="section-subtitle font-weight-bold mt-2">Mengundang Pengguna </p>
				<p class="section-desc">Undang orang lain ke kamar Anda menggunakan URL sederhana.</p>

				<p class="section-subtitle font-weight-bold mt-2">Mudah untuk memberi akses </p>
				<p class="section-desc">Untuk memulai rapat, izinkan akses. moderator dengan mudah menetapkan peran kepada peserta rapat (dibungkam, layar berbagi, dll.).</p>

				<p class="section-subtitle font-weight-bold mt-2">Special Feature Beakout Rooms</p>
				<p class="section-desc"> Rest room provided that can be used by the user to communicate with other users with a specified time limit.</p>

				<p class="section-subtitle font-weight-bold mt-2">Streaming Langsung</p>
                <p class="section-desc">Tersedia fitur Live YouTube yang digunakan untuk mempermudah proses seminar dan dapat diakses oleh pengguna dengan jumlah yang banyak dalam waktu yang bersamaan.</p>

				<p class="section-subtitle font-weight-bold mt-2">Presentasi Unggahan Fitur Khusus</p>
				<p class="section-desc">Unggah fitur presentasi yang bisa ditampilkan saat seminar dimulai dengan resolusi HD.</p>

				<p class="section-subtitle font-weight-bold mt-2">Fitur Khusus Pengguna Jarak Jauh</p>
                <p class="section-desc">Sebagai moderator Anda dapat memantau dan memberikan akses kepada setiap pengguna. <br> 1.	Fitur Khusus Berbagi Video Eksternal Dari Youtube. <br> 2.	Untuk Berbagi Video Resolusi HD. <br> 3.	Fitur Khusus Layar Berbagi. <br> 4.	Untuk berbagi semua aplikasi di desktop.</p>
                </div>
            </div>
		</div>

		<div class="row flex vcenter pt-5 mt-5">
            <div class="col-lg-8" data-aos="fade-left" data-aos-delay="200">
				<div class="section-head">
					<h2 class="section-title">Benefits Prima Meet<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">1. Bisa melakukan kustomisasi.<br> 2. Keamanan data yang lebih aman.<br>3. Nama domain gratis.<br>4. Hingga 500 pengguna bersamaan.<br>5. Terdapat fitur Pesan dalam pertemuan tersebut.<br>6. Cloud Storage.<br>7. Terdapat Manajemen rekaman.<br>8. Bisa login dengan akun Google.<br>9. Mudah digunakan semudah Anda menjelajah browser.</p>
                </div>
			</div>
		</div>
    </div>
</section>

@stop