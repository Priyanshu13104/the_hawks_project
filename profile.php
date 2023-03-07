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
            echo '<li><a href="add_product.php">Add product</a></li>';
            echo '<li><a href="logout.php">Logout</a></li>';
          } else {
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
      </ul>
    </nav>
  </header>

  <!-- profile page html -->

  <div class="main-container">
    <div class="container1">
            <div class="profle-img-container">
              <img src="https://source.unsplash.com/400x400/?person" class="profile-img" alt="">
            </div>
    </div>
    <div class="container2">
            <p>hello</p>
    </div>
  </div>


</body>

</html>