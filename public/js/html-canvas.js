var paintBucketApp = (function () {

	"use strict";

	var resolution = $(window).width();
	document.getElementById("resl").innerHTML = resolution;

	var pathArray	= location.href.split( '/' );
	var protocol 	= pathArray[0];
	var host 		= pathArray[2];
	var base_url = protocol + '//' + host + '/'; // live
    // var base_url = base_url + "hidupbanyakrasa/"; // localhost

	if(resolution > 1399 && resolution < 4000){
		var canvasWidth = 1365;
		var canvasHeight = 1350;
		var drawingAreaWidth = 1362;
		var drawingAreaHeight = 1350;

		var diffWidth = resolution - canvasWidth;
		var padd 	  = (diffWidth/2) - 15;

		$(".middle").attr('style','padding : 0px '+padd+'px;');		
	}

	if(resolution > 990 && resolution < 1400){
		var canvasWidth = 915;
		var canvasHeight = 900;
		var drawingAreaWidth = 915;
		var drawingAreaHeight = 900;

		var diffWidth = resolution - canvasWidth;
		var padd 	  = (diffWidth/2) - 15;

		$(".middle").attr('style','padding : 0px '+padd+'px;');		
	}

	if(resolution < 991){
		if(/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream){
          	var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
          	var ver = [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];

          	if (ver[0] > 10) {

				var canvasWidth = 1365;
				var canvasHeight = 1350;
				var drawingAreaWidth = 1362;
				var drawingAreaHeight = 1350;

              	// alert('in: IOS' + ver + 'Display:' + resolution + 'Canvas:' + canvasWidth);

				$(".middle").attr('style','padding : 0px 5px;');		
				$("#canvasDiv").attr('style','min-width: 1365px;');		
				$("meta[name=viewport]").attr('content','=device-width, initial-scale=1, minimum-scale=0.5')
          	}else{
				var canvasWidth = 715;
				var canvasHeight = 700;
				var drawingAreaWidth = 712;
				var drawingAreaHeight = 700;

				var diffWidth = resolution - canvasWidth;
				var padd 	  = (diffWidth/2) - 15;

				if(padd > 0){
					$(".middle").attr('style','padding : 0px '+padd+'px;');		
				}else{
					$(".middle").attr('style','padding : 0px 5px;');		
					$("#canvasDiv").attr('style','min-width: 715px;');		
				}
          	}
        }else{
			var canvasWidth = 715;
			var canvasHeight = 700;
			var drawingAreaWidth = 712;
			var drawingAreaHeight = 700;

			var diffWidth = resolution - canvasWidth;
			var padd 	  = (diffWidth/2) - 15;

			if(padd > 0){
				$(".middle").attr('style','padding : 0px '+padd+'px;');		
			}else{
				$(".middle").attr('style','padding : 0px 5px;');		
				$("#canvasDiv").attr('style','min-width: 715px;');		
			}
        }
	}

	var context,
		colorPurple = {r: 203,g: 53,b: 148},
		curColor = colorPurple,
		outlineImage = new Image(),
		swatchImage = new Image(),
		backgroundImage = new Image(),

		swatchStartX = 0,
		swatchStartY = 0,
		swatchImageWidth = 0,
		swatchImageHeight = 0,

		drawingAreaX = 0,
		drawingAreaY = 0,

		colorLayerData,
		outlineLayerData,
		totalLoadResources = 3,
		curLoadResNum = 0,

        undoarr = new Array(),
        redoarr = new Array(),
        uc = 0,
        rc = 0,

		// Clears the canvas.
		clearCanvas = function () {

			context.clearRect(0, 0, context.canvas.width, context.canvas.height);
		},

		// Draw a color swatch
		drawColorSwatch = function (color, x, y) {

			context.beginPath();
			context.arc(x + 46, y + 23, 18, 0, Math.PI * 2, true);
			context.closePath();
			context.fillStyle = "rgb(" + color.r + "," + color.g + "," + color.b + ")";
			context.fill();

			if (curColor === color) {
				context.drawImage(swatchImage, 0, 0, 59, swatchImageHeight, x, y, 59, swatchImageHeight);
			} else {
				context.drawImage(swatchImage, x, y, swatchImageWidth, swatchImageHeight);
			}
		},

		// Draw the elements on the canvas
		redraw = function () {

			var locX,
				locY;

			// Make sure required resources are loaded before redrawing
			if (curLoadResNum < totalLoadResources) {
				return;
			}

			clearCanvas();

			// Draw the current state of the color layer to the canvas
			context.putImageData(colorLayerData, 0, 0);

            undoarr.push(context.getImageData(0, 0, canvasWidth, canvasHeight));
            redoarr = new Array();

			// Draw the background
			context.drawImage(backgroundImage, 0, 0, canvasWidth, canvasHeight);

			// Draw the color swatches
			/*
				locX = 52;
				locY = 19;
				drawColorSwatch(colorPurple, locX, locY);

				locY += 46;
				drawColorSwatch(colorGreen, locX, locY);

				locY += 46;
				drawColorSwatch(colorYellow, locX, locY);

				locY += 46;
				drawColorSwatch(colorBrown, locX, locY);
			*/

			// Draw the outline image on top of everything. We could move this to a separate 
			// canvas so we did not have to redraw this everyime.
			context.drawImage(outlineImage, drawingAreaX, drawingAreaY, drawingAreaWidth, drawingAreaHeight);
			$(".main-overlay").fadeOut('slow');
		},

		matchOutlineColor = function (r, g, b, a) {

			return (r + g + b < 100 && a === 255);
		},

		matchStartColor = function (pixelPos, startR, startG, startB) {

			var r = outlineLayerData.data[pixelPos],
				g = outlineLayerData.data[pixelPos + 1],
				b = outlineLayerData.data[pixelPos + 2],
				a = outlineLayerData.data[pixelPos + 3];

			// If current pixel of the outline image is black
			if (matchOutlineColor(r, g, b, a)) {
				return false;
			}

			r = colorLayerData.data[pixelPos];
			g = colorLayerData.data[pixelPos + 1];
			b = colorLayerData.data[pixelPos + 2];

			// If the current pixel matches the clicked color
			if (r === startR && g === startG && b === startB) {
				return true;
			}

			// If current pixel matches the new color
			if (r === curColor.r && g === curColor.g && b === curColor.b) {
				return false;
			}

			return true;
		},

		colorPixel = function (pixelPos, r, g, b, a) {

			colorLayerData.data[pixelPos] = r;
			colorLayerData.data[pixelPos + 1] = g;
			colorLayerData.data[pixelPos + 2] = b;
			colorLayerData.data[pixelPos + 3] = a !== undefined ? a : 255;
		},

		floodFill = function (startX, startY, startR, startG, startB) {

			var newPos,
				x,
				y,
				pixelPos,
				reachLeft,
				reachRight,
				drawingBoundLeft = drawingAreaX,
				drawingBoundTop = drawingAreaY,
				drawingBoundRight = drawingAreaX + drawingAreaWidth - 1,
				drawingBoundBottom = drawingAreaY + drawingAreaHeight - 1,
				pixelStack = [[startX, startY]];

			while (pixelStack.length) {

				newPos = pixelStack.pop();
				x = newPos[0];
				y = newPos[1];

				// Get current pixel position
				pixelPos = (y * canvasWidth + x) * 4;

				// Go up as long as the color matches and are inside the canvas
				while (y >= drawingBoundTop && matchStartColor(pixelPos, startR, startG, startB)) {
					y -= 1;
					pixelPos -= canvasWidth * 4;
				}

				pixelPos += canvasWidth * 4;
				y += 1;
				reachLeft = false;
				reachRight = false;

				// Go down as long as the color matches and in inside the canvas
				while (y <= drawingBoundBottom && matchStartColor(pixelPos, startR, startG, startB)) {
					y += 1;

					colorPixel(pixelPos, curColor.r, curColor.g, curColor.b);

					if (x > drawingBoundLeft) {
						if (matchStartColor(pixelPos - 4, startR, startG, startB)) {
							if (!reachLeft) {
								// Add pixel to stack
								pixelStack.push([x - 1, y]);
								reachLeft = true;
							}
						} else if (reachLeft) {
							reachLeft = false;
						}
					}

					if (x < drawingBoundRight) {
						if (matchStartColor(pixelPos + 4, startR, startG, startB)) {
							if (!reachRight) {
								// Add pixel to stack
								pixelStack.push([x + 1, y]);
								reachRight = true;
							}
						} else if (reachRight) {
							reachRight = false;
						}
					}

					pixelPos += canvasWidth * 4;
				}
			}
		},

		// Start painting with paint bucket tool starting from pixel specified by startX and startY
		paintAt = function (startX, startY) {

			var pixelPos = (startY * canvasWidth + startX) * 4,
				r = colorLayerData.data[pixelPos],
				g = colorLayerData.data[pixelPos + 1],
				b = colorLayerData.data[pixelPos + 2],
				a = colorLayerData.data[pixelPos + 3];

			if (r === curColor.r && g === curColor.g && b === curColor.b) {
				// Return because trying to fill with the same color
				return;
			}

			if (matchOutlineColor(r, g, b, a)) {
				// Return because clicked outline
				return;
			}

			floodFill(startX, startY, r, g, b);

			redraw();
		},

		// Add mouse event listeners to the canvas
		createMouseEvents = function () {

			$('#canvas').mousedown(function (e) {
				// Mouse down location
				var canvasDivx = document.getElementById("inner-middle"),
					canvasDivy1 = document.getElementById("coloring-canvas"),
					canvasDivy2 = document.getElementById("coloring-book"),
					canvasDivy = parseInt(canvasDivy1.offsetTop) + parseInt(canvasDivy2.offsetTop);

				// var mouseX = (e.pageX) - (canvasDivx.offsetLeft + 17), //(e.pageX - 218) - this.offsetLeft,
				var mouseX = (e.pageX) - (canvasDivx.offsetLeft + 32), //(e.pageX - 218) - this.offsetLeft,
					mouseY = (e.pageY) - (parseInt(canvasDivy) + 4); //(e.pageY - 291) - this.offsetTop;

				// alert(e.pageX+'-'+e.pageY+' | '+mouseX+'-'+mouseY);
				// alert(canvasDivx.offsetLeft+' - '+canvasDivy);

				var curRVal = $("#color-r").val();
				var curGVal = $("#color-g").val();
				var curBVal = $("#color-b").val();

				var currentVal = {r:parseInt(curRVal),g:parseInt(curGVal),b:parseInt(curBVal)};
				curColor = currentVal;

				// Mouse click location on drawing area
				paintAt(mouseX, mouseY);
			});
		},

		// Calls the redraw function after all neccessary resources are loaded.
		resourceLoaded = function () {

			curLoadResNum += 1;
			if (curLoadResNum === totalLoadResources) {
				createMouseEvents();
				redraw();
			}
		},

	    undoEvent = function () {
		    if (undoarr.length<=0)
		        return;

		    var a=undoarr.pop();
		    colorLayerData=a;
		    redoarr.push(a);
		    clearCanvas();
		    context.putImageData(a, 0, 0);
		    context.drawImage(backgroundImage, 0, 0, canvasWidth, canvasHeight);
		    context.drawImage(outlineImage, 0, 0, drawingAreaWidth, drawingAreaHeight);
		    // console.log(undoarr);
	    },

	    redoEvent = function () {
		    if (redoarr.length<=0)
		        return;
		    var a=redoarr.pop();
		    colorLayerData=a;
		    undoarr.push(a);
		    clearCanvas();
		    context.putImageData(a, 0, 0);
		    context.drawImage(backgroundImage, 0, 0, canvasWidth, canvasHeight);
		    context.drawImage(outlineImage, 0, 0, drawingAreaWidth, drawingAreaHeight);
		    // console.log(redoarr);
	    },

	    IOSVersion = function () {
            if (/iP(hone|od|ad)/.test(navigator.platform)) {
              // supports iOS 2.0 and later: <http://bit.ly/TJjs1V>
              var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
              return [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];
            }
	    },

		// Creates a canvas element, loads images, adds events, and draws the canvas for the first time.
		init_01 = function () {

			// Create the canvas (Neccessary for IE because it doesn't know what a canvas element is)
			var canvas = document.createElement('canvas');
			canvas.setAttribute('width', canvasWidth);
			canvas.setAttribute('height', canvasHeight);
			canvas.setAttribute('style','background-color:white; border:2px solid black; cursor:crosshair;');
			canvas.setAttribute('id', 'canvas');
			document.getElementById('canvasDiv').appendChild(canvas);

			if (typeof G_vmlCanvasManager !== "undefined") {
				canvas = G_vmlCanvasManager.initElement(canvas);
			}
			context = canvas.getContext("2d"); // Grab the 2d canvas context
			// Note: The above code is a workaround for IE 8 and lower. Otherwise we could have used:
			//     context = document.getElementById('canvas').getContext("2d");

			// Load images
			backgroundImage.onload = resourceLoaded;
			backgroundImage.src = "../requirement/images/coloring/goodday-canvas.png?"+ new Date().getTime();;

			swatchImage.onload = resourceLoaded;
			swatchImage.src = "../requirement/images/coloring/paint-outline.png?"+ new Date().getTime();;

			outlineImage.onload = function () {
				context.drawImage(outlineImage, drawingAreaX, drawingAreaY, drawingAreaWidth, drawingAreaHeight);

				// Test for cross origin security error (SECURITY_ERR: DOM Exception 18)
				try {
					outlineLayerData = context.getImageData(0, 0, canvasWidth, canvasHeight);
				} catch (ex) {
					window.alert("Application cannot be run locally. Please run on a server.");
					return;
				}
				clearCanvas();
				colorLayerData = context.getImageData(0, 0, canvasWidth, canvasHeight);
				resourceLoaded();
			};

			if(/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream){
              	var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
              	var ver = [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];

	          	if (ver[0] > 10) {
					// outlineImage.src = "requirement/images/coloring/Coloring-Book_ios11-02-01-new.png?" + new Date().getTime();;
					outlineImage.src = "../requirement/images/coloring/template-minigames-1-generasi-masa-kini.png?"+ new Date().getTime();;
	          	}else{
					// outlineImage.src = "requirement/images/coloring/Coloring-Book_Temp01_new.png?" + new Date().getTime();;
					outlineImage.src = "../requirement/images/coloring/template-minigames-1-generasi-masa-kini.png?"+ new Date().getTime();;
	          	}
			}else{
				//outlineImage.src = "requirement/images/coloring/Coloring Book_Temp01.png?"+ new Date().getTime();;
				outlineImage.src = "../requirement/images/coloring/template-minigames-1-generasi-masa-kini.png?"+ new Date().getTime();;
			}
		},

		init_02 = function () {

			// Create the canvas (Neccessary for IE because it doesn't know what a canvas element is)
			var canvas = document.createElement('canvas');
			canvas.setAttribute('width', canvasWidth);
			canvas.setAttribute('height', canvasHeight);
			canvas.setAttribute('style','background-color:white; border:2px solid black; cursor:crosshair;');
			canvas.setAttribute('id', 'canvas');
			document.getElementById('canvasDiv').appendChild(canvas);

			if (typeof G_vmlCanvasManager !== "undefined") {
				canvas = G_vmlCanvasManager.initElement(canvas);
			}
			context = canvas.getContext("2d"); // Grab the 2d canvas context
			// Note: The above code is a workaround for IE 8 and lower. Otherwise we could have used:
			//     context = document.getElementById('canvas').getContext("2d");

			// Load images
			backgroundImage.onload = resourceLoaded;
			backgroundImage.src = "../requirement/images/coloring/goodday-canvas.png?"+ new Date().getTime();;

			swatchImage.onload = resourceLoaded;
			swatchImage.src = "../requirement/images/coloring/paint-outline.png?"+ new Date().getTime();;

			outlineImage.onload = function () {
				context.drawImage(outlineImage, drawingAreaX, drawingAreaY, drawingAreaWidth, drawingAreaHeight);

				// Test for cross origin security error (SECURITY_ERR: DOM Exception 18)
				try {
					outlineLayerData = context.getImageData(0, 0, canvasWidth, canvasHeight);
				} catch (ex) {
					window.alert("Application cannot be run locally. Please run on a server.");
					return;
				}
				clearCanvas();
				colorLayerData = context.getImageData(0, 0, canvasWidth, canvasHeight);
				resourceLoaded();
			};

			if(/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream){
              	var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
              	var ver = [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];

	          	if (ver[0] > 10) {
					// outlineImage.src = "requirement/images/coloring/Coloring-Book_ios11-02-edit1.png?" + new Date().getTime();;
					outlineImage.src = "../requirement/images/coloring/template-minigames-2-horoscope.png?"+ new Date().getTime();;
	          	}else{
					// outlineImage.src = "requirement/images/coloring/Coloring-Book_Temp02_bold.png?" + new Date().getTime();;
					outlineImage.src = "../requirement/images/coloring/template-minigames-2-horoscope.png?"+ new Date().getTime();;
	          	}
			}else{
				// outlineImage.src = "requirement/images/coloring/Coloring Book_Temp02.png?"+ new Date().getTime();;
				outlineImage.src = "../requirement/images/coloring/template-minigames-2-horoscope.png?"+ new Date().getTime();;
			}
		},

		init_03 = function () {

			// Create the canvas (Neccessary for IE because it doesn't know what a canvas element is)
			var canvas = document.createElement('canvas');
			canvas.setAttribute('width', canvasWidth);
			canvas.setAttribute('height', canvasHeight);
			canvas.setAttribute('id', 'canvas');
			canvas.setAttribute('style','background-color:white; border:2px solid black; cursor:crosshair;');
			document.getElementById('canvasDiv').appendChild(canvas);

			if (typeof G_vmlCanvasManager !== "undefined") {
				canvas = G_vmlCanvasManager.initElement(canvas);
			}
			context = canvas.getContext("2d"); // Grab the 2d canvas context
			// Note: The above code is a workaround for IE 8 and lower. Otherwise we could have used:
			//     context = document.getElementById('canvas').getContext("2d");

			// Load images
			backgroundImage.onload = resourceLoaded;
			backgroundImage.src = "../requirement/images/coloring/goodday-canvas.png?" + new Date().getTime();;

			swatchImage.onload = resourceLoaded;
			swatchImage.src = "../requirement/images/coloring/paint-outline.png?" + new Date().getTime();;

			outlineImage.onload = function () {
				context.drawImage(outlineImage, drawingAreaX, drawingAreaY, drawingAreaWidth, drawingAreaHeight);

				// Test for cross origin security error (SECURITY_ERR: DOM Exception 18)
				try {
					outlineLayerData = context.getImageData(0, 0, canvasWidth, canvasHeight);
				} catch (ex) {
					window.alert("Application cannot be run locally. Please run on a server.");
					return;
				}
				clearCanvas();
				colorLayerData = context.getImageData(0, 0, canvasWidth, canvasHeight);
				resourceLoaded();
			};

			if(/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream){
              	var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
              	var ver = [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];

	          	if (ver[0] > 10) {
					outlineImage.src = "../requirement/images/coloring/template-minigames-3-products-new.png?"+ new Date().getTime();;
	          	}else{
					outlineImage.src = "../requirement/images/coloring/template-minigames-3-products-new.png?"+ new Date().getTime();;
	          	}
			}else{
				outlineImage.src = "../requirement/images/coloring/template-minigames-3-products-new.png?"+ new Date().getTime();;
			}
		};

	return {
		init_01: init_01,
		init_02: init_02,
		init_03: init_03,
		undo: undoEvent,
		redo: redoEvent,
	};
}());