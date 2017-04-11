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

</head>

<body>
  <div class="module-07">
    <div class="container">
      <div class="row">
        <div class="content07">
          <div class="content-img07">
            <div class="content1">
              <h2 class="ppb-menu-title">Lunch Sets</h2>
              <div class="menu_content_classic">
                <h5 class="menu-post">
                  <span class="menu-title">Imported Oysters Grill (5 Pieces)</span>
                  <span class="menu-dots">................................................................</span>
                  <span class="menu-price">$15.5</span>
                </h5>
                <div>Oysters / Veggie / Ginger</div>
              </div>
              <div>
                <h5 class="menu_post">
                  <span class="menu_title">Pork with Italian Salsa Verde</span>
                  <span class="menu_dots"></span>
                  <span class="menu_price">$19.9</span>
                </h5>
                <div>Pork / Tomatoes / Veggies</div>
              </div>
            </div>

            <div class="image">

              <div class="image_wrapper">
                <a href="#">
                  <img class="img07" src="./images/img07.jpg">
                </a>
              </div>

            </div>


          </div>


        </div>
      </div>
    </div>
  </div>

</body>
</html>