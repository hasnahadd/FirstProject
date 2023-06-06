<?php
session_start();
$nom = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$wl = $_POST['wl'];
$date_creation = date("Y-m-d");

if (isset($_COOKIE['cart'])) {
    $cookieValue = $_COOKIE['cart'];
    $decodedValue = json_decode($cookieValue, true);

    if ($decodedValue !== null) {
        // Connect to the database
        $servername = "localhost";
        $DBuser = "root";
        $DBpassword = "";
        $DBname = "testecommerce";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            foreach ($decodedValue as $productID => $quantity) {
                // njib name t3 produit mn id li fi cookie
                $stmt = $conn->prepare("SELECT nom FROM produits WHERE id = :productID");
                $stmt->bindParam(':productID', $productID);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($result !== false) {
                    $productName = $result['nom'];

                    // Insert the data into the database
                    $stmt = $conn->prepare("INSERT INTO commande(produits, quantite, date_creation, nom, email, num, addr, wl) VALUES(:productID, :quantity, :date_creation, :nom, :email, :number, :address, :wl)");
                    $stmt->bindParam(':productID', $productName);
                    $stmt->bindParam(':quantity', $quantity);
                    $stmt->bindParam(':date_creation', $date_creation);
                    $stmt->bindParam(':nom', $nom);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':number', $number);
                    $stmt->bindParam(':address', $address);
                    $stmt->bindParam(':wl', $wl);

                    $stmt->execute();
                } else {
                    echo "Product not found for ID: " . $productID . "<br>";
                }
            }
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    } else {
        echo "Invalid JSON format in the cookie.";
    }
} else {
    echo "Cookie not set.";
}



?>
