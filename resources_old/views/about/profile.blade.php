@extends('layout2')
@section('content')

<section class="section is-sm section-about">
    <div class="container">
        <h2 class="section-title"> Company Profile </h2><hr/>
        <div class="row flex vcenter">
            <div class="col-lg-6">
                <img class="about-img kotak7" src="{{URL::to('/assets_web/Gambar/2.jpg')}}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="section-head">
                    <h2 class="section-title ">PT Prima Mandiri Komunikasi </h2>
                    <p class="section-desc">Didirikan pada 13 September 2016, PT. Prima Mandiri Komunikasi merupakan perusahaan yang bergerak dalam bidang ICT dan berkomitmen terhadap kualitas kerja yang maksimal untuk mencapai kepuasan pelanggan secara berkesinambungan.</p>
                    {{-- <a href="#" class="btn btn-primary btn-round">See our stadies</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section is-sm section-testimonial overflow-hidden" style="padding-top:0px">
	<div class="container" style="max-width:1140px">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-head mb-lg-0">
					<h5 class="section-subtitle text-blue ">Insight</h5>
					<h2 class="section-title">Our Vision<span class="text-primary">. </span></h2>
					<p class="section-desc mb-lg-0">
					To Become an Impactful Tech Company through New Breakthrough Innovation in Human Unified Communications and Interaction with Technology
					</p>
					<h2 class="section-title">Our Mision<span class="text-primary">. </span></h2>
					<p class="section-desc mb-lg-0">
					Mission We Help Companies Transform Their Business by Providing Excellent Digital Software, Hardware, and ICT Services
					</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="client-wrap">

						<img class="img_bundar" src="{{URL::to('/assets_web/Foto/IMG_6385.JPG')}}" alt="">
					<br/>
					<p class="client-quote"> Share your beautiful travel stories with bold imagery in this
						contemporary personal magazine. Featured images use the new shape dividers for extra style.
					</p>
					<div class="flex">
						<strong class=" client-name ">Ariya Totar</strong>
						<p class="client-position">CEO</p>
					</div>
				</div>
				<img class="section-shape2" src="../assets/images/bg/testimonials-bg-grad.png" alt="">
			</div>
		</div>
	</div>
</section>
<div class="section paddinf-off tmm-team">
    <section class="tmm-container">
        <div class="hgroup">
            <!-- <center><h3 class="section-title">C-LEVEL PRIMAKOM TEAM</h3><hr/></center> -->
        </div>
        <br/>
       <div class="tmm-row">
          <div class="item-circled-3">
             <div class="face-container">
                <!-- <div class="face"><img src="{{URL::to('assets_web/Foto/om_arya_bulat.png')}}" alt=""/></div> -->
                <!-- <div class="spiner"></div> -->
             </div>
             <ul class="social-icons">
                <li><a href="#"><i class="icon-facebook-squared"></i></a></li>
                <li><a href="#"><i class="icon-twitter-squared"></i></a></li>
                <li><a href="#"><i class="icon-pinterest-squared"></i></a></li>
             </ul>
             <div class="item-content">
                <!-- <h4>Ariya Totar</h4> -->
                <!-- <h5 style="color:#A0A0A0">CEO<br/><br/><br/><br/></h5> -->
             </div>
          </div>
          {{-- <div class="item-circled-3">
             <div class="face-container">
                <div class="face"><img src="{{URL::to('assets_web/Foto/om_amin_bulat.png')}}" alt=""/></div>
                <div class="spiner"></div>
             </div>
             <ul class="social-icons">
                <li><a href="#"><i class="icon-facebook-squared"></i></a></li>
                <li><a href="#"><i class="icon-twitter-squared"></i></a></li>
                <li><a href="#"><i class="icon-pinterest-squared"></i></a></li>
             </ul>
             <div class="item-content">
                <h4>Amin Setiawan</h4>
                <h5 style="color:#A0A0A0">System & Development Manager<br/><br/><br/><br/></h5>
             </div>
          </div>
          <div class="item-circled-3">
             <div class="face-container">
                <div class="face"><img src="{{URL::to('assets_web/Foto/om_grandy_bulat.png')}}" alt=""/></div>
                <div class="spiner"></div>
             </div>
             <ul class="social-icons">
                <li><a href="#"><i class="icon-facebook-squared"></i></a></li>
                <li><a href="#"><i class="icon-twitter-squared"></i></a></li>
                <li><a href="#"><i class="icon-pinterest-squared"></i></a></li>
             </ul>
             <div class="item-content">
                <h4>Grandy VP</h4>
                <h5 style="color:#A0A0A0">CHIEF Operational Manager<br/><br/><br/><br/></h5>
             </div>
          </div>
          <div class="item-circled-3">
             <div class="face-container">
                <div class="face"><img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt=""/></div>
                <div class="spiner"></div>
             </div>
             <ul class="social-icons">
                <li><a href="#"><i class="icon-facebook-squared"></i></a></li>
                <li><a href="#"><i class="icon-twitter-squared"></i></a></li>
                <li><a href="#"><i class="icon-pinterest-squared"></i></a></li>
             </ul>
             <div class="item-content">
                <h4>Agus Setiawan</h4>
                <h5 style="color:#A0A0A0">Ass. Man System & Development Manager<br/><br/><br/><br/></h5>
             </div>
          </div> --}}
          {{--<hr/>--}}
          {{--<div class="row">
            <div class="col-md-3">
                <a href="#" class="btn btn-primary" onclick="tmpteam(1)">Product Team</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-primary" onclick="tmpteam(2)">Project Team</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-primary" onclick="tmpteam(3)">Product Dev & Support</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-primary" onclick="tmpteam(4)">Support Team</a>
            </div>
          </div>
          <hr/>--}}
		{{--<style>
            html {
              box-sizing: border-box;
            }

            *, *:before, *:after {
              box-sizing: inherit;
            }

            .column {
              float: left;
              width: 16.5%;
              margin-bottom: 16px;
              padding: 0 8px;
            }

            @media screen and (max-width: 650px) {
              .column {
                width: 100%;
                display: block;
              }
            }

            .card {
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
              border-radius: 10px 10px 10px 10px;
            }

            .container {
              padding: 0 16px;
            }

            .container::after, .row::after {
              content: "";
              clear: both;
              display: table;
            }

            .title {
              color: grey;
            }
		</style>--}}
		<div id="hasil">
		{{-- <h4 class="section-title" style="font-size:20px;">Product Team</h4>
		<br/>
		<br/>
			<div class="row">
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="Jane" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>Jane Doe</h2>
						<p class="title">CEO & Founder</p>
					</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="Mike" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>Mike Ross</h2>
						<p class="title">Art Director</p>
					</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="John" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>John Doe</h2>
						<p class="title">Designer</p>
					</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="John" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>John Doe</h2>
						<p class="title">Designer</p>
					</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="John" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>John Doe</h2>
						<p class="title">Designer</p>
					</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="John" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>John Doe</h2>
						<p class="title">Designer</p>
					</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="John" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>John Doe</h2>
						<p class="title">Designer</p>
					</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="John" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>John Doe</h2>
						<p class="title">Designer</p>
					</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="John" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>John Doe</h2>
						<p class="title">Designer</p>
					</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="John" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>John Doe</h2>
						<p class="title">Designer</p>
					</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="John" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>John Doe</h2>
						<p class="title">Designer</p>
					</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
					<img src="{{URL::to('assets_web/Foto/om_agus_bulat.png')}}" alt="John" style="width:100%;border-radius: 10px 10px 10px 10px;">
					<div class="container">
						<br/>
						<h2>John Doe</h2>
						<p class="title">Designer</p>
					</div>
					</div>
				</div>
			</div> --}}
		{{--</div>--}}

       </div>
    </section>
 </div>
<meta name="csrf_token" content="{{ csrf_token() }}" />
<script type="text/javascript">
function tmpteam(idx)
{
    var request = $.ajax ({
       url : "{{ URL::to('/lihat-team-perdivisi') }}",
       data:"id_team="+idx,
       type : "get",
       dataType: "html"
   });
   $('#hasil').html('Sedang Melakukan Proses Pencarian Data...');
   request.done(function(output) {
       $('#hasil').html(output);
   });
}
</script>
@stop