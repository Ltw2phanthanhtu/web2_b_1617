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
  <div class="module13">
    <div class="container">
      <div class="row">
        <div class="detail">
          <div class="hinh">
            <a href="#"><img src="images/hinh1.jpg"></a>
          </div>
          <div class="chitiet">
            <h2 class="title">SALTED FRIED CHICKEN</h2>
            <p class="price">£12.00</p>
            <p class="description">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            <form class="number">
              <div class="quantity">
                <input type="number" step="1" min="1" name="quantity" value="1"  pattern="[0-9]*" inputmode="numeric">
                <button type="submit" class="addtocart">ADD TO CART</button>
                <p class="tag">Category:<a href="#">delivery</a></p>
                <p class="tag">Tag:<a href="#">delivery</a></p>
              </div>
            </form>
            
          </div>
          
        </div>
<div class="clearfix"></div>

<div class="tabmenu">
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">Description</label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">Review</label>

  <section id="content1">
    <h2>
      Product Description
    </h2>
    <p>
      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
    </p>
  </section>
    
  <section id="content2">

<p>Reviews<br>
  There are no reviews yet.<br>
  BE THE FIRST TO REVIEW “BAKED POTATO PIZZA”<br>
  Your email address will not be published. Required fields are marked *
</p>

    
  </section>
  
</div>

  







    </div>

  </div>
</div>

</body>
</html>