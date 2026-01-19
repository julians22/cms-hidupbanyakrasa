<!DOCTYPE html>
<html @if(Request::segment(1) == 'picture-art') ng-app="kitchensink" @endif>
<head>
	<title> Good Day | Hidup Banyak Rasa!</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Minuman kopi instant enak yang pas dibuat jadi kopi panas atau kopi dingin. Rasakan sensasi hidup yang banyak rasa bersama kopi Good Day! Kopi instant enak? Ya kopi Good Day!"/>
	<meta name="keywords" content="Minuman, Kopi, Minuman Kopi, Kopi instan, kopi panas, kopi dingin, hidup banyak rasa, hidup, banyak, rasa, good, day, goodday, good day, kopi enak, gaul sensasi, kopi good day, good day coffee"/>
	<meta name="robots" content="INDEX,FOLLOW"/>
	<meta name="google-site-verification" content="on-w9yZSwwIhE_ffwGW08Mx4qXGK0mQzt1tKUkr-SOI" />

	<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
  	<link rel="stylesheet" href="{{ asset('css/color-picker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css?') }}{{ $data['date'] }}">

   	@if(Request::segment(1) == 'picture-art')
	    <!-- <style>
	      pre { margin-left: 15px !important }
	    </style> -->

	    <!-- <link rel="stylesheet" href="{{ asset('plugins/kitchensink/css/master.css') }}"> -->

	    <link rel="stylesheet" href="{{ asset('plugins/kitchensink/css/prism.css') }}">

	    <script src="{{ asset('plugins/kitchensink/lib/prism.js') }}"></script>
	    <script>
		    (function() {
		        var fabricUrl = "{{ asset('plugins/kitchensink/lib/fabric.js') }}";
		        if (document.location.search.indexOf('load_fabric_from=') > -1) {
			        var match = document.location.search.match(/load_fabric_from=([^&]*)/);
			        if (match && match[1]) {
			          	fabricUrl = match[1];
			        }
		        }
		        document.write('<script src="' + fabricUrl + '"><\/script>');
		    })();
	    </script>
	    <!-- <script src="{{ asset('plugins/kitchensink/master.js') }}"></script> -->
	    <script src="{{ asset('js/angular.min.js') }}"></script>
    @endif

  	<script>
	  	window.fbAsyncInit = function() {
	    	FB.init({
	        	appId      : '1250456185115532',
	        	xfbml      : true,
	        	version    : 'v2.8'
	    	});
	    	FB.AppEvents.logPageView();
	  	};

	  	(function(d, s, id){
	    	var js, fjs = d.getElementsByTagName(s)[0];
	    	if (d.getElementById(id)) {return;}
	    	js = d.createElement(s); js.id = id;
	    	js.src = "//connect.facebook.net/en_US/sdk.js";
	    	fjs.parentNode.insertBefore(js, fjs);
	  	}(document, 'script', 'facebook-jssdk'));

	  	function postToFeed(link){
	      	var obj = {
	            	method: 'feed',
	            	picture: 'https://hidupbanyakrasa.com/assets/img/favicon.ico',
	            	link: link,
	            	name: 'Good Day',
	            	description: 'Karna hidup perlu banyak rasa',
	            	caption: 'Hidup Banyak Rasa',
	            	};

	      	function callback(response){
	        	if (response && !response.error_message) {
	          	window.location.href = "{{ asset('/generasi-masa-kini') }}";
	      	} else {
	          	alert('Post was not published.');
	      	}
	      	}
	      	FB.ui(obj, callback);
	  	}
  	</script>

  	<!-- Revamp Start new Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  	<!-- Revamp End -->

  	<!-- Google Analytics 4 -->
  	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FFW8NZ1PSP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-FFW8NZ1PSP');
    </script>
</head>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-32356281-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-32356281-1');
	</script>
<!-- End Global site tag (gtag.js) - Google Analytics -->

