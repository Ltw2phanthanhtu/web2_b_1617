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
  <div id="module2">
    <div class="col-md-4">
      <p><img src="images/logo@2x.png"></p>
    </div>
    <div class="col-md-8">
      <ul>
        <li><a href="#"><p>HOME <sup>  v </sup></p></a>
         <ul>
          <li><a href="#">Home 1 - New</a></li>
          <li><a href="#">Home 2 - Classic</a></li>
          <li><a href="#">Home 3 - Simple</a></li>
          <li><a href="#">Home 4 - One Page</a></li>
          <li><a href="#">Home 5 - Parallax</a></li>
          <li><a href="#">Home 6 - Video</a></li>
        </ul>
      </li>
      <li><a href="#"><p>MENU <sup>  v </sup></p></a>
        <ul>
         <li><a href="#">Menu Mixed</a></li>
         <li><a href="#">Menu Classic</a></li>
         <li><a href="#">Menu Grid</a></li>
         <li><a href="#">Menu Gird Image</a></li>
         <li><a href="#">Menu Parallax</a></li>
       </ul>
     </li>
     <li><a href="#"><p>PAGES <sup>  v </sup></p></a></li>
     <li><a href="#"><p>DELIVERY <sup>  v </sup></p></a></li>
     <li><a href="#"><p>NEWS <sup>  v </sup></p></a>
      <ul>
        <li><a href="#">Right Sidebar</a></li>
        <li><a href="#">Left Sidebar</a></li>
        <li><a href="#">Fullwitch</a></li>
        <li><a href="#">Grid</a></li>
        <li><a href="#">Grid Left Sidebar</a></li>
        <li><a href="#">Grid Right Sidebar</a></li>
        <li><a href="#">Single Post</a></li>
      </ul>
    </li>
    <li> <button type="button"> RESERVATION </button></li>
  </ul>
</div>
</div>
</body>
</html>