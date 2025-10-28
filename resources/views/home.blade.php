@extends('layouts.app')

@section('titlebar','Hidup Banyak Rasa!')

@section('content')

    <!-- Revamp Start GDGC Banner -->
		<!-- Modal GDGC -->
		<!--<div class="modal fade" id="bannerGDGC" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">-->


		<!--  <div class="modal-dialog modal-dialog-centered mobile-width" role="document" style="max-width:50rem; margin:auto;">-->
		<!--    <div class="modal-content">-->

		<!--      	<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="right:0.2rem; position: absolute;">-->
		<!--          <span aria-hidden="true">&times;</span>-->
		<!--        </button>-->
		<!--        <a href="https://gaulcreation.hidupbanyakrasa.com/2023" target="_blank">-->
		<!--        	<img src="{{ asset('images/uploads/banner-gdgc2023d.jpeg') }}" class="desktop" style="width:100%;">-->
		<!--        	<img src="{{ asset('images/uploads/banner-gdgc2023m.jpeg') }}" class="mobile" style="width:100%;">-->

		<!--        </a>-->
		<!--    </div>-->
		<!--  </div>-->
		<!--</div>-->

		<!--<style type="text/css">.modal-lah {-->
		<!--        max-width: 90dvw;-->
		<!--        height: 100dvh; -->
		<!--        margin:auto;-->
		<!--    }-->

		<!--    @media screen and (min-width: 640px) {-->
  <!--           .modal-lah {-->
		<!--        max-width: 80rem;-->
  <!--           }-->
  <!--          }-->
  <!--      </style>-->
  <!--      <div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="bannerGDGC" role="dialog" tabindex="-1">-->
  <!--          <div class="modal-dialog modal-lah modal-dialog-centered" role="document" style="">-->
  <!--              <div class="modal-content">-->
  <!--                  <button aria-label="Close" class="close" data-dismiss="modal" style="right:0.2rem; position: absolute;" type="button"><span aria-hidden="true">&times;</span></button>-->
  <!--                  <a href="https://hidupbanyakrasa.com/generasi-masa-kini/detail/cuma-tukerin-good-day-edisi-pok--mon-bisa-fun-trip-ke-singapura-gratis--" target="_blank">-->
  <!--                      <img class="desktop" src="https://hidupbanyakrasa.com/demo-popup-home-page_files/2A_Banner%20GDGH%202024_1600x900px.jpg" style="width:100%;" />-->
  <!--                      <img class="mobile" src="https://hidupbanyakrasa.com/demo-popup-home-page_files/2A_Banner%20GDGH%202024_1600x900px.jpg" style="width:100%;" />-->
  <!--                  </a>-->
  <!--              </div>-->
  <!--          </div>-->
  <!--      </div>-->

	<!-- Revamp End -->

<div class="container-fluid no-pad content home desktop">
	<div class="container-fluid no-gap inner-content layer-1">
		<img class="plate-1" src="{{ asset('images/plate-1-b.png') }}" />

		<div class="inner-plate-1">
			<div class="container no-pad">
				<div class="inner-container col-12">
					<!-- <a href="javascript:void(0);"> -->
						<div class="menu-0">
							<img class="menu-0-1" src="{{ asset('images/ext/ext-5.png') }}" />
							<img class="menu-0-2" src="{{ asset('images/ext/ext-6.png') }}" />
							<img class="menu-0-3" src="{{ asset('images/ext/ext-6.png') }}" />
							<img class="menu-0-4" src="{{ asset('images/ext/ext-6.png') }}" />
							<img class="menu-0-5" src="{{ asset('images/ext/ext-7.png') }}" />
						</div>
					<!-- </a> -->

					<!-- <a href="javascript:void(0);"> -->
						<div class="menu-1">
							<a href="{{ asset('/generasi-masa-kini') }}">
							    <!-- Revamp Start -->
								<img class="menu-1-1" src="{{ asset('images/menu-1/menu-1-1.png') }}" />
								<!-- <img class="menu-1-2" src="{{ asset('images/menu-1/menu-1-2.png') }}" /> -->
								<img class="menu-1-2-1" src="{{ asset('images/ext/globe.gif') }}" />
								<img class="menu-1-3" src="{{ asset('images/menu-1/menu-1-3.png') }}" />
								<img class="menu-1-4" src="{{ asset('images/menu-1/menu-1-4.png') }}" />
								<!--<img class="menu-1-5" src="{{ asset('images/menu-1/menu-1-5.png') }}" />-->
								<img class="menu-1-5" src="{{ asset('images/menu-1/menu-1-5-r.png') }}" />
								<img class="menu-1-6" src="{{ asset('images/menu-1/menu-1-6-2.png') }}" />
								<img class="menu-1-7" src="{{ asset('images/menu-1/menu-1-7-2.png') }}" />
								<img class="menu-1-7-1" src="{{ asset('images/ext/skateboard.gif') }}" />
								<img class="menu-1-7-2" src="{{ asset('images/ext/orang03.gif') }}" />
								<img class="menu-1-8" src="{{ asset('images/menu-1/menu-1-8.png') }}" />
								<img class="menu-1-9" src="{{ asset('images/menu-1/menu-1-9-1.png') }}" />
								<img class="menu-1-9-1" src="{{ asset('images/ext/segway.gif') }}" />
								<img class="menu-1-10" src="{{ asset('images/menu-1/menu-1-10-1.png') }}" />
								<img class="menu-1-10-1" src="{{ asset('images/ext/orang02.gif') }}" />
								<!--<img class="menu-1-11" src="{{ asset('images/menu-1/menu-1-11-3.png') }}" />-->
								<img class="menu-1-11" src="{{ asset('images/menu-1/menu-1-11-3-r.png') }}" />
								<img class="menu-1-11-2" src="{{ asset('images/ext/drone.gif') }}" />
								<!-- Revamp End -->
							</a>
							{{--<a href="https://www.youtube.com/watch?v=1icoXZhQavc" target="_blank">--}}
							<a href="https://www.youtube.com/watch?v=sm42XuB2O2E" target="_blank">
								<img class="menu-1-11-1" src="{{ asset('images/ext/clicktoseevideos.gif') }}" />
							</a>
							<a href="{{ asset('/generasi-masa-kini') }}">
								<img class="menu-1-12" src="{{ asset('images/menu-1/menu-1-12.png') }}" />
							</a>
						</div>
					<!-- </a> -->

					<a href="{{ asset('/cari-terus-rasamu') }}">
						<div class="menu-2">
						    <!-- Revamp Start -->
							<!--<img class="menu-2-1" src="{{ asset('images/menu-2/menu-2-1.png') }}" />-->
							<img class="menu-2-1" src="{{ asset('images/menu-2/menu-2-1-r.png') }}" />
							<img class="menu-2-2" src="{{ asset('images/menu-2/menu-2-2-1.png') }}" />
							<img class="menu-2-3" src="{{ asset('images/menu-2/menu-2-3-1.png') }}" />
							<img class="menu-2-3-1" src="{{ asset('images/ext/koki2.gif') }}" />
							<!--<img class="menu-2-4" src="{{ asset('images/menu-2/menu-2-4.png') }}" />-->
							<img class="menu-2-4" src="{{ asset('images/menu-2/menu-2-4-r.png') }}" />
							<img class="menu-2-5" src="{{ asset('images/menu-2/menu-2-5-2.png') }}" />
							<img class="menu-2-6" src="{{ asset('images/menu-2/menu-2-6.png') }}" />
							<img class="menu-2-7" src="{{ asset('images/menu-2/menu-2-7.png') }}" />
							<img class="menu-2-8" src="{{ asset('images/menu-2/menu-2-8.png') }}" />
							<img class="menu-2-9" src="{{ asset('images/menu-2/menu-2-9-1.png') }}" />
							<img class="menu-2-9-1" src="{{ asset('images/ext/koki01.gif') }}" />
							<img class="menu-2-10" src="{{ asset('images/menu-2/menu-2-10-1.png') }}" />
							<img class="menu-2-10-1" src="{{ asset('images/ext/waterstream.gif') }}" />
							<img class="menu-2-11" src="{{ asset('images/menu-2/menu-2-11-1-a.png') }}" />
							<!--<img class="menu-2-11-1" src="{{ asset('images/ext/airmancu-1.gif') }}" />-->
							<img class="menu-2-11-1" src="{{ asset('images/ext/airmancu-r.gif') }}" />
							<img class="menu-2-12" src="{{ asset('images/menu-2/menu-2-12.png') }}" />
							<img class="menu-2-13" src="{{ asset('images/ext/ext-4-1.png') }}" />
							<!-- <img class="menu-2-13-1" src="{{ asset('images/ext/kapal.gif') }}" /> -->
							<!-- Revamp End -->
						</div>
					</a>

					<a href="{{ asset('/products') }}">
						<div class="menu-3">
						    <!-- Revamp Start -->
						    <!--<img class="menu-3-1" src="{{ asset('images/menu-3/menu-3-1-1.png') }}" />-->
							<img class="menu-3-1" src="{{ asset('images/menu-3/menu-3-1-1-r.png') }}" />
							<!--<img class="menu-3-2" src="{{ asset('images/menu-3/menu-3-2-1.png') }}" />-->
							<img class="menu-3-2" src="{{ asset('images/menu-3/menu-3-2-1-r3.png') }}" />
							<img class="menu-3-3" src="{{ asset('images/menu-3/menu-3-3-2.png') }}" />
							<img class="menu-3-3-1" src="{{ asset('images/ext/packgin.gif') }}" />
							<img class="menu-3-3-2" src="{{ asset('images/ext/packgin.gif') }}" />
							<img class="menu-3-4" src="{{ asset('images/menu-3/menu-3-4-2-r.png') }}" />
							<img class="menu-3-4-1" src="{{ asset('images/ext/pabrik1.gif') }}" />
							<img class="menu-3-4-2" src="{{ asset('images/ext/pabrik2-r.gif') }}" />
							<img class="menu-3-4-3" src="{{ asset('images/ext/tungkubijikopi.gif') }}" />
							<img class="menu-3-5" src="{{ asset('images/menu-3/menu-3-5-1.png') }}" />
							<img class="menu-3-6" src="{{ asset('images/menu-3/menu-3-6.png') }}" />
							<img class="menu-3-7" src="{{ asset('images/menu-3/menu-3-7-1-r.png') }}" />
							<img class="menu-3-8" src="{{ asset('images/menu-3/menu-3-8-r1.png') }}" />
							<!-- <img class="menu-3-8-1" src="{{ asset('images/ext/orang01.gif') }}" /> -->
							<img class="menu-3-9" src="{{ asset('images/menu-3/menu-3-9.png') }}" />
							<img class="menu-3-10" src="{{ asset('images/menu-3/menu-3-10.png') }}" />
							<img class="menu-3-11" src="{{ asset('images/menu-3/menu-3-11.png') }}" />
							<img class="menu-3-12" src="{{ asset('images/menu-3/menu-3-12.png') }}" />
							<img class="menu-3-13" src="{{ asset('images/menu-3/menu-3-13-1.png') }}" />
							<img class="menu-3-13-1" src="{{ asset('images/ext/mancing.gif') }}" />
							<img class="menu-3-14" src="{{ asset('images/menu-3/menu-3-14.png') }}" />
							<!-- Revamp End -->
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid no-pad inner-content layer-2">
		<img class="plate-2 way" src="{{ asset('images/ext/ext-1.png') }}" />

		<div class="inner-plate-2">

			<div class="container no-pad">

				<div class="inner-container col-12">
					<div class="menu-7">
					    <!-- Revamp Start -->
						<img class="menu-7-1" src="{{ asset('images/menu-7/menu-7-1.png') }}" />
						<!--<img class="menu-7-2" src="{{ asset('images/menu-7/menu-7-2-2.png') }}" />-->
						<img class="menu-7-2" src="{{ asset('images/menu-7/menu-7-2-2-r.png') }}" />
						<img class="menu-7-2-1" src="{{ asset('images/ext/smoke.gif') }}" />
						<img class="menu-7-3" src="{{ asset('images/menu-7/menu-7-3-2.png') }}" />
						<img class="menu-7-3-1" src="{{ asset('images/ext/orang01.gif') }}" />
						<img class="menu-7-4" src="{{ asset('images/menu-7/menu-7-4.png') }}" />
						<img class="menu-7-5" src="{{ asset('images/menu-7/menu-7-5-1.png') }}" />
						<img class="menu-7-5-1" src="{{ asset('images/ext/api1.gif') }}" />
						<!--<img class="menu-7-6" src="{{ asset('images/menu-7/menu-7-6-1.png') }}" />-->
						<img class="menu-7-6" src="{{ asset('images/menu-7/menu-7-6-1-r.png') }}" />
						<img class="menu-7-7" src="{{ asset('images/menu-7/menu-7-7.png') }}" />

						<img class="menu-7-8" src="{{ asset('images/ext/ext-2.png') }}" />
						<img class="menu-7-9" src="{{ asset('images/ext/ext-3.png') }}" />
						<!-- Revamp End -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid no-pad inner-content layer-3">
		<img class="plate-3" src="{{ asset('images/plate-2-b-2.png') }}" />

		<div class="inner-plate-3">

			<div class="container no-pad">
				<div class="inner-container col-12">
					<a href="javascript:void(0);">
						<div class="menu-4">
						    <!-- Revamp Start -->
							<img class="menu-4-1" src="{{ asset('images/menu-4/menu-4-1.png') }}" />
							<img class="menu-4-2" src="{{ asset('images/menu-4/menu-4-2.png') }}" />
							<!--<img class="menu-4-3" src="{{ asset('images/menu-4/menu-4-3-2.png') }}" />-->
							<img class="menu-4-3" src="{{ asset('images/menu-4/menu-4-3-2-r.png') }}" />
							<img class="menu-4-3-1" src="{{ asset('images/ext/smoke.gif') }}" width="45%"/>
							<img class="menu-4-4" src="{{ asset('images/menu-4/menu-4-4-1.png') }}" />
							<img class="menu-4-4-1" src="{{ asset('images/ext/bendera.gif') }}" />
							<img class="menu-4-4-2" src="{{ asset('images/ext/bendera.gif') }}" />
							<img class="menu-4-4-3" src="{{ asset('images/ext/bendera.gif') }}" />
							<img class="menu-4-4-4" src="{{ asset('images/ext/bendera.gif') }}" />
							<img class="menu-4-4-5" src="{{ asset('images/ext/bus-1.gif') }}" />
							<img class="menu-4-5" src="{{ asset('images/menu-4/menu-4-5.png') }}" />
							<!-- Revamp End -->
						</div>
					</a>

					<a href="{{ asset('/horoscope') }}">
						<div class="menu-5">
							<img class="menu-5-1" src="{{ asset('images/menu-5/menu-5-1-1.png') }}" />
							<img class="menu-5-1-1" src="{{ asset('images/ext/blink.gif') }}" width="25%"/>
							<img class="menu-5-2" src="{{ asset('images/menu-5/menu-5-2.png') }}" />
							<img class="menu-5-3" src="{{ asset('images/menu-5/menu-5-3-1-r.png') }}" />
							<!-- <img class="menu-5-4" src="{{ asset('images/menu-5/menu-5-4.png') }}" /> -->
							<img class="menu-5-4-1" src="{{ asset('images/ext/blink.gif') }}" width="25%"/>
							<img class="menu-5-5" src="{{ asset('images/menu-5/menu-5-5-1-r2.png') }}" />
							<img class="menu-5-6" src="{{ asset('images/menu-5/menu-5-6-1.png') }}" />
							<img class="menu-5-6-1" src="{{ asset('images/ext/blink.gif') }}" width="25%"/>
							<img class="menu-5-7-1" src="{{ asset('images/ext/aura-1.png') }}" />
							<img class="menu-5-7-2" src="{{ asset('images/ext/aura-2.png') }}" />
							<img class="menu-5-7-3" src="{{ asset('images/ext/aura-3.png') }}" />
							<img class="menu-5-7-4" src="{{ asset('images/ext/peramal.gif') }}" />
							<img class="menu-5-8" src="{{ asset('images/menu-5/menu-5-8.png') }}" />
							<img class="menu-5-9" src="{{ asset('images/menu-5/menu-5-9-1-r2.png') }}" />
							<img class="menu-5-10" src="{{ asset('images/menu-5/menu-5-10-1.png') }}" />
							<img class="menu-5-10-1" src="{{ asset('images/ext/blink.gif') }}" width="25%"/>
						</div>
					</a>

					<a href="{{ asset('/events-n-gallery') }}">
						<div class="menu-6">
							<img class="menu-6-1" src="{{ asset('images/menu-6/menu-6-1.png') }}" />
							<img class="menu-6-2" src="{{ asset('images/menu-6/menu-6-2-2-r.png') }}" />
							<img class="menu-6-2-1" src="{{ asset('images/ext/lampu.gif') }}" />
							<img class="menu-6-2-2" src="{{ asset('images/ext/music.gif') }}" width="20%"/>
							<img class="menu-6-3" src="{{ asset('images/menu-6/menu-6-3-2-r3.png') }}" />
							<!--<img class="menu-6-3-1" src="{{ asset('images/ext/KONSER.gif') }}" />-->
							<img class="menu-6-3-1" src="{{ asset('images/menu-6/konser.png') }}" />
							<img class="menu-6-4" src="{{ asset('images/menu-6/menu-6-4-2-r2.png') }}" />
							<img class="menu-6-5" src="{{ asset('images/menu-6/menu-6-5.png') }}" />
							<img class="menu-6-6" src="{{ asset('images/menu-6/menu-6-6.png') }}" />
							<img class="menu-6-7" src="{{ asset('images/menu-6/menu-6-7.png') }}" />
							<!-- <div class="flash" style="top: 5%; right: 30%; background-image: radial-gradient(white, rgba(0,0,0,0), rgba(0,0,0,0)); border-radius: 100%; width: 200px; height: 200px; position: absolute; z-index: 5; animation: flash 5s infinite;"></div> -->
						</div>
					</a>

					<div class="menu-8">
						<img class="menu-8-1" src="{{ asset('images/menu-8/menu-8-1-1.png') }}" />
						<img class="menu-8-2" src="{{ asset('images/menu-8/menu-8-2.png') }}" />
						<img class="menu-8-3" src="{{ asset('images/menu-8/menu-8-3.png') }}" />
						<img class="menu-8-3-1" src="{{ asset('images/menu-8/menu-8-3.png') }}" />
						<img class="menu-8-3-2" src="{{ asset('images/menu-8/menu-8-3.png') }}" />
						<img class="menu-8-4" src="{{ asset('images/menu-8/menu-8-4.png') }}" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid no-pad content home mobile">
	<div class="container-fluid no-pad inner-content">
		<div class="row slider-no-dots" data-autoplay="true">
			<div class="col-12">
				{{--<a href="{{ asset('/generasi-masa-kini') }}">--}}
				<a href="https://www.youtube.com/watch?v=a52dOL4kB00" target="_blank">
					<img src="{{ asset('images/object/mobile/home-mobile-1-2-r.png') }}" width="100%" />
				</a>
			</div>
			<div class="col-12">
				<a href="{{ asset('/cari-terus-rasamu') }}">
					<img src="{{ asset('images/object/mobile/home-mobile-2-1-r.png') }}" width="100%" />
				</a>
			</div>
			<div class="col-12">
				<a href="{{ asset('/products') }}">
					<img src="{{ asset('images/object/mobile/home-mobile-3-1-r.png') }}" width="100%" />
				</a>
			</div>
			<div class="col-12">
				<a href="{{ asset('/horoscope') }}">
					<img src="{{ asset('images/object/mobile/home-mobile-4-1-r.png') }}" width="100%" />
				</a>
			</div>
			<div class="col-12">
				<a href="{{ asset('/events-n-gallery') }}">
					<img src="{{ asset('images/object/mobile/home-mobile-5-1-r.png') }}" width="100%" />
				</a>
			</div>
		</div>
	</div>
</div>
@endsection
