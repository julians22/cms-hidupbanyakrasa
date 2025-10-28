(function(global) {

    function capitalize(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }
  
    function pad(str, length) {
      while (str.length < length) {
        str = '0' + str;
      }
      return str;
    }
  
    var getRandomInt = fabric.util.getRandomInt;
    function getRandomColor() {
      return (
        pad(getRandomInt(0, 255).toString(16), 2) +
        pad(getRandomInt(0, 255).toString(16), 2) +
        pad(getRandomInt(0, 255).toString(16), 2)
      );
    }
  
    function getRandomNum(min, max) {
      return Math.random() * (max - min) + min;
    }
  
    function getRandomLeftTop() {
      var offset = 50;
      return {
        left: fabric.util.getRandomInt(0 + offset, 375 - offset),
        top: fabric.util.getRandomInt(0 + offset, 600 - offset)
      };
    }
  
    var supportsInputOfType = function(type) {
      return function() {
        var el = document.createElement('input');
        try {
          el.type = type;
        }
        catch(err) { }
        return el.type === type;
      };
    };

    function addImageGlobal(imageName, minScale, maxScale) {
      var coord = getRandomLeftTop();
  
      fabric.Image.fromURL(imageName, function(image) {
  
        image.set({
          left: coord.left,
          top: coord.top,
          angle: getRandomInt(-10, 10)
        })
        .scale(getRandomNum(minScale, maxScale))
        .setCoords();
  
        canvas.add(image);
      });

      customSelector();
    };

    function customSelector(){
      canvas.on('object:selected', function (e) {
          e.target.transparentCorners = false;
          e.target.borderColor = '#000000';
          e.target.borderScaleFactor = 2;
          e.target.cornerColor = '#000000';
          e.target.cornerSize = 7.5;
          e.target.cornerStrokeColor = '#000000';
          e.target.cornerStyle = 'circle';
          //e.target.padding = 5;
          //e.target.selectionDashArray = [10, 5];
          //e.target.borderDashArray = [10, 5];
          //e.target.cornerDashArray = [10, 5];
      });
    }
  
    var supportsSlider = supportsInputOfType('range'),
        supportsColorpicker = supportsInputOfType('color');
  
    global.getRandomNum = getRandomNum;
    global.getRandomInt = getRandomInt;
    global.getRandomColor = getRandomColor;
    global.getRandomLeftTop = getRandomLeftTop;
    global.supportsSlider = supportsSlider;
    global.supportsColorpicker = supportsColorpicker;
    global.capitalize = capitalize;
    global.addImageGlobal = addImageGlobal;
    global.customSelector = customSelector;
  
  })(this);