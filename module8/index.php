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
<div class="module-8">
  <div class="hinh-module-8">
    <img src="images.jpg/module8">
  </div>
  <div class="Khung-module-8">
    <p class="our">our</p>
    <h2 class="Restaurant">RESTAURANT</h2>
    <p class="txt">CHECKOUT OUR RESTAURANT AND SPECIAL DISHES </p>
    <p>
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
        <a href="#" class="buttom">VIEW GALLERY</a>
  </div>
</div>

</body>
</html>