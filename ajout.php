
<?php
/*
session_start();
//recuperation les donnes de la formulaire 
$nom = $_POST['nom']; //dakhl hdik hya nfess ism mn formulaiare 
$descrp = $_POST['descrp']; 
$createur =$_SESSION['id'];
$date_creation = date("y-m-d");
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

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO categories(nom, descrp, createur, date_creation) VALUES (:nom, :descrp, :createur, :date_creation)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':descrp', $descrp);
    $stmt->bindParam(':createur', $createur);
    $stmt->bindParam(':date_creation', $date_creation);
//////////////////////////////////////
if (empty($nom) || empty($descrp)) {
  // Display an error message or redirect the user back to the form page
  echo "Please fill in all fields";
} else {
  // Execute the database query
  $requtte = "INSERT INTO categories(nom, descrp, createur, date_creation) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($requtte);
  $stmt->execute([$nom, $descrp, $createur, $date_creation]);
  // Redirect the user to the success page
  header('location:list.php?ajout=ok');
}
  // execute the query
   // $stmt->execute();
    // redirect to the list page
    //header('location:list.php');

} catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
}*/
?>
<?php
session_start();
//recuperation les donnes de la formulaire 
$nom = $_POST['nom']; //dakhl hdik hya nfess ism mn formulaiare 
$descrp = $_POST['descrp']; 
$createur =$_SESSION['id'];
$date_creation = date("y-m-d");
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
$requtte = "INSERT INTO categories(nom,descrp,createur,date_creation) VALUES('$nom','$descrp','$createur','$date_creation') " ;
//execution
 $resultat = $conn->query($requtte);
 if($resultat){   //ida ajoutit fi la base adini tableau hdk categories li fi list.php
  header('location:addcategories.php?ajout=ok');

 }
?>