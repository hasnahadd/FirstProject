<?php

include "inc/functions.php"; 
$conn = cnx();

    $ids = implode(',',array_keys($cart));
    $requette1 = "SELECT * FROM produits WHERE id IN ({$ids})";
    $resultat1 = $conn->query($requette1);
    $cart_items = $resultat1->fetchAll(PDO::FETCH_ASSOC);

    // categories

  $requette = "SELECT * FROM categories ";
  $resultat = $conn->query($requette);
  $categories = $resultat->fetchAll();

?>
