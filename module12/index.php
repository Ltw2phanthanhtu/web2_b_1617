<html>
<head>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <?php
  if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
  }
  $less = new lessc;
  $less->compileFile('less/1.less', 'css/1.css');
  ?>
  <link href="css/1.css" rel="stylesheet" type="text/css" />

</head>

<body class="bg">

  <div class="container">
    <div class="row">
      <div class="txtproducts">
        <h2 class="text12">Related Products</h2>
        <div class="products">
          <div class="col-md-4">
            <div class="module-12">
              <a href="#">
                <img class="img12" src="images/img1.jpg">
                <h3 class="text12-1">Grilled Salmon Sushi</h3>
                <span class="price12">£17.55</span><br> 
              </a>
              <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="module-12">
              <a href="#">
                <img class="img12" src="images/img1.jpg">
                <h3 class="text12-1">Grilled Salmon Sushi</h3>
                 <span class="price12">£17.55</span><br> 
              </a>
              <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="module-12">
              <a href="#">
                <img class="img12" src="images/img1.jpg">
                <h3 class="text12-1">Grilled Salmon Sushi</h3>
                 <span class="price12">£17.55</span><br> 
              </a>
              <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
            </div>
          </div>
        </div>
      </div>


  </div>
</div>

</body>
</html>