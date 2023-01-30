<?php
include 'dbconnect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>the hawks</title>
    <link rel="stylesheet" href="indexcss.css" />
  </head>
  <body>
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
            <a href="" class="active">Home</a>
          </li>
          <li> 
            <a href="/">Hawkers</a>
          <li>
          <?php if($_SESSION['loggedin'] == true) {
            echo '<li><a href="logout.php">Logout</a></li>';
          }else{
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
        </ul>
      </nav>
    </header>
    <script>
      hamburger = document.querySelector(".hamburger");
      let loginCont = document.getElementById("loginCont");

      hamburger.onclick = function () {
        navBar = document.querySelector(".nav-bar");
        navBar.classList.toggle("active")
      };
    </script>
    <h2>hello</h2>
  </body>
</html>
