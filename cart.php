<?php
function dd($var){
  var_dump($var);
  die();
}
require_once('cart_logique.php'); //$cart id quantite
if (!empty($cart))  {

  require_once('productsOfCartDatabase.php'); //$cart_items $categories
  // ihtifaliya kabira clean code **
  require_once('hsabat.php'); //$total
  require_once('cart.view.php');
}else{
  //echo $cart;
   require_once('cart_empty.php');
}
?>
