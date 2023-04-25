<?php
include "inc/functions.php";
//var_dump($_POST);
$produits = getAllproducts();
////////TEST POUR PRODUITS//////////////////
$id_produit = $_POST["idproduit"];
$quantite = $_POST["quantite"];
//1 selectioner le produit avec leur  id 
$conn = cnx();
$requette1 = "SELECT prix FROM produits WHERE id='$id_produit' ";
$requette2 = "SELECT nom FROM produits WHERE id='$id_produit' ";
$requette3 = "SELECT img FROM produits WHERE id='$id_produit' ";

$resultat1 = $conn->query($requette1);
$resultat2 = $conn->query($requette2);
$resultat3  = $conn->query($requette3);

$pproduit = $resultat1->fetch();
$nproduit = $resultat2->fetch();
$iproduit = $resultat3->fetch();
/*var_dump($prix);
var_dump($nom);
var_dump($img);
//echo $prix;
//affichage 
//$categories = $resultat->fetchAll();
//var_dump($categories);
//*/
/*echo $pproduit['prix'];
echo $nproduit['nom'];
echo $iproduit['img'];*/
/////END////






// access to db
$servername = "localhost";
$DBuser = "root";
$DBpassword = "";
$DBname = "testecommerce";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


// requette of selection 

$requette = "SELECT * FROM categories ";

// execution de la requette

$resultat = $conn->query($requette);



//affichage 
$categories = $resultat->fetchAll();
//var_dump($categories);

if (isset($_GET['id'])) {
    $produit = getProduitsById($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <title>shop</title>
</head>

<body>

  <script defer src="scripts.js"></script>


  <section class="header">
    <a href="#"> <img src="" class="logo" alt=""></a>
    <div>
      <ul class="menu inactive" id="navbar" class="close1">
        <li><a href="index.php">Home</a> </li>
        <li><a href="shop.php">Shop</a> </li>
        <li><a href="contact.php">Contact </a> </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="container-fluid">
            Categorie
          </a>
          <ul class="dropdown-menu">
            <?php
            foreach ($categories as $categories) {
              print '<li><a class="dropdown-item" href="#">' . $categories['nom'] . '</a></li>';
            }
            ?>

          </ul>
        </li>
        <li><a href="cart.php"><i class="fa fa-search"></i></i></a></li>
        <li id="lg-bag"><a href="cart.php" class="active"><i class="fa fa-shopping-cart"></i></a></li>
        <!--<a href="#" id="close"><i class="fa fa-window-close" aria-hidden="true"></i></a>-->
      </ul>
      </ul>
    </div>
    <div id="mobile">
      <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
      <i id="bar" class="fas fa-outdent"></i>

    </div>
  </section>
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
          <td a href="#"><i class="far fa-times-circle"></i></td>
          <td><img src="images/<?php echo $iproduit['img']; ?>" alt="Product Image"></td>
          <td><?php echo $nproduit['nom'];?></td>
          <td><?php echo $pproduit['prix'];?></td>
          <td><input type="number" value="<?php echo $_POST['quantite'] ?>"></td>
          <td> $118</td>
        </tr>


      </tbody>


    </table>






  </section>

  <section id="cart-add" class="section-p1">
    <div id="coupon">
      <h3>Apply Coupon</h3>
      <div>
        <input type="text" placeholder="Enter Your Coupon">
        <button class="normal">Apply</button>

      </div>
    </div>
    <div id="subtotal">
      <h3>Cart Totals</h3>
      <table>
        <tr>
          <td>Cart subtotal</td>
          <td> $ 335</td>
        </tr>
        <tr>
          <td>Shipping</td>
          <td>free</td>

        </tr>
        <tr>
          <td>
            <strog>Total</strog>
          </td>
          <td><strong> $335</strong></td>

        </tr>
      </table>
      <button class="normal" onclick="window.location.href='form.php'">Proceed to checkout</button>
    </div>



  </section>















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