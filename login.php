<!DOCTYPE HTML>
<?php
session_start();
include('database.php');

?>
<?php

if (isset($_SESSION['Login Data'])) {
    header('Location: home.php');
}

if (isset($_POST['username']) and isset($_POST['password'])) {
    $user_name = $_POST['username'];
    $pass = $_POST['password'];

    $sql_login = "SELECT * FROM account WHERE username = '$user_name' and password = '$pass'";

    $result_login = $database->query($sql_login) or die($database->error);

    if ($result_login->num_rows > 0) {

        $_SESSION['Login Data'] = array(
            'status' => 'Logged',
            'username' => $user_name,
        );


?>
        <script type='text/javascript'>
            window.location.href = 'home.php';
            alert("Login success !");
        </script>
<?php
    } else {
        echo "<script type='text/javascript'>alert('Username or password does not match !');</script>";
    }
}
?>

<head>
    <link rel="stylesheet" href="css/style1.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kaushan Script'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amaranth&family=Comfortaa:wght@700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <meta charSet="utf-8">
    <meta name="release-version" content="v4.14.20">
    <meta property="fb:app_id" content="186796388009496">
    <link rel="canonical" href="https://www.myfitnesspal.com">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <title>PlantFit. | Log in</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

            <a href="#about" data-nav-link="">About Us</a>

            <a href="#course" data-nav-link="">All Course</a>

            <a href="#blog" data-nav-link="">Blog</a>

            <a href="#" data-nav-link="">Contact</a>


        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
</header>

<body>

    <!-- DAY LA BODY -->

    <div class="container">
        <h3 class="mt-5 mb-3">Log in</h3>
        <form action="" method="post">
            <div class="form-group" style="padding-top:10px">
                <label for="username" style="padding-bottom:7px">User name:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="form-group" style="padding-top:10px">
                <label for="password" style="padding-bottom:7px">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                <br>
                <input type="checkbox" onclick="myFunction()">  Show Password
            </div>
            <script>
                function myFunction() {
                    var x = document.getElementById("password");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
            </script>
            <div style="padding-top:10px">
                <input class="btn btn-primary" type="submit" value="Log in">
            </div>
        </form>
    </div>



    <footer class="MuiBox-root css-g0t3np">
        <div class="MuiBox-root css-pskig2">
            <nav class="MuiGrid-root MuiGrid-container css-enlun6"><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76" href="/en/welcome/learn_more"><span class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">About</span></a><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76" href="/nutrition-facts-calories"><span class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Food</span></a><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76" href="/en/exercise/lookup"><span class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Exercise</span></a><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76" href="/en/apps"><span class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Apps</span></a><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76" href="https://community.myfitnesspal.com/en/entry/jsconnect?client_id=1122755462&amp;Target=%2Fcategories"><span class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Community</span></a><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76" href="https://blog.myfitnesspal.com/"><span class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Blog</span></a><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76" href="/premium?source=menu_bar"><span class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Premium</span></a></nav>
            <div class="MuiBox-root css-1qx89sr"><select aria-label="language-selector">
                    <option selected value="en">English</option>
                    <option value="de">Deutsch</option>
                    <option value="es">Español</option>
                    <option value="fr">Français</option>
                    <option value="pt">Português (Brasil)</option>
                    <option value="it">Italiano</option>
                    <option value="nb">Norsk</option>
                    <option value="nl">Nederlands</option>
                    <option value="ru">Pусский</option>
                    <option value="sv">Svensk</option>
                    <option value="da">Dansk</option>
                    <option value="ko">한국어</option>
                    <option value="ja">日本語</option>
                    <option value="zh-CN">中文(简体)</option>
                    <option value="zh-TW">中文(台灣)</option>
                </select></div>
            <div class="MuiBox-root css-3suqjk">
                <p class="MuiTypography-root MuiTypography-body1 MuiTypography-paragraph css-1y5nj7e">© 2023
                    PlantFit., Inc.</p>
            </div>
        </div>
    </footer>
    </div>
</body>

<footer></footer>