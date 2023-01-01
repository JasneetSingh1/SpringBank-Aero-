<?php


session_start();

include("connection.php");
include("functions.php");

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
    <link rel="stylesheet" href="./styles.css">
    <script src="./index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Springbank Aero Services</title>
</head>

<body>
    <div class="landing-page">
        <div class="nav__container">
        <nav>
            <figure>
                <a href="./index1.php"><img id="personal-logo" src="./assets/personal-logo.png" alt=""></a>
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
        <header class="header">
            <!-- <img class="header__background--img" src="./assets/airstrip.webp" alt=""> -->
            <div class="info__content">
                <ul class="info__list">
                    <li class="info__item">Identifier: CYBW</li>
                    <li class="info__item">Coordinates: N51 06.32, W114 22.29</li>
                    <li class="info__item">Tower: 118.2 / 120.7</li>
                    <li class="info__item">Ground: 121.8</li>
                    <li class="info__item">ATIS: 127.9</li>
                    <li class="info__item">UNICOM: 123.4</li>
                </ul>
            </div>
            <div class="header__content">
                <h1 class="header__title"><b class="blue">Springbank</b> Aero <b class="blue">Services</b></h1>
                <p class="header__para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla earum vitae
                    porro error consectetur.</p>
                <a href="./indexServices.php">
                    <button class="service__btn">
                        Our Services
                    </button>
                </a>
            </div>
        </header>
        <section id="about-us">
            <h2 class="about-us__title">About Us</h2>
            <div class="about-us--content">
                <figure class="about__img--container">
                    <img class="about__img" src="./assets/about-us--img.jpg" alt="">
                </figure>
                <div class="about-us__detail">
                    <p class="about-us--para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem amet
                        praesentium exercitationem
                        ratione vero. Fuga expedita obcaecati quam nisi, quos natus eos asperiores temporibus impedit
                        eius vel labore itaque saepe.</p>
                    <a href="./indexAbout.html"><button class="about__btn service__btn">More About Us!</button></a>
            </div>
        </section>
        <section id="events">
            <h2 class="events__title">News & Events</h2>
            <iframe class="events__calendar"
                src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FEdmonton&src=anNpbmc2MDBAbXRyb3lhbC5jYQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jMzM3Yzc3MGQxMDZhNDkzMWMyMjQwMDkzMTgzNzg0MDE1YjczMTNkYzU1NTAwMzMzNjU2ODA3ZDBlZjA0NmJkQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=ZW4uY2FuYWRpYW4jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%238E24AA&color=%230B8043"
                style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </section>
        <section id="fuelPrices">
            <h2 class="fuelPrices__title">Fuel Prices</h2>
            <div class="plans">
                <div class="plan business__plan">
                    <h2 class="plan__title bus">JET A-1 (FSII)</h2>
                    <hr class="business__hr">
                    <h1 class="plan__price bus">$
                        <?php if (isset($user_data['price'])): ?>
                            <?php echo $user_data['price'];?>
                        <?php endif; ?>
                    </h1>
                    
                </div>

                <div class="plan business__plan">
                    <h2 class="plan__title bus">AV GAS 100LL</h2>
                    <hr class="business__hr">
                    <h1 class="plan__price bus">$
                        <?php if (isset($user_data2['price'])): ?>
                            <?php echo $user_data2['price'];?>
                        <?php endif; ?>
                    </h1>
                    
                </div>
            </div>
        </section>
    </div>
</body>
<footer>
    <div class="container">
        <div class="row footer__row">
            <figure class="footer__logo--img-wrapper">
                <a href="#"><img src="./assets/springbank-white.png" class="footer__logo--img" alt="">
            </a>
            </figure>
            <div class="modal__medias">
                <figure class="modal__media">
                    <a href="">
                        <img class="modal__media--img" src="./assets/instagram-logo.png" alt="">
                    </a>
                    
                </figure>
                <figure class="modal__media">
                    <a href="">
                        <img class="modal__media--img" src="./assets/facebook-logo-2019.png" alt="">
                    </a>
                    
                </figure>
                <figure class="modal__media">
                    <a href="">
                        <img class="modal__media--img" src="./assets/email.png" alt="">
                    </a>
                    
                </figure>
                <figure class="modal__media">
                    <a href="">
                        <img class="modal__media--img" src="./assets/phone.png" alt="">
                    </a>
                    
                </figure>
            </div>
            </div>
            <div class="footer__social--list">
            <div class="footer__booking--wrapper">
                <a href="indexLoginPage.php" class="
                footer__booking--link
                link__hover-effect
                link__hover-effect--white
                ">Login</a>
            </div>
            <div class="footer__booking--wrapper">
                <a href="#" class="
                footer__booking--link
                link__hover-effect
                link__hover-effect--white
                ">Book with Us !</a>
            </div>
                <div class="footer__contact--wrapper">
                <h3 class="footer__contact--title">Contact Us</h3>
                <p class="footer__contact--para">Main Line: (403) 247-8833
                </p>
                <p class="footer__contact--para">Direct Fuel line: (403) 466-8834</p>
                </div>
                <div class="footer__location--wrapper">
                    <h3 class="footer__location--title">Location</h3>
                    <p class="footer__location--para">208A Avro Lane Calgary, Alberta T3Z 3S5</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">© Copyright 2021 | Theme by leandesignsolutions.com | All Rights Reserved | Powered by WordPress</div>

</footer>
</html>
