<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);




if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted

    $price = $_POST['jet_gas_price'];
    $price2 = $_POST['av_gas_price'];

    if (!empty($price) && is_numeric($price)) {

        //save to database
        $query = "insert into jet_a1_price (price) values ('$price')";
        mysqli_query($con, $query);
    }


    if (!empty($price2) && is_numeric($price2)) {

        //save to database
        $query = "insert into av_gas_price (price) values ('$price2')";
        mysqli_query($con, $query);
        
    }

}


$user_dat = check_login($con);

        $query = "SELECT * FROM jet_a1_price ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($con, $query);
        $user_data = mysqli_fetch_assoc($result);

        $query2 = "SELECT * FROM av_gas_price ORDER BY id DESC LIMIT 1";
        $result2 = mysqli_query($con, $query2);
        $user_data2 = mysqli_fetch_assoc($result2);







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylesAdminPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="./index.js"></script> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="nav__container">
        <nav>
            
            <figure>
                <a href="./index1.html"><img id="personal-logo" src="./assets/personal-logo.png" alt=""></a>
            </figure>
            <ul class="nav__link--list">
                <li class="nav__link">
                    <a href="./index1.php" class="
                    nav__link--anchor
                    link__hover-effect
                    link__hover-effect--black">Home</a>
                </li>
                <li class="nav__link">
                    <a href="./indexAbout.html" class="
                    nav__link--anchor
                    link__hover-effect
                    link__hover-effect--black">About</a>
                </li>
                <li class="nav__link">
                    <a href="./indexServices.php" class="
                    nav__link--anchor
                    link__hover-effect
                    link__hover-effect--black">Services</a>
                </li>
                <li class="nav__link">
                    <a href="#" class="
                     nav__link--anchor
                     link__hover-effect
                     link__hover-effect--black">Detailing</a>
                </li>
                <li class="nav__link">
                    <a href="./indexNews.html" class="
                    nav__link--anchor
                    link__hover-effect
                    link__hover-effect--black">News & Events</a>
                </li>
                <li class="nav__link">
                    <a href="./indexContact.html" class="
                    nav__link--anchor
                    link__hover-effect
                    link__hover-effect--black">Contact Us</a>
                </li>
            </ul>

            <button class="btn__menu b" onclick="openMenu()">
                <i class="fa fa-bars"></i>
            </button>

            <div class="menu__backdrop">
                <button class="btn__menu btn__menu--close" onclick="closeMenu()">
                    <i class="fa fa-times"></i>
                </button>
                <ul class="menu__links">
                    <li><a href="./index1.php" class="menu__link menu__link--a">Home</a></li>
                    <li><a href="./indexAbout.html" class="menu__link menu__link--a">About</a></li>
                    <li><a href="./indexServices.php" class="menu__link menu__link--a">Services</a></li>
                    <li><a href="#" class="menu__link menu__link--a">Detailing</a></li>
                    <li><a href="./indexNews.html" class="menu__link menu__link--a">News & Events</a></li>
                    <li><a href="./indexContact.html" class="menu__link menu__link--a">Contact Us</a></li>
                    <li><a href="#" class="menu__link menu__link--signUp singUp btn">Login</a></li>
                </ul>
            </div>
        

        </nav>
    </div>
    <div class="contain">
    <div class="box">
        <form method="post" class="form" id="login">
            <h1 class="form__title">Fuel Price</h1>

            <div class="form__input-group">
                <h2 class="price__title">JET A-1 (FSII)</h2>
                <p class="current__price">Current price: $
                    <?php if (isset($user_data['price'])): ?>
                        <?php echo $user_data['price'];?>
                    <?php endif; ?>
                </p>
                <input type="text" class="form__input"  name="jet_gas_price" autofocus placeholder="JET A-1 (FSII)">
                <div class="form__input-error-message"></div>
            </div>
            <br>
            <div class="form__input-group">
                <h2 class="price__title">AV GAS 100LL</h2>
                <p class="current__price">Current price: $
                    <?php if (isset($user_data2['price'])): ?>
                        <?php echo $user_data2['price'];?>
                    <?php endif; ?>
                </p>
                <input type="text" class="form__input"  name="av_gas_price" autofocus placeholder="AV GAS 100LL">
                <div class="form__input-error-message"></div>
            </div>

            <button class="form__button" type="submit" value="price_button" >Change</button>
    
        </form>
    </div>
    </div>







</body>
</html>