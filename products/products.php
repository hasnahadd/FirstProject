<?php
require_once('inc/functions.php');
$produits = getAllproducts();
$categories = getAllcategorie();

?>
 <section id="products1" class="section-p1">
    <div class="ourProdContainer">
      <h2 class="ourProducts">Our Products</h2>

    </div>
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
  <?php foreach ($produits as $produits) { ?>
    <div class="pro">
      <a href="sproduct.php?id=<?php echo $produits['id']; ?>">
        <img src="images/<?php echo $produits['img']; ?>" alt="">
      <div class="des">
        <span><?php echo $produits['nom']; ?></span>
        <h5><?php echo $produits['marque']; ?></h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4><?php echo $produits['prix']; ?></h4>
      </div>
      <i id="addItemIcon" name="addtocartindex" class="fas fa-heart"></i>
      </a>
      <button  class="addToCartBtn normal" data-id="<?= $produits['id'] ?>">add to cart</button>

    </div>
  <?php } ?>
</div>
  </section>


