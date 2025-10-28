function clickToggleArticle(){
	var nav = $('.justify-content-center');

	if(nav.hasClass('hide')){
		nav.removeClass('hide');
	}else{
		nav.addClass('hide');
	}
}

function clickToggleRecipe(){
	var nav = $('.tabs-recipe');

	if(nav.hasClass('hide')){
		nav.removeClass('hide');
	}else{
		nav.addClass('hide');
	}
}

function loadTVC(url){
	var strsplit = url.split('.be/');
	// console.log(strsplit);

	$('.tvc-modal .iframe').html('<iframe style="margin: 0 auto;" width="727" height="409" src="https://www.youtube.com/embed/'+strsplit[1]+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
}

function hover_obj(id){
	// $(".table-list").removeClass('hover');
		$('.icon a.hover [data-toggle="tooltip"]').tooltip("hide");
		$(".anchor-zodiak").removeClass('hover');

	// $(".table-list:nth-child("+id+")").addClass('hover');
		$(".icon:nth-child("+id+") a").addClass('hover');
			$('.icon:nth-child('+id+') a [data-toggle="tooltip"]').tooltip("show");

		return true;
}

function crossPlatformShare(url,id) {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		if (navigator.share) {
		   	navigator.share({
		       	title: 'Good Day ID',
		       	text: 'Karna hidup perlu banyak rasa!',
		       	url: url,
		     	})
		     	.then(() => console.log('Successful share'))
		     	.catch((error) => console.log('Error sharing', error));
		} else {
	   		console.log('Share not supported on this browser, do it the old way.'+url);
	 	}
	}else{
	    var copyText = document.getElementById(id);

	    copyText.select();

	    document.execCommand("copy");
	    alert("URL Copied to Clipboard");
	}
}

function share(target){
    /* Get the text field */
    var copyText = document.getElementById(target);

    /* Select the text field */
    copyText.select();

    /* Copy the text inside the text field */
    document.execCommand("copy");
    /* Alert the copied text */
    alert("URL Copied to Clipboard");
    // window.open($("#"+target).val(),'_blank');
}

