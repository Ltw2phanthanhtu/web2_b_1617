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

<body>
  <div class="module-04">
    <div class="container">
      <div class="row">
        <div class="txt">
          <div class="txt1">
            <p>Until I discovered cooking I was never really<br>interested in anything</p>
          </div>
          <div class="txt2">
            <p>Our Founder John Phillipe</p>
          </div>
          <div class="txt3">
            <p>John Phillipe</p>
          </div>
        </div>
        <div class="img">
          <div class="img_content">
              <div class="img_content1">
              
              <img class="img01" src="images/img-04.jpg">

              </div>
              <div class="img04_content2">
                <h2 class="txt1">
                  <span class="txtspan">Discover</span>
                  Our Story
                </h2>
                <div class="txt2">Ultimate dining experience like no other</div>
                <div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade.</div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>