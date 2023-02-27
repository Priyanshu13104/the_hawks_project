<?php 

include 'dbconnect.php';

$hawker_types = "Select * from hawker_categories";
$result = mysqli_query($conn, $hawker_types);
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hawker_type.css">
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

    <div class="hawker-card-container" id="hawker-card-container">

    <?php 
        for($i = 0; $i < $num; $i++){
            $row = mysqli_fetch_assoc($result);
            
            echo '
            <div class="hawker-card" id="hawker-card">
                <img src="" class="hawker-image" alt="hawker image">
                <div class="hawker-type-text">'.$row['category_name'].'<br> Hawkers</div>
            
                <input type="hidden" value="'.$row['category_id'].'" name="id">
                <button type="submit" name="submit" class="view-hawkers-btn"><a href="vegetable_hawk.php?id='.$row['category_id'].'">View All</a></button>
            
            </div>
            ';
        }
    ?>



        <!-- <div class="hawker-card" id="hawker-card">
            <img src="https://source.unsplash.com/400x400/?fruits" class="hawker-image" alt="hawker image">
            <div class="hawker-type-text">Fruit<br> Hawker's</div>
            <button class="view-hawkers-btn"><a href="folder/fruit_hawker.html">View All</a></button>
        </div>
        <div class="hawker-card" id="hawker-card">
            <img src="https://source.unsplash.com/400x400/?coconuts" class="hawker-image" alt="hawker image">
            <div class="hawker-type-text">Coconut<br> Hawker's</div>
            <button class="view-hawkers-btn"><a href="">View All</a></button>
        </div>
        <div class="hawker-card" id="hawker-card">
            <img src="https://source.unsplash.com/400x400/?vendor" class="hawker-image" alt="hawker image">
            <div class="hawker-type-text">Pani<br> Puri</div>
            <button class="view-hawkers-btn"><a href="">View All</a></button>
        </div>
        <div class="hawker-card" id="hawker-card">
            <img src="https://source.unsplash.com/400x400/?scrap" class="hawker-image" alt="hawker image">
            <div class="hawker-type-text">Scrap<br> Dealers</div>
            <button class="view-hawkers-btn"><a href="">View All</a></button>
        </div> -->
        
    </div>
    <script>
        hamburger = document.querySelector(".hamburger");
        let hawkercont = document.getElementById("hawker-card-container");
        let hawkercrd = document.getElementById("hawker-card")
  
        hamburger.onclick = function () {
          navBar = document.querySelector(".nav-bar");
          if(navBar.classList.contains("active")){
            navBar.classList.remove("active");
            }else{
            hawkercrd.style.zIndex = '-1';
            navBar.classList.add("active");
            }
          
        };
      </script>
</body>
</html>
