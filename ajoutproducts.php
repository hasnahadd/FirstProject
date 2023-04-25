<?php
session_start();
//recuperation les donnes de la formulaire 
$nom = $_POST['nom']; //dakhl hdik hya nfess ism mn formulaiare 
$descrp = $_POST['descrp']; 
$createur =$_POST['createur'];
$prix =$_POST['prix'];
$marque=$_POST['marque'];

$categorie =$_POST['categories'];
$date = date("y-m-d");
//////upload file php
$target_dir = "images/";// blssa li rah nhet fiha img ta3i ana rah nhtha fi www /images
$target_file = $target_dir . basename($_FILES["img"]["name"]);//img nfsha li fi formulaire

if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
$img = $_FILES["img"]["name"];    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
//end///
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
$requtte = "INSERT INTO produits(nom,descrp,prix,categories,date_creation,createur,img,marque) VALUES('$nom','$descrp','$prix','$categorie','$date','$createur','$img','$marque') " ;
//execution
 $resultat = $conn->query($requtte);
 if($resultat){   //ida ajoutit fi la base adini tableau hdk categories li fi list.php
header('location:addproducts.php?ajout=ok');
 }
