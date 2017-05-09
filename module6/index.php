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
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="fonts" rel="stylesheet" type="text/css" />
  <link href="css/images" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="module6">
    <div class="container">
      <div class="row">
       <div class="txt">
          <span>amazing</span>
        </div>
        <div class="txt1">
          <p>DELICIOUS</p>
        </div>
      </div>
        <div class="content">
          <div class="text">
            <h2 class="ppb-menu-title">STARTERS</h2>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">IMPORTED OYSTERS GRILL(5 PIECES)</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$15.5</span>
              </h5>
              <div class="menu_excerpt">Oysters / Veggie / Ginger</div>
            </div>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">PORK WITH ITALIAN SALASA VERDE</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$19.9</span>
              </h5>
              <div class="menu_excerpt">Pork / Tomatoes / Veggies</div>
            </div>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">sPIICY CRAB RAMEN</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$24.5</span>
              </h5>
              <div class="menu_excerpt">Crab / Veggie / Soup</div>
              <div class="menu_highlight">
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="menu_order">Order</div>
            </div>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">FRESH CRAB WITH LEMON</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$24.5</span>
              </h5>
              <div class="menu_excerpt">Crab / Lemon / Garlic</div>
              <div class="menu_order">Order</div>
            </div>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">FRESH CRAB WITH LEMON</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$24.5</span>
              </h5>
              <div class="menu_excerpt">Crab / Lemon / Garlic</div>
              <div class="menu_order">Order</div>
            </div>
          </div>
          <div class="image">
            
              <img class="img07" src="./images/img-06.jpg">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>