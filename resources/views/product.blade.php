@extends('layouts.app')

@section('content')
	<div class="container-fluid no-pad content products">
		<div class="container inner-content product-main">
			<div class="row inner-product-main">
			    <!-- Revamp Start -->
				<div class="col-12 col-md-5 product-item">
					<img class="w-100 bg" src="{{ asset('/images/object/produk-botol-bg-r.png') }}" style="margin-top: 3rem;" />

					<div class="front">
						<a href="{{ route('products.type', ['type' => 'botol']) }}">
							<img class="bottle" src="{{ asset('/images/object/produk-botol-front-r.png') }}" />
						</a>

						<div class="inner-front">
							<a class="font-nav-r btn btn-gd" href="{{ route('products.type', ['type' => 'botol']) }}">
								BOTOL
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-5 product-item">
					<img class="w-100 bg" src="{{ asset('/images/object/produk-sachet-bg-r.png') }}" style="margin-top: 3rem;"/>

					<div class="front">
						<a href="{{ route('products.type', ['type' => 'sachet']) }}">
							<img class="sachet" src="{{ asset('/images/object/produk-sachet-front-r.png') }}" />
						</a>

						<div class="inner-front">
							<a class="font-nav-r btn btn-gd" href="{{ route('products.type', ['type' => 'sachet']) }}">
								SACHET
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 cloud">
					<div class="col-12 inner-cloud">
						<img class="cloud-item cloud-1" src="{{ asset('/images/object/produk-cloud-1.png') }}" />
						<img class="cloud-item cloud-2" src="{{ asset('/images/object/produk-cloud-2.png') }}" />
						<img class="cloud-item cloud-3" src="{{ asset('/images/object/produk-cloud-3.png') }}" />
						<img class="cloud-item cloud-4" src="{{ asset('/images/object/produk-cloud-4.png') }}" />
					</div>
				</div>
			</div>
			<div class="row inner-product-main-desc">
				<div class="col-12" align="center">
					<h5 class="font-poppins red">KLIK PADA MASING-MASING PRODUK</h5>
					<p class="font-poppins">
						untuk melihat langsung detail deskripsi!
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection
