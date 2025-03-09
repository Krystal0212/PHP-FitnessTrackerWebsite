<!DOCTYPE HTML>

<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<?php
session_start();
?>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- <link rel="stylesheet" href -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kaushan Script'>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amaranth&family=Comfortaa:wght@700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!-- used to avoid fake favicon requests -->
    <!-- <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantFit - Fitness & Nutrition</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="contain" id="myContain">
            <a href="index.php" class="headline">
                <span id="plant">Plant</span>
                <span id="fit">Fit</span>
                <span id="dot">.</span>
            </a>

            <div class="navbar" id="myNavbar">

                <div></div>
                <!-- aria-label="close menu"  -->
                <button class="cancel" data-nav-toggler="">
                    <ion-icon aria-hidden="true" role="img" class="md hydrated"></ion-icon>
                </button>

                <?php
                if (isset($_SESSION['Login Data'])) {
                ?>
                    <a href="home.php" data-nav-link=""> Home</i>
                    </a>
                <?php } ?>

                <a href="aboutus.php" data-nav-link="">About Us</a>

                <a href="https://notepad.pw/code/oOZDpfOl1ey7pgvbnY6i" data-nav-link="">Contact</a>

                <?php
                if (isset($_SESSION['Login Data'])) {
                ?>
                    <div class="dropdown">
                        <a class="dropbtn" href="" data-nav-link="">
                            <?php echo $_SESSION['Login Data']['username'] ?>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="logout.php">Log out</a>
                        </div>
                    </div>
                <?php } ?>

                <?php
                if (!isset($_SESSION['Login Data'])) { ?>
                    <a href="register.php" data-nav-link="">Register</a>
                <?php } ?>

            </div>

            <a href="javascript:void(0);" class="icon-navbar" onclick="myFunction()">
                <ion-icon name="menu-outline"></ion-icon>
            </a>

        </div>

        <script>
            'use strict';
            const navTogglers = document.querySelectorAll("[data-nav-toggler]");
            const navLinks = document.querySelectorAll("[data-nav-link]");
            const navbar = document.querySelector("#myNavbar");

            function myFunction() {
                // showOverlay();

                var x = document.getElementById("myNavbar");
                if (x.className === "navbar") {
                    x.className += " responsive";
                } else {
                    x.className = "navbar";
                }

                var y = document.getElementById("myContain");
                if (y.className === "contain") {
                    y.className += " clicked";
                } else {
                    y.className = "contain";
                }
            }
        </script>
    </header>

    <!-- https://img.freepik.com/free-photo/fitness-body-builder-challenge_53876-125080.jpg?t=st=1677717213~exp=1677717813~hmac=ff88599b31f046df1a653b3721831bbe2f042841e5e4d10d97b5b9722c2d8072 -->
    <div class="fadein">
        <div class="background"></div>
        <img id="f1" src="pic/img2.jpg">
        <img id="f2" src="pic/img1.jpg">
        <img id="f3" src="pic/img4.jpg">
        <img id="f4" src="pic/img3.jpg">
        <div class="login-box">
            <h2 class="login-box-h2">Welcome Back !</h2>
            <div class="login-box-card">
            </div>

            <?php
            if (!isset($_SESSION['Login Data'])) {
            ?>
                <p class="login-box-test">Please click the login button to continue your progress</p>
                <form method="go" action="login.php">
                    <button type="submit" class="btn btn-warning btn-lg">Login</button>
                </form>
            <?php } else {
            ?>
                <br>
                <h2 class="login-box-h2">“No pain, no gain”
                </h2>
            <?php } ?>

        </div>
    </div>

    <div style="text-align: center;">
        <h2 class="text-slider">
            Word from our customers
        </h2>
    </div>

    <div class="slider-body">
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img5.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Very good</p>
                        </div>
                    </div>
                    <!-- <div class="card"></div> -->
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img5.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Hai Thu Hieu</h2>
                            <p class="description">Hao~ Han'</p>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="avt.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Very good</p>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">I have a balance diet after using this website</p>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img5.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">What a website</p>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Love it</p>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="avt.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Very good</p>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">Lose 2kg in 1 week</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>



    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>


<footer>
    <div class="footer-basic">

        <!-- Add icon -->
        <div class="social">
            <a href="#"><i class="icon ion-social-facebook"></i></a>
            <a href="#"><i class="icon ion-social-github"></i></a>
            <a href="#"><i class="icon ion-social-linkedin"></i></a>
            <a href="#"><i class="icon ion-social-chrome"></i></a>
        </div>

        <!-- Div contains text information -->
        <div class="box">
            <!-- Div contains present date, copyright and name of author -->
            <div class="date-box" id="current_date">

                <!-- Change the format of date to dd/mm/year -->
                <script>
                    date = new Date();
                    year = date.getFullYear();
                    month = date.getMonth() + 1;
                    day = date.getDate();
                    // Create a string contains current date
                    document.getElementById("current_date").innerHTML = twoNumbers(day) + "/" + twoNumbers(month) + "/" + year;

                    // If the number is lower than 10 return the string that added zero elemnent before it 
                    function twoNumbers(number) {
                        if (number < 10) {
                            return "0" + number;
                        }
                        return number;
                    }
                </script>

                <!-- Paragraph contains present date, copyright and name of author -->
                <p class="copyright">| Copyright ©2023 | Final-Project</p>
            </div>
        </div>
    </div>
</footer>