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
      <img src="https://source.unsplash.com/400x400/?person" class="profile-img" alt="">
      <div class="table-container">
      <table class="profile-table">
        <tr>
          <td>NAME :</td>
          <td>Priyanshu Prjapati</td>
        </tr>
        <tr>
          <td>NAME :</td>
          <td>Priyanshu Prjapati</td>
        </tr>
        <tr>
          <td>NAME :</td>
          <td>Priyanshu Prjapati</td>
        </tr>
        <tr>
          <td>NAME :</td>
          <td>Priyanshu Prjapati</td>
        </tr>
      </table>
      </div>

    </div>
    <div class="container2">
              <button class="profile-btns">ADD PRODUCT</button><br>
              <button class="profile-btns">DELETE PRODUCT</button><br>
              <button class="profile-btns">EDIT PROFILE</button><br>
    </div>
  </div>

<!-- right buttons -->




</body>

</html>