<body  @if(Request::segment(1) == 'coloring-theraphy') style="display:flex; flex-direction: column; height: 100vh;"  @endif>


	<div class="container-fluid header" id="header">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
			  	<a class="mr-auto ml-auto navbar-brand" href="{{ asset('/') }}">
			  		<img src="{{ asset('images/logo-1-r.png') }}">
			  	</a>
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon @if(Request::segment(2) == '17-agustus') white @endif"></span>
			  	</button>

			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    	<ul class="ml-auto navbar-nav desktop">

			    	   <!-- <li class="nav-item">-->
				       <!-- 	<a class="nav-link" href="https://hidupbanyakrasa.com/generasi-masa-kini/detail/cuma-tukerin-good-day-edisi-pok--mon-bisa-fun-trip-ke-singapura-gratis--" data-slug="generasi-masa-kini/detail/cuma-tukerin-good-day-edisi-pok--mon-bisa-fun-trip-ke-singapura-gratis--">-->
				       <!-- 		<div class="font-nav-r col-12 no-pad" >-->
					      <!--  		Good Day<br />Good Hunt -->

						     <!--   	<div class="front">-->
						     <!--   		Good Day<br />Good Hunt -->
						     <!--   	</div>				        			-->
				       <!-- 		</div>-->
				       <!-- 	</a>-->
				      	<!--</li>-->

			    	    <!-- Revamp Start -->
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ route('blog.index') }}" data-slug="generasi-masa-kini">
				        		<div class="font-nav-r col-12 no-pad" >
					        		Generasi<br>
						        	Masa Kini
					        		<!--<div class="outline">-->
						        	<!--	Generasi<br>-->
						        	<!--	Masa Kini-->
						        	<!--</div>-->

						        	<div class="front">
						        		Generasi<br>
						        		Masa Kini
						        	</div>
				        		</div>
				        	</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ route('recipe.index') }}" data-slug="cari-terus-rasamu">
				        		<div class="font-nav-r col-12 no-pad" >
					        		Cari Terus<br>
						        	Rasamu
					        		<!--<div class="outline">-->
						        	<!--	Cari Terus<br>-->
						        	<!--	&nbsp;Rasamu&nbsp;-->
						        	<!--</div>-->

						        	<div class="front">
						        		Cari Terus<br>
						        		&nbsp;Rasamu&nbsp;
						        	</div>
						        </div>
				        	</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ route('products.index') }}" data-slug="products">
				        		<div class="font-nav-r col-12 no-pad">
					        		Produk
					        		<!--<div class="outline">-->
						        	<!--	Produk-->
						        	<!--</div>-->

						        	<div class="front">
						        		Produk
						        	</div>
				        		</div>
				        	</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ route('horoscope.index') }}" data-slug="horoscope">
				        		<div class="font-nav-r col-12 no-pad">
					        		Horoskop
					        		<!--<div class="outline">-->
						        	<!--	Horoskop-->
						        	<!--</div>-->

						        	<div class="front">
						        		Horoskop
						        	</div>
						        </div>
				        	</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ route('events.index') }}" data-slug="events-n-gallery">
				        		<div class="font-nav-r col-12 no-pad" >
					        		Galeri<br>
						        	Gaul
					        		<!--<div class="outline">-->
						        	<!--	Galeri<br>-->
						        	<!--	Gaul-->
						        	<!--</div>-->

						        	<div class="front">
						        		Galeri<br>
						        		Gaul
						        	</div>
						        </div>
				        	</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ asset('/games') }}" data-slug="games">
				        		<div class="font-nav-r col-12 no-pad" >
					        		Games
					        		<!--<div class="outline">-->
						        	<!--	Games-->
						        	<!--</div>-->

						        	<div class="front">
						        		Games
						        	</div>
						        </div>
				        	</a>
				      	</li>
				      	<!-- Revamp End -->
			    	</ul>

			    	<ul class="ml-auto navbar-nav mobile">
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ asset('/generasi-masa-kini') }}" data-slug="generasi-masa-kini">
				        		<div class="font-poppins col-12 no-pad">
					        		Generasi Masa Kini
				        		</div>
				        	</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ asset('/cari-terus-rasamu') }}" data-slug="cari-terus-rasamu">
				        		<div class="font-poppins col-12 no-pad" >
					        		Cari Terus Rasamu
						        </div>
				        	</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ asset('/products') }}" data-slug="products">
				        		<div class="font-poppins col-12 no-pad">
					        		Produk
				        		</div>
				        	</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ asset('/horoscope') }}" data-slug="horoscope">
				        		<div class="font-poppins col-12 no-pad">
					        		Horoskop
						        </div>
				        	</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ asset('/events-n-gallery') }}" data-slug="events-n-gallery">
				        		<div class="font-poppins col-12 no-pad" >
					        		Galeri Gaul
						        </div>
				        	</a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="{{ asset('/games') }}" data-slug="games">
				        		<div class="font-poppins col-12 no-pad" >
					        		Games
						        </div>
				        	</a>
				      	</li>
				      	<li class="nav-item">
				      		<div class="mr-auto ml-auto col-8 no-pad">
					        	<a class="nav-socmed" href="https://www.facebook.com/GoodDayID" target="_blank">
									<img src="{{ asset('images/object/floating-item-2.png') }}">
					        	</a>
					        	<a class="nav-socmed" href="https://twitter.com/gooddayID" target="_blank">
									<img src="{{ asset('images/object/floating-item-3.png') }}">
					        	</a>
					        	<a class="nav-socmed" href="http://instagram.com/gooddayID" target="_blank">
									<img src="{{ asset('images/object/floating-item-4.png') }}">
					        	</a>
					        	<a class="nav-socmed" href="https://www.youtube.com/channel/UCh-vElC5HXwWNj3EN82PetQ" target="_blank">
									<img src="{{ asset('images/object/floating-item-5.png') }}">
					        	</a>
					        	<a class="nav-socmed" href="mailto:support@hidupbanyakrasa.com" target="_blank">
									<img src="{{ asset('images/object/floating-item-6.png') }}">
					        	</a>
				      		</div>
				      	</li>
			    	</ul>
			  	</div>
			</nav>
		</div>
	</div>

	<div class="floating desktop">
		<div class="inner-floating">
			<div class="obj">
				<img src="{{ asset('images/object/floating-item-1.png') }}">
			</div>
			<div class="obj">
				<a href="https://www.facebook.com/GoodDayID" target="_blank">
					<img src="{{ asset('images/object/floating-item-2.png') }}">
				</a>
			</div>
			<div class="obj">
				<a href="https://twitter.com/gooddayID" target="_blank">
					<img src="{{ asset('images/object/floating-item-3.png') }}">
				</a>
			</div>
			<div class="obj">
				<a href="http://instagram.com/gooddayID" target="_blank">
					<img src="{{ asset('images/object/floating-item-4.png') }}">
				</a>
			</div>
			<div class="obj">
				<a href="https://www.youtube.com/channel/UCh-vElC5HXwWNj3EN82PetQ" target="_blank">
					<img src="{{ asset('images/object/floating-item-5.png') }}">
				</a>
			</div>
			<div class="obj">
				<a href="mailto:support@hidupbanyakrasa.com" target="_blank">
					<img src="{{ asset('images/object/floating-item-6.png') }}">
				</a>
			</div>
		</div>
	</div>

	<div class="container-fluid no-pad" id="content">
		@yield('content')
	</div>

	@if(Request::segment(2) != '17-agustus')
	<div class="container-fluid footer" id="footer" style="margin-top:auto;">
		<div class="container">
			<div class="row inner-footer">
				<div class="col-12 copyright">
					&copy; {{ date('Y') }} Good Day Copyright. All rightreserved.
				</div>
			</div>
		</div>
	</div>

	<!--
	<div class="modal fade popupgmh" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="vertical-alignment-helper">
		  	<div class="modal-dialog vertical-align-center">
		    	<div class="modal-content">
		    		<style type="text/css">
		    			.vertical-alignment-helper {
						    display:table;
						    height: 100%;
						    width: 100%;
						    pointer-events:none;
						}
						.vertical-align-center {
						    /* To center vertically */
						    display: table-cell;
						    vertical-align: middle;
						    pointer-events:none;
						}
						.modal-content {
						    /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
						    width:inherit;
						 	max-width:inherit; /* For Bootstrap 4 - to avoid the modal window stretching full width */
						    height:inherit;
						    /* To center horizontally */
						    margin: 0 auto;
						    pointer-events:all;
						}
						.btn-gmh-close{
							position: absolute;
						    right: -10px;
						    top: -10px;
						    border-radius: 100%;
						    background: #fed444;
						    width: 27px;
						    height: 26px;
						    text-align: center;
						    opacity: 1;
						    text-shadow: unset;
						    color: #eb2325;
						    font-size: 20px;
						    padding-top: 3px;
						    padding-left: 1px;
						}
		    		</style>
		    		 <a href="javascript:void(0);" class="close btn-gmh-close" data-dismiss="modal">
		    		 	<span aria-hidden="true" style="margin: 0 auto; text-align: center;">&times;</span>
		    		 	<span class="sr-only">Close</span>
                    </a>
		    		<a href="https://www.gooddaymilyaranhadiah.com/" target="_blank">
		      			<img src="{{ asset('images/popup01-01.jpg') }}" width="100%" style="padding: 5px;" />
		    		</a>
		    	</div>
		  	</div>
		</div>
	</div>
	-->
	@endif

	@if(Request::segment(1) == 'picture-art')
		<!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
		<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!-- <script src="{{ asset('js/fabric.min.js') }}"></script> -->
		<script src="{{ asset('plugins/kitchensink/utils.js?') }}{{ $data['date'] }}"></script>
		<script src="{{ asset('plugins/kitchensink/app_config.js') }}"></script>
		<script src="{{ asset('plugins/kitchensink/controller.js?') }}{{ $data['date'] }}"></script>
		<script src="{{ asset('js/webcam.min.js') }}"></script>

		<script>
			var canvasWidth,canvasHeight,frameDefault;
		  	var kitchensink = { };
		  	var canvas 		= new fabric.Canvas('canvas');
		  	var widthScreen = $(window).width();

		  	@if(Request::segment(2) == 'story' || Request::segment(2) == 'story-mobile')
				canvasWidth  = 360;
			  	canvasHeight = 640;
			  	frameDefault = "{{ asset('images/pictureart/gd-frame-pt-2.png') }}";
		  	@else
		  		if(widthScreen < 768){
				  	canvasWidth  = 370;
				  	canvasHeight = 370;
		  		}else{
				  	canvasWidth  = 600;
				  	canvasHeight = 600;
		  		}

		  		@if(Request::segment(2) == '17-agustus')
			  		@if(Request::segment(3) == 'story' || Request::segment(3) == 'story-mobile')
						canvasWidth  = 360;
					  	canvasHeight = 640;

			  			frameDefault = "{{ asset('images/pictureart/17agustus2020/frame-17an-story.png') }}";
					@else
			  			frameDefault = "{{ asset('images/pictureart/17agustus2020/frame-17an-feed.png') }}";
					@endif
		  		@else
			  		frameDefault = "{{ asset('images/pictureart/gd-frame-sq-2.png') }}";
		  		@endif
		  	@endif

		  	function addFrame(url,xname){
				fabric.Image.fromURL(url, function(myImg) {
				 	//i create an extra var for to change some image properties
				 	var imgF = myImg.set({ left: 0, top: 0, evented:false, selectable: false, name:xname});

					myImg.scaleToHeight(canvasHeight);
	                myImg.scaleToWidth(canvasWidth);

				 	canvas.add(imgF);
				});

				return true;
		  	}

		  	$(document).ready(function(){
			  	if(widthScreen < 768){
				  	widthCam = 480;
				  	heightCam = 640;

			  		@if(Request::segment(2) != 'feed-mobile' && Request::segment(2) != 'story-mobile')
			  			@if(Request::segment(2) == '17-agustus')
			  				@php $uri3 = Request::segment(3); @endphp

			  				@if(isset($uri3) && Request::segment(3) != 'canvas' && Request::segment(3) != 'feed-mobile' && Request::segment(3) != 'story-mobile')
				  				@if(Request::segment(3) == 'feed')
				  					window.location.href = "{{ asset('/picture-art/17-agustus/feed-mobile') }}";
				  				@elseif(Request::segment(3) == 'story')
				  					window.location.href = "{{ asset('/picture-art/17-agustus/story-mobile') }}";
				  				@else
				  					window.location.href = "{{ asset('/picture-art/17-agustus/') }}";
				  				@endif
			  				@endif
			  			@else
				  			window.location.href = "{{ asset('/picture-art/feed-mobile') }}";
						@endif
			  		@endif

			  		@if(Request::segment(2) != 'story' && Request::segment(2) != 'story-mobile')
			  			@if(Request::segment(2) == '17-agustus')
			  				$(".modal-chooseCanvas").modal('hide');
			  			@else
					  		$(".modal-chooseCanvas").modal('show');
						@endif
				  	@endif
			  	}else{
				  	var bgheight = document.getElementById('bg-picture-art').offsetHeight;
				  		bgheight = parseInt(bgheight) + parseInt(90);
				  		widthCam = 640;
				  		heightCam = 480;

				  	$("#picture-art").css('margin-top', 0 - bgheight);

			  		@if(Request::segment(2) != 'story' && Request::segment(2) != 'story-mobile')
				  		// $(".modal-chooseCanvas").modal('show');
				  	@endif
			  	}

				$("#changeFrame").on('click', function(e){
					var activeObject = function (ObjectName) {
					    canvas.getObjects().forEach(function(o) {
					        if(o.id === "frameGD") {
					            canvas.setActiveObject(o);
					        }
					    })
					}

					canvas.remove(activeObject);

					var arr = ["GD-Frame-IG-Post-02.png", "GD-Frame-IG-Post-03.png", "GD-Frame-IG-Post-04.png"];
					var frameSelect = arr[Math.floor(Math.random() * arr.length)];

					addFrame("{{ asset('images/object') }}"+"/"+frameSelect,"frameGD")
				});

				$('#takePhoto').on('click', function(e){
					$(".modal-chooseUpload").modal('hide');
					$('.modal-takephoto').modal('show');

					Webcam.set({
						width: widthCam,
						height: heightCam,
						image_format: 'jpg',
						jpeg_quality: 90
					});
					Webcam.attach('#photoArea');
				});

				$('#snapShot').on('click', function(e){
			    	var tmpDataImg 	= $("#tmpDataimg").val();

					Webcam.snap( function(data_uri) {
						var img = new Image();
						var img2 = new Image();

						img.onload = function() {
						    var imgTop, imgLeft;
						    var height = img.height;
						    var width = img.width;

						    var ratioCanvas = canvasWidth/canvasHeight;
						    var ratioImage  = width/height;

						    var f_img = new fabric.Image(img);

							if(ratioImage >= ratioCanvas){
								f_img.scaleToHeight(canvasHeight, false);

								var deltaWidth = (canvasHeight*ratioImage - canvasWidth)/2;
								imgLeft = 0 - deltaWidth;
								imgTop  = 0;
							}else{
								f_img.scaleToWidth(canvasWidth, false);

								var deltaHeight = (canvasWidth/ratioImage - canvasHeight)/2;
								imgTop  = 0 - deltaHeight;
								imgLeft = 0;
							}

						    // var f_img = new fabric.Image(img);
						    // var f_img2 = new fabric.Image(img2);

						    // canvas.setBackgroundImage(f_img);
							canvas.setBackgroundImage(f_img, canvas.renderAll.bind(canvas), {
							    backgroundImageStretch: false,
							    top: imgTop,
							    left: imgLeft,
							   // scaleX: 1.09,
							   // scaleY: 1.09
							});


						    canvas.renderAll();
							// canvas.add(f_img2);

							if(tmpDataImg === ''){
								addFrame(frameDefault,"frameGD");
								$("#tmpDataimg").val(data_uri);

								$(".link-landing-canvas").remove();
								$(".landing-commands").remove();
						  		$('.sve').removeClass('disabled');
								$('.sve').removeAttr('disabled');
							}

							$("#linkimage").attr('href',data_uri);

							$('.modal-takephoto').modal('hide');
							$('.collapseCommand').tooltip('show');
						};

						img.src = data_uri;//myDataURL;
						// img2.src = "{{ asset('images/object/GD-Frame-IG-Post-02.png') }}";//myDataURL;
					});
				});

				$('.modal-takephoto').on('hidden.bs.modal', function (e) {

					Webcam.reset();
				});

				$('.collapseCommand').on('click',function(e){
					if($(this).hasClass('out')){
						$("#commands").addClass('open');
						$(this).addClass('in');
						$(this).removeClass('out');
						$('.collapseCommand').tooltip('hide');
					}else{
						$("#commands").removeClass('open');
						$(this).removeClass('in');
						$(this).addClass('out');
					}
				});

				$('.col-sticker a').on('click',function(e){
					console.log('asfsa');
					$('.collapseCommand').removeClass('in');
					$('.collapseCommand').addClass('out');
				});

				window.addEventListener('click', function(e){
				  	if (document.getElementById('outer-canvas').contains(e.target)){
						$('.rmv').removeClass('disabled');

				    	return true;
				  	}else if(document.getElementById('commands').contains(e.target)){
				  		$('.rmv').removeClass('disabled');

				  		return true;
				    }else{
						canvas.discardActiveObject();
						canvas.renderAll();

						$('.rmv').removeClass('disabled');
						$('.rmv').addClass('disabled');
				  	}
				});
			});
		</script>
	@elseif(Request::segment(1) == 'coloring' || Request::segment(1) == 'coloring-theraphy')
		<script src="{{ asset('js/jquery.min.js') }}"></script>

		<script src="{{ asset('js/color-picker.min.js') }}"></script>
		<script src="{{ asset('js/html-canvas.js?') }}{{ $data['date'] }}"></script>
	@else
		<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
		<script src="{{ asset('js/jquery-migrate-1.4.1.min.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
		<script src="{{ asset('js/custom.js?') }}{{ $data['date'] }}"></script>

        <!-- cdnjs Jquery Lazy https://github.com/dkern/jquery.lazy -->
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.plugins.min.js"></script>
	@endif

	<script>
        $(function($) {
            $("img.lazy").Lazy({
                 effect: 'fadeIn',
            });
        });
	    function downloadCanvas(link, canvasId, filename) {
	        link.href = document.getElementById(canvasId).toDataURL();
	        link.download = filename;
	    }

		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();

			@if(Request::segment(1) == 'coloring' || Request::segment(1) == 'coloring-theraphy')
				$.ajaxSetup({
			        headers: {
			            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			        }
			    });

				$(window).on('scroll', function () {
				  var $w = $(window);

				  	if($w.width() < 767){
				  		$('.header').css('left', $w.scrollLeft());
				  		$('#area-headline').css('left', $w.scrollLeft());
				  		$('.color-picker-container').css('left', $w.scrollLeft());
				  		$('#area-btn-preview').css('left', $w.scrollLeft());
				  		// $('.bottom').css('left', $w.scrollLeft());
				  		$('.footer').css('left', $w.scrollLeft());
					}
				});

				@if(Request::segment(2) == 'generasi-masa-kini')
					paintBucketApp.init_01();
				@elseif(Request::segment(2) == 'horoscope')
					paintBucketApp.init_02();
				@else
					paintBucketApp.init_03();
				@endif

			  	/* --- Color Picker --- */
				    var container = document.querySelector('.color-pallete'),
				        picker = new CP(container, false);
				    picker.fit = function() {
				        this.picker.style.left = this.picker.style.top = ""; // do nothing ...
				    };
				    picker.picker.classList.add('static');
				    picker.enter(container);
				    picker.on("change", function(color) {
				        // container.parentNode.style.backgroundColor = '#' + color;
				        $(".color-circle").removeClass("current");
				    	$("#current-color").css('background','#'+color);
				    	$("#color-hex").val('#'+color);

				    	$("#color-rgb").val(CP.HEX2RGB(color));

				    	var colrgb = $("#color-rgb").val();
				    	var splitrgb = colrgb.split(",");

				    	$("#color-r").val(splitrgb[0]);
				    	$("#color-g").val(splitrgb[1]);
				    	$("#color-b").val(splitrgb[2]);
				    });
			  	/* --- Color Picker --- */

			  	/* --- Temp Color Picker --- */
			  		$(".temp-color").click(function(){
			  			var colRGB 		= $(this).data('color');
			  			var splitColRGB = colRGB.split(',');

				    	$("#current-color").css('background','rgb('+colRGB+')');

				    	$("#color-rgb").val(colRGB);

				    	$("#color-r").val(splitColRGB[0]);
				    	$("#color-g").val(splitColRGB[1]);
				    	$("#color-b").val(splitColRGB[2]);
			  		})
			  	/* --- Temp Color Picker --- */

			    /* --- Color Filler --- */
			    	$(".coloring").click(function(){
			    		var color = $("#color-hex").val();

			    		$(this).find("div").css("background",color);
			    	})
			    /* --- Color Filler --- */

			    $("#undo").click(function(){

			    	paintBucketApp.undo();
			    })

			    $("#redo").click(function(){

			    	paintBucketApp.redo();
			    })

			    $("#preview").click(function(e){

			        e.preventDefault();

			        var canvas = document.getElementById("canvas");

					context = canvas.getContext("2d");
					context.globalCompositeOperation = "destination-over";// set to draw behind current content
					context.fillStyle = '#fff'; // <- background color // set background color
					context.fillRect(0, 0, canvas.width, canvas.height); // draw background / rect on entire canvas

			        var img    = canvas.toDataURL();
			        var role   = $(this).data('role');

			        $.ajax({
			           	type:'POST',
			           	url:"{{ asset('/coloring/parseTempImg') }}",
			           	data:{url:img,role:role},
			           	success:function(data){
						        var link   		= "{{ asset('/coloring/share/temp') }}"+"/"+"{{ urlencode(asset('export/temp')) }}"+data;
						        var linkTweet	= "http://www.twitter.com/intent/tweet?url="+"{{ asset('/coloring/share/temp') }}"+"/"+"{{ urlencode(asset('export/temp')) }}"+data+"?"+ new Date().getTime();

						        $("#text").val(link);
						        $('#img-preview').attr('src',img);
						        $('#dataURL').val(img);
						        $('#share').attr('onclick',"postToFeed('"+link+"','{{ asset('export/temp') }}"+data+"','','','')");
						        $('#tweet').attr('href',linkTweet);
						        $('#tweet').attr('onclick',"javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;");

						    	$("#coloring-canvas").hide();
						    	$("#coloring-preview").show();

								$('html,body').animate({
														scrollTop: $(".middle").offset().top,
														scrollLeft: 0
														},'slow');
			            }
			        });
				});

			    $("#cancel").click(function(){
			    	$(".main-overlay").fadeIn();
			    	$("#coloring-canvas").show();
			    	$("#coloring-preview").hide();

					$('html,body').animate({scrollTop: $(".middle").offset().top},'slow');
			    	$(".main-overlay").fadeOut('slow');
			    })

		      	document.getElementById('save').addEventListener('click', function(e) {
		  			var conf = confirm('Anda Yakin? Gambar yang sudah disave/export tidak dapat diubah/diedit lagi. jadi pastikan gambar sudah diwarnai secara sempurna ya :)');
		          	if(conf == true){
				        e.preventDefault();

			          	var imgURL = $("#dataURL").val();
			          	var role   = $(this).data('role');

				        $.ajax({
				           	type:'POST',
				           	url:"{{ asset('/coloring/getImage') }}",
				           	data:{imgURL:imgURL,role:role},
				           	success:function(data){
		          				if(data != 'failed'){
		          					// console.log("{{ asset('export') }}/"+data);

									$("#cancel").hide();
		          					var anchor = document.getElementById('download');//document.createElement('a');
									anchor.href = "{{ asset('') }}/"+data;//imgURL;
									anchor.target = '_blank';
									anchor.download = 'coloring.jpg';

									$("#download").removeAttr('style');
									$("#download").attr('style', 'visibility:visible; position: relative;');
									$("#save").hide();

									anchor.click();
		          				}else{
		          					alert(data);
		          				}
				           	}
				        });
		          	}else{
		          		alert('Tekan tombol Cancel untuk kembali mewarnai..');
		          	}
		      	}, false);
		    @endif

		    @if(Request::segment(1) == '' || Request::segment(1) == 'home')
		    	//$('.popupgmh').modal('show');
		    @endif
		});
	</script>

	@if(Request::segment(1) == 'picture-art')
	<script>
		/* --- DECLARE GLOBAL Fabric --- */
			// var canvasFX 	 = new fabric.Canvas('canvas');
			// var getRandomInt = fabric.util.getRandomInt;
		    // var percentage   = 1;

			// var fonts = ["Aracne Condensed", "BREAK BEACH", "Karmacoma", "engagement", "Under My Umbrella"];
		/* --- DECLARE GLOBAL Fabric --- */

		// function customSelector(){
			// 	canvasFX.on('object:selected', function (e) {
			//         e.target.transparentCorners = false;
			//         e.target.borderColor = '#000000';
			//         e.target.borderScaleFactor = 2;
			//         e.target.cornerColor = '#000000';
			//         e.target.cornerSize = 7.5;
			//         e.target.minScaleLimit = 2;
			//         e.target.cornerStrokeColor = '#000000';
			//         e.target.cornerStyle = 'circle';
			//         e.target.minScaleLimit = 0;
			//         e.target.lockScalingFlip = true;
			//     });
		// }

		function deleteObjects(){
			var activeObject = canvasFX.getActiveObject();

		    if (activeObject) {
		        if (confirm('Are you sure?')) {
		            canvasFX.remove(activeObject);
		        }
		    }
		}

		function loadAndUse(font) {
		  	var myfont = new FontFaceObserver(font)

		  	myfont.load().then(function() {

		      	// when font is loaded, use it.
		      	canvasFX.getActiveObject().set("fontFamily", font);
		      	canvasFX.requestRenderAll();
		    }).catch(function(e) {
		      	console.log(e)
		      	alert('font loading failed ' + font);
		    });
		}

		$(".write").click(function(){
	    	$(".overlay").fadeIn();

			$(".color-pallete").removeClass('active');

	        var canvas = document.getElementById("canvas");
	        var img    = canvas.toDataURL();
	        var role   = $(this).data('role');

	        // $.post(
	        // 		base_url+"colouring/parseTempImg",
	        // 		{url:img,role:role},
	        // 		function(data){
				     //    var link   		= base_url+"colouring/share/temp/"+encodeURIComponent(base_url+"export/temp/")+data;
				     //    var linkTweet	= "http://www.twitter.com/intent/tweet?url="+base_url+"colouring/share/temp/"+encodeURIComponent(encodeURIComponent(base_url+"export/temp/"))+data+"?"+ new Date().getTime();

				        // $("#text").val(link);
				        $('#img-preview').attr('src',img);
				        $('#dataURL').val(img);

				    	$("#canvasDiv").hide();
				    	$("#canvasCaption").show();

				    	$("#main-picker").hide();
				    	$("#ecard-picker").show();
		    			$("#tools-fabric").show();
		    			$(".write").hide();
		    			$(".btnshare").show();
		    			$("#preview").hide();

		    			$(".color-section").hide();
		    			$(".ecard-section").show();

						$('html,body').animate({
												scrollTop: $("#middle").offset().top,
												scrollLeft: 0
												},'slow');

	        			window.scrollTo(0,0);

						// clear canvas
						canvasFX.clear();

						fabric.Image.fromURL(img, function(myImg) {
						 	var img1 = myImg.set({ left: 0, top: 0 ,width:0,height:0});
						 	canvasFX.add(img1);
						});

						//Add Coloring Image
						fabric.Image.fromURL(img, function(dimg) {
					         // add background image
							 var img1 = dimg.set({ left: 0, top: 0 ,width:canvasFX.width*percentage,height:canvasFX.height*percentage});
					         canvasFX.setBackgroundColor('rgb(255,255,255)');
					         canvasFX.setBackgroundImage(img1);
					    });

						$(".overlay").fadeOut('slow');
	        // 		}
	       	// );
	    });

	    $(".actFabric").click(function(){
	    	var command = $(this).data('command');
			var colorR 	= $("#color-r").val();
			var colorG 	= $("#color-g").val();
			var colorB 	= $("#color-b").val();

			var color   = 'rgb('+colorR+','+colorG+','+colorB+')';

			switch(command) {
				case 'browseImage':
					$('#uploadphoto').click();

			      	break;
				case 'addImage':
			      	fabric.Image.fromURL('https://ramadhan.hidupbanyakrasa.com/ecard/assets/img/gallery/logo.png', function(image) {
				        image.set({
				          left: 130,
				          top: canvasFX.height/2,
				          angle: 0,
				          cornersize:10,
				        })
				        .scale(1)
				        .setCoords();

				        canvasFX.add(image);
			      	});

			      	break;
			    case 'addCircle':
					// adding circle
					var circle = new fabric.Circle({
					    left: 200,
					    top: canvasFX.height/2,
					    radius: 50,
					    fill: color
					});
					circle.hasRotatingPoint = true;
					canvasFX.add(circle);

			        break;
			    case 'addTriangle':
					// adding triangle
					var triangle = new fabric.Triangle({
					    left: 130,
					    top: canvasFX.height/2,
					    // strokeWidth: 1,
					    width:70,height:90,
					    // stroke: 'black',
					    fill:color,
					    selectable: true,
					    originX: 'center'
					});
					triangle.hasRotatingPoint = true;
					canvasFX.add(triangle);

			        break;
			    case 'addSquare':
					// adding rectangle
					var square = new fabric.Rect({
					    width:90,
					    height:90,
					    left: 370,
					    top: canvasFX.height/2,
						fill: color//'rgb(0,255,0)'//'rgb(255,0,0)'
					});
					square.hasRotatingPoint = true;
					canvasFX.add(square);

			        break;
			    case 'addText':
				    // adding text
					var text = 'Selamat Menunaikan\nIbadah Puasa...';

					if($("#changeFont").val() == '' || $("#changeFont").val() == 'null' || $("#changeFont").val() == null){
						var fontstyle = 'Aracne Condensed';
					}else{
						var fontstyle = $("#changeFont").val();
					}

				    var textSample = new fabric.Textbox(text, {
				      	fontSize: 36,
				      	left: canvasFX.width/2,
				      	top: canvasFX.height*9/10,
				      	fontFamily: fontstyle,
				      	textAlign: 'center',
				      	// angle: 0,
				      	fill: color,//'#000000',
				      	fontWeight: '',
				      	originX: 'center',
				      	originY: 'center',
				      	width: 300,
				      	height: 200,
				      	hasRotatingPoint: true,
				      	centerTransform: true
				    });

				    canvasFX.add(textSample);

			    	break;
			    case 'deleteObject':
			        deleteObjects();

			        break;
			    default:

			        var x;
			}

			customSelector();
	    });

	    $('#uploadphoto').on('change',function(event){
			var img = new Image();

	    	var tmppath 	= URL.createObjectURL(event.target.files[0]);
	    	var tmpDataImg 	= $("#tmpDataimg").val();
			// addImageGlobal(tmppath,0.1,0.25);
			// customSelector();

			img.onload = function() {
			    var imgTop, imgLeft;
			    var height = img.height;
			    var width = img.width;

			    var ratioCanvas = canvasWidth/canvasHeight;
			    var ratioImage  = width/height;

			    var f_img = new fabric.Image(img);

				if(ratioImage >= ratioCanvas){
					f_img.scaleToHeight(canvasHeight, false);

					var deltaWidth = (canvasHeight*ratioImage - canvasWidth)/2;
					imgLeft = 0 - deltaWidth;
					imgTop  = 0;
				}else{
					f_img.scaleToWidth(canvasWidth, false);

					var deltaHeight = (canvasWidth/ratioImage - canvasHeight)/2;
					imgTop  = 0 - deltaHeight;
					imgLeft = 0;
				}

			    // canvas.setBackgroundImage(f_img);
				canvas.setBackgroundImage(f_img, canvas.renderAll.bind(canvas), {
				    backgroundImageStretch: false,
				    top: imgTop,
				    left: imgLeft,
	    		});

				if(tmpDataImg === ''){
					if(tmppath){
						addFrame(frameDefault,"frameGD");
						$("#tmpDataimg").val(tmppath);
						$(".link-landing-canvas").remove();
						$(".landing-commands").remove();

						$(".modal-chooseUpload").modal('hide');
				  		$('.sve').removeClass('disabled');
						$('.sve').removeAttr('disabled');

						$('.collapseCommand').tooltip('show');
					}
				}
			};

			img.src = tmppath;
	    });

	    $("#changeFont").change(function(){
	        var tObj = canvasFX.getActiveObject();

	        if(tObj){
		        tObj.set({
		            fontFamily: $(this).val(),
		        });
		        canvasFX.renderAll();
	        }

	        // loadAndUse($(this).val());
	    });

	    $("#save").click(function(){
	        var canvas = document.getElementById("canvas");
	        var img    = canvas.toDataURL();
			var anchor = document.getElementById('downloadart');

	        // window.location.href = img;
	        $(".imgPreview").attr('src',img);
			anchor.href = img;


	        $(".modal-resultphoto").modal('show');
	    });

	  //   $("#downloadart").click(function(){
			// var anchor = document.getElementById('download');
			// var urlimg = $("#tmpDataimg").val();

			// anchor.href = urlimg;
			// anchor.target = '_blank';
			// anchor.download = 'photo_art.jpg';
	  //   });
	</script>
	@endif

	 <!--Revamp start-->
	<script>

		$(document).ready(function(){

	    	var windowsize = $(window).width();

	    	if (windowsize < 758) {

	    		$('.other-products').slick({
				  infinite: true,
				  slidesToShow: 1,
				  slidesToScroll: 1
				});

				$('.receipts').slick({
				  infinite: true,
				  slidesToShow: 1,
				  slidesToScroll: 1
				});


	    	} else {

	    		$('.other-products').slick({
				  infinite: true,
				  slidesToShow: 3,
				  slidesToScroll: 3
				});

				$('.receipts').slick({
				  infinite: true,
				  slidesToShow: 3,
				  slidesToScroll: 3
				});

	    	}

	    });


	    var url = window.location.hash;

	    if (url.match('#')) {
	    	console.log(url);

	    	$(document).ready(function() {

	    	  $(window).load(function(){
	    	    window.location.hash = url;
	    	  })

	    	  $('#tiramissu-bliss-coffee').removeClass('slick-active');
	    	  $('#tiramissu-bliss-coffee').removeClass('slick-current');
	    	  $('#coolin-coffee').removeClass('slick-active');
	    	  $('#coolin-coffee').removeClass('slick-current');
			  $(url).addClass('slick-active');
	    	  $(url).addClass('slick-current');

	    	});

	    } else {
	    	$(document).ready(function() {
	    		var Id = $('.slick-active').attr('id');
	    	 	// console.log(Id);
	    	 	// window.location.hash = Id;
	    	});
	    }

	    $(document).ready(function() {
	    	$( ".slick-next" ).click(function() {
				var Id = $('.slick-active').attr('id');
		   		window.location.hash = Id;
			});

			$( ".slick-prev" ).click(function() {
				var Id = $('.slick-active').attr('id');
		    	window.location.hash = Id;
			});
	    })


	</script>

	 @if(Request::segment(1) == 'product-')
	@endif

	<script type="text/javascript">
	    $(window).on('load', function() {
	        $('#bannerGDGC').modal('show');
	    });
	</script>
    <!--Revamp end-->

    @stack('after-script')
</body>
</html>
