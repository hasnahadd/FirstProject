<?php
session_start();
include "inc/functions.php";
$categories = getAllcategorie();
$produits = getAllproducts();
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
  <title> Admin Dashboard </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/dashboard.css" rel="stylesheet">
  <link rel="stylesheet" href="adminsty.css">
</head>

<body>
  <?php if (isset($_SESSION['email'])) :?>
 
    <script defer src="adminjs.js"></script>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="signout.php">Sign out</a>
        </li>
      </ul>
    </nav>
    <div class="popup1" id="form">
      <button class="btn btn-sm btn-outline-secondary des" id="des">X</button>
      <form action="ajoutproducts.php" method="POST" enctype="multipart/form-data">
        <h5 class="modal-title" id="staticBackdropLabel">
          <center>Ajout Produits</center>
        </h5>
        <div class="form-group">
          <input type="text" name="nom" class="form-control" placeholder="nom de produit...">

        </div>
        <div class="form-group">
          <textarea name="descrp" class="form-control" placeholder="description de produit"> </textarea></div>
          <div class="form-group">
          <input type="number" step="0.01" name="prix" class="form-control" placeholder="prix de produit ">
          </div>
          <div class="form-group">
          <input type="text"  name="marque" class="form-control" placeholder="la marque de produit ">
          </div>
          <div class="form-group">
          <input type="file"  name="img" class="form-control" placeholder="prix de produit ">
          </div>
        <div class="form-group">

     <select type="text" name="categories" class="form-control">
        <?php 
        foreach($categories as $index => $c)
        print'<option value="'.$c['id'].'">' .$c['nom'].'</option>';
        
        ?>
        
     </select>
        </div>

<input type="hidden" name="createur" value="<?php echo $_SESSION['id'];?>"/>


          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </div>


        </div>
    </div>
    </div>

    </form>
    </div>


    </div>

    <!--start modifer form -->
    <?php
    //$index howa numero ta3 categories nhtaj id t3 kol categoires 
    foreach ($produits as $index => $p) { ?>

      <div class="popup2" id="form2">
        <button class="btn btn-sm btn-outline-secondary des des2" id="des2">X</button>
        <form action="modifier_produits.php" method="POST">
          <h5 class="modal-title" id="staticBackdropLabel">
            <center>Modifier Produits</center>
          </h5>
          <div class="form-group">
            <input type="hidden" value="<?php echo $p['id']; ?> " name="id">
            <input type="text" name="nom" class="form-control" value="<?php echo $p['nom']; ?>" placeholder="nom de categorie...">

          </div>
          <div class="form-group">
            <textarea name="descrp" class="form-control" placeholder="description de categorie..."><?php echo $p['descrp']; ?> </textarea>
            
          </div>
          <div class="form-group">
          <input type="text" name="prix"class="form-control" value="<?php echo $p['prix']; ?>" placeholder="prix de produit..."> 
          </div>
          <div class="form-group">
          <input type="text" name="categories"class="form-control" value="<?php echo $p['categories']; ?>" placeholder="categories de produit..."> 
          </div>
          <div class="form-group">
          <input type="text" name="marque"class="form-control" value="<?php echo $p['marque']; ?>" placeholder="marque de produit..."> 
          </div>
          
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Modifier</button>
            </div>


          </div>
      </div>
      </div>

      </form>
      </div>


      </div>
    <?php
    }
    ?>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  active" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addcategories.php">
                  <span data-feather="bar-chart-2"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="profil.php">
                  <span data-feather="layers"></span>
                  Profil
                </a>
              </li>
            </ul>


          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Liste des Produits</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <?php

              echo $_SESSION['email'];
              ?>
              <div class="btn-group mr-2">
                <input type="submit" id="pop" value="Ajouter" class="btn btn-sm btn-outline-secondary">
              </div>
            </div>
          </div>
          <!-- liste produits-->
          <div>
            <?php
            if (isset($_GET['ajout']) && $_GET['ajout'] == 'ok') {

                print '<div class="alert alert-success">
  produits ajouter avec success
  </div>'; 
              }
            ?>


            <?php
            if (isset($_GET['delete']) && $_GET['delete'] == 'ok') {
                print '<div class="alert alert-success">
  produits supprimer avec success
  </div>';
              }
            

            ?>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Prix</th>
                <th scope="col">Categories</th>
                <th scope="col">Marque</th>

                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              <?php

//$i = 0;
foreach ($produits as $i => $p) {


  print '<tr>
<th scope="row">' . $p['id'] . '</th>
<td>' . $p['nom'] . '</td>
<td>' . $p['descrp'] . '</td>
<td>' . $p['prix'] . '</td>
<td>' . $p['categories'] . '</td>
<td>' . $p['marque'] . '</td>

<td>

<a href="supprimer_products.php?idproduits=' .$p['id']. '" class="btn btn-danger"> Supprimer</a>
<input type= "submit"    ' . $p['id'] . '" value="Modifier"class="btn btn-success edit"   >




</td>
</tr>';
}

              ?>






            </tbody>
          </table>






      </div>

      </main>

    </div>
    </div>









    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
      window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->

  <?php else : ?>
    <h1>405 need authentification</h1>
  <?php endif; ?>
</body>

</html>