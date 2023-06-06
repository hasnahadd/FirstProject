<?php
if (isset($_COOKIE['cart'])) {
  $cookie = $_COOKIE['cart'];
  $cart = json_decode($cookie, true);
  if ($cart === false) {
    $cart = array();
  }
} else {
  $cart = array();
}
?>