<!DOCTYPE HTML>

<?php
session_start();
include('database.php');

?>

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


<head>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/styleNav.css">
    <link rel="stylesheet" href="css/styleProgress.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kaushan Script'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amaranth&family=Comfortaa:wght@700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charSet="utf-8">
    <meta name="release-version" content="v4.14.20">
    <meta property="fb:app_id" content="186796388009496">
    <link rel="canonical" href="https://www.myfitnesspal.com">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <title>PlantFit. | Progress</title>
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="description" content="Take control of your goals. Track calories, break down ingredients, and log activities with MyFitnessPal.">
    <meta property="og:title" content="MyFitnessPal | MyFitnessPal">
    <meta property="og:description" content="Take control of your goals. Track calories, break down ingredients, and log activities with MyFitnessPal.">
    <link rel="preload" as="image" imagesrcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=320&amp;q=75 320w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=375&amp;q=75 375w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=425&amp;q=75 425w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=512&amp;q=75 512w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhero-slice%402x.e3eec8a8.png&amp;w=3840&amp;q=75 3840w" imagesizes="100vw">
    <meta name="next-head-count" content="33">
    <link rel="icon" type="image/png" href="images/w7jprrSawiia.png">
    <script defer nomodule src="js/0Ymqkc6iMBm7.js"></script>

    <!-- used to avoid fake favicon requests
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <style data-emotion="css-global 18k73yv">

    </style>
</head>

<header>
    <div class="contain">
        <a href="index.php" class="headline">
            <span id="plant">Plant</span>
            <span id="fit">Fit</span>
            <span id="dot">.</span>
        </a>

        <div class="navbar" id="myNavbar">

            <div></div>

            <?php
            if (isset($_SESSION['Login Data'])) {
            ?>
                <a href="home.php" data-nav-link=""> Home</i></a>
            <?php } ?>
	
            <a href="aboutus.php" data-nav-link="">About Us</a>

            <a href="https://notepad.pw/code/oOZDpfOl1ey7pgvbnY6i" data-nav-link="">Contact</a>

            <?php
            if (isset($_SESSION['Login Data'])) {
            ?>
                <div class="dropdown">
                    <a class="dropbtn" href="" data-nav-link=""> <?php echo $_SESSION['Login Data']['username'] ?>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="logout.php">Log out</a>
    
                    </div>
                </div>
            <?php } ?>

        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
</header>

<body>
    <div class="navbar2">
        <div class="subnav">
            <button class="subnavbtn">My Home</button>
            <div class="subnav-content">
                <a href="home.php">Home</a>
                <a href="progress.php">Progress</a>
            </div>
        </div>
        <div class="subnav" id="foodblock">
            <button class="subnavbtn">Food</button>
            <div class="subnav-content">
                <a href="food.php">Food Consumed</a>
            </div>
        </div>
        <div class="subnav">
            <form method="go" action="exercises.php"> <button class="subnavbtn">Exercise</button> </form>
        </div>
    </div>
</body>
    <!-- DAY LA BODY -->
    <?php
    if (isset($_SESSION['Login Data'])) {
        $username = $_SESSION['Login Data']['username'];
        $sql = "SELECT * FROM account WHERE username = '$username'";
        $result = $database -> query($sql);

        $userData = $result -> fetch_assoc();

        if ($userData['info'] == null) {
            $tranningDate = 0;
            $tranningData = 0;
            $progress = 0;
        } else {

            $tranningDate = json_decode($userData['info'],true)['training'];
            $tranningData = $userData['tranningData'];

            if ($tranningData - $tranningDate > 0) {
                $tranningData = $tranningDate;
            }
            $progress = $tranningData / $tranningDate * 100;
            }
        }
    ?>
    <div class="container mt-3" id="main-progress">
        <h2 style="text-align:center">Check Your Training Progress Over Here</h2>
        <label for="w">Day number: <?= $tranningData ?></label>
        <div class="progress mb-5" style="height: 25px;border-radius:9px;border: 1px solid">
            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="
                 width:<?=$progress?>%";
                 min-width:2%;   
                ">
                <?= number_format($progress) ?>%
            </div>
        </div>
    </div>


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
</div>


<footer></footer>