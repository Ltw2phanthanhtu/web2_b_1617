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
<div class="module-3">
  <div class="text">
    <p class="text-1">Welcome to</p>
    <p class="text-2">GRANDRESTAURANT</p>
    <p class="text-3">Making The Delicious Premium Food Since 1990 <br>
      Book Online Or Call (1800)456-6743 
    </p>
    <div class="cham-tron"></div>
      <div class="Khung">
        <a target="_blank" href="#"><i class="fa fa-cog"></i></a><br>
        <a target="_blank" href="#"><i class="fa fa-edit"></i></a><br>
        <a target="_blank" href="#"><i class="fa fa-book"></i></a><br>
        <a target="_blank" href="#"><i class="fa fa-shopping-basket"></i></a>
      </div>

  </div> 
</div>
</body>
</html>