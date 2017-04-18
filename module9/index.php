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
  <div class="module09">
    <div class="container">
      <div class="row">
        <div class="footer">
          <ul class="sidebar_ four">

            <li class="descrip">
              <div class="textwidget">
                <p><img src="images/logo_white.png"></p>
                <p class="text">Dolor church-key veniam, fap Bushwick mumblecore irure Vice consectetur 3 wolf moon sapiente literally quinoa.<br></p>
                <div class="social">
                  <ul>
                    <li class="facebook">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter">
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="youtube">
                      <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li class="pinterest">
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li class="instagram">
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>

            <li class="descrip2">
              <h2 class="widget_title">RECENT POSTS</h2>
              <ul class="tuongtu">
                <li>
                  <a href="#">
                    Black Spaghetti with Rock Shrimp</a>
                    <div class="thoigian">April 20, 2015</div>
                  </li>
                  <li>
                    <a href="#">
                      Cooking Food With Love</a>
                      <div class="thoigian">April 20, 2015</div>
                    </li>
                    <li>
                      <a href="#">
                        Modern Fusion Cusine</a>
                        <div class="thoigian">April 20, 2015</div>
                      </li>                
                    </ul>             
                  </li>
                

                  <li class="descrip3">
                    <h2 class="widget_title">ALLERY ON FLICKR</h2>
                    <ul class="flick">
                      <li><a href="#"><img src="images/hinh1.jpg"></a> </li>
                      <li><a href="#"><img src="images/hinh2.jpg"></a> </li>
                      <li><a href="#"><img src="images/hinh3.jpg"></a> </li>
                      <li><a href="#"><img src="images/hinh4.jpg"></a> </li>
                      <li><a href="#"><img src="images/hinh5.jpg"></a> </li>
                      <li><a href="#"><img src="images/hinh6.jpg"></a> </li>                  
                    </ul>             
                  </li>

                  <li class="descrip4">
                    <h2 class="widget_title">CONTACT INFO</h2>
                    <div class="textwidget">
                      <p><i class="fa fa-map-marker marginright"></i>   732/21 Second Street, Manchester, King Street, Kingston United Kingdom </p>
                      <p><i class="fa fa-phone marginright"></i><a href="#">   +65.4566743</a> </p>
                      <p><i class="fa fa-envelope marginright"></i><a href="#">   info@grandrestauranttheme.com</a> </p>
                      <p><i class="fa fa-globe marginright"></i>   grandrestauranttheme.com</p>
                    </div>
                  </li> 

                </ul>
              </div>
            </div>
          </div>
        </div>
      </body>
      </html>