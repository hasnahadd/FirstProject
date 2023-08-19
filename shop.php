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
    <link rel="stylesheet" href="cart.css">

  </head>

  <body>

    <script defer src="scripts.js"></script>
    <script defer src="addDeleteCart.js"></script>

<?php    require_once('header/header.php')  ?>

    <section id="page-header">
      <h2>#Shop now</h2>
      <p>Save more with coupns & up to 70% off!</p>

    </section>

    <?php
  
  require_once('products/products.php')
  
  
  ?>


    <?php
require_once('footer/footer.php')
?>
  </body>

</html>