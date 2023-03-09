<?php
include 'dbconnect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="navbarcss.css">
  <link rel="stylesheet" href="profilecss.css">
</head>

<body>

<!-- navbar -->
  <header>
    <div class="logo">THE HAWKS</div>
    <div class="hamburger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <nav class="nav-bar">
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="hawker_type.html">Hawkers</a>
        <li>
          <?php if ($_SESSION['loggedin'] == true) {
            echo '<li><a href="" class="active">Profile</a></li>';
            echo '<li><a href="logout.php">Logout</a></li>';
          } else {
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
      </ul>
    </nav>
  </header>
  <!-- archan no code -->

  <div class="container-flex">
            <div class="left-container">
                <h2>hello</h2>
                <h3><?php echo $_SESSION['username'] ?></h3>
                <a class="logout" href="logout.php">Log Out</a>
                <ul class="account-links">

                    <li><a href="#" class="active">Dashboard</a></li>
                    <?php if($_SESSION['role'] == "owner") {?>
                    <li><a href="orders.php">Orders</a></li>
                    <?php } ?>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="right-container">
                <div class="cards">
                    
                    <div class="card-info">  
                    <a class="card-body" href="add_product.php">
                        <!-- <img src="myAccount.png" width="90x" height="90px"> -->
                        <div class="details">
                        <h2>ADD PRODUCT</h2>
                        <p>Add new product </p>
                    </div>
                    </a>
                    </div>
                   
                    <div class="card-info">  
                    <a class="card-body" href="#">
                        <!-- <img src="Address.png" width="90px" height="90px"> -->
                        <div class="details">
                        <h2>DELETE PRODUCT</h2>
                        <p>Delete an exixting product</p>
                    </div>
                    </a>
                    </div>
                    <div class="card-info">  
                    <a class="card-body" href="#">
                        <!-- <img src="Address.png" width="90px" height="90px"> -->
                        <div class="details">
                        <h2>EDIT PROFILE</h2>
                        <p>Edit your profile</p>
                    </div>
                    </a>
                    </div>
                   
                </div>
                <img src="wave.png" class="wave">
            </div>
        </div>

</body>
</html>
