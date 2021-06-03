@extends('layout2')
@section('content')
<style type="text/css">
    .section.section-grey {
    background: #ffffff;
}
</style>
<section class="section is-sm section-about">
    <div class="container">
        <h2 class="section-title mt-3" data-aos="fade-up" data-aos-delay="200">Security Solution Service<span class="text-primary">. </span></h2>
        <div class="pt-5 mt-5" data-aos="fade-up" data-aos-delay="200">
        <div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-4">
                <img class="about-img" src="{{URL::to('/assets_web/produk/flip.jpg')}}" alt="">
            </div>
            <div class="col-lg-8 p-5">
				<div class="section-head">
					<h2 class="section-title">Flap Barrier<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Gerbang keamanan otomatis yang dapat digunakan dalam area publik dan area terbatas untuk mempermudah pengamanan terhadap suatu area dalam menyeleksi lalu lintas orang keluar masuk sesuai dengan parameter yang diberlakukan oleh perusahaan.</p>
                    <p class="section-desc">Integrasi Data menggunakan database melalui RFID, barcode, sidik jari, ataupun wajah lain sesuai dengan kebutuhan yang digunakan sebagai media filter pengamanan.</p>
                </div>
            </div>
            <div class="col-lg-12">
                    <div class="section-body">
                        <p class="section-desc"><span class="text-primary font-weight-bold">Keuntungan dan keunggulan Barrier gate</span> <br> 1. Menciptakan keadaan yang tertib bagi pengguna jalan. <br> 2. Meningkatkan keamanan karena dihubungkan dengan system card RFID sehingga hanya pemilik kartu saja yang bisa masuk di area tersebut. <br> 3. Menghemat biaya operasional karena mengurangi personil keamanan. <br> 4. Mengurangi tingkat kejahatan. <br> 5. Dengan ukuran mulai dari 3m - 6m secara otomatis segala fungsi dan lebar jalan dapat tercover begitu juga untuk basemant gedung yang memiliki langit-langit gedung yang pendek ada beberapa model yang bisa memenuhi/menjawab kebutuhan itu. <br> 6. Bagi perumahan yang kelas standar maupun elite meningkatkan prestige. </p>
                        <p class="section-desc"><span class="text-primary font-weight-bold">Aplikasi Barrier Gate : </span> <br> 1. Parkir Kendaraan pada mall/pusat perbelanjaan, rumah sakit, bandara, terminal, hotel & appartment, bank, tempat hiburan/ rekreasi, ruko dan lain-lainnya. <br> 2. Alat Keamanan untuk akes jalan masuk/keluar suatu perumahan atau area.</p>
                        <p class="section-desc"><span class="text-primary font-weight-bold">1. Gate Mekanis </span> <br> Merupakan gate yang bekerja mengggunakan gear box motor sebagai penggerak lengan ayun dan memiliki kecepatan yang sangt baik dari segi penggunaan. </p>
                        <p class="section-desc"><span class="text-primary font-weight-bold">2. Gate Magnetig Hidrolic </span> <br> Merupakan gate yang bekerja menggunakan kombinasi dari penggunaan tuas hidrolic yang di kombinasikan dengan motor listrik. </p>
                    </div>
                </div>
		</div>
		<hr class="mt-5"/>
        <div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-8 p-5">
				<div class="section-head">
					<h2 class="section-title">Gate Automation<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Gerbang kemanan otomatis yang digunakan dalam area publik dan area terbatas untuk mempermudah lalu lintas orang maupun kendaraan.</p>
                    <p class="section-desc">Umumnya layanan ini digunakan tanpa perlu di integrasikan dengan database aplikasi sehingga parameter untuk keamanan dapat dikombinasikan dengan filter manual dengan tombol atau dengan otomatis melalui media sensor.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <img class="about-img" src="{{URL::to('/assets_web/produk/gate.jpg')}}" alt="">
            </div>
            <div class="col-lg-12">
                <div class="section-body">
                    <p class="section-desc"><span class="text-primary font-weight-bold">Gate otomation </span> merupakan teknologi keluar masuk kendaraan atau orang tanpa adanya penjaga di gate tersebut bisa disebut juga self service.</p>
                    <p class="section-desc"><span class="text-primary font-weight-bold">Cara kerja Gate Otomation</span> -> Gate Otomation bekerja menggunakan sebuah system layaknya kecerdasan buatan, sehingga gate bisa menentukan dia membuka atau menutup dengan sendirinya tanpa adanya penjaga (manless).</p>
		        </div>
            </div>
        </div>
		<hr class="mt-5"/>
		<div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-4">
                <img class="about-img" src="{{URL::to('/assets_web/produk/fiber.png')}}" alt="">
            </div>
            <div class="col-lg-8 p-5">
				<div class="section-head">
					<h2 class="section-title">Fiber Optic<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Layanan transmisi pengiriman data berkecapatan tinggi melalui media optik. Optik merupakan media dengan tingkat kecepatan cahaya sehingga mendukung untuk kebutuhan penyaluran data dengan cepat dalam jumlah besar.</p>
                    <p class="section-desc">Pengiriman data yang besar, reliable, dan minim perawatan sangat membantu perusahaan untuk investasi jangka panjang sehingga dapat memberikan dampak positif terhadap budgeting perusahaan terhadap Infrastruktur IT.</p>
                </div>
            </div>
		</div>
		<hr class="mt-5"/>
        <div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-8">
				<div class="section-head">
					<h2 class="section-title">CCTV Industrial<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Layanan pengamanan monitoring melalui media CCTV (Closed Circuit Television) dimana medianya berupa kamera yang dipasang di beberapa area yang menjadi titik keamanan.</p>
                    <p class="section-desc">Layanan ini dapat diterapkan untuk memonitor produktivitas karyawan maupun keamanan barang sehingga meminimalisir kekhawatiran terhadap produktivitas karyawan dan keamanan logistik di perusahaan.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <img class="about-img" src="{{URL::to('/assets_web/produk/cctv.png')}}" alt="">
            </div>
            <div class="col-lg-12">
                <div class="section-body">
                    <p class="section-desc"><span class="text-primary font-weight-bold">CCTV (Closed Circuid Television)</span> <br> Pada umumnya CCTV digunakan sebagai pelengkap keamanan dan banyak dipakai di dalam industri-industri seperti militer, bandara, toko, kantor, pabrik dan bahkan sekarang perumahan pun telah banyak yang menggunakan teknologi ini. <br> 1.)	Camera CCTV -> Camera yang di fungsikan untuk memantau dan mengirimkan sinyal video. <br> 2.)	Kabel COAX/UTP -> Media yang di gunakan untuk camera mengirimkan sinyal video. <br> 3.)	DVR/NVR -> Alat yang di gunakan untuk menerima sinyal video dan menyimpannya di sebuah HDD serta menampilkannya di monitor.</p>
                    <p class="section-desc"><span class="text-primary font-weight-bold">Kelebihan dan Kekurangan (CCTV Digital dan IP) </span> </br> <span class="text-primary font-weight-bold">Analog</span> <br> Kelebihan – Mudah Dipelajari, Mudah di Instalasi, Kabel bida > 100M, Murah. <br> Kekurangan – Semua kabel harus konek ke DVR, Max 32 Channel, Tidak bisa untuk skala besar.</p>
                    <p class="section-desc"><span class="text-primary font-weight-bold"> IP</span> <br> Kelebihan – Koneksi Kabel bida di network terdekat, Bisa>100 Channel, Bisa untukk skala besar. <br> Kekurangan – Lebih banyak konfigurasi, Mahal, Max kabel 80 M. </p>
                </div>
            </div>
        </div>
		<hr class="mt-5"/>
		<div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-4">
                <img class="about-img" src="{{URL::to('/assets_web/produk/rfid.png')}}" alt="">
            </div>
            <div class="col-lg-8 p-5">
				<div class="section-head">
					<h2 class="section-title">RFID People Tracking<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Layanan keamanan dengan RFID (Radio Frequency ID) dimana medianya dapat berupa kartu dan berfungsi untuk memonitor karyawan dalam kepentingan pengawasan terhadap area terbatas maupun untuk memonitor sistem absensi dan lembur karyawan.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="section-body">
                    <p class="section-desc"><span class="text-primary font-weight-bold">RFID <br> Radio Frequency Identification </span> <br> Sebuah metode identifikasi dengan menggunakan sarana yang di sebut label RFID atau transponder untuk menyimpan dan mengambil jarak jauh.</p>
                    <p class="section-desc">1.	TAG RFID -> Berfungsi untuk memberikan data id number ke RFID Reader untuk di Cocokkan di database server. <br> 2.	RFID Reader -> Berfungsi untuk membaca RFID Tag kemudian di teruskan ke server untuk verifikasi data yang ada. <br> 3.	Server -> Berfungsi sebagai tempat penyimpanan data base RFID Tag dan sebagai aplikasi untuk mengontrol RFID Reader. <br> 4.	RFID AKTIF -> RFID yang dapat memancarkan sinyal ke RFID Reader. <br> 5.	RFID Pasif ->  RFID yang tidak memiliki sumber tenaga sendiri untuk memancarkan sinyalnya. <br> 6.	RFID Semi-Pasif ->  RFID yang memiliki sumber tenaga sendiri untuk memancarkan sinyal,tetapi menunggu RFID Reader memberikan sinyal terlebih dahulu.</p>
                    <p class="section-desc"><span class="text-primary font-weight-bold">Kekurangan RFID</span> <br> 1.	Semua harus di pasang tag RFID. <br> 2.	Dibutuhkan Midleware dalam jumlah besar untuk menghubungkan Tag denga Reader.</p>
                    <p class="Section-desc"><span class="text-primary font-weight-bold">kelebihan RFID</span> <br> 1.	Efisiensi Waktu. <br> 2.	Data yang dapat digunakan lebih banyak. </p>
                </div>
            </div>
		</div>
    </div>
