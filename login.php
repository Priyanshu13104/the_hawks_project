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
    <title>Document</title>
    <link rel="stylesheet" href="navbarcss.css">
    <link rel="stylesheet" href="indexcss.css" />
    <link rel="stylesheet" href="loginsignupcss.css" />
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
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="hawker_type.html">Hawkers</a>
          </li>
          <li>
            <a href="#" class="active">Login</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="login-box">
      <div class="login-container" id="loginCont">
        <div class="login-top-header">
          <div class="login-text">Login</div>
        </div>
        <form action="" method="post" id="form">
          <div class="login-input-field">
            <input type="email" class="input" placeholder="email" name="email" required />
          </div>
          <div class="login-input-field">
            <input
              name="password"
              type="password"
              class="input"
              id="pass_field"
              placeholder="Password"
              required
            />
          </div>
          <input type="checkbox" name="show_pass" id="show_pass"> 
          <span class="show_password">show password</span>
          <div class="login-input-field">
            <input name="submit" type="submit" class="submit" value="Login" />
          </div>
          <div class="login-bottom-text1">
            <label><a href="">Forgot Password?</a></label>
          </div>
          <div class="login-bottom-header">
            <span class="login-bottom-text2">
              <pre>Don't have an account! <a href="signup.php" class="loginpage-signuplink">Sign Up</a></pre>
            </span>
          </div>
        </form>
      </div>
    </div>
    <!-- <script src="indexjs.js"></script> -->
    <script>
      hamburger = document.querySelector(".hamburger");
      let loginCont = document.getElementById('loginCont');
      let show_pass_button = document.getElementById('show_pass');
      let pass_field = document.getElementById('pass_field');
      show_pass_button.addEventListener('click', ()=>{
      if(show_pass_button.checked === true){
        pass_field.type = "text";
      }else{
        pass_field.type = "password";
      }
      })

hamburger.onclick = function(){
    navBar = document.querySelector(".nav-bar");
    if(navBar.classList.contains("active")){
    navBar.classList.remove("active");
    loginCont.style.zIndex = '0';
    }else{
    loginCont.style.zIndex = '-20';
    navBar.classList.add("active");
    }
}
// let signupCont = document.getElementById('signupCont');

// hamburger.onclick = function(){
//     navBar = document.querySelector(".nav-bar");
//     if(navBar.classList.contains("active")){
//     navBar.classList.remove("active");
//     signupCont.style.zIndex = '0';
//     }else{
//     signupCont.style.zIndex = '-20';
//     navBar.classList.add("active");
//     }
// }

    </script>
  </body>
</html>

<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $select = "SELECT * FROM users WHERE email = '$email';";
        $result = mysqli_query($conn, $select);
        $num = mysqli_num_rows($result);
      if($num == 1){
        $check_pass = "select * from users where password = '$password';";
        $run = mysqli_query($conn, $check_pass);
        if($run){
          $_SESSION['loggedin'] = true;
          header("location: index.php");
        }else{
          echo "login false";
        }
    }
  }
}
?>