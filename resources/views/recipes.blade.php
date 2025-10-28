@extends('layouts.app')

@section('content')
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<div class="container-fluid no-pad content recipes">
		<div class="container">
			<div class="row inner-content">
				<div class="col-12 inner-recipes">
					<nav>
						<div class="col-12 container-toggle mobile no-pad">
							<a href="javascript:void(0);" onclick="clickToggleRecipe()">
								<div class="col-12 btn-toggle-tab" align="center">
									Pilih Resep
								</div>
							</a>
						</div>

					  	<div class="nav nav-tabs tabs-recipe hide" id="nav-tab" role="tablist">
					    	<a class="nav-item nav-link active" onclick="$('.tabs-recipe').addClass('hide');" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">
					    		Semua Resep
					    	</a>
					    	<a class="nav-item nav-link" onclick="$('.tabs-recipe').addClass('hide');" id="nav-foods-tab" data-toggle="tab" href="#nav-foods" role="tab" aria-controls="nav-foods" aria-selected="false">
					    		Makanan
					    	</a>
					    	<a class="nav-item nav-link" onclick="$('.tabs-recipe').addClass('hide');" id="nav-drinks-tab" data-toggle="tab" href="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">
					    		Minuman
					    	</a>
					  	</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<style type="text/css">
							.share-area a:hover img{
								opacity: 0.5;
							}
						</style>

						<div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
							<div class="row inner-tab-pane slider-no-dots-arrow">
								@for ($i = 0; $i < $page_all; $i++)
									<div class="col-12">
										<div class="row">
											<div class="col-12 col-md-6 recipes-list">
												<div class="col-12 inner-recipes-list">

													@foreach($recipes as $row)
														@if($loop->index >= $i*6 && $loop->index < ($i+($i+1))*3)
															<div class="col-12 recipes-item">
																<div class="row inner-recipes-item">
																	<div class="col-12 col-sm-6 images" align="center" style="position: relative;">
																		<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modalx" data-slug="{{ $row->slug }}" >
																			<img class="w-100" src="{{ assets_storage($row->photo) }}" />
																		</a>

																		<!-- <a href="https://linktr.ee/GoodDayID" class="mt-1 btn btn-primary btn-gd" target="_blank" style="margin: 0 auto;">
																			Buy Now
																		</a> -->
																	</div>
																	<div class="col-12 col-sm-6 caption">
																		<div class="text-area col-12">
																			<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modalx" data-slug="{{ $row->slug }}" >
																				<p class="no-gap">
																					@if($row->category == '1')
																					 	MAKANAN
																					@else
																					 	Minuman
																					@endif
																				</p>
																				<h5>
																				 	{{ $row->title }}
																				</h5>
																				<hr>
																				<p>
																				 	<i>{{ date('d F Y',strtotime($row->publish_date)) }}</i>
																				</p>
																			</a>
																			<!-- <a href="https://linktr.ee/GoodDayID" class="mb-2 btn btn-primary btn-gd" target="_blank" style="color: white;">
																				Buy Now
																			</a> -->
																		</div>

																		<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																			<div class="row inner-share-area">
																				<div class="col-12 col-sm-4" style="padding-right: 0;">
																					<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																					</a>
																					<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																						Buy Now
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);" onclick="postToFeed('{{ asset('/cari-terus-rasamu') }}/{{ $row->slug }}');">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="http://www.twitter.com/intent/tweet?url={{ asset('/cari-terus-rasamu') }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);" onclick="crossPlatformShare('{{ asset('/cari-terus-rasamu') }}','urlcopied-1-{{ $row->id }}')">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																					</a>
																				</div>
																				<div class="col-12 col-sm-3 col-md-12"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														@endif
													@endforeach

													<!-- ========================= -->

														@if($i > 0)
														<div class="ml-auto col-3 arrow desktop">
														@else
														<div class="hidden ml-auto col-3 arrow desktop">
														@endif
															<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickPrev')">
																<img class="w-100" src="{{ asset('/images/object/cari-tahu-prev.png') }}" />
															</a>
														</div>

														<div class="chain desktop"></div>
												</div>
											</div>

											<div class="col-12 col-md-6 recipes-list">
												<div class="col-12 inner-recipes-list">
													@if(($i+($i+1))*3 == count($recipes))
														@for($x=0; $x < 3; $x++)
															<div class="hidden col-12 recipes-item">
																<div class="row inner-recipes-item">
																	<div class="col-12 col-sm-6 images">
																		<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																			<img class="w-100" src="{{ asset('/images/object/thumbnail-recipes-1') }}.jpg" />
																		</a>
																	</div>
																	<div class="col-12 col-sm-6 caption">
																		<div class="text-area col-12">
																			<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																				<p class="no-gap">
																				 	FOODS
																				</p>
																				<h5>
																				 	Good Day Melted Banana Fritters
																				</h5>
																				<hr>
																				<p>
																				 	<i>17 Juni 2019</i>
																				</p>
																			</a>
																		</div>
																		<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																			<div class="row inner-share-area">
																				<!-- <div class="col-12 col-sm-3 col-md-12"></div> -->
																				<div class="col-12 col-sm-4" style="padding-right: 0;">
																					<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																					</a>
																					<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																						Buy Now
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																					</a>
																				</div>
																				<div class="col-12 col-sm-3 col-md-12"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														@endfor
													@endif

													@foreach($recipes as $row)
														@if($loop->index >= ($i+($i+1))*3 && $loop->index < ($i+1)*6)
															<div class="col-12 recipes-item">
																<div class="row inner-recipes-item">
																	<div class="col-12 col-sm-6 images">
																		<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal" data-slug="{{ $row->slug }}">
																			<img class="w-100" src="{{ assets_storage($row->photo) }}" />
																		</a>
																	</div>
																	<div class="col-12 col-sm-6 caption">
																		<div class="text-area col-12">
																			<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal" data-slug="{{ $row->slug }}">
																				<p class="no-gap">
																					@if($row->category == '1')
																					 	MAKANAN
																					@else
																					 	Minuman
																					@endif
																				</p>
																				<h5>
																				 	{{ $row->title }}
																				</h5>
																				<hr>
																				<p>
																				 	<i>{{ date('d F Y',strtotime($row->publish_date)) }}</i>
																				</p>
																			</a>
																		</div>
																		<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																			<div class="row inner-share-area">
																				<!-- <div class="col-12 col-sm-3 col-md-12"></div>												 -->
																				<div class="col-12 col-sm-4" style="padding-right: 0;">
																					<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																					</a>
																					<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																						Buy Now
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																					</a>
																				</div>
																				<div class="col-12 col-sm-3 col-md-12"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															@if($loop->index == count($recipes)-1 && count($recipes) < ($i+1)*6 )
																@for($x=0; $x < ( (($i+1)*6) - (count($recipes)) ); $x++ )
																	<div class="hidden col-12 recipes-item">
																		<div class="row inner-recipes-item">
																			<div class="col-12 col-sm-6 images">
																				<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																					<img class="w-100" src="{{ asset('/images/object/thumbnail-recipes-1') }}.jpg" />
																				</a>
																			</div>
																			<div class="col-12 col-sm-6 caption">
																				<div class="text-area col-12">
																					<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																						<p class="no-gap">
																						 	FOODS
																						</p>
																						<h5>
																						 	Good Day Melted Banana Fritters
																						</h5>
																						<hr>
																						<p>
																						 	<i>17 Juni 2019</i>
																						</p>
																					</a>
																				</div>
																				<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																					<div class="row inner-share-area">
																						<div class="col-12 col-sm-4" style="padding-right: 0;">
																							<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																							</a>
																							<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																								Buy Now
																							</a>
																						</div>
																						<div class="col-4 col-sm-2 share-item">
																							<a href="javascript:void(0);">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																							</a>
																						</div>
																						<div class="col-4 col-sm-2 share-item">
																							<a href="javascript:void(0);">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																							</a>
																						</div>
																						<div class="col-4 col-sm-2 share-item">
																							<a href="javascript:void(0);">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																							</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																@endfor
															@endif
														@endif
													@endforeach

													<!-- ========================= -->

														@if($i < ($page_all - 1))
														<div class="mr-auto col-3 arrow desktop">
														@else
														<div class="hidden mr-auto col-3 arrow desktop">
														@endif
															<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickNext')">
																<img class="w-100" src="{{ asset('/images/object/cari-tahu-next.png') }}" />
															</a>
														</div>

														<div class="col-12 mobile">
															<div class="row">
																<div class="col-3"></div>

																@if($i > 0)
																<div class="left col-3 arrow">
																@else
																<div class="hidden left col-3 arrow">
																@endif
																	<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickPrev')">
																		<img class="w-100" src="{{ asset('/images/object/cari-tahu-prev.png') }}" />
																	</a>
																</div>

																@if($i < ($page_all - 1))
																<div class="col-3 arrow">
																@else
																<div class="hidden col-3 arrow">
																@endif
																	<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickNext')">
																		<img class="w-100" src="{{ asset('/images/object/cari-tahu-next.png') }}" />
																	</a>
																</div>

																<div class="col-3"></div>
															</div>
														</div>
												</div>
											</div>
										</div>
									</div>
								@endfor
							</div>
						</div>

						<div class="tab-pane fade" id="nav-foods" role="tabpanel" aria-labelledby="nav-foods-tab">
							<div class="row inner-tab-pane slider-no-dots-arrow">
								@for ($i = 0; $i < $page_food; $i++)
									<div class="col-12">
										<div class="row">
											<div class="col-12 col-md-6 recipes-list">
												<div class="col-12 inner-recipes-list">

													@foreach($recipe_foods as $row)
														@if($loop->index >= $i*6 && $loop->index < ($i+($i+1))*3)
															<div class="col-12 recipes-item">
																<div class="row inner-recipes-item">
																	<div class="col-12 col-sm-6 images">
																		<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal" data-slug="{{ $row->slug }}">
																			<img class="w-100" src="{{ assets_storage($row->photo) }}" />
																		</a>
																	</div>
																	<div class="col-12 col-sm-6 caption">
																		<div class="text-area col-12 no-pad">
																			<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal" data-slug="{{ $row->slug }}">
																				<p class="no-gap">
																					@if($row->category == '1')
																					 	MAKANAN
																					@else
																					 	Minuman
																					@endif
																				</p>
																				<h5>
																				 	{{ $row->title }}
																				</h5>
																				<hr>
																				<p>
																				 	<i>{{ date('d F Y',strtotime($row->publish_date)) }}</i>
																				</p>
																			</a>
																		</div>
																		<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																			<div class="row inner-share-area">
																				<!-- <div class="col-12 col-sm-3 col-md-12"></div>													 -->
																				<div class="col-12 col-sm-4" style="padding-right: 0;">
																					<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																					</a>
																					<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																						Buy Now
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																					</a>
																				</div>
																				<div class="col-12 col-sm-3 col-md-12"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														@endif
													@endforeach

													<!-- ========================= -->

														@if($i > 0)
														<div class="ml-auto col-3 arrow desktop">
														@else
														<div class="hidden ml-auto col-3 arrow desktop">
														@endif
															<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickPrev')">
																<img class="w-100" src="{{ asset('/images/object/cari-tahu-prev.png') }}" />
															</a>
														</div>

														<div class="chain desktop"></div>
												</div>
											</div>

											<div class="col-12 col-md-6 recipes-list">
												<div class="col-12 inner-recipes-list">
													@if(($i+($i+1))*3 == count($recipe_foods))
														@for($x=0; $x < 3; $x++)
															<div class="hidden col-12 recipes-item">
																<div class="row inner-recipes-item">
																	<div class="col-12 col-sm-6 images">
																		<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																			<img class="w-100" src="{{ asset('/images/object/thumbnail-recipes-1') }}.jpg" />
																		</a>
																	</div>
																	<div class="col-12 col-sm-6 caption">
																		<div class="text-area col-12 no-pad">
																			<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																				<p class="no-gap">
																				 	FOODS
																				</p>
																				<h5>
																				 	Good Day Melted Banana Fritters
																				</h5>
																				<hr>
																				<p>
																				 	<i>17 Juni 2019</i>
																				</p>
																			</a>
																		</div>
																		<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																			<div class="row inner-share-area">
																				<div class="col-12 col-sm-4" style="padding-right: 0;">
																					<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																					</a>
																					<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																						Buy Now
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														@endfor
													@endif

													@foreach($recipe_foods as $row)
														@if($loop->index >= ($i+($i+1))*3 && $loop->index < ($i+1)*6)
															<div class="col-12 recipes-item">
																<div class="row inner-recipes-item">
																	<div class="col-12 col-sm-6 images">
																		<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal" data-slug="{{ $row->slug }}">
																			<img class="w-100" src="{{ assets_storage($row->photo) }}" />
																		</a>
																	</div>
																	<div class="col-12 col-sm-6 caption">
																		<div class="text-area col-12 no-pad">
																			<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal" data-slug="{{ $row->slug }}">
																				<p class="no-gap">
																					@if($row->category == '1')
																					 	MAKANAN
																					@else
																					 	Minuman
																					@endif
																				</p>
																				<h5>
																				 	{{ $row->title }}
																				</h5>
																				<hr>
																				<p>
																				 	<i>{{ date('d F Y',strtotime($row->publish_date)) }}</i>
																				</p>
																			</a>
																		</div>
																		<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																			<div class="row inner-share-area">
																				<!-- <div class="col-12 col-sm-3 col-md-12"></div> -->
																				<div class="col-12 col-sm-4" style="padding-right: 0;">
																					<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																					</a>
																					<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																						Buy Now
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																					</a>
																				</div>
																				<div class="col-12 col-sm-3 col-md-12"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															@if($loop->index == count($recipe_foods)-1 && count($recipe_foods) < ($i+1)*6 )
																@for($x=0; $x < ( (($i+1)*6) - (count($recipe_foods)) ); $x++ )
																	<div class="hidden col-12 recipes-item">
																		<div class="row inner-recipes-item">
																			<div class="col-12 col-sm-6 images">
																				<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																					<img class="w-100" src="{{ asset('/images/object/thumbnail-recipes-1') }}.jpg" />
																				</a>
																			</div>
																			<div class="col-12 col-sm-6 caption">
																				<div class="text-area col-12 no-pad">
																					<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																						<p class="no-gap">
																						 	FOODS
																						</p>
																						<h5>
																						 	Good Day Melted Banana Fritters
																						</h5>
																						<hr>
																						<p>
																						 	<i>17 Juni 2019</i>
																						</p>
																					</a>
																				</div>
																				<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																					<div class="row inner-share-area">
																						<div class="col-12 col-sm-4" style="padding-right: 0;">
																							<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																							</a>
																							<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																								Buy Now
																							</a>
																						</div>
																						<div class="col-4 col-sm-2 share-item">
																							<a href="javascript:void(0);">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																							</a>
																						</div>
																						<div class="col-4 col-sm-2 share-item">
																							<a href="javascript:void(0);">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																							</a>
																						</div>
																						<div class="col-4 col-sm-2 share-item">
																							<a href="javascript:void(0);">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																							</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																@endfor
															@endif
														@endif
													@endforeach

													<!-- ========================= -->

														@if($i < ($page_food - 1))
														<div class="mr-auto col-3 arrow desktop">
														@else
														<div class="hidden mr-auto col-3 arrow desktop">
														@endif
															<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickNext')">
																<img class="w-100" src="{{ asset('/images/object/cari-tahu-next.png') }}" />
															</a>
														</div>

														<div class="col-12 mobile">
															<div class="row">
																<div class="col-3"></div>

																@if($i > 0)
																<div class="left col-3 arrow">
																@else
																<div class="hidden left col-3 arrow">
																@endif
																	<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickPrev')">
																		<img class="w-100" src="{{ asset('/images/object/cari-tahu-prev.png') }}" />
																	</a>
																</div>

																@if($i < ($page_food - 1))
																<div class="col-3 arrow">
																@else
																<div class="hidden col-3 arrow">
																@endif
																	<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickNext')">
																		<img class="w-100" src="{{ asset('/images/object/cari-tahu-next.png') }}" />
																	</a>
																</div>

																<div class="col-3"></div>
															</div>
														</div>
												</div>
											</div>
										</div>
									</div>
								@endfor
							</div>
						</div>

						<div class="tab-pane fade" id="nav-drinks" role="tabpanel" aria-labelledby="nav-drinks-tab">
							<div class="row inner-tab-pane slider-no-dots-arrow">
								@for ($i = 0; $i < $page_drink; $i++)
									<div class="col-12">
										<div class="row">
											<div class="col-12 col-md-6 recipes-list">
												<div class="col-12 inner-recipes-list">

													@foreach($recipe_drinks as $row)
														@if($loop->index >= $i*6 && $loop->index < ($i+($i+1))*3)
															<div class="col-12 recipes-item">
																<div class="row inner-recipes-item">
																	<div class="col-12 col-sm-6 images">
																		<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal" data-slug="{{ $row->slug }}">
																			<img class="w-100" src="{{ assets_storage($row->photo) }}" />
																		</a>
																	</div>
																	<div class="col-12 col-sm-6 caption">
																		<div class="text-area col-12 no-pad">
																			<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal" data-slug="{{ $row->slug }}">
																				<p class="no-gap">
																					@if($row->category == '1')
																					 	MAKANAN
																					@else
																					 	Minuman
																					@endif
																				</p>
																				<h5>
																				 	{{ $row->title }}
																				</h5>
																				<hr>
																				<p>
																				 	<i>{{ date('d F Y',strtotime($row->publish_date)) }}</i>
																				</p>
																			</a>
																		</div>
																		<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																			<div class="row inner-share-area">
																				<!-- <div class="col-12 col-sm-3 col-md-12"></div> -->
																				<div class="col-12 col-sm-4" style="padding-right: 0;">
																					<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																					</a>
																					<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																						Buy Now
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																					</a>
																				</div>
																				<div class="col-12 col-sm-3 col-md-12"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														@endif
													@endforeach

													<!-- ========================= -->

														@if($i > 0)
														<div class="ml-auto col-3 arrow desktop">
														@else
														<div class="hidden ml-auto col-3 arrow desktop">
														@endif

															<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickPrev')">
																<img class="w-100" src="{{ asset('/images/object/cari-tahu-prev.png') }}" />
															</a>
														</div>

														<div class="chain desktop"></div>
												</div>
											</div>

											<div class="col-12 col-md-6 recipes-list">
												<div class="col-12 inner-recipes-list">
													@if(($i+($i+1))*3 == count($recipe_drinks))
														@for($x=0; $x < 3; $x++)
														<div class="hidden col-12 recipes-item">
															<div class="row inner-recipes-item">
																<div class="col-12 col-sm-6 images">
																	<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																		<img class="w-100" src="{{ asset('/images/object/thumbnail-recipes-1') }}.jpg" />
																	</a>
																</div>
																<div class="col-12 col-sm-6 caption">
																	<div class="text-area col-12 no-pad">
																		<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																			<p class="no-gap">
																			 	FOODS
																			</p>
																			<h5>
																			 	Good Day Melted Banana Fritters
																			</h5>
																			<hr>
																			<p>
																			 	<i>17 Juni 2019</i>
																			</p>
																		</a>
																	</div>
																	<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																		<div class="row inner-share-area">
																			<div class="col-12 col-sm-4" style="padding-right: 0;">
																				<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																					<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																				</a>
																				<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																					Buy Now
																				</a>
																			</div>
																			<div class="col-4 col-sm-2 share-item">
																				<a href="javascript:void(0);">
																					<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																				</a>
																			</div>
																			<div class="col-4 col-sm-2 share-item">
																				<a href="javascript:void(0);">
																					<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																				</a>
																			</div>
																			<div class="col-4 col-sm-2 share-item">
																				<a href="javascript:void(0);">
																					<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														@endfor
													@endif

													@foreach($recipe_drinks as $row)
														@if($loop->index >= ($i+($i+1))*3 && $loop->index < ($i+1)*6)
															<div class="col-12 recipes-item">
																<div class="row inner-recipes-item">
																	<div class="col-12 col-sm-6 images">
																		<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal" data-slug="{{ $row->slug }}">
																			<img class="w-100" src="{{ assets_storage($row->photo) }}" />
																		</a>
																	</div>
																	<div class="col-12 col-sm-6 caption">
																		<div class="text-area col-12 no-pad">
																			<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal" data-slug="{{ $row->slug }}">
																				<p class="no-gap">
																					@if($row->category == '1')
																					 	MAKANAN
																					@else
																					 	Minuman
																					@endif
																				</p>
																				<h5>
																				 	{{ $row->title }}
																				</h5>
																				<hr>
																				<p>
																				 	<i>{{ date('d F Y',strtotime($row->publish_date)) }}</i>
																				</p>
																			</a>
																		</div>
																		<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																			<div class="row inner-share-area">
																				<!-- <div class="col-12 col-sm-3 col-md-12"></div> -->
																				<div class="col-12 col-sm-4" style="padding-right: 0;">
																					<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																					</a>
																					<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																						Buy Now
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																					</a>
																				</div>
																				<div class="col-4 col-sm-2 share-item">
																					<a href="javascript:void(0);">
																						<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																					</a>
																				</div>
																				<div class="col-12 col-sm-3 col-md-12"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															@if($loop->index == count($recipe_drinks)-1 && count($recipe_drinks) < ($i+1)*6 )
																@for($x=0; $x < ( (($i+1)*6) - (count($recipe_drinks)) ); $x++ )
																	<div class="hidden col-12 recipes-item">
																		<div class="row inner-recipes-item">
																			<div class="col-12 col-sm-6 images">
																				<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																					<img class="w-100" src="{{ asset('/images/object/thumbnail-recipes-1') }}.jpg" />
																				</a>
																			</div>
																			<div class="col-12 col-sm-6 caption">
																				<div class="text-area col-12 no-pad">
																					<a href="javascript:void(0);" data-toggle="modal" data-target=".recipes-modal">
																						<p class="no-gap">
																						 	FOODS
																						</p>
																						<h5>
																						 	Good Day Melted Banana Fritters
																						</h5>
																						<hr>
																						<p>
																						 	<i>17 Juni 2019</i>
																						</p>
																					</a>
																				</div>
																				<div class="mr-auto ml-auto col-6 col-sm-12 no-pad share-area">
																					<div class="row inner-share-area">
																						<div class="col-12 col-sm-4" style="padding-right: 0;">
																							<a href="https://linktr.ee/GoodDayID" class="desktop" target="_blank">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-buy-red.png') }}" />
																							</a>
																							<a href="https://linktr.ee/GoodDayID" class="mb-3 btn btn-primary btn-gd mobile" target="_blank">
																								Buy Now
																							</a>
																						</div>
																						<div class="col-4 col-sm-2 share-item">
																							<a href="javascript:void(0);">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																							</a>
																						</div>
																						<div class="col-4 col-sm-2 share-item">
																							<a href="javascript:void(0);">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																							</a>
																						</div>
																						<div class="col-4 col-sm-2 share-item">
																							<a href="javascript:void(0);">
																								<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																							</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																@endfor
															@endif
														@endif
													@endforeach

													<!-- ========================= -->

														@if($i < ($page_drink - 1))
														<div class="mr-auto col-3 arrow desktop">
														@else
														<div class="hidden mr-auto col-3 arrow desktop">
														@endif
															<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickNext')">
																<img class="w-100" src="{{ asset('/images/object/cari-tahu-next.png') }}" />
															</a>
														</div>

														<div class="col-12 mobile">
															<div class="row">
																<div class="col-3"></div>

																@if($i > 0)
																<div class="left col-3 arrow">
																@else
																<div class="hidden left col-3 arrow">
																@endif
																	<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickPrev')">
																		<img class="w-100" src="{{ asset('/images/object/cari-tahu-prev.png') }}" />
																	</a>
																</div>

																@if($i < ($page_drink - 1))
																<div class="col-3 arrow">
																@else
																<div class="hidden col-3 arrow">
																@endif
																	<a href="javascript:void(0);" onclick="$('.slider-no-dots-arrow').slick('slickNext')">
																		<img class="w-100" src="{{ asset('/images/object/cari-tahu-next.png') }}" />
																	</a>
																</div>

																<div class="col-3"></div>
															</div>
														</div>
												</div>
											</div>
										</div>
									</div>
								@endfor
							</div>
						</div>
					</div>
				</div>
			</div>

			<img class="side-bg-right fix-bg" width="15%" src="{{ asset('/images/object/cloud-right-4.png') }}" />
			<img class="side-bg-left fix-bg" width="10%" src="{{ asset('/images/object/cloud-left-4.png') }}" />
		</div>

		<img class="fix-bg foot-bg" width="25%" src="{{ asset('/images/object/img-foot-3.png') }}" >
	</div>

	<div class="modal modal-gd fade recipes-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-xl">
	    	<div class="modal-content">
		      	<div class="modal-body">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>

		        	<div class="row no-gutters">
		        		<div class="col-12 iframe">
			        		<!-- <iframe style="margin: 0 auto;" width="727" height="409" src="https://www.youtube.com/embed/PzjGt9N3fuM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
		        		</div>

		        		<div class="col-12 title">
		        			<div class="row no-pad">
		        				<div class="col-12">
				        			<p class="no-gap">
				        				FOODS
				        			</p>
				        			<h3>
				        				Good Day Cheese Cake
				        			</h3>
				        			<p>
				        				<i>17 Juni 2019</i>
				        			</p>
				        			<hr>
		        				</div>
		        			</div>
		        			<div class="row no-pad">
				        		<div class="col-12 col-sm-4"></div>
				        		<div class="col-12 col-sm-4">
									<div class="row no-pad">
										<!-- <div class="col-12 col-sm-1"></div> -->
										<div class="col-12 col-sm-5">
											<a class="mb-3 btn btn-primary btn-gd" href="https://linktr.ee/GoodDayID" target="_blank">Buy Now
											</a>
										</div>
										<div class="col-4 col-sm-2 share-item">
											<a href="javascript:void(0);">
												<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
											</a>
										</div>
										<div class="col-4 col-sm-2 share-item">
											<a href="javascript:void(0);">
												<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
											</a>
										</div>
										<div class="col-4 col-sm-2 share-item">
											<a href="javascript:void(0);">
												<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
											</a>
										</div>
										<!-- <div class="col-12 col-sm-1"></div> -->
									</div>
				        		</div>
				        		<div class="col-12 col-sm-4"></div>
		        			</div>
		        		</div>



		        		<div class="col-12 main-content">
		        			<p>
		        				Siapa bilang Good Day cuma bisa buat bikin minuman seger? Kamu musti cobain nih eksperimen Good Day Cheese Cake ala Good Day Chococinno yang
								bisa bikin manis hari-harimu. Ga percaya? Bikin yuk dan eksperimen dengan tambah bahan unik lainnya! Post foto eksperimen Cheese Cake ala kamu dan
								sertakan keterangan bahan unik tambahan di kolom comment. Jangan lupa sertakan juga nama account socmed kamu yah. Selamat bereksperimen
								GoodFriends!
		        				<br>
		        				<br>
		        			</p>
		        			<h5 class="red">
		        				Submitted Recipes
		        			</h5>
		        			<table class="striped" style="width: 100%;">
		        				<tr>
		        					<td style="width: 25%">
		        						<img src="{{ asset('/images/object/recipe-1.jpg') }}" width="100%" />
		        					</td>
		        					<td style="width: 75%">
		        						<b class="red">
		        							BY : ILLUN
		        						</b>
		        						<p>
		        							Asyiik libur tlah tiba. liburan begini paling enak duduk di sofa empuk, ndengerin musik slowbeat sambil menyendok
											perlahan-lahan goodday chocochino cheesecake dingin. Naah cheesecake yang kusiapkan sesuai resep goodday
											dengan tambahan bahan favoriteku yaitu daun pandan, kacang ijo, strawberry, kiwi dan kacang kenari. Dasar gelas
											kutaruh oreo yang dihancurkan dimasak dengan mentega cair. Cara pembuatan cheesecake : Santan dimasak
											terpisah terlebih dahulu dengan daun pandan dan kacang hijau sampai aroma mewangi. Didihkan Butter unsalted,
											santan dan kacang ijo(pandan diambil), susu kental manis, pisang, strawberry, kiwi, 1sc goodday chococino sampai
											mengental. Lalu ditambahkan creamcheese, butter dan gula sesuai selera diaduk merata. Buah strawbery dan kiwi
											meningkatkan rasa segar cheesecake. Untuk topping gurih aku pilih kacang kenari + oreo yang dipanaskan terlebih
											dahulu dengan mentega cair biar makin krenyes krenyes gurih di lidah..Goodday bikin liburku semakin berwarna.
											#GDSweetLab #CheeseCake Ig: @iluhmartina Fb:Iluh Martina
		        						</p>
		        					</td>
		        				</tr>
		        				<tr>
		        					<td style="width: 25%">
		        						<img src="{{ asset('/images/object/recipe-2.jpg') }}" width="100%" />
		        					</td>
		        					<td style="width: 75%">
		        						<b class="red">
		        							BY : SYLVIA
		        						</b>
		        						<p>
		        							Saatnya beresksperimen dengan Good Day Chococinno di Good Day Sweet Lab Edisi 5! Terinspirasi dari video
											Good Day Cheese Cake, aku berkreasi dengan membuat 4 layer lezat : Base memakai oreo crust, layer kedua
											banana cheese cake yang dicampur dengan Good Day Chocochinno, layer ketiga Hazelnut Chocolate Cream yang
											dibuat dengan mencampurkan dark chocolate, Good Day Carrebian Nut dan kacang hazelnut yang dihancurkan
											kasar. Layer keempat diisi kembali dengan Banana Cheesecake Chocochinno. Aku berikan topping salted caramel
											almond crust. Cara membuat topping ini; hancuran kacang almond dibaurkan rata dengan Caramel Mochacinno
											Sauce.Sebagai topping terakhir, hiasi dengan coklat Ferrero Rocher. Benar-benar perpaduan cheese, banana,
											caramel, coklat dan kacang2an yang hmmm.. make your day is indeed a Good Day! #GDSweetLab #CheeseCake
											Twitter : @nezclaudia
		        						</p>
		        					</td>
		        				</tr>
		        				<tr>
		        					<td style="width: 25%">
		        						<img src="{{ asset('/images/object/recipe-3.jpg') }}" width="100%" />
		        					</td>
		        					<td style="width: 75%">
		        						<b class="red">
		        							BY : MUH ISMAIL
		        						</b>
		        						<p>
		        							Good Day Sweet Lab periode 5 ini saya bereksperimen dengan puding coklat yang di tambahi dengan good day
											chococinno, kemudian di atasnya sesuai dengan eksperimen dari good day biskuit lalu adonan cheese cake,
											tambahkan es krim rasa stawberry taburi dengan meses, rasanya enak banget. Good day emang OK banget. Happy
											Independence Day untuk Indonesia tercinta, MERDEKA!! #GDSweetLab # CheeseCake IG : @dzeqe
		        						</p>
		        					</td>
		        				</tr>
		        			</table>
		        		</div>
		        	</div>
		      	</div>
	    	</div>
	  	</div>
	</div>
@endsection
