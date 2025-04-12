<?php 
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"> 
    <link rel="stylesheet"  type="text/css" href="assets/css/style.css"/>

</head>
<body>
     <!-- ----------------------------------------------Navbar----------------------------------------------- -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
          <img src="assets/imgs/logo.png" class="logo"/>
          <h2 class="brand">Orange</h2>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
              </li>

              <li class="nav-item">
                <a href="cart.php">
                  <i class="fa-solid fa-bag-shopping" style="font-size: 1rem; margin-left: 5px;">
                  <?php if(isset($_SESSION['quantity']) && $_SESSION['quantity'] != 0) { ?> 

                      <span style="color: coral"><?php echo $_SESSION['quantity']; ?></span>
                  <?php } ?>                
                </i>
              </a>
                <a href="account.php"><i class="fa-solid fa-user" style="font-size: 1rem; margin-left: 5px;"></i></a>
              </li>

                     
              
            </ul>
            
          </div>
        </div>
      </nav>