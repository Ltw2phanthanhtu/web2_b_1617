<html>
<head>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

  <?php
  if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
  }
  $less = new lessc;
  $less->compileFile('less/1.less', 'css/1.css');
  ?>
  <link href="css/1.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div class="module-1">
  <div class="icon-top">
    <ul>
      <li class="facebook"><a target="_blank" href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
      <li class="twitter"><a target="_blank" href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
      <li class="youtube"><a target="_blank" title="Youtube" href="http://youtube.com"><i class="fa fa-youtube"></i></a></li> 
      <li class="pinterest"><a target="_blank" title="Pinterest" href="http://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li> 
      <li class="instagram"><a target="_blank" title="Instagram" href="http://instagram.com/#"><i class="fa fa-instagram"></i></a></li>
    </ul>
  </div>

<div class="menu-top">
    <ul>
      <li><a href="#">Menu</li>
      <li><a href="#">Cart</li>
      <li><a href="#">TestDrive</li>
      <li><a href="#">Purchase Theme</li>
    </ul>
  </div>

  <div class="top">
    <p class="top-map-marker"> <i class="fa fa-map-marker"></i> 732/21 Second Street, King Street, United Kingdom </p>
    <p class="top-phone"> <i class="fa fa-phone"></i> <a href="#">+65.4566743</a></p>
  </div>
</div>


</body>
</html>