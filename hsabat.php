<?php

  $total=0;
foreach ($cart_items as $produit) {
  $total += $produit['prix'] * $cart[$produit['id']]; // x=x+1 => x+=1 kifkif
}
 
?>
