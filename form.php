
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
    echo "Connected successfully";
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
    <link rel="stylesheet" href="style.css">
   
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"/>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>form</title>
</head>
<body>

<script defer src="scripts.js"></script>


<section class ="header">
<a href="#"> <img src="" class="logo" alt=""             ></a>
<div>
<ul class="menu inactive" id="navbar" class="close1" >  
<li><a  href="index.php" >Home</a> </li>                                
<li><a href="shop.php"  >Shop</a> </li>      
<li><a href="contact.php" >Contact </a> </li> 
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="container-fluid">
    categorie 
  </a>
  <ul class="dropdown-menu" >
  <?php
foreach($categories as $categories){
print '<li><a class="dropdown-item" href="#">'.$categories['nom'].'</a></li>';

}
?>
    
  </ul>
</li>
<li><a href="cart.php" ><i class="fa fa-search"></i></i></a></li>                                
<li id="lg-bag"><a href="cart.php" class="active" ><i class="fa fa-shopping-cart"></i></a></li>    
<!--<a href="#" id="close"><i class="fa fa-window-close" aria-hidden="true"></i></a>-->
</ul>
</ul>
</div>
<div id="mobile">
<a href="cart.php" ><i class="fa fa-shopping-cart"></i></a>   
<i id="bar" class="fas fa-outdent"></i>

</div>
</section>
<section id="page-header">
<h2>#Shop now</h2>
<p>Save more with coupns & up to 70% off!</p>

</section>
 
<div class="col-12 p-5">
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> First Name</label>
          <input type="text" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Your Phone Number</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
         
         
   <label for="exampleInputEmail1" class="form-label"> Select </label>
          <select class="form-select form-select-lg mb-3  p-1">
  <option selected> <h5><h5></option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<!--<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>-->
        <div class="mb-3 form-check ">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">I agree with all condutions </label>
        </div>
        <button type="submit" class=" normal ">Submit</button>
      </form>


    </div>



<section class="footer">
<div class="social ">
<a href="" class="cr"><i class="fab fa-instagram"></i></a>
<a href="" class="cr"><i class="fab fa-facebook-f"></i></a>
<a href="" class="cr"><i class="fab fa-youtube"></i></a>
<ul >
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