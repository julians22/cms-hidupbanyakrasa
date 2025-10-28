@extends('layouts.app')

@section('content')
	<div class="container-fluid no-pad content article">
		<div class="container">
			<div class="row inner-content">
				<div class="col-12 inner-article">
					<nav>
					  	<div class="justify-content-center nav nav-tabs desktop" id="nav-tab" role="tablist">
					    	<a class="nav-item nav-link" id="nav-all-tab" href="{{ asset('/generasi-masa-kini') }}">
					    		Semua Artikel
					    	</a>
					    	<a class="nav-item nav-link" id="nav-technology-tab" href="{{ asset('/generasi-masa-kini') }}">
					    		Teknologi
					    	</a>
					    	<a class="nav-item nav-link" id="nav-entertainment-tab" href="{{ asset('/generasi-masa-kini') }}">
					    		Hiburan
					    	</a>
					    	<a class="nav-item nav-link" id="nav-movie-tab" href="{{ asset('/generasi-masa-kini') }}">
					    		Film
					    	</a>
					    	<a class="nav-item nav-link" id="nav-music-tab" href="{{ asset('/generasi-masa-kini') }}">
					    		Musik
					    	</a>
					    	<a class="nav-item nav-link" id="nav-others-tab" href="{{ asset('/generasi-masa-kini') }}">
					    		Lainnya
					    	</a>
					  	</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
							<div class="row inner-tab-pane detail">
								<div class="col-12 no-pad image">

									<img class="w-100" src="{{ asset('/images/object/article-cover.png') }}" />
								</div>
								<div class="col-12 article">
									<div class="row inner-article">

										<div class="col-12 col-md-9 outer-title">
											<div class="row title">
												<div class="ml-auto col-12 col-md-8 inner-title">
													<p class="no-gap">
														{{ $article->tag }}
													</p>
													<h3>
														{{ $article->title }}
													</h3>
													<p>
														<i>{{ date('d F Y', strtotime($article->modified)) }}</i>
													</p>

													<hr>
												</div>
											</div>
										</div>

										<div class="ml-auto col-12 col-md-2 no-pad share">
											<div class="row inner-share">

												<div class="col-3 col-sm-3 col-md-12"></div>

												<div class="col-2 col-sm-2 col-md-3 share-item">
													<a href="javascript:void(0);">
														<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
													</a>
												</div>
												<div class="col-2 col-sm-2 col-md-3 share-item">
													<a href="javascript:void(0);">
														<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
													</a>
												</div>
												<div class="col-2 col-sm-2 col-md-3 share-item">
													<a href="javascript:void(0);">
														<img class="w-100" src="{{ asset('/images/object/share-btn-3.png') }}" />
													</a>
												</div>

												<div class="col-3 col-sm-3 col-md-12"></div>

											</div>
										</div>

										<div class="col-12 main-content">
											<div class="col-12 no-pad inner-main-content">
											{!! $article->content !!}

												<!-- <p>
													Bulan puasa gini memang ada beberapa hal yang perlu lo lakuin supaya bisa beradaptasi dengan perubahan pola makan dan tidur. Kalo nggak disesuaikan, salah-salah keseharian lo malah jauh dari good day, lho. Masih belum yakin? Coba dulu aja lakuin jurus gaul dari Good Day ini!
													<br><br>
													<b>1. Sahur & Buka Puasa</b>
													<br><br>
													Siapa yang punya prinsip makan dan minum sebanyak-banyaknya waktu sahur dan berbuka? Stop lakuin hal ini ya, GoodFriends. Sahur yang berlebihan bukannya bikin lo tahan puasa sampai Magrib, tapi justru bikin perut kembung dan nggak nyaman seharian. Begitu juga dengan berbuka puasa, supaya pencernaan lo nggak kaget, lebih baik makan makanan yang ringan dulu, lalu selang 1-2 jam kemudian baru deh makan yang lebih berat secukupnya. Jika tidak maka gangguan pencernaan kayak sakit maag, diare, dan perut kembung bisa terjadi lho. Kalau minum air gimana? Sama juga, GoodFriends, sebaiknya minum air putih secukupnya seperti 4 gelas saat sahur, 2 gelas saat berbuka dan 2 gelas sebelum tidur.
													<br><br>
													<b>2. Dokter Gigi</b>
													<br><br>
													GoodFriends inget nggak kapan terakhir kali lo periksa dan bersihkan gigi ke dokter gigi? Anjuran 6 bulan sekali dari dokter ini sebaiknya lo lakuin juga, supaya selama puasa lo terhindar dari bau mulut. Pasalnya, semakin banyak karang dan lubang pada gigi, semakin besar kemungkinan bau mulut terjadi, khususnya waktu lo berpuasa. Nggak mau kan, orang-orang pada menghindar begitu lo mulai ngajak ngobrol?
													<br><br>
													<b>3. Olahraga</b>
													<br><br>
													Daripada ngitung mundur kapan waktu buka puasa, mending lakuin kegiatan positif supaya hari lo makin banyak rasa, GoodFriends. Misalnya dengan lakuin olahraga ringan bareng temen-temen atau mungkin gebetan. Olahraga ringan yang cocok di bulan ini misalnya bersepeda, jalan santai, skate-boarding, atau jogging. Kenapa sih musti sebelum buka puasa? Selain buat mengisi waktu, olahraga raga setelah berbuka puasa bisa bikin perut lo jadi sakit, GoodFriends. Itu karena tubuh perlu waktu sekitar 1-2 jam untuk mencerna makanan yang masuk. Jadi daripada olahraga kemaleman, lebih baik olahraga sebelum berbuka, kan?!
													<br><br>
													<b>4. Tidur</b>
													<br><br>
													Ini nih salah satu yang paling susah. Mengatur ulang pola tidur di bulan puasa emang perlu waktu. GoodFriends yang biasanya suka tidur malem, harus mengubah waktu tidur jadi lebih awal supaya nggak ngantuk keesokan harinya. Apalagi kalau sesudah sahur kita nggak dianjurkan buat langsung tidur lagi, kebayang kan jumlah jam tidur kita bakalan berkurang kalau nggak tidur lebih awal?
													<br>
													<br>
													<br>
													So, GoodFriends udah siap bikin puasa lo jadi good day nggak nih? Semangat ikutin cara-cara di atas, yes!
												</p> -->
											</div>

											<div class="col-12 no-pad comment-area none">
												<div class="col-12 inner-comment-area">
													<div class="row">
														<div class="col-1 no-pad avatar">
															<img class="w-100" src="{{ asset('/images/object/avatar.png') }}" />
														</div>
														<div class="col-11 textarea">
															<textarea class="form-control" placeholder="Add a comment" rows="2"></textarea>
														</div>
														<div class="col-12" align="right">
															<a href="javascript:void(0);">Please Login to Comment</a>
														</div>
													</div>
												</div>
											</div>

											<div class="col-12 btn-area">
												<a class="btn btn-primary btn-gd" href="javascript:void(0);" onclick="window.history.go(-1);">Kembali</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-technology" role="tabpanel" aria-labelledby="nav-technology-tab">
							<div class="row inner-tab-pane">
								@for ($i = 0; $i < 1; $i++)
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-1.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-2.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-3.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-4.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
								@endfor
							</div>
						</div>
						<div class="tab-pane fade" id="nav-entertainment" role="tabpanel" aria-labelledby="nav-entertainment-tab">
							<div class="row inner-tab-pane">
								@for ($i = 0; $i < 2; $i++)
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-1.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-2.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-3.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-4.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
								@endfor
							</div>
						</div>
						<div class="tab-pane fade" id="nav-movie" role="tabpanel" aria-labelledby="nav-movie-tab">
							<div class="row inner-tab-pane">
								@for ($i = 0; $i < 3; $i++)
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-1.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-2.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-3.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-4.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
								@endfor

								<div class="col-12 page-section">
									<div class="row">
										<div class="col-12 col-md-4"></div>
										<div class="col-12 col-md-4" align="center">
											<a class="btn btn-primary btn-gd" href="javascript:void(0);">
												Previous
											</a>
											<a class="btn btn-primary btn-gd" href="javascript:void(0);">
												Next
											</a>
										</div>
										<div class="col-12 col-md-4 page-area">
											<nav aria-label="Page navigation example">
											  	<ul class="pagination">
											    	<li class="page-item active"><a class="page-link" href="#">1</a></li>
											    	<li class="page-item"><a class="page-link" href="#">2</a></li>
											    	<li class="page-item"><a class="page-link" href="#">3</a></li>
											    	<li class="page-item"><a class="page-link" href="#">4</a></li>
											    	<li class="page-item"><a class="page-link" href="#">.....</a></li>
											    	<li class="page-item"><a class="page-link" href="#">25</a></li>
											  	</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-music" role="tabpanel" aria-labelledby="nav-music-tab">
							<div class="row inner-tab-pane">
								@for ($i = 0; $i < 2; $i++)
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-1.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-2.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-3.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-4.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
								@endfor
							</div>
						</div>
						<div class="tab-pane fade" id="nav-others" role="tabpanel" aria-labelledby="nav-others-tab">
							<div class="row inner-tab-pane">
								@for ($i = 0; $i < 1; $i++)
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-1.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-2.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-3.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
									<div class="col-12 col-md-3 article-item">
										<div class="col-12 inner-article-item">
											<div class="col-12 image-area">
												<a href="javascript:void(0);">
													<img class="w-100" src="{{ asset('/images/object/article-4.jpg') }}">
												</a>
											</div>
											<div class="col-12 caption-area">
												<div class="row">
													<a href="javascript:void(0);">
														<div class="col-12 no-pad text">
															<p>OTHER</p>
															<h5>Lorem ipsum dolor consectetur sit amet </h5>
															<hr>
															<p><i>17 Juni 2019</i></p>
														</div>
													</a>

													<div class="col-2"></div>
													<div class="col-8 share">
														<div class="row">
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-1.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
																	<img class="w-100" src="{{ asset('/images/object/share-btn-2.png') }}" />
																</a>
															</div>
															<div class="col-4">
																<a href="javascript:void(0);">
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
								@endfor
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

@push('after-script')

<script>

    let url = window.location.href;

    console.log(url);

    if("https://hidupbanyakrasa.com/generasi-masa-kini/detail/cuma-tukerin-good-day-edisi-pok--mon-bisa-fun-trip-ke-singapura-gratis--" == url){
        let elementBanner = $('.col-12.no-pad.image');

        $(elementBanner).css({"height": "auto"});

        console.log(elementBanner);



    }

</script>

@endpush
