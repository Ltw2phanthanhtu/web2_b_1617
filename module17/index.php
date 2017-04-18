<html>
<head>
  <?php
  if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
  }
  $less = new lessc;
  $less->compileFile('less/1.less', 'css/1.css');
  ?>
  <link href="css/1.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="fonts/" rel='stylesheet' type='text/css'>
  <link href="images/" rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
  <div class="module17">
    <div class="container">
      <div class="row">
        <div class="douong">
          <div class="title1">  
            <h2 class="paratitle">
              <span class="wine">Wine</span>
              <br>Selection 
            </h2>
            <div class="clearfix"></div>                       
          </div>
          


          <div class="menudrink">

            <h2 class="title2">ALCOHOLIC BEVERAGES</h2>

            <div class="one_third">
              <div class="contentmenu">
                <h5 class="menupost">
                  <p class="menu_title">IMPORTED OYSTERS GRILL (5 PIECES)</p>
                  <p class="menu_dots"></p>
                  <p class="menu_price">$15.5</p>
                  <div class="detail">Oysters / Veggie / Ginger</div>
                </h5>
              </div>             
            </div>

           <div class="one_third">
              <div class="contentmenu">
                <h5 class="menupost">
                  <p class="menu_title">PORK WITH ITALIAN SALSA VERDE</p>
                  <p class="menu_dots"></p>
                  <p class="menu_price">$19.9</p>
                  <div class="detail">Pork / Tomatoes / Veggies</div>
                </h5>
              </div>             
            </div>


            <div class="one_third">
              <div class="contentmenu">
                <h5 class="menupost">
                  <p class="menu_title">SPICY CRAB RAMEN</p>
                  <p class="menu_dots"></p>
                  <p class="menu_price">$20</p>
                  <div class="detail">Crab / Veggie / Soup</div>
                  <div class="menu_order"><a href="#">Order</a></div>
                </h5>
              </div>             
            </div>


            <div class="one_third">
              <div class="contentmenu">
                <h5 class="menupost">
                  <p class="menu_title">FRESH CRAB WITH LEMON</p>
                  <p class="menu_dots"></p>
                  <p class="menu_price">$24.5</p>
                  <div class="detail">Crab / Lemon / Garlic</div>
                  <div class="menu_order"><a href="#">Order</a></div>
                </h5>
              </div>             
            </div>


             <div class="one_third">
              <div class="contentmenu">
                <h5 class="menupost">
                  <p class="menu_title">GRILLED SALMON SUSHI</p>
                  <p class="menu_dots"></p>
                  <p class="menu_price">$15.5</p>
                  <div class="detail">Rice / Salmon / Shoyu</div>
                  <div class="menu_order"><a href="#">Order</a></div>
                </h5>
              </div>             
            </div>

              <div class="one_third">
              <div class="contentmenu">
                <h5 class="menupost">
                  <p class="menu_title">FRIED CHICKEN SALAD</p>
                  <p class="menu_dots"></p>
                  <p class="menu_price">$12</p>
                  <div class="detail">Chicken / Butter / Veggies</div>
                  <div class="menu_order"><a href="#">Order</a></div>
                </h5>
              </div>             
            </div>


            <div class="one_third">
              <div class="contentmenu">
                <h5 class="menupost">
                  <p class="menu_title">ITALIAN SOURCE MUSHROOM</p>
                  <p class="menu_dots"></p>
                  <p class="menu_price">$19.9</p>
                  <div class="detail">Mushroom / Garlic / Veggies</div>
                  <div class="menu_order"><a href="#">Order</a></div>
                </h5>
              </div>             
            </div>


            <div class="one_third">
              <div class="contentmenu">
                <h5 class="menupost">
                  <p class="menu_title">FRIED POTATOES WITH GARLIC</p>
                  <p class="menu_dots"></p>
                  <p class="menu_price">$12</p>
                  <div class="detail">Potatoes / Olive Oil / Garlic</div>
                  <div class="menu_order"><a href="#">Order</a></div>
                </h5>
              </div>             
            </div>

             <div class="one_third">
              <div class="contentmenu">
                <h5 class="menupost">
                  <p class="menu_title">TUNA ROAST SOURCE</p>
                  <p class="menu_dots"></p>
                  <p class="menu_price">$24.5</p>
                  <div class="detail">Tuna / Potatoes / Rice</div>
                  <div class="menu_order"><a href="#">Order</a></div>
                </h5>
              </div>             
            </div>


             






          </div>
          
        </div>
        
      </div>
      
    </div>
    
  </div>


</body>
</html>