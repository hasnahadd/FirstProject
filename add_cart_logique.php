<?php
if (
  isset($_POST['addtocart']) &&
  isset($_POST['idproduit']) &&
  isset($_POST['quantite'])
) {

  $product_id = strval($_POST['idproduit']);
  $quantite = $_POST['quantite'];

  if (isset($_COOKIE['cart'])) {

    $cookie = $_COOKIE['cart'];
    $cart = json_decode($cookie, true);
    $cart[$product_id] = $quantite;

  } else {

    $cart = array();
    $cart[$product_id] = $quantite;

  }

  setrawcookie('cart', json_encode($cart), time() + 3600);


} else {
  echo "forbiden";
}
?>