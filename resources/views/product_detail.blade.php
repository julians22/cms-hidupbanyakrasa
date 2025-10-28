@extends('layouts.app')

@section('content')
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<div class="container-fluid no-pad content products" style="display: flex; justify-content: center;">
		<div class="container inner-content products-detail mobile-revamp-pd">
			<div class="row slider-section slider-no-dots">
				@foreach($products as $row)
                    <!-- Revamp Start -->

					<div id="{{ $row->slug }}" class="col-12 slider-item">
						<div class="row inner-slider-item">
							<div class="col-12 col-md-7 image-area">
								<img class="w-100" src="{{ assets_storage($row->image_product) }}" />
							</div>
							<div class="col-12 col-md-5 caption-area">
								<div class="product-title-revamp-section">
									<img class="product-title-revamp" src="{{ assets_storage($row->image_text) }}"/>
								</div>


								<div class="product-desc-revamp">
									{!! $row->description !!}
								</div>

								<div class="product-tvc-revamp">
									<a href="" class="font-nav-r btn btn-primary btn-gd" href="javascript:void(0);" onclick="loadTVC('{{ $row->tvc }}');" data-toggle="modal" data-target=".tvc-modal">
										Lihat TVC
									</a>
								</div>

							</div>

						</div>
					</div>

                    <!-- Revamp End -->
				@endforeach

			</div>
			<!-- Revamp start -->
			<div class="inner-content products-detail carousel-revamp">
				<div class="slider-section slick-slider carousel-revamp-section">

				    <div class="other-products-sections">
					    <div class="title-section-rev">
						    <div class="outline-revamp">
							    PRODUK YANG MUNGKIN KAMU SUKA
						    </div>
						    <div class="front-revamp">
							    PRODUK YANG MUNGKIN KAMU SUKA
						    </div>
					    </div>
					    <div class="other-products">
						    @foreach($recommended as $d)
		                    <div class="recommended-products-slider">
		                	    <a href="{{ route('products.type', ['type' => $d->type]) }}#{{ $d->slug }}">
		                		    <img class="" src="{{ assets_storage($d->image_product) }}">
		                	    </a>
		                    </div>
		                    @endforeach
		                </div>
		            </div>

		            <div class="other-products-sections">
		        	    <div class="title-section-rev">
						    <div class="outline-revamp">
						    	RESEP YANG MUNGKIN KAMU SUKA
						    </div>
						    <div class="front-revamp">
							    RESEP YANG MUNGKIN KAMU SUKA
						    </div>
					    </div>
					    <div class="receipts">
		                    @foreach($recipes as $r)
		                    <div class="recommended-products-slider" style="aspect-ratio: 4/3;">
		                	    <a href="{{url('/cari-terus-rasamu')}}">
		                		    <img src="{{ assets_storage($r->photo) }}" class="img-fluid">
		                	    </a>
		                    </div>
		                    @endforeach
		                </div>
		            </div>

			    </div>
		    </div>
	        <!-- Revamp end -->
		</div>
	</div>


		</div>
	</div>

	<div class="modal modal-gd fade tvc-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">
		      	<div class="modal-body" style="text-align: center;">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>

		        	<div class="row">
		        		<div class="col-12 iframe">
				        	<iframe style="margin: 0 auto;" width="727" height="409" src="https://www.youtube.com/embed/PzjGt9N3fuM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		        		</div>
		        	</div>
		      	</div>
	    	</div>
	  	</div>
	</div>
@endsection
