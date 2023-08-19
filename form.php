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
    //echo "Connected successfully";
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
  <link rel="stylesheet" href="dis.css">

  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">

  <title>form</title>
</head>

<body>

  <script defer src="scripts.js"></script>
  <script defer src="addDeleteCart.js"></script>


  <?php
  
  require_once('header/header.php')
  
  
  ?>

  <div class="col-12 p-5">
    <form action="commande.php" method="POST" id="orderForm">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> First Name and last name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Your Phone Number</label>
        <input type="number" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Address</label>
        <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>


      <label for="exampleInputEmail1" class="form-label"> Select </label>
      <select class="form-select form-select-lg mb-3  p-1" name="wl">
        <option selected>
          <h5>
            <h5>
        </option>
        <option value="1">biskra</option>
        <option value="2">alg</option>
        <option value="3">batna</option>
      </select>

      <div class="mb-3 form-check ">
        <input type="checkbox" class="form-check-input" name="check" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">I agree with all condutions </label>
      </div>
      <button type="submit" class="normal">Submit</button>
      <div id="confirmationMsg" class="confirmation-msg hidden">
        <p>Your order has been placed successfully! We will contact you soon.</p>
      </div>
    </form>


  </div>



  <?php
require_once('footer/footer.php')
?>
  <script>
    document.getElementById('orderForm').addEventListener('submit', function (event) {
      // Display confirmation message
      document.getElementById('confirmationMsg').classList.remove('hidden');
    });

    // Hide the confirmation message after a certain time
    setTimeout(function () {
      document.getElementById('confirmationMsg').classList.add('hidden');
    }, 5000);

  </script>
</body>

</html>