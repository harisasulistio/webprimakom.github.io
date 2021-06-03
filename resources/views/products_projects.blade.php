@extends('layout2')
@section('content')
<style>
    .card {
        background-color: #fff;
        max-width: 360px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        border-radius: 2rem;
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
        padding: 0 2rem 2.5rem;
        order: 100;
    }
    .myButton {
	box-shadow: 0px 10px 14px -7px #274373;
	background:linear-gradient(to bottom, #9d59b3 5%, #5f36ad 100%);
	background-color:#9d59b3;
	border-radius:28px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-size:20px;
	padding:14px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3e638a;
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

@font-face {
        font-family: 'myFirstFont';
        src: url('https://primakom.co.id/assets/fonts/FontsFree-Net-SFProText-Semibold.ttf');
        }
    @font-face {
        font-family: 'SecondFont';
        src: url('https://primakom.co.id/assets/fonts/FontsFree-Net-SFProText-Regular.ttf');
    }
    * {
        font-family: 'SecondFont';
    }
</style>
<section class="section is-sm section-plans">
<div class="container">
    <div class="section-head">
        <h2 class="section-title is-center">Our Projects<span class="text-primary">. </span>
        </h2>
        <p class="section-description is-center  ml-auto mr-auto mt-20">
            We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.
        </p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/S3.png')}}');">
                </div>
                <div class="menu">
                    <div><span></span><span></span><span></span></div>
                </div>
                <h2 class="name">Security Solusi Service (S3)</h2>
                {{-- <div class="title">Ant Collector</div> --}}
                <div class="desc">
                    Solusi pengamanan dan pengawasan asset perusahaan, meliputi: CCTV Industrial, RFID, AI, Gate Automation, Flap Barier dll
                </div>
                <div class="actions">
                    <div class="follow-btn text-center">
                        <!-- <button>Follow</button> -->
                        <a href="#" class="myButton col-md-12">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/IT.png')}}');">
                </div>
                <div class="menu">
                    <div><span></span><span></span><span></span></div>
                </div>
                <h2 class="name">IT Infrastructure</h2>
                <div class="desc">
                    Solusi layanan infrastruktur IT dengan mempertahankan dan mengantisipasi kebutuhan rangkaian proses dan fungsi ...
                </div>
                <div class="actions">
                    <div class="follow-btn text-center">
                        <a href="#" class="myButton col-md-12">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/primavillage.png')}}');">
                </div>
                <div class="menu">
                    <div><span></span><span></span><span></span></div>
                </div>
                <h2 class="name">Prima Villages</h2>
                <div class="desc">
                    Digitalisasi Pengelolaan kebutuhan Masyarakat Desa oleh Badan Usaha Milik Desa dan Layanan Desa Mandiri menghadapi era Revolusi Industri 4.0.
                </div>
                <div class="actions">
                    <div class="follow-btn text-center">
                        <a href="#" class="myButton col-md-12">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/primavillage.png')}}');">
                </div>
                <div class="menu">
                    <div><span></span><span></span><span></span></div>
                </div>
                <h2 class="name">Prima School</h2>
                <div class="desc">
                    Platform sistem pembelajaran online yang dapat terintegrasi dengan beberapa fungsi layanan yang terdiri dari E-learning, Siakad, Tracer Study dan Virtual Class. 
                </div>
                <div class="actions">
                    <div class="follow-btn text-center">
                        <a href="#" class="myButton col-md-12">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/primameet.png')}}');">
                </div>
                <div class="menu">
                    <div><span></span><span></span><span></span></div>
                </div>
                <h2 class="name">Prima Meet</h2>
                <div class="desc">
                    Layanan Meeting virtual yang diberikan dalam upaya meningkatkan koordinasi dan efektifitas kinerja meeting tanpa bertemu secara langsung.
                </div>
                <div class="actions">
                    <div class="follow-btn text-center">
                        <a href="#" class="myButton col-md-12">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="banner" style="background-image: url('{{URL::to('assets_web/logo/new_logo/PDS.png')}}');">
                </div>
                <div class="menu">
                    <div><span></span><span></span><span></span></div>
                </div>
                <h2 class="name">Prima Development Software</h2>
                <div class="desc">
                    Solusi dalam pembuatan dan pengembangan software atau aplikasi yang digunakan untuk menunjang produktivitas berbagai instansi dan perusahaan.
                </div>
                <div class="actions">
                    <div class="follow-btn text-center">
                        <a href="#" class="myButton col-md-12">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@stop