<?php
session_start();
//recuperation les donnes de la formulaire 
$nom = $_POST['nom']; //dakhl hdik hya nfess ism mn formulaiare 
$descrp = $_POST['descrp']; 
$id = $_POST['id'];
$date_modification = date("y-m-d");
//2 creation la chaine de cnx 
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

//3 creation de la reqette qry
//createur howa admin lzm njib id ta3o li howa 1 hna ywli cle etrng
$requtte = "UPDATE categories SET nom='$nom', descrp='$descrp' , date_modification='$date_modification' WHERE id='$id' " ;
//execution
 $resultat = $conn->query($requtte);
 if($resultat){   //ida ajoutit fi la base adini tableau hdk categories li fi list.php
  header('location:addcategories.php?ajout=ok');

 }
?>