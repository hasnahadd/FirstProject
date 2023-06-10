<?php
include "inc/functions.php";
//$id_produit = isset($_POST["idproduit"]) ? $_POST["idproduit"] : "";
//$addtocart = $_POST["addtocart"];
$categories = getAllcategorie();
$produits = getAllproducts();

if (isset($_GET['id'])) {
    $produit = getProduitsById($_GET['id']);
}


if (!empty($_POST)) //button clicked 
{
    //echo "button search clicked";
    //echo $_POST['search'] ;
    $produits = searchProduits($_POST['search']);
} else {
    $produits = getAllproducts();
}


    

   
        
    

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
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="cart.css">

    <title>products</title>
</head>

<body>

    <script defer src="scripts.js"></script>
    <script defer src="addDeleteCart.js"></script>

    <?php
  
  require_once('header/header.php')
  
  
  ?>
    
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="images/tab.jpg" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/tab1.jpg" width="100%" class="small-img " alt="">


                </div>
                <div class="small-img-col">
                    <img src="images/tab2.jpg" width="100%" class="small-img " alt="">


                </div>
                <div class="small-img-col">
                    <img src="images/tab3.jpg" width="100%" class="small-img " alt="">


                </div>
                <div class="small-img-col">
                    <img src="images/tab2.jpg" width="100%" class="small-img " alt="">


                </div>
            </div>

        </div>
        <div class="single-pro-details">
            <!--<h6>Phone / Samsung</h6>-->

            <h4>
                <?php echo $produit['nom']   ?>
            </h4>
            <h2>
                <?php echo $produit['prix'] ?>dz
            </h2>
            <form action="add_cart.php" method="POST">
                <input type="hidden" value="<?php echo $produit['id']   ?>" name="idproduit">
                <input type="number" value="1" step="1" name="quantite">
                <button  class="addToCartBtn normal" data-id="<?= $produit['id'] ?>">add to cart</button>

            </form>
            <h4>Products Details</h4>
            <span>
                <?php echo $produit['descrp']   ?>…
            </span>
        </div>
    </section>

    <?php
  
  require_once('products/products.php')
  
  
  ?>

    <?php
require_once('footer/footer.php')
?>
    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img ");
        smallimg[0].onclick = function () {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function () {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function () {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function () {
            MainImg.src = smallimg[3].src;
        }
    </script>
</body>

</html>