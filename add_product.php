<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="navbarcss.css">
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
            <a href="hawker_type.html">Hawkers</a>
          <li>
          <?php if($_SESSION['loggedin'] == true) {
            echo '<li><a href="">Profile</a></li>';
            echo '<li><a href="logout.php">Logout</a></li>';
          }else{
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
        </ul>
      </nav>
    </header>
    <div class="container">
        <form action="" method="post">
            <input type="file" name="p_image" required />
            <input type="text" name="p_name" required />
            <input type="text" name="" required />
        </form>
    </div>
</body>
</html>