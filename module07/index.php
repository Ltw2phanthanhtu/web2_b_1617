<html>
<head>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <?php
  if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
  }
  $less = new lessc;
  $less->compileFile('less/2.less', 'css/2.css');
  ?>
  <link href="css/2.css" rel="stylesheet" type="text/css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class="module-07">
    <div class="container">
      <div class="row">
        <div class="content">
          <div class="text">
            <h2 class="ppb-menu-title">Lunch Sets</h2>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">Imported Oysters Grill (5 Pieces)</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$15.5</span>
              </h5>
              <div class="menu_excerpt">Oysters / Veggie / Ginger</div>
            </div>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">Pork with Italian Salsa Verde</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$19.9</span>
              </h5>
              <div class="menu_excerpt">Pork / Tomatoes / Veggies</div>
            </div>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">Spicy Crab Ramen</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$20</span>
              </h5>
              <div class="menu_excerpt">Crab / Veggie / Soup</div>
              <div class="menu_order">Order</div>
            </div>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">Fresh Crab With Lemon</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$24.5</span>
              </h5>
              <div class="menu_excerpt">Crab / Lemon / Garlic</div>
              <div class="menu_highlight">
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="menu_order">Order</div>
            </div>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">Fresh Crab With Lemon</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$24.5</span>
              </h5>
              <div class="menu_excerpt">Crab / Lemon / Garlic</div>
              <div class="menu_order">Order</div>
            </div>
          </div>
          <div class="image">
            <a href="#">
              <img class="img07" src="./images/img07.jpg">
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>