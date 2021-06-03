@extends('layout2')
@section('content')
<style type="text/css">
    .section.section-grey {
    background: #ffffff;
}
</style>
<section class="section is-sm section-about">
    <div class="container">
        <h2 class="section-title">GREETING</h2>
        <hr/>
        <div class="row flex vcenter">
            <div class="col-lg-6">
                <img class="about-img kotak7" src="{{URL::to('/assets_web/Foto/3.png')}}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="section-head">
                    <h5 class="section-subtitle "> Founder PT. Primakom</h5>
                    <h2 class="section-title ">Ariya Totar</h2>
                    <p class="section-desc">Seorang profesional yang telah berkecimpung di dunia IT (Information Technology) selama lebih dari 15 tahun. Seorang visioner yang mempunyai komitmen terhadap pengembangan ICT (Information and Communication Technology) dan pemanfaatannya bagi masyarakat luas. Berbekal latar belakang tersebut, Ariya Totar mendirikan PT Prima Mandiri Komunikasi pada tahun 2017.</p>
                    <p class="section-desc">Pengalamannya selama lebih dari 15 tahun dibidang ICT membuatnya mempunyai banyak pengalaman dan relasi untuk menjadikan PT Prima Mandiri Komunikasi tumbuh dan berkembang. Komitmen, loyalitas, dan kepedulian terhadap customer, ia jadikan sebagai fondasi dalam membentuk karakter perusahaan. Dengan hal tersebut, tidak jarang PT Prima Mandiri Komunikasi mendapatkan customer baru berbekal dari testimoni customer sebelumnya.</p>
                    {{-- <a href="#" class="btn btn-primary btn-round">See our stadies</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section is-sm section-grey">
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
                                    <p class="box-desc">Jalan Notojoyo / Sunimbar Blok D, No. 51,
Tegal Gondo, Kabupaten Malang<br/><br/>
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
                                    <p class="box-desc">Jalan Semeru Raya No. D-1 Kelurahan
Sumbersari, Kecamatan Sumbersari,
Jember 68121
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
                                        <ion-icon name="logo-slack"></ion-icon>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="box-title"> Kantor Cabang Denpasar <hr style="border: 1px solid white;"></h3>
                                    <p class="box-desc">Jalan Tukad Badung 20 C, Denpasar Selatan,
Denpasar<br/><br/>
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
                                    <p class="box-desc">Komplek perumahan pagutan ragency, tahap V
No. 7, Mataram Pagutan<br/><br/>
                                    </p>
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
                                    <p class="box-desc">Perum Graha Taman Nirwana Blok C3-11
Banaran, Gunungpati, Semarang<br/><br/>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop