@extends('layouts.app')

@section('content')
	<div class="container-fluid no-pad content event-gallery">
		<div class="container">
			<div class="row inner-content">
				<div class="col-12 inner-event-gallery">
					<nav>
					  	<div class="justify-content-center nav nav-tabs" id="nav-tab" role="tablist">
					    	<a class="font-poppins nav-item nav-link active" id="nav-event-tab" data-toggle="tab" href="#nav-event" role="tab" aria-controls="nav-event" aria-selected="true">
					    		Acara
					    	</a>
					    	<a class="font-poppins nav-item nav-link" id="nav-gallery-tab" data-toggle="tab" href="#nav-gallery" role="tab" aria-controls="nav-gallery" aria-selected="false">
					    		Galeri
					    	</a>
					    	<!-- revamp web start -->
					    	<a class="font-poppins nav-item nav-link" id="nav-tvc-tab" data-toggle="tab" href="#nav-tvc" role="tab" aria-controls="nav-tvc" aria-selected="false">
					    		TVC
					    	</a>
					    	<!-- revamp web end -->
					  	</div>
					</nav>

					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane events fade show active" id="nav-event" role="tabpanel" aria-labelledby="nav-event-tab">
							<div class="row inner-tab-pane">
								@foreach($data['result'] as $row)

									<div class="col-12 col-md-3 event-item">
										<div class="col-12 inner-event-item">
											<div class="col-12 image-area">
												@if( count(explode('http',$row->tmp_link)) > 1 )
												    <a href="{{ $row->tmp_link }}" target="_blank">
												@else
												    <a href="{{ asset('/generasi-masa-kini/detail') }}/{{ $row->tmp_link }}">
												@endif
													<img class="w-100" src="{{ assets_storage($row->tmp_image) }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													@if( count(explode('http',$row->tmp_link)) > 1 )
                                                        <a style="width: 100%;" href="{{ $row->tmp_link }}" target="_blank">
													@else
                                                        <a style="width: 100%;" href="{{ asset('/generasi-masa-kini/detail') }}/{{ $row->tmp_link }}">
													@endif

														<div class="font-poppins col-12 no-pad text">
															<p>{{ strtoupper($row->tmp_type) }}</p>
															<h5>{{ $row->tmp_title }}</h5>
															<hr>
															<p><i>{{ date('d F Y', strtotime($row->tmp_date)) }}</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-12 col-sm-3 col-md-12"></div>

															<div class="col-4 col-sm-2 col-md-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4 col-sm-2 col-md-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4 col-sm-2 col-md-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																</a>
															</div>

															<div class="col-12 col-sm-3 col-md-12"></div>
														</div>
													</div>
													<div class="col-2"></div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>

						<div class="tab-pane gallery fade" id="nav-gallery" role="tabpanel" aria-labelledby="nav-gallery-tab">
							<div class="row inner-tab-pane">
								<div class="col-12 outer-slider-for">
									<div class="row slider-for images">
										@foreach($data['gallery'] as $row)
											<div class="col-12 slider-for-item">
												<img class="w-100" src="{{ assets_storage($row->image_cover) }}" />
											</div>
										@endforeach
									</div>
								</div>
								<div class="col-12 outer-slider-nav">
									<div class="row slider-nav">
										@foreach($data['gallery'] as $row)
											<div class="col-6 col-3 slider-nav-item">
												<img class="w-100" src="{{ assets_storage($row->image_cover) }}" />
											</div>
										@endforeach
									</div>
								</div>
								<div class="col-12 outer-slider-for">
									<div class="row slider-for text">
										@foreach($data['gallery'] as $row)
											<div class="font-poppins col-12 slider-for-item">
												<h5>{{ $row->title }}</h5>
												<p>
													{!! $row->content !!}
												</p>
											</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>

						<!-- Revamp Start -->
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane events fade show" id="nav-tvc" role="tabpanel" aria-labelledby="nav-tvc-tab">
							<div class="row inner-tab-pane">
								@foreach($data['tvc'] as $row)

									<div class="col-12 col-md-3 event-item">
										<div class="col-12 inner-event-item">
											<div class="col-12 image-area">
												@if( count(explode('http',$row->tmp_link)) > 1 )
												    <a href="{{ $row->tmp_link }}" target="_blank">
												@else
                                                    <a href="{{ asset('/generasi-masa-kini/detail') }}/{{ $row->tmp_link }}">
												@endif
													<img class="w-100" src="{{ assets_storage($row->tmp_image) }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													@if( count(explode('http',$row->tmp_link)) > 1 )
													<a style="width: 100%;" href="{{ $row->tmp_link }}" target="_blank">
													@else
													<a style="width: 100%;" href="{{ asset('/generasi-masa-kini/detail') }}/{{ $row->tmp_link }}">
													@endif

														<div class="font-poppins col-12 no-pad text">
															<p>{{ strtoupper($row->tmp_type) }}</p>
															<h5>{{ $row->tmp_title }}</h5>
															<hr>
															<p><i>{{ date('d F Y', strtotime($row->tmp_date)) }}</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-12 col-sm-3 col-md-12"></div>

															<div class="col-4 col-sm-2 col-md-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4 col-sm-2 col-md-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4 col-sm-2 col-md-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																</a>
															</div>

															<div class="col-12 col-sm-3 col-md-12"></div>
														</div>
													</div>
													<div class="col-2"></div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>

						<!-- Revamp End -->

					</div>
				</div>
			</div>

			<img class="side-bg-right fix-bg" width="170px" src="{{ asset('/images/object/cloud-right-5.png') }}" />
			<img class="side-bg-left fix-bg" width="260px" src="{{ asset('/images/object/cloud-left-5.png') }}" />
		</div>

		<img class="fix-bg foot-bg" width="35%" src="{{ asset('/images/object/img-foot-1.png') }}" >
	</div>
@endsection
