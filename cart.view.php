<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
  integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
  <script defer src="scripts.js"></script>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="stylesheet" href="checkoutcss.css">
  
  <title>shop</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

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

        <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
        <!--<a href="#" id="close"><i class="fa fa-window-close" aria-hidden="true"></i></a>-->
      </ul>
      </ul>
    </div>
    <div id="mobile">
      <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
      <i id="bar" class="fas fa-outdent"></i>

    </div>
  </section>
  <br>
  <section id="page-header">
    <h2>#Shop now</h2>
    <p>Save more with coupns & up to 70% off!</p>

  </section>
  <section id="cart" class="section-p1">

    <table width="100%">
      <thead>
        <tr>
          <td>Remove</td>
          <td>Image</td>
          <td>Products</td>
          <td>Price</td>
          <td>Quantity</td>
          <td>Total</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php foreach ($cart_items as $produit):  
              
              ?>

        <tr>
          <td><a href="<?= 'delete_cart.php?id=' . $produit['id'] ?>"><i class="far fa-times-circle"></i></a></td>
          <td><img src="images/<?= $produit['img'] ?>" alt="Product Image"></td>
          <td>
            <?= $produit['nom'] ?>
          </td>
          <td>
            <?= $produit['prix'] ?>
          </td>
          <td><input type="text" value="<?= $cart[($produit['id'])] ?>"></td>
          <td>
            <?= $produit['prix'] * $cart[$produit['id']] ?>
          </td>
        </tr>

        <?php endforeach; ?>

      </tbody>
    </table>
  </section>
  <section id="cart-add" class="section-p1">
    <div id="subtotal">
      <h3>Cart Totals</h3>
      <table>
        <tr>
          <td>Cart Total</td>
          <td>
            <?= $total ?>
          </td>
        </tr>



      </table>
      <button class="normal" onclick="window.location.href='form.php'">Proceed to checkout</button>
    </div>
  </section>
  <!----from><-->
  
  <!----from><-->


    </div>
    <section class="footer">
      <div class="social ">
        <a href="" class="cr"><i class="fab fa-instagram"></i></a>
        <a href="" class="cr"><i class="fab fa-facebook-f"></i></a>
        <a href="" class="cr"><i class="fab fa-youtube"></i></a>
        <ul>
          <li>
            <a href="#">Home</a>

          </li>

          <li>
            <a href="#">Shop</a>

          </li>
          <li>
            <a href="#">About</a>

          </li>
          <li>
            <a href="#">Contact</a>

          </li>
        </ul>

        <p class="copyright">
          Gloden Services @ 2022

        </p>
      </div>

    </section>
</body>

</html>