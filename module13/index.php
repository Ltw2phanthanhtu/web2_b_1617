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
            <img src="demo1.jpg">
          </div>
          <div class="chitiet">
            <h2 class="title">SALTED FRIED CHICKEN</h2>
            <p class="price">£12.00</p>
            <p class="description">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            <div class="number"><input type="number" step="1" min="1" name="quantity" value="1"  pattern="[0-9]*" inputmode="numeric"></div>
            <button type="submit" class="addtocart">ADD TO CART</button>
            <p>Category:<a href="#">ABC</a></p>
            <p>Tag:<a href="#">ABC</a></p>
          </div>



          <div class="woocommerce-tabs wc-tabs-wrapper"> 
            <ul class="tabs wc-tabs"> 
              <li class="description_tab"> 
                <a href="#tab-description">Description</a> 
              </li> 
              <li class="reviews_tab active">
               <a href="#tab-reviews">Reviews (0)</a> 
             </li>
           </ul> 
           <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" style="display: none;">
             <h2>Product Description</h2>
             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
           </div> 
           <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" style="display: block;">
             <div id="reviews" class="woocommerce-Reviews">
              <div id="comments"> 
               <h2 class="woocommerce-Reviews-title">Reviews</h2>
               <p class="woocommerce-noreviews">There are no reviews yet.</p>
             </div>
             <div id="review_form_wrapper"> 
              <div id="review_form"> 
                <div id="respond" class="comment-respond"> 
                  <h3 id="reply-title" class="comment-reply-title">Be the first to review “Salted Fried Chicken” <small>
                    <a rel="nofollow" id="cancel-comment-reply-link" href="/grandrestaurant/delivery/salted-fried-chicken/#respond" style="display:none;">Cancel reply</a>
                  </small>
                </h3>
                <form action="http://themes.themegoods2.com/grandrestaurant/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                  <p class="comment-notes">
                    <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                  </p>
                  <p class="comment-form-rating">
                    <label for="rating">Your Rating</label>
                    <p class="stars"><span><a class="star-1" href="#">1</a>
                      <a class="star-2" href="#">2</a>
                      <a class="star-3" href="#">3</a>
                      <a class="star-4" href="#">4</a>
                      <a class="star-5" href="#">5</a>
                    </span></p>
                    <select name="rating" id="rating" aria-required="true" required="" style="display: none;"> <option>Rate…</option>
                     <option value="5">Perfect</option>
                     <option value="4">Good</option>
                     <option value="3">Average</option> 
                     <option value="2">Not that bad</option> 
                     <option value="1">Very Poor</option>
                   </select></p>
                   <p class="comment-form-comment">
                    <label for="comment">Your Review <span class="required">*</span>
                    </label>
                    <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                  </p>
                  <p class="comment-form-author">
                    <label for="author">Name <span class="required">*</span></label> 
                    <input id="author" name="author" type="text" size="30" aria-required="true" required=""></p>
                    <p class="comment-form-email">
                      <label for="email">Email <span class="required">*</span></label> 
                      <input id="email" name="email" type="email" size="30" aria-required="true" required=""></p>
                      <p class="form-submit">
                        <input name="submit" type="submit" id="submit" class="submit" value="Submit"> 
                        <input type="hidden" name="comment_post_ID" value="3849" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0"></p></form> 
                      </div> 
                    </div> 
                  </div>
                

                  </div>
                </div> 
              </div> 
            </div>





          </div>
        </div>
      </div>

    </div>

  </body>
  </html>