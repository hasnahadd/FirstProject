<?php
require_once('inc/functions.php');
$produits = getAllproducts();
$categories = getAllcategorie();
if (!empty($_POST)) //button clicked 
{
//echo $_POST['search'] ;
  $produits = searchProduits($_POST['search']);
} else {
  $produits = getAllproducts();
}


?>
<section class="header">
    <a href="#"> <img src="" class="logo" alt="logo"></a>
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

        <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart"></i><span class="cartIcon"></span></a></li>
      </ul>
      </ul>
    </div>
    <div id="mobile" >
      <a href="cart.php"><i class="fa fa-shopping-cart" style="color:white; text-decoration= none;"></i><span id="cartIconM"></span></a>
      <i id="bar" class="fas fa-outdent"></i>

    </div>
  </section>