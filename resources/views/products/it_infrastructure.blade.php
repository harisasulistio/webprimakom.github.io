@extends('layout2')
@section('content')
<style type="text/css">
    .section.section-grey {
    background: #ffffff;
}
</style>
<section class="section is-sm section-about">
    <div class="container">
        <h2 class="section-title mt-3" data-aos="fade-up" data-aos-delay="200">IT Infrastructure<span class="text-primary">. </span></h2>
        <div class="pt-5 mt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12">
                <div class="section-body">
                    <p class="section-desc">Infrastruktur teknologi informasi (IT) adalah sebuah kerangka yang mendukung berjalannya sebuah sistem dengan komponen berbagai macam hardware, software, database, network, security dan manajemen IT. Ketika Anda bisa mengukur Anda bisa mengelola.</p>
                    <p class="section-desc">Apa yang menjadi komponen dari IT infrastrukture? <br> 1. Hardware <br> 2. Software <br> 3. Network</p>

					<p class="section-subtitle text-blue font-weight-bold mt-2">Infrastruktur Tradisional</p>
					<p class="Section-desc">Infrastruktur tradisional, komponen - seperti pusat data, penyimpanan data, dan peralatan lainnya - semuanya dikelola dan dimiliki oleh mereka sendiri. <br> Infrastruktur tradisional sering dianggap mahal untuk dijalankan dan membutuhkan perangkat keras dalam jumlah besar, seperti server, serta daya dan ruang fisik.</p>

					<p class="section-subtitle text-blue font-weight-bold mt-2">Infrastruktur Cloud</p>
                    <p class="section-desc"> Infrastruktur cloud menggambarkan komponen dan sumber daya yang dibutuhkan untuk komputasi awan. Anda dapat membuat awan pribadi dengan membangunnya sendiri menggunakan sumber daya yang didedikasikan hanya untuk Anda. Atau Anda dapat menggunakan cloud publik dengan menyewa infrastruktur cloud dari penyedia cloud seperti Alibaba, Amazon, Google, IBM, atau Microsoft. Dan dengan menggabungkan beberapa derajat portabilitas beban kerja, orkestrasi, dan manajemen di beberapa cloud, Anda dapat membuat cloud hybrid.</p>

					<p class="section-subtitle text-blue font-weight-bold mt-2">Infrastruktur Hyperconverged</p>
					<p class="section-desc">Infrastruktur hyperconverged memungkinkan Anda untuk mengelola sumber daya komputasi, jaringan, dan penyimpanan data dari satu antarmuka. Dengan komputasi yang ditentukan perangkat lunak dan penyimpanan data yang digabungkan bersama, Anda dapat mendukung beban kerja yang lebih modern dengan arsitektur yang dapat diskalakan pada perangkat keras standar industri.</p>

					<p class="section-subtitle text-blue font-weight-bold mt-2">Mengelola IT Infrastruktur</p>
					<p class="section-desc">Karena aplikasi perangkat lunak dan metode kerja menjadi lebih inovatif, tuntutan atas infrastruktur TI yang mendasarinya meningkat. <br>
						1. Meningkatkan kemampuan agar perusahaan dapat focus pada core bisnis. <br>
						2. Management keamanan dan Permasalahan IT. <br>
						3. Mengurangi resiko melalui Langkah Langkah peningkatan keamanan. <br>
						4. Memberikan layanan dan solusi IT yang komprehensif dan terkini. <br>
						5. Dukungan IT yang responsive Ketika membutuhkan bantuan. <br>
						metode untuk menyediakan dan mengelola infrastruktur TI melalui penggunaan source code, bukan melalui prosedur operasi standar dan proses manual. Secara dasar dapat memperlakukan server, database, jaringan dan infrastruktur lainnya seperti software. </p>
					<p class="section-desc"</p>

					<p class="section-subtitle text-blue font-weight-bold mt-2">Kecepatan dan Kesederhanaan </p>
					<p class="section-desc">IaC memungkinkan kita untuk melakukan spin up terhadap seluruh arsitektur infrastruktur dengan menjalankan skrip. IaC memungkinkan pengguna menjalankan seluruh infrastruktur dengan menjalankan skrip.<br> Tidak hanya dapat menerapkan server virtual, tetapi pengguna juga dapat meluncurkan database yang telah dikonfigurasi sebelumnya, infrastruktur jaringan, sistem penyimpanan, penyeimbang beban, dan layanan cloud lainnya yang mungkin pengguna perlukan.</p>

					<p class="section-subtitle text-blue font-weight-bold mt-2">Konsistensi Konfigurasi</p>
					<p class="section-desc">Standarisasi yang lengkap dalam mengatur infrastruktur. Dapan mengurangi resiko terhadap kesalahan saat melakukan pengaturan.</p>

					<p class="section-subtitle text-blue font-weight-bold mt-2">Meminimalisasi Resiko</p>
					<p class="section-desc">Ketika sebuah code mempunyai version control. Semua perubahan yang ada pada server dapat terdokumentasi, tercatat dan diketahui. </br>

					<p class="section-subtitle text-blue font-weight-bold mt-2">Penambahan efisiensi dari pengembangan perangkat lunak </p>
                    <p class="section-desc"> Iac memperbolehkan kita untuk menggunakan Teknik Continuous Integration and Continuous Deployment yang mana dapat meminimalisir human error Saat melakukan development stage.</p>

					<p class="section-subtitle text-blue font-weight-bold mt-2">Penghematan harga </p>
					<p class="section-desc">Mengotomatiskan proses penerapan infrastruktur memungkinkan para insinyur menghabiskan lebih sedikit waktu untuk melakukan pekerjaan manual, dan lebih banyak waktu untuk melaksanakan tugas-tugas yang bernilai lebih tinggi. </p>
                </div>
            </div>
        </div>
        <div class="flex vcenter pt-5 mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-6">
                <img class="about-img" src="{{URL::to('/assets_web/produk/kubernetes.jpg')}}" alt="">
            </div>
            <div class="col-lg-6 p-5">
				<div class="section-head">
					<h2 class="section-title">Kubernetes<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Platform yang digunakan untuk manajemen container base dan clusterisasi dengan tujuan untuk meminimalisir downtime dalam upaya memberikan teknologi yang lebih mudah dikelola, aman, sekaligus reliable. </p>
                    <p class="section-desc">Dalam Kubernetes ada beberapa istilah yang harus dipahami oleh pengguna, supaya bisa menggunakan aplikasi ini dengan baik:</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="section-body">
                <p class="section-desc">1. Pod <br> Pod merupakan salah satu grub pada container instance. Dengan ini Anda dapat menjalankan tidak hanya satu container saja (misalkan aplikasi redis cache + web + longing service pada satu pod. Dimana satu container dengan container yang lain yang berada dalam satu pod mampu mengakses menggunakan alamat localhost. Anda bisa menganggap pod merupakan laptop yang biasa Anda gunakan untuk coding. Alamat localhost sendiri sangat umum digunakan untuk melakukan akses database pada aplikasi Anda.</p>
                <p class="section-desc">2. Node <br> Node merupakan representasi dalam satu mesin dan bisa saja mesin yang digunakan adalah mesin jenis virtual (misalkan dropletnya DigitalOcean atau VPS) maupun fisik.</p>
                <p class="section-desc">3. Service <br> Istilah service ini di Kubernetes adalah mekanisme yang digunakan mengekspos pod ke dunia luar. Tidak adanya alamat IP jelas pada aplikasi yang berjalan pada pod, sehingga supaya bisa akses pada aplikasi lain maupun oleh user, wajib menggunakan alamat IP yang tepat. Maka di service inilah akan ditemukan alamat IP tetap dan nantinya bisa diarahkan ke pod Anda dengan menggunakan selector.</p>
                <p class="section-desc">4. Label <br> Label dalam Kubernetes merupakan seperangkat informasi yang berupa metadata dengan tujuan mencari pod khusus. Selain itu juga mempunyai banyak fungsi lain yang bisa digunakan pada kubernetes.</p>
                <p class="section-desc">5. App-Belajar <br> Anda bisa membuat label app dengan isinya nama aplikasi dan container, service, dan Pod yang merupakan bagian aplikasi belajar tersebut Anda beri label app=belajar.</p>
                <p class="section-desc">6. Strage-Production <br> Label stage umumnya digunakan dalam menentukan konfigurasi environment deployment pada aplikasi Anda. Misalkan testing, development, performance test, production, serta security est.</p>
                <p class="section-desc">7. Jenis-frontend <br> Disini Anda bisa menciptakan sebuah label jenis aplikasi, misalkan cache, fileserver, database, froontend, dan lain sebagainya.</p>
                <p class="section-desc">8. Selector <br> Selector merupakan filtering yang menggunakan label, contohnya saat Anda mencari banyak instance database dengan menggunakan aplikasi belajar yang dijalankan pada production.</p>
                <p class="section-desc"> Kubernates memberikan keuntungan yang bisa dirasakan oleh penggunanya, yaitu :</p>
                <p class="section-desc">1. Service discovery and Load Balancing <br> Kubernetes bisa mengekspose container yang digunakan dengan nama DNS atau IP address server sendiri. Ketika trafik berada di container besar, aplikasi ini secara otomatis bisa melakukan load balancing trafik atau penyeimbang beban serta distribusi trafik dengan demikian aplikasi yang dijalankan bisa stabil.</p>
                <p class="section-desc">Storage orchestration. Aplikasi ini dapat juga me-mount di system storage yang digunakan, misalkan storage, local storage dari cloud provider misalkan alicloud dan aws.</p>
                <p class="section-desc">2. Automated Rollouts and Rollbacks <br> Deployment dapat menggunakan jenis file YAML. Dengan demikian bisa mendeskripsikan dahulu deployment yang diinginkan. Anda dapat menggunakan jenis file YAML agar dapat melakukan deployment lain serta untuk merubah deployment yang sudah ada. Lebih dalam lagi Anda bisa melaksanakan rollback dengan menggunakan fike YAML dahulu. Dengan demikian semuanya bisa terdokumentasi serta bisa dilakukan secara otomatis.</p>
                <p class="section-desc">3. Self-healing <br> Adanya Kubernetes dapat merestart container yang gagal, mengganti, serta memastikan container yang sudah tidak bisa menanggapi request serta tidak mungkin memberikan adanya trafik ke container hingga container benar siap dalam menerima request.</p>
                <p class="section-desc">4. Secret and configuration management <br> Kubernetes mempunyai kelebihan dapat menyimpang data sensitive yang Anda miliki, misalkan password, ssh keys, auth token. Anda bisa juga membangun serta mengupdate berbagai macam secret dengan tidak harus membangun ulang container image, serta tidak harus mengekspose secret pada konfigurasi Anda. Lebih jelasnya Kubernetes (K8s) adalah orkestrasi container open source dan dikembangkan oleh Google.</p>
                <p class="section-desc">Keberadaan aplikasi ini bisa memudahkan Anda dalam hal membangun berbagai ekosistem pada komponen serta alat yang dapat mempermudahkan penerapan, pengelolaan pada aplikasi, serta skala. Ada banyak intilah yang harus dimengerti oleh para penggunaan aplikasi ini, supaya dapat menggunakan dengan mudah. Selain itu Kubernetes memiliki kelebihan yang banyak dan hanya bisa dirasakan bagi mereka yang benar-benar menerapkan.</p>
                </div>
            </div>
		</div>
		<hr class="mt-5"/>
        <div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-7 p-5">
				<div class="section-head">
					<h2 class="section-title">Object Storage<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Penyimpanan berbasis objek dimana dalam penyimpanannya tidak dibagi dalam blok melainkan menjadi sebuah objek yang berisi data, metadata dan indetifier unik.Dapat dikatakan ini merupakan sebuah syarat perusahaan untuk bertransformasi terhadap pertumbuhan data.</p>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="about-img" src="{{URL::to('/assets_web/produk/object.png')}}" alt="">
            </div>
            <div class="col-lg-12">
                <div class="section-body">
                <p class="section-desc">Keuntungan menggunakan object storage, yaitu : <br> 1. Object Stotage sangat ideal untuk memecahkan masalah  pertumbuhan data. Karena semakin banyak data yang dihasilkan, sistem penyimpanan harus tumbuh dengan kecepatan yang sama. Apa yang terjadi ketika Anda mencoba untuk memperluas sistem penyimpanan berbasis block storage di luar seratus terabyte atau melampaui beberapa petabyte? Mungkin anda akan mengalami masalah durability, keterbatasan dengan infrastruktur penyimpanan yang saat ini anda milki.</p>
                <p class="section-desc">2. Memecahkan masalah manajemen pengadaan jika occupancy storage anda sudah melebihi batas.</p>
                <p class="section-desc">3. Object storage sangat efisien jika anda ingin menyimpan data yang penting namun tidak sering digunakan seperti data transaksi bulan lalu bahkan tahun lalu, backup data serta archieving. </p>
                <p class="section-desc">4. Keuntungan lain dari penggunaan object storage adalah data tetap terlindungi, jika satu atau lebih node gagal, data masih dapat tersedia dengan munggunakan sistem cluster. Object storage dapat melindungi data dari hardware failure, badsector. Object storage di desain dan didistribusikan untuk high availability dan durable. </p>
                </div>
            </div>
		</div>
		<hr class="mt-5"/>
		<div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-3">
                <img class="about-img" src="{{URL::to('/assets_web/produk/network.png')}}" alt="">
            </div>
            <div class="col-lg-9 p-5">
				<div class="section-head">
					<h2 class="section-title">Network Reengineering<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Layanan di bidang audit networking dimana dalam prosesnya akan dilakukan assesment terhadap jaringan existing untuk dilakukan pemutakhiran terhadap sistem jaringan yang sedang berjalan untuk mendapatkan jaringan yang lebih handal, aman dan mudah untuk dimonitoring.</p>
                    <p class="section-desc">Keuntungan utama yang langsung terasa dari network itu adalah, Internet yang mendunia, karena pada hakikatnya Internet itu  sendiri  adalah  serangkaian  komputer (ribuan bahkan jutaan komputer) yang saling terhubung satu sama lain. Berevelusi dan berkembang dari waktu ke waktu, sehingga membentuk satu jaringan kompleks seperti yang kita rasakan sekarang ini.</p>
                </div>
            </div>
		</div>
		<hr class="mt-5"/>
        <div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-6 p-5">
				<div class="section-head">
					<h2 class="section-title">Wifi Revolution<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Revolusi Wifi yang memanfaatkan konsep big data untuk memonetisasi dan sarana periklanan yang biasa digunakan di area pubik.</p>
                    <p class="section-desc">Keuntungan yang didapat dari revolusi wifi, yaitu :</p>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="about-img" src="{{URL::to('/assets_web/produk/wifi.png')}}" alt="">
            </div>
            <div class="col-lg-12">
                <div class="section-body">
                <p class="section-desc">1. Mobilitas Tinggi <br> Pengguna dapat menggunakan wireless LAN untuk memobilisasi kegiatan yang mereka lakukan. Pada zaman sekarang, penggunaan koneksi internet semakin pesat sehingga penggunaan WLAN menjadi semakin penting. Hal tersebut didukung oleh pemasangan perangkat WLAN yang tidak membutuhkan biaya yang tinggi dan dapat ditemukan di manapun.</p>
                    <p class="section-desc">2. Instalasi Mudah dan Murah <br> Jaringan WLAN dapat digunakan menjadi salah satu alternatif untuk menghubungkan perangkat smartphone dan PC. Instalasi perangkat yang dibutuhkan untuk menggunakan WLAN dapat di lakukan dengan mudah dan dalam waktu yang singkat.</p>
                    <p class="section-desc">3. Fleksibel <br> Fleksibel yang dimaksud disini adalah pengguna tidak perlu berdiam di suatu tempat untuk terhubung dengan jaringan WLAN. Pengguna dapat berpindah pindah tempat meskipun dalam radius tertentu. Hal tersebut sangat berbanding terbalik dengan jaringan yang menggunakan kabel. Di mana Anda harus berdiam di suatu tempat untuk dapat selalu terhubung.</p>
                </div>
            </div>
		</div>
		<hr class="mt-5"/>
		<div class="row flex vcenter mt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-4">
                <img class="about-img" src="{{URL::to('/assets_web/produk/troubleshoot.png')}}" alt="">
            </div>
            <div class="col-lg-8 p-5">
				<div class="section-head">
					<h2 class="section-title">Instalasi & Troubleshooting <br/>Radio Link<span class="text-primary">. </span></h2>
				</div>
                <div class="section-body">
                    <p class="section-desc">Rangkaian jaringan yang digunakan untuk komunikasi wireless dengan memanfaatkan gelombang elektromagnetik untuk mengirimkan sinyal jarak jauh.</p>
                    <p class="section-desc">Keuntungan rangkaian jaringan, yaitu :</p>
                    <p class="section-desc">1. Kapasitas bandwith jelas lebih besar, karena koneksi setiap wifi klien hanya mengarah pada access point saja.</p>
                    <p class="section-desc">2. Jangkauan perangkat Access point biasanya sudah dibuat cukup besar, ditambah lagi kita bisa memperbesar sendiri daya jangkau dari access point.</p>
                    <p class="section-desc">3. Keamanan, tidak diragukan lagi, karena access point sudah dilengkapi dengan sistem autentifikasi WPA dan WPA2.</p>
                </div>
            </div>
		</div>
    </div>
</section>

@stop