$(function() {
	var pathArray	= location.href.split( '/' );
	var protocol 	= pathArray[0];
	var host 		= pathArray[2];
	var base_url 	= protocol + '//' + host + '/'; // live
	//var base_url 	= base_url + 'hidupbanyakrasa/'; // local

	var url      = window.location.href;
	var requrl   = url.replace(base_url,'');

	var exrequrl = requrl.split('/');
	var exurl 	 = url.split('/');
	var lasturl  = exurl[exurl.length-1];

	var resolution = $(window).width();

	/* --------------------------------------------------- */

	// console.log('%cGood Day','color:red; font-size: 50px; text-shadow: -1px -1px 0 #000,   1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: Arial Black')

	$(function () {
	  	$('[data-toggle="tooltip"]').tooltip();
	})

	if(exrequrl.length >= 1){
		var slug = exrequrl[0];

		$(".nav-link[data-slug="+slug+"]").addClass('active');
	}

	$(".article-item, .event-item").hover(
		function(){
			$(this).addClass("active");
			$(".tab-pane.active").addClass("hover");
		},
		function(){
			$(this).removeClass("active");
			$(".tab-pane.active").removeClass("hover");
		}
	);

	$('.recipes .nav-link').on('click', function (e) {
		e.preventDefault();

		var target = $(this.hash);

		$('.tab-pane').addClass('none');
		target.removeClass('none');

		target.fadeIn("200", function() {
			$('.slider-no-dots-arrow').slick('setPosition', 0);
	    });
	});

	$('.event-gallery .nav-link').on('click', function (e) {
		e.preventDefault();

		var target = $(this.hash);

		$('.tab-pane').addClass('none');
		target.removeClass('none');

		target.fadeIn("200", function() {
			$('.slider-for').slick('setPosition', 0);
			$('.slider-nav').slick('setPosition', 0);
	    });
	});

	/*$('.anchor-zodiak').on('click', function (e) {
		var data = $(this).data('id');
		var date = $(this).data('date');

		$(".horoscope-detail .title font").hide().html(data).fadeIn('slow');
		$(".horoscope-detail .title .outline").hide().html(data).fadeIn('slow');
		$(".horoscope-detail .title .front").hide().html(data).fadeIn('slow');

		$(".horoscope-detail .date .red").hide().html(date).fadeIn('slow');
	});*/

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		var isPaused = false;
		var time = 0;
	  	var interval = setInterval(function() {
	  		if(!isPaused){
	      		if(time > 11){
	      			time = 0;
	      		}

			   	time++;
			   	hover_obj(time);
		   	}
		}, 	2000);
	};

	// $('.crossPlatformShare').on('click', () => {
	//   var url = $(this).attr('data-url');

	//   if (navigator.share) {
	//     navigator.share({
	//         title: 'Good Day ID',
	//         text: 'Karna hidup perlu banyak rasa!',
	//         url: url,
	//       })
	//       .then(() => console.log('Successful share'))
	//       .catch((error) => console.log('Error sharing', error));
	//   } else {
	//     console.log('Share not supported on this browser, do it the old way.'+url);
	//   }
	// });

	/* --- SLICK --- */
		var no_dots_arrow_autoplay 	= $('.slider-no-dots-arrow').data('autoplay');
		var no_dots_autoplay 		= $('.slider-no-dots').data('autoplay');

		if(no_dots_autoplay == 'true'){
			no_dots_autoplay = no_dots_autoplay;
		}else{
			no_dots_autoplay = 'false';
		}

		if(no_dots_autoplay == 'true'){
			no_dots_autoplay = no_dots_autoplay;
		}else{
			no_dots_autoplay = 'false';
		}

		$('.slider-no-infinite').slick({
		  	dots: false,
		  	autoplay: false,
		  	infinite: false,
		  	speed: 300,
		  	slidesToShow: 1,
		  	slidesToScroll: 1,
		  	fade: true,
		  	arrows: true,
		  	responsive: [
		    	{
			      	breakpoint: 600,
			      	settings: {
			        	slidesToShow: 1,
			        	slidesToScroll: 1,
			        	autoplay: no_dots_autoplay,
			      	}
		    	}
		  	]
		});

		$('.slider-no-dots').slick({
		  	dots: false,
		  	autoplay: false,
		  	infinite: true,
		  	speed: 300,
		  	slidesToShow: 1,
		  	slidesToScroll: 1,
		  	fade: true,
		  	arrows: true,
		  	responsive: [
		    	{
			      	breakpoint: 600,
			      	settings: {
			        	slidesToShow: 1,
			        	slidesToScroll: 1,
			        	autoplay: no_dots_autoplay,
			      	}
		    	}
		  	]
		});

		$('.slider-no-dots-arrow').slick({
		  	dots: false,
		  	autoplay: false,//no_dots_arrow_autoplay,
		  	infinite: true,
		  	speed: 300,
		  	slidesToShow: 1,
		  	slidesToScroll: 1,
		  	fade: true,
		  	arrows: false,
		  	responsive: [
		    	{
			      	breakpoint: 600,
			      	settings: {
			        	slidesToShow: 1,
			        	slidesToScroll: 1,
		  				autoplay: no_dots_arrow_autoplay,
			      	}
		    	}
		  	]
		});

		$('.slider-for').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: true,
		  asNavFor: '.slider-nav'
		});

		$('.slider-nav').slick({
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  asNavFor: '.slider-for',
		  dots: false,
		  centerMode: false,
		  focusOnSelect: true,
		  arrows: true,
		  	responsive: [
		    	{
			      	breakpoint: 600,
			      	settings: {
					  slidesToShow: 3,
					  slidesToScroll: 1
			      	}
		    	}
		  	]
		});

	/* --- SLICK --- */


	/* --- AJAX --- */

		$.ajaxSetup({

	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    /*$(".products-detail [data-toggle=modal]").click(function(e){

	        e.preventDefault();

			var slug = $(this).data('slug');

	        $.ajax({
	           	type:'POST',
	           	url:base_url+'product-modal',
	           	data:{slug:slug},
	           	success:function(data){

	            	// console.log(data);

	              	$(".recipes-modal .iframe").html(data.youtube_url);
	           }
	        });
		});*/

	    $(".recipes-item [data-toggle=modal]").click(function(e){

	        e.preventDefault();

			var slug = $(this).data('slug');

	        $.ajax({
	           	type:'POST',
	           	url:base_url+'cari-terus-rasamu/modal',
	           	data:{slug:slug},
	           	success:function(data){

	            	// console.log(data);

	              	$(".recipes-modal .iframe").html(data.youtube_url);

	              	$(".recipes-modal .title p.no-gap").html(data.category);

	              	$(".recipes-modal .title h3").html(data.title);

	              	$(".recipes-modal .title p i").html(data.publish_date);

	              	$(".recipes-modal .main-content").html(data.description);

	              	$(".recipes-modal").modal('show');
	           }
	        });
		});

	    $(".anchor-zodiak").click(function(e){

	        e.preventDefault();

			var slug = $(this).data('id');
			var date = $(this).data('date');

			$("[data-id="+slug+"] img").tooltip('show');

	        $.ajax({
	           	type:'POST',
	           	url:base_url+'api/v1/horoscope/detail',
	           	data:{slug:slug},
	           	success:function(response){

                    let data = response.data;

					$(".horoscope-detail .title font").hide().html(slug).fadeIn('slow');
					$(".horoscope-detail .title .outline").hide().html(slug).fadeIn('slow');
					$(".horoscope-detail .title .front").hide().html(slug).fadeIn('slow');

					$(".horoscope-detail .date .red").hide().html(date).fadeIn('slow');

					$("p.general").hide().html(data.general).fadeIn('slow');
					$("p.love").hide().html(data.love).fadeIn('slow');
					$("p.money").hide().html(data.money).fadeIn('slow');

	            }
	        });
		});

	/* --- AJAX --- */
})
