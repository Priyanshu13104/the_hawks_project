<?php
session_start();
include 'dbconnect.php';
if (!isset($_SESSION['loggedin'])) {
    header("location: login.php");
}

$users = "SELECT * FROM users WHERE email = '$_SESSION[email]';";
$run = mysqli_query($conn, $users);
$num = mysqli_num_rows($run);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <link rel="stylesheet" href="navbarcss.css">

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

    <div class="container">
        <form action="" method="post">
            <?php
            $row = mysqli_fetch_assoc($run);

            ?>
            <input type="text" name="username" value="<?php echo $row['username'] ?>" required />
            <input type="text" name="phone" value="<?php echo $row['phone'] ?>" required />
            <input type="text" name="password" value="<?php echo $row['password'] ?>" required>
            <!-- areas  -->
            <select id="inputarea" class="area-input" name="area">
                <option value="<?php echo $row['area'] ?>" selected disabled>
                    <?php echo $row['area'] ?>
                </option>
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
            <!-- timezone  -->
            <div class="login-input-field">
                <select name="timezone" id="timezoneinput" class="timezone-input">
                    <option value="<?php echo $row['timezone'] ?>" selected disabled><?php echo $row['timezone'] ?></option>
                    <option value="9:00 Am - 11:00 Am(Morning)">9:00 Am - 11:00 Am(Morning)</option>
                    <option value="11:00 Am - 1:00 Pm(Noon)">11:00 Am - 1:00 Pm(Noon)</option>
                    <option value="4:00 Pm- 8:00 Pm(Evening)">4:00 Pm- 8:00 Pm(Evening)</option>
                </select>
            </div>
            <button type="submit" name="submit">Save changes</button>
        </form>
    </div>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        $name = $_POST['username'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $area = $_POST['area'];
        $timezone = $_POST['timezone'];



        $change = "UPDATE `users` SET `username` = '$name', `phone` = '$phone', `password` = '$password', `area` = '$area', `timezone` = '$timezone' WHERE `email` = '$_SESSION[email]'";
        $result = mysqli_query($conn, $change);
        if ($result) {
            header("location: profile.php");
        }
    }
}

?>