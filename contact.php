<?php
// access to db
$servername = "localhost";
$DBuser = "root";
$DBpassword = "";
$DBname = "testecommerce";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

// requette of selection 
$requette = "SELECT * FROM categories ";
// execution de la requette
$resultat = $conn->query($requette);
//affichage 
$categories = $resultat ->fetchAll();
//var_dump($categories);
?>









<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
  integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <script defer src="scripts.js"></script>
  <section class="header">
    <a href="#"> <img src="" class="logo" alt=""></a>
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
  <section id="page-header">
    <h2># Let's_shop now</h2>
    <p>Save more with coupns & up to 70% off!</p>

  </section>
  <section id="contact-details" class="section-p1">
    <div class="details">
      <span>
        GET IN TOUCH
      </span>
      <h2>Visit one of our agency location or contacts us today</h2>
      <h3>Head Office </h3>
      <div>
        <li>
          <i class="fal fa-map"></i>
          <p>56 ford Street Glasgow G1 1UL New York</p>

        </li>
        <li>
          <i class="far fa-envelope"></i>
          <p>good@gmail.com</p>

        </li>
        <li>
          <i class="fa-regular fa-phone"></i>
          <p>07777777777</p>

        </li>
        <li>
          <i class="far fa-clock"></i>
          <p>Monday to Saturday: 9:00am to 16:00pm</p>

        </li>
      </div>
    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104598.
 4874296257!2d5.653633115222537!3d34.84688235904868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
 1!3m3!1m2!1s0x12f5a76dce08907d%3A0x851685cacb9c7b3e!2sUniversit%C3%A9%20Mohamed%20Khider%20Biskra%20-
 %20Algerie!5e0!3m2!1sfr!2sdz!4v1678314919452!5m2!1sfr!2sdz" width="600" height="450" style="border:0;"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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