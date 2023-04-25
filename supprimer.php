<?php
//supprimer tmchi b id kol ma ylod supprimer yhz id ysupprimiih mn la base 
//id ytb3th ll url mb3d nhzo b get  mn url 

$idcategories = $_GET['idcategories'];

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

$requtte = "DELETE FROM categories WHERE id = '$idcategories'";

$resultat = $conn->query($requtte);

if($resultat){   //ida ajoutit fi la base adini tableau hdk categories li fi list.php
    header('location:addcategories.php?delete=ok');
     }


?>