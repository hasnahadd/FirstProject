<?php

function cnx()
{

  $servername = "localhost";
  $DBuser = "root";
  $DBpassword = "";
  $DBname = "testecommerce";
  
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  echo "Connected successfully";
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  return $conn;





}




function searchProduits($keywords){ 

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

  $requette1 = "Select * FROM produits where nom LIKE :keywords";
 


$requette2 = $conn->prepare($requette1);
$requette2->bindValue(':keywords', '%'. $keywords .'%');
$requette2->execute();
$produits = $requette2->fetchAll();
return $produits;
  /*$requette2 = "Select * FROM produits where nom LIKE '%" . $keywords . "%'";
execution de requette
$resul = $conn->query($requette2);*/
}

function getAllcategorie(){

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
return $categories;



}

function getAllproducts() {

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
  

    $requette1 = "SELECT * FROM produits ";

// execution de la requette

$resultat1 = $conn->query($requette1);
 


//affichage 
$produits = $resultat1 ->fetchAll();
return $produits;


}


function getProduitsById($id){

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
$requette = "SELECT * FROM produits WHERE id=$id";
$resultat1 = $conn->query($requette);
 


//affichage  one product (fetch)
$produit = $resultat1 ->fetch();
return $produit;


}

/*function connect($data){

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
$email= $data['email'];
$pass= $data['pass'];
    $requette = "SELECT * FROM administrateur WHERE email='$email'AND pass='$pass'";
        $res = $conn->query($requette);
        $user = $res ->fetch();
return $user;
}*/
function connect1($data){
  $servername = "localhost";
  $DBuser = "root";
  $DBpassword = "";
  $DBname = "testecommerce";
  
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      // Log the error or throw an exception
      error_log("Connection failed: " . $e->getMessage());
      return false;
  }
  $email = $data['email'];
  $pass = $data['pass'];

  try {
      $stmt = $conn->prepare("SELECT * FROM administrateur WHERE email = :email AND pass = :pass");
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':pass', $pass);
      /*$myPass= password_hash($pass,PASSWORD_DEFAULT); //hashed password
      if(password_verify($myPass, $pass)) {
        // If the password inputs matched the hashed password in the database
        // Do something, you know... log them in.*/

      $stmt->execute();
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      return $user;
   // } 
    
      //password_verify('123', $myPass);
      
  } catch(PDOException $e) {
      // Log the error or throw an exception
      error_log("Query failed: " . $e->getMessage());
      return false;
  }
  
}
/*function connect1($data){
  $servername = "localhost";
  $DBuser = "root";
  $DBpassword = "";
  $DBname = "testecommerce";
  
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      // Log the error or throw an exception
      error_log("Connection failed: " . $e->getMessage());
      return false;
  }
  $email = $data['email'];
  $pass = $data['pass'];

  try {
      $stmt = $conn->prepare("SELECT * FROM administrateur WHERE email = :email");
      $stmt->bindParam(':email', $email);
      $stmt->execute();
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      if(!$user) {
          return false; // user not found
      }
      
      $hashedPass = $user['pass'];
      if (password_verify($pass, $hashedPass)) {
          // password matches
          return $user;
      } else {
          return false; // password doesn't match
      }
      
  } catch(PDOException $e) {
      // Log the error or throw an exception
      error_log("Query failed: " . $e->getMessage());
      return false;
  }
}*/



  
  
  