</section>

{{--<section class="section is-sm section-grey">
        <div class="container">
            <div class="lines">
                <img src="../assets/images/others/lines.svg" alt="">
            </div>
            <div class="section-head flex between vcenter wrap">
                <h2 class="section-title ">Primakom Office Location<hr/></h2>
            </div>
            <div class="boxes">
                <div class="row min-30">
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-secondary-bg has-left-icon">
                            <div class="box-particles2">
                                <img src="../assets/images/others/box-particle-2.svg" alt="">
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-icon">
                                        <ion-icon name="compass"></ion-icon>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="box-title"> Kantor Pusat<hr style="border: 1px solid white;"></h3>
                                    <p class="box-desc">Jalan Jombang Raya Ruko Emerald Boulevard
                                            Office Park Blok AA 2 No. 52, Pondok Aren,
                                            Kota Tangerang Selatan
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-shadow has-left-icon">
                            <div class="box-particles2">
                                <img src="../assets/images/others/box-particle-2.svg" alt="">
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-icon">
                                        <ion-icon name="cog"></ion-icon>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="box-title">Kantor Pusat Operasional<hr style="border: 1px solid black;"></h3>
                                    <p class="box-desc">Jalan Jajar Tunggal Utara I Blok D 12A,
                                        Surabaya, Jawa Timur<br/><br/>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-secondary-bg has-left-icon">
                            <div class="box-particles2">
                                <img src="../assets/images/others/box-particle-2.svg" alt="">
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-icon">
                                        <ion-icon name="brush"></ion-icon>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="box-title"> Kantor Cabang Malang<hr style="border: 1px solid white;"></h3>
                                    <p class="box-desc">Jalan Notojoyo / Sunimbar Blok D, No. 51,Tegal Gondo, Kabupaten Malang<br/><br/>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-shadow has-left-icon">
                            <div class="box-particles2">
                                <img src="../assets/images/others/box-particle-2.svg" alt="">
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-icon">
                                        <ion-icon name="planet"></ion-icon>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="box-title"> Kantor Cabang Jember<hr style="border: 1px solid black;"></h3>
                                    <p class="box-desc">Jalan Semeru Raya No. D-1 Kelurahan Sumbersari, Kecamatan Sumbersari,Jember 68121</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-secondary-bg has-left-icon">
                            <div class="box-particles2">
                                <img src="../assets/images/others/box-particle-2.svg" alt="">
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-icon">
                                        <ion-icon name="logo-slack"></ion-icon>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="box-title"> Kantor Cabang Denpasar <hr style="border: 1px solid white;"></h3>
                                    <p class="box-desc">Jalan Tukad Badung 20 C, Denpasar Selatan,Denpasar<br/><br/>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-shadow has-left-icon">
                            <div class="box-particles2">
                                <img src="../assets/images/others/box-particle-2.svg" alt="">
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-icon">
                                        <ion-icon name="archive"></ion-icon>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="box-title"> Kantor Cabang Mataram <hr style="border: 1px solid black;"></h3>
                                    <p class="box-desc">Komplek perumahan pagutan ragency, tahap V No. 7, Mataram Pagutan<br/><br/>  </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box has-shadow has-left-icon">
                            <div class="box-particles2">
                                <img src="../assets/images/others/box-particle-2.svg" alt="">
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-icon">
                                        <ion-icon name="archive"></ion-icon>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="box-title"> Kantor Cabang Semarang <hr style="border: 1px solid black;"></h3>
                                    <p class="box-desc">Perum Graha Taman Nirwana Blok C3-11 Banaran, Gunungpati, Semarang<br/><br/>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>--}}
@stop