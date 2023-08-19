<?php
require_once('cart_logique.php');
require_once('Prod.php');
  if(isset($_GET['id'])){
  $id = $_GET['id'];
    try {
    Cart::delete($id, $cart);
    
    header('Location: cart.php');
    } catch (Throwable $error) {
    echo "something went wrong $error. ";
    }
  }else{
  header('Location: cart.php');
  }
 

?>