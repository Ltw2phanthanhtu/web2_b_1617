
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
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class="module15">
    <div class="container">
      <div class="row">
        <div class="content">
          <div class="text1">
            <h2 class="ppb-menu-title">MENUS OF THE DAY</h2>
          </div>
          <div class="text">
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">PAKED POTATO PIZZA</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$12</span>
              </h5>
              <div class="menu_excerpt">Potato / Bread / Chesse</div>
            </div>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">GRILLED PORK WITHH PRESERVED LEMONS</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$22</span>
              </h5>
              <div class="menu_excerpt">Pork / Lemons / Onions</div>
              <div class="menu_order">Order</div>
            </div>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">APPLE SMOKED CHICKEN WHITE SAUCE</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$18.9</span>
              </h5>
              <div class="menu_excerpt">Chicken / Apple / Tomatos</div>
              <div class="menu_order">Order</div>
            </div>
            <div class="menu_content_classic">
              <h5 class="menu-post">
                <span class="menu-title">GRILLED HANGER STEAK WITH HARISSA</span>
                <span class="menu-dots"></span>
                <span class="menu-price">$29.9</span>
              </h5>
              <div class="menu_excerpt">Beff / Onions / tomatos</div>
              <div class="menu_order">Order</div>
            </div>
          </div>
          <div class="text2">
           <div class="menu_content_classic2">
              <h5 class="menu-post2">
                <span class="menu-title2">IMPORTED OYSTERS GRILL (5 PIECES)</span>
                <span class="menu-dots2"></span>
                <span class="menu-price2">$15.5</span>
              </h5>
              <div class="menu_excerpt2">Oysters / Veggie / Ginger</div>
            </div>
            <div class="menu_content_classic2">
              <h5 class="menu-post2">
                <span class="menu-title2">PORK WITH ITALIAN SALSA VERDE</span>
                <span class="menu-dots2"></span>
                <span class="menu-price2">$19.9</span>
              </h5>
              <div class="menu_excerpt2">Pork / Tomatoes / Veggies</div>
              <div class="menu_highlight2">
                <i class="fa fa-star2" aria-hidden="true"></i>
              </div>
              <div class="menu_order2">Order</div>
            </div>
            <div class="menu_content_classic2">
              <h5 class="menu-post2">
                <span class="menu-title2">SPICY CARAB RAMEN</span>
                <span class="menu-dots2"></span>
                <span class="menu-price2">$20</span>
              </h5>
              <div class="menu_excerpt2">Crab / Veggie / Soup</div>
              <div class="menu_highlight2">
                <i class="fa fa-star2" aria-hidden="true"></i>
              </div>
              <div class="menu_order2">Order</div>
            </div>
            <div class="menu_content_classic2">
              <h5 class="menu-post2">
                <span class="menu-title2">FRESH CRAB WITH LEMON</span>
                <span class="menu-dots2"></span>
                <span class="menu-price2">$24.5</span>
              </h5>
              <div class="menu_excerpt2">Crab / Lemon / Garlic</div>
              <div class="menu_order2">Order</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>