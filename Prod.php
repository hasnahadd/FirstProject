<?php
class Cart {
  
  static  function delete($id,$cart){
    unset($cart[$id]);
    setcookie('cart', json_encode($cart), time() + 3600);
  }

  static  function update($id,$quantity,$cart){
    $cart[$id] = $quantity;
    setcookie('cart', json_encode($cart), time() + 3600);
  }
}
?>