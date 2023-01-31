<?php 
    include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Document</title>
        <link rel="stylesheet" href="indexcss.css"/>
        <link rel="stylesheet" href="loginsignupcss.css"/>
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
                    <li><a href="index.html  ">Home</a></li>
                    <li><a href="">Hawkers</a></li>
                    <li><a href="login.php" class="">Login</a></li>
                </ul>
            </nav>
        </header>

        <div class="signup-box">
            <div class="signup-container" id="signupCont">
                <div class="signup-top-header">
                    <div class="signup-text">Sign Up</div>
                </div>
                <form action="" method="POST" id="form">
                    <div class="login-input-field">
                        <input type="text" class="signup-input" name="username" placeholder="Username" required/>
                    </div>
                    <div class="login-input-field">
                        <input type="email" class="signup-input" name="email" placeholder="email" required/>
                    </div>
                    <div class="login-input-field">
                        <input type="tel" class="signup-input" name="phone" placeholder="Ph. Number" required/>
                    </div>
                    <div class="login-input-field">
                        <select id="inputarea" class="area-input" name="area">
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
                    <div class="login-input-field">
                        <select name="hawker_type" id="inputtype" class="type-input">
                            <option value="vegetable_seller">Vegetable Seller</option>
                            <option value="fruit_seller">fruit Seller</option>
                            <option value="scrap_dealer">Scrap Dealer</option>
                            <option value="coconut_seller">Coconut Seller</option>
                        </select>
                    </div>
                    <div class="login-input-field">
                        <select name="timezone" id="timezoneinput" class="timezone-input">
                            <option value="9:00 Am - 11:00 Am(Morning)">9:00 Am - 11:00 Am(Morning)</option>
                            <option value="11:00 Am - 1:00 Pm(Noon)">11:00 Am - 1:00 Pm(Noon)</option>
                            <option value="4:00 Pm- 8:00 Pm(Evening)">4:00 Pm- 8:00 Pm(Evening)</option>
                        </select>
                    </div>
                    <div class="login-input-field">
                        <input type="password" name="password" class="signup-input" placeholder="Password" required/>
                    </div>
                    <div class="login-input-field">
                        <input type="submit" name="submit" class="submit" value="Sign up"/>
                    </div>
                </form>
            </div>
            <div class="after-container"><h4 id="signup-fail">
                <?php
                    if($failed == true){
                        echo 'failed';
                    }
                ?>
            </h4></div>
        </div>
        <script src="indexjs.js"></script></body>
    </body>
</html>    

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["submit"])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $timezone = $_POST['timezone'];
            $area = $_POST['area'];
            $hawker_type = $_POST['hawker_type'];
            $phone = $_POST['phone'];

            $insert = "INSERT INTO `users` (`username`, `email`, `password`, `phone`, `area`, `hawker_type`, `timezone`) VALUES ('$username', '$email', '$password', '$phone', '$area', '$hawker_type', '$timezone');";
            $run = mysqli_query($conn, $insert);
            if($run){
                header("location: login.php");
            }else{
               $failed = true;
            }
        }
    }
?>