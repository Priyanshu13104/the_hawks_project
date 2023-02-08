<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hawkers.css">
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
              <a href="hawker.html" class="active">Hawkers</a>
            <li>
            <li>
                <a href="login.php">Login</a>
            </li>
          </ul>
        </nav>
      </header>
      <script>
        hamburger = document.querySelector(".hamburger");
  
        hamburger.onclick = function () {
          navBar = document.querySelector(".nav-bar");
          navBar.classList.toggle("active")
        };
      </script>
</body>
</html>