<?php 

    include 'dbconnect.php';

    //gets the url of the current page

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    //fetching id from the url
    $id = explode('?', $url);
    print_r($id);
    
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbarcss.css">
    <link rel="stylesheet" href="view_hawker.css">
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
              <a href="#" class="active">Vegetable</a>
            </li>
            <li>
              <a href="login.php">Login</a>
            </li>
          </ul>
        </nav>
    </header>


    <div class="select_area_container" id="select_area_container">
        <div class="select_area_text">
            <div class="area_text">Select Your Area</div>
        </div>
        <div class="select_area_field">
            <select id="fetcharea" class="area-fetch" name="area">
                <option value="karelibaug">
                    Karelibaug
                </option>
                <option value="manjalpur">
                    Manjalpur
                </option>
                <option value="makarpura">
                    Makarpura
                </option>
                <option value="ajwa">Ajwa</option>
                <option value="new karelibaug">
                    New Karelibaug
                </option>
                <option value="sama">Sama</option>
                <option value="nizampura">
                    Nizampura
                </option>
                <option value="gorwa">Gorwa</option>
            </select>
        </div>
    </div>


    <div class="vege_hawker_container">
        <div class="vege_hawk_card" id="vege_hawk_card">
            <img src="https://source.unsplash.com/400x400/?vegetable" class="vege_hawker_image" alt="hawker image">
            <div class="vege_hawker_name">Vege Hawker Name</div>
            <button class="visit_hawkers_btn"><a href="vegetable_hawk.html">Visit</a></button>
        </div>
        <div class="vege_hawk_card">
            <img src="https://source.unsplash.com/400x400/?vegetable" class="vege_hawker_image" alt="hawker image">
            <div class="vege_hawker_name">Vege Hawker Name</div>
            <button class="visit_hawkers_btn"><a href="vegetable_hawk.html">Visit</a></button>
        </div>
        <div class="vege_hawk_card">
            <img src="https://source.unsplash.com/400x400/?vegetable" class="vege_hawker_image" alt="hawker image">
            <div class="vege_hawker_name">Vege Hawker Name</div>
            <button class="visit_hawkers_btn"><a href="vegetable_hawk.html">Visit</a></button>
        </div>
        <div class="vege_hawk_card">
            <img src="https://source.unsplash.com/400x400/?vegetable" class="vege_hawker_image" alt="hawker image">
            <div class="vege_hawker_name">Vege Hawker Name</div>
            <button class="visit_hawkers_btn"><a href="vegetable_hawk.html">Visit</a></button>
        </div>
        <div class="vege_hawk_card">
            <img src="https://source.unsplash.com/400x400/?vegetable" class="vege_hawker_image" alt="hawker image">
            <div class="vege_hawker_name">Vege Hawker Name</div>
            <button class="visit_hawkers_btn"><a href="vegetable_hawk.html">Visit</a></button>
        </div>
        <div class="vege_hawk_card">
            <img src="https://source.unsplash.com/400x400/?vegetable" class="vege_hawker_image" alt="hawker image">
            <div class="vege_hawker_name">Vege Hawker Name</div>
            <button class="visit_hawkers_btn"><a href="vegetable_hawk.html">Visit</a></button>
        </div>
        <div class="vege_hawk_card">
            <img src="https://source.unsplash.com/400x400/?vegetable" class="vege_hawker_image" alt="hawker image">
            <div class="vege_hawker_name">Vege Hawker Name</div>
            <button class="visit_hawkers_btn"><a href="vegetable_hawk.html">Visit</a></button>
        </div>
        <div class="vege_hawk_card">
            <img src="https://source.unsplash.com/400x400/?vegetable" class="vege_hawker_image" alt="hawker image">
            <div class="vege_hawker_name">Vege Hawker Name</div>
            <button class="visit_hawkers_btn"><a href="vegetable_hawk.html">Visit</a></button>
        </div>
    </div>
    <script>
        hamburger = document.querySelector(".hamburger");
        let select_area_cont = document.getElementById("select_area_container");
        let vegehawkcard = document.getElementById("vege_hawk_card");
  
        hamburger.onclick = function () {
          navBar = document.querySelector(".nav-bar");
          if(navBar.classList.contains("active")){
            navBar.classList.remove("active");
          }else{
            select_area_cont.style.zIndex = '-1';
            vegehawkcard.style.zIndex = '-1';
            navBar.classList.add("active");
          }
        };
    </script>
</body>
</html>