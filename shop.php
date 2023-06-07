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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <script defer src="scripts.js"></script>


    <section class="header">
      <a href="#"> <img src="" class="logo" alt=""></a>
      <div>
        <ul class="menu inactive" id="navbar" class="close1">
          <li><a href="index.php">Home</a> </li>
          <li><a href="shop.php" class="active">Shop</a> </li>
          <li><a href="contact.php">Contact </a> </li>

          <li>
            <form action="index.php" method="POST">
              <input type="text" placeholder="  " name="search">
              <button type="submit" class="sty"><i class="fa fa-search  sty"></i></button>
            </form>
          </li>

          <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
          <!--<a href="#" id="close"><i class="fa fa-window-close" aria-hidden="true"></i></a>-->
        </ul>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
        <i id="bar" class="fas fa-outdent"></i>

      </div>
    </section>
    <section id="page-header">
      <h2>#Shop now</h2>
      <p>Save more with coupns & up to 70% off!</p>

    </section>

    <section id="products1" class="section-p1">
      <div class="nav-item dropdown">
        <a id="mosiba" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false" class="container-fluid">
          Categorie
        </a>
        <ul class="dropdown-menu">
          <?php
          foreach ($categories as $categories) {
            print '<li><a class="dropdown-item" href="#">' . $categories['nom'] . '</a></li>';
          }
          ?>
        </ul>
      </div>
      <br>
      <div class="pro-container">

        <?php
        foreach ($produits as $produits) {
          print '<div class="pro">
 <img src="images/' . $produits['img'] . '" alt="">
 <div class="des">
<span>' . $produits['nom'] . '</span>
<h5>' . $produits['marque'] . '</h5>
<div class="star">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
<h4>' . $produits['prix'] . '</h4>
</div>
<i class="fal fa-shopping-cart cart"  ></i>
<a href="sproduct.php?id=' . $produits['id'] . '"><i id="addItemIcon" class="fas fa-plus-circle "></i> <!-- Add item icon --></i>
</a>
</div>';
        }
        ?>









    </section>


    <section class="footer">
      <div class="social ">
        <a href="" class="cr"><i class="fab fa-instagram"></i></a>
        <a href="" class="cr"><i class="fab fa-facebook-f"></i></a>
        <a href="" class="cr"><i class="fab fa-youtube"></i></a>
        <ul>
          <li>
            <a href="#">Home</a>

          </li>

          <li>
            <a href="#">Shop</a>

          </li>
          <li>
            <a href="#">About</a>

          </li>
          <li>
            <a href="#">Contact</a>

          </li>
        </ul>

        <p class="copyright">
          Gloden Services @ 2022

        </p>
      </div>

    </section>
  </body>

</html>