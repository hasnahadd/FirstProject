<?php
include "inc/functions.php";
/*if(!empty($_POST))//button clicked 
{
 if($user= connect1($_POST));
 $showloginAlert =0;

//cas1 return les donnes cas2 bool false 
}else{

  if($user= connect($_POST));
  $showloginAlert =1;
 

}*/
 //ida session mhlola

 if (!empty($_POST['pass'])) {
   $user = connect1($_POST);
   if ($user==true ) { // login successful
    session_start();//tbda session
    $_SESSION['id'] =$user['id'];
    $_SESSION['email'] = $user['email'];
   $_SESSION['nom'] =  $user['nom'];
    $_SESSION['pass'] =  $user['pass'];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="style.css">
    
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.3/sweetalert2.all.min.js"> </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.3/sweetalert2.min.css">
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>index</title>
</head>
<body>

<script defer src="scripts.js"></script>


<section class ="header">
<a href="#"> <img src="" class="logo" alt=""             ></a>
<div>
<ul class="menu inactive" id="navbar" class="close1" >  
<li><a  href="index.php" class="active">Home</a> </li>                                
<li><a href="shop.php" >Shop</a> </li>      

<li class="nav-item dropdown" >
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="container-fluid">
      Categorie 
    </a>
    <ul class="dropdown-menu  back" >
<?php
foreach($categories as $categories){
print '<li><a class="dropdown-item" href="#">'.$categories['nom'].'</a></li>';

}
?>
      
</ul>
<li><a href="contact.php" >Contact </a> </li> 
 <li>
    <form action="index.php" method = "POST">
      <input type="text" placeholder="   ..search.. " name="search">
      <button type="submit" class="sty"><i class="fa fa-search  sty"></i></button>
    </form>
</li>
<!--<li> <a href="#"><i class="fa fa-search" ></i></i></a></li> -->

<li id="lg-bag"><a href="cart.php" ><i class="fa fa-shopping-cart"></i></a></li>    
<!--<a href="#" id="close"><i class="fa fa-window-close" aria-hidden="true"></i></a>-->
</ul>
</ul>
</div>
<div id="mobile">
<a href="cart.html" ><i class="fa fa-shopping-cart" ></i></a>   
<i id="bar" class="fas fa-outdent"></i>

</div>
</section>


<form class="col-12 p-5" action="adminelogin.php" method="POST"> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" >
  </div>
  
  <button type="submit" class="normal">Submit</button>
</form>



<!--class="btn btn-primary normal"-->

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
<?php
if (isset($user) && $user==false) {
  print "<script>
    Swal.fire({
      title: 'Error!',
      text: 'Do you want to continue',
      icon: 'error',
      confirmButtonText: 'Cool',
      timer: 2000
    });
  </script>";
}
else if(isset($user) && $user==true) {
    print "<script>
    Swal.fire({
      title: 'Success!',
      text: 'Do you want to continue',
      icon: 'success',
      confirmButtonText: 'cool',
      timer: 2000
    });
  </script>";
  
}
?>


</html>