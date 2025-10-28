@extends('layouts.app')

@section('content')
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<div class="container-fluid no-pad content horoscope">
		<div class="container inner-content">
			<div class="row inner-horoscope">
				<div class="col-12 horoscope-list">
					<div class="row inner-horoscope-list">
						<div class="col-12 col-md-7 no-pad horoscope-item">
							<img class="w-100" style="z-index: -1;" src="{{ asset('/images/object/horoscope-land-0.png') }}" />
							<img class="w-100" style="z-index: 1; position: absolute; left: 0; top: 0;" src="{{ asset('/images/object/horoscope-land-1-b.png') }}" />

							<div class="outer-item" style="z-index: 0;">
								<div class="col-12 no-pad item">
									<div class="wheel">
										<img src="{{ asset('/images/object/horoscope-wheel-2.png') }}">
									</div>
								</div>
							</div>

							<div class="outer-item" style="z-index: 2;">
								<div class="col-12 no-pad item">
									<div class="h-1 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="capricorn" data-date="22 Desember - 19 Januari" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-1.png') }}" data-toggle="tooltip" title="Capricorn">
										</a>
									</div>
									<div class="h-2 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="aquarius" data-date="20 Januari - 18 Februari" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-8.png') }}" data-toggle="tooltip" title="Aquarius">
										</a>
									</div>
									<div class="h-3 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="pisces" data-date="19 Februari - 20 Maret" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-6.png') }}" data-toggle="tooltip" title="Pisces">
										</a>
									</div>
									<div class="h-4 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="aries" data-date="21 Maret - 19 April" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-11.png') }}" data-toggle="tooltip" title="Aries">
										</a>
									</div>
									<div class="h-5 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="taurus" data-date="20 April - 20 Mei" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-3.png') }}" data-toggle="tooltip" title="Taurus">
										</a>
									</div>
									<div class="h-6 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="gemini" data-date="21 Mei - 21 Juni" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-4.png') }}" data-toggle="tooltip" title="Gemini">
										</a>
									</div>
									<div class="h-7 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="cancer" data-date="22 Juni - 22 Juli" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-7.png') }}" data-toggle="tooltip" title="Cancer">
										</a>
									</div>
									<div class="h-8 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="leo" data-date="23 Juli - 22 Agustus" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-12.png') }}" data-toggle="tooltip" title="Leo">
										</a>
									</div>
									<div class="h-9 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="virgo" data-date="23 Agustus - 22 September" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-5.png') }}" data-toggle="tooltip" title="Virgo">
										</a>
									</div>
									<div class="h-10 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="libra" data-date="23 September - 22 Oktober" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-9.png') }}" data-toggle="tooltip" title="Libra">
										</a>
									</div>
									<div class="h-11 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="scorpio" data-date="23 Oktober - 21 November" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-2.png') }}" data-toggle="tooltip" title="Scorpio">
										</a>
									</div>
									<div class="h-12 icon">
										<a class="anchor-zodiak" href="javascript:void(0);" data-id="sagitarius" data-date="22 November - 21 Desember" data-toggle="html">
											<img src="{{ asset('/images/object/zodiak-10.png') }}" data-toggle="tooltip" title="Sagitarius">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-5 horoscope-detail">
							<div class="col-12 no-pad title">
				        		<font>Capricorn</font>
				        		<div class="outline">
					        		Capricorn
					        	</div>

					        	<div class="front">
					        		Capricorn
					        	</div>
			        		</div>
			        		<div class="col-12 no-pad date">
			        			<p class="red">22 Desember - 19 Januari</p>
			        		</div>

							<div class="card">
							  	<div class="card-header">
							    	Umum
							  	</div>
							  	<div class="card-body">
							    	<p class="card-text general">
							    		{!! $horoscope_first->general !!}
							    		<!-- Kuy pikirin dulu sebelum kasih pendapat, jangan sampai bikin orang lain jadi tersinggung. -->

							    	</p>
							  	</div>
							</div>

							<div class="card">
							  	<div class="card-header">
							    	Percintaan
							  	</div>
							  	<div class="card-body">
							    	<p class="card-text love">
							    		{!! $horoscope_first->love !!}
							    		<!-- Lagi adaptasi dengan status baru ya? Dibawa santai aja lagi. -->

							    	</p>
							  	</div>
							</div>

							<div class="card">
							  	<div class="card-header">
							    	Keuangan
							  	</div>
							  	<div class="card-body">
							    	<p class="card-text money">
							    		{!! $horoscope_first->money !!}
							    		<!-- Bawa bekel deh, siapa tau jadi lebih hemat. -->

							    	</p>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
