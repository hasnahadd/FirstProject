<?php
include "inc/functions.php";
$categories = getAllcategorie();
$produits = getAllproducts();
if (!empty($_POST)) //button clicked 
{
  //echo "button search clicked";
//echo $_POST['search'] ;
  $produits = searchProduits($_POST['search']);
} else {
  $produits = getAllproducts();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <title>index</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="cart.css">

</head>

<body>

  <script defer src="scripts.js"></script>
  <script defer src="addDeleteCart.js"></script>


  <?php
  
  require_once('header/header.php')
  
  
  ?>
  <section style="padding:0; flex-direction:row;justify-content: stretch;" id="page-headerindex">
    <section style="width:100%;height:100%;" class="container">
      <div style="width:100%;height:100%;" class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide"><img src="images/P1.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/s22.PNG" alt=""></div>
          <div class="swiper-slide"><img src="images/nio-et5.jpg" alt=""></div>

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>


      </div>



    </section>

  </section>
<br>

  <!-- <section class="header">
      <a href="#"> <img src="" class="logo" alt="logo"></a>
      <div style="width:100%;">
        <ul class="menu inactive" id="navbar" class="close1">
          <li><a href="index.php">Home</a> </li>
          <li><a href="shop.php" class="active">Shop</a> </li>
          <li><a href="contact.php">Contact </a> </li>

          <li>
            <form style="display:flex;gap:10px;" action="index.php" method="POST">
              <input type="text" placeholder="  " name="search">
              <button type="submit" class="sty"><i class="fa fa-search  sty"></i></button>
            </form>
          </li>

          <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
          <a href="#" id="close"><i class="fa fa-window-close" aria-hidden="true"></i></a>
        </ul>

      </div>
      <div id="mobile">
        <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
        <i id="bar" class="fas fa-outdent"></i>

      </div>
    </section> -->
  <!-- <section class="container">
      <div class="swiper">
        Additional required wrapper
        <div class="swiper-wrapper">
          Slides
          <div class="swiper-slide"><img src="images/P1.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/s22.PNG" alt=""></div>
          <div class="swiper-slide"><img src="images/nio-et5.jpg" alt=""></div>

        </div>
        If we need pagination
        <div class="swiper-pagination"></div>

        If we need navigation buttons
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>


      </div>



    </section> -->
  <!--<section id="hero">
<h4>Trade-in-offer</h4>
<h2>Super value deals</h2>
<h1>On all products</h1>
<p>Save more with coupns & up to 70% off!</p>
<button>Shop Now</button>
</section>-->
  <section id="feature" class="section-p1">
    <div class="fe-box">
      <img src="images/f1.png" alt="">
      <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
      <img src="images/f2.png" alt="">
      <h6>Online order</h6>
    </div>
    <div class="fe-box">
      <img src="images/f3.png" alt="">
      <h6>Save money</h6>
    </div>
    <div class="fe-box">
      <img src="images/f4.png" alt="">
      <h6>Promotion</h6>
    </div>
    <div class="fe-box">
      <img src="images/f5.png" alt="">
      <h6>Happy sell</h6>
    </div>
    <div class="fe-box">
      <img src="images/f6.png" alt="">
      <h6>24H/7 support </h6>
    </div>
  </section>

  <?php
  
  require_once('products/products.php')
  
  
  ?>

  <?php
require_once('footer/footer.php')
?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</body>

</html>