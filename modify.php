<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TPA: Trans Planet Airlines - Modify Photo</title>
<link href="styles/main.css" rel="stylesheet" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/kineticjs/4.7.2/kinetic.min.js"></script>
<script src="scripts/canvas_resize.js"></script>
<script src="scripts/binaryajax.js"></script>
<script src="scripts/imageinfo.js"></script>
<script>
    window.onload = function (){
        var bg = localStorage.getItem('choice');
        var file = localStorage.getItem('uploadedFile');
        bg = 'images/' + bg;
        file = 'uploads/' + file;
        var sources = {
            bg: bg,
            file: file
        };
        ImageInfo.loadInfo(file,getDimentions);
        loadImages(sources,initStage);
        function getDimentions(){
            var width = ImageInfo.getField(file,"width") / 2;
            var height = ImageInfo.getField(file,"height") / 2;
            localStorage.setItem('imageWidth',width);
            localStorage.setItem('imageHeight',height);
        }
    };

</script>
</head>

<body onmousedown="return false;">
<div id="outerWrapper">
  <div id="header"><img src="images/logo.png" width="410" height="181" alt="TPA: Trans Planet Airlines" /><br>
  <img src="images/tpa_name.gif" width="373" height="37" alt="Trans Planet Airlines">
  </div>
  <div id="nav">
  <h1>Create Your Own Space Souvenir!</h1>
    <ul>
      <li><a href="index.php">START</a></li>
      <li><a href="beam-up.php">UPLOAD</a></li>
      <li><a href="modify.php">MODIFY</a></li>
      <li><a href=# id="saveImage">SAVE</a></li>
    </ul>
  </div>
<div id="content">
  <h1>Step 3: Reshape and drag your image into position</h1>
<div id="container"></div>
</div>
<div id="footer">
  <p>Copyright &copy; 2054 Trans Planet Airlines, LLC. All rights reserved</p>
</div></div>
</body>
</html>
