@extends('layouts.app')

@section('content')
	<div class="container-fluid no-pad content article">
		<div class="container">
			<div class="row inner-content">
				<div class="col-12 inner-article">
					<nav>
						<div class="col-12 container-toggle mobile no-pad">
							<a href="javascript:void(0);" onclick="clickToggleArticle()">
								<div class="col-12 btn-toggle-tab" align="center">
									Pilih Artikel
								</div>
							</a>
						</div>

					  	<div class="justify-content-center nav nav-tabs hide" id="nav-tab" role="tablist">
					    	<a class="nav-item nav-link active" onclick="$('.justify-content-center').addClass('hide');" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">
					    		Semua Artikel
					    	</a>
					    	<a class="nav-item nav-link" onclick="$('.justify-content-center').addClass('hide');" id="nav-technology-tab" data-toggle="tab" href="#nav-technology" role="tab" aria-controls="nav-technology" aria-selected="true">
					    		Teknologi
					    	</a>
					    	<a class="nav-item nav-link" onclick="$('.justify-content-center').addClass('hide');" id="nav-entertainment-tab" data-toggle="tab" href="#nav-entertainment" role="tab" aria-controls="nav-entertainment" aria-selected="true">
					    		Hiburan
					    	</a>
					    	<a class="nav-item nav-link" onclick="$('.justify-content-center').addClass('hide');" id="nav-movie-tab" data-toggle="tab" href="#nav-movie" role="tab" aria-controls="nav-movie" aria-selected="true">
					    		Film
					    	</a>
					    	<a class="nav-item nav-link" onclick="$('.justify-content-center').addClass('hide');" id="nav-music-tab" data-toggle="tab" href="#nav-music" role="tab" aria-controls="nav-music" aria-selected="true">
					    		Musik
					    	</a>
					    	<a class="nav-item nav-link" onclick="$('.justify-content-center').addClass('hide');" id="nav-others-tab" data-toggle="tab" href="#nav-others" role="tab" aria-controls="nav-others" aria-selected="true">
					    		Lainnya
					    	</a>
					  	</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
							<div class="row inner-tab-pane">
								@foreach($blogs as $row)

									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="{{route('blog.detail', ['slug' => $row->slug])}}">
													<img class="w-100 lazy" data-src="{{ assets_storage($row->image_source) }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="{{route('blog.detail', ['slug' => $row->slug])}}">
														<div class="col-12 no-pad text">
															<p>{{ $row->tag }}</p>
															<h5>{{ $row->title }}</h5>
															<hr>
															<p><i>{{ date('d F Y', strtotime($row->modified)) }}</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);" onclick="postToFeed('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}');">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="http://www.twitter.com/intent/tweet?url={{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<input type="text" id="urlcopied-1-{{ $row->id }}" value="{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" style="opacity: 0; position: absolute; z-index: -1;" />
																<a href="javascript:void(0);" class="crossPlatformShare" onclick="crossPlatformShare('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}','urlcopied-1-{{ $row->id }}')">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																</a>
															</div>
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

						<div class="tab-pane fade" id="nav-technology" role="tabpanel" aria-labelledby="nav-technology-tab">
							<div class="row inner-tab-pane">
								@foreach($blogs_tech as $row)

									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="{{route('blog.detail', ['slug' => $row->slug])}}">
													<img class="w-100 lazy" data-src="{{ assets_storage($row->image_source) }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="{{route('blog.detail', ['slug' => $row->slug])}}" width="100%">
														<div class="col-12 no-pad text">
															<p>{{ $row->tag }}</p>
															<h5>{{ $row->title }}</h5>
															<hr>
															<p><i>{{ date('d F Y', strtotime($row->modified)) }}</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);" onclick="postToFeed('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}');">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="http://www.twitter.com/intent/tweet?url={{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<input type="text" id="urlcopied-2-{{ $row->id }}" value="{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" style="opacity: 0; position: absolute; z-index: -1;" />
																<a href="javascript:void(0);" class="crossPlatformShare" onclick="crossPlatformShare('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}','urlcopied-2-{{ $row->id }}')">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																</a>
															</div>
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

						<div class="tab-pane fade" id="nav-entertainment" role="tabpanel" aria-labelledby="nav-entertainment-tab">
							<div class="row inner-tab-pane">
								@foreach($blogs_entertain as $row)

									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="{{route('blog.detail', ['slug' => $row->slug])}}">
													<img class="w-100 lazy" data-src="{{ assets_storage($row->image_source) }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="{{route('blog.detail', ['slug' => $row->slug])}}" width="100%">
														<div class="col-12 no-pad text">
															<p>{{ $row->tag }}</p>
															<h5>{{ $row->title }}</h5>
															<hr>
															<p><i>{{ date('d F Y', strtotime($row->modified)) }}</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);" onclick="postToFeed('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}');">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="http://www.twitter.com/intent/tweet?url={{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<input type="text" id="urlcopied-3-{{ $row->id }}" value="{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" style="opacity: 0; position: absolute; z-index: -1;" />
																<a href="javascript:void(0);" class="crossPlatformShare" onclick="crossPlatformShare('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}','urlcopied-3-{{ $row->id }}')">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																</a>
															</div>
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

						<div class="tab-pane fade" id="nav-movie" role="tabpanel" aria-labelledby="nav-movie-tab">
							<div class="row inner-tab-pane">
								@foreach($blogs_movie as $row)
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="{{route('blog.detail', ['slug' => $row->slug])}}">
													<img class="w-100 lazy" data-src="{{ assets_storage($row->image_source) }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="{{route('blog.detail', ['slug' => $row->slug])}}" width="100%">
														<div class="col-12 no-pad text">
															<p>{{ $row->tag }}</p>
															<h5>{{ $row->title }}</h5>
															<hr>
															<p><i>{{ date('d F Y', strtotime($row->modified)) }}</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);" onclick="postToFeed('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}');">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="http://www.twitter.com/intent/tweet?url={{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<input type="text" id="urlcopied-4-{{ $row->id }}" value="{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" style="opacity: 0; position: absolute; z-index: -1;" />
																<a href="javascript:void(0);" class="crossPlatformShare" onclick="crossPlatformShare('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}','urlcopied-4-{{ $row->id }}')">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																</a>
															</div>
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

						<div class="tab-pane fade" id="nav-music" role="tabpanel" aria-labelledby="nav-music-tab">
							<div class="row inner-tab-pane">
								@foreach($blogs_music as $row)

									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="{{route('blog.detail', ['slug' => $row->slug])}}">
													<img class="w-100 lazy" data-src="{{ assets_storage($row->image_source) }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="{{route('blog.detail', ['slug' => $row->slug])}}" width="100%">
														<div class="col-12 no-pad text">
															<p>{{ $row->tag }}</p>
															<h5>{{ $row->title }}</h5>
															<hr>
															<p><i>{{ date('d F Y', strtotime($row->modified)) }}</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);" onclick="postToFeed('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}');">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="http://www.twitter.com/intent/tweet?url={{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<input type="text" id="urlcopied-5-{{ $row->id }}" value="{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" style="opacity: 0; position: absolute; z-index: -1;" />
																<a href="javascript:void(0);" class="crossPlatformShare" onclick="crossPlatformShare('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}','urlcopied-5-{{ $row->id }}')">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
																</a>
															</div>
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

						<div class="tab-pane fade" id="nav-others" role="tabpanel" aria-labelledby="nav-others-tab">
							<div class="row inner-tab-pane">
								@foreach($blogs_other as $row)
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="{{route('blog.detail', ['slug' => $row->slug])}}">
													<img class="w-100 lazy" data-src="{{ assets_storage($row->image_source) }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="{{route('blog.detail', ['slug' => $row->slug])}}" width="100%">
														<div class="col-12 no-pad text">
															<p>{{ $row->tag }}</p>
															<h5>{{ $row->title }}</h5>
															<hr>
															<p><i>{{ date('d F Y', strtotime($row->modified)) }}</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
														<div class="col-4">
															<a href="javascript:void(0);" onclick="postToFeed('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}');">
																<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
															</a>
														</div>
														<div class="col-4">
															<a href="http://www.twitter.com/intent/tweet?url={{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
																<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
															</a>
														</div>
														<div class="col-4">
															<input type="text" id="urlcopied-6-{{ $row->id }}" value="{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}" style="opacity: 0; position: absolute; z-index: -1;" />
															<a href="javascript:void(0);" class="crossPlatformShare" onclick="crossPlatformShare('{{ asset('/generasi-masa-kini/detail') }}/{{ $row->slug }}','urlcopied-6-{{ $row->id }}')">
																<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
															</a>
															</div>
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
					</div>
				</div>
			</div>

			<img class="side-bg-right fix-bg" width="15%" src="{{ asset('/images/object/cloud-right-2.png') }}" />
			<img class="side-bg-left fix-bg" width="10%" src="{{ asset('/images/object/cloud-left-2.png') }}" />
		</div>

		<img class="fix-bg foot-bg" width="20%" src="{{ asset('/images/object/img-foot-2.png') }}" >
	</div>
@endsection
