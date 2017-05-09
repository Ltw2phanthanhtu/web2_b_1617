<html>
<head>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <?php 
  if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
  }
  $less = new lessc;
  $less->compileFile('less/1.less','css/1.css');
  ?>
  <link href="css/1.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="module10">
    <div class="col-md-7">
      <p> &copy; Copyright Grand Restaurant Theme Demo - Theme by ThemeGoods </p>
    </div>
    <div class="col-md-5">
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Our Cheft</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Delivery</a></li>
          <li><button type="button"> ^ </button></li>
        </ul>
    </div>
  </div>
</body>
</html>