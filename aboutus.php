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

<head>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/styleNav.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">

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
    <title>PlantFit. | Home</title>
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
                        <a href="#">Progress</a>
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
    <div class="container">
        <br>
        <h3>The fitness tracker website provides a number of functionalities that allow users to effectively track their fitness progress. Among these features are:</h3>
        <h5>User Registration and Login: Visitors to the website can register by providing personal information such as their name, email address, and password. Once registered, they can access the system's features by logging into their account.</h5>
        <h5>Profile Creation: Users can create their fitness profile, which includes their  height, weight, the expected weight, height  and the number of days expected to accomplish the goal .</h5>
        <h5>Fitness Tracking: Users can track their fitness progress easily by logging in their account to track progress of daily diet with foods divided in to four groups  consist of breakfast, lunch, dinner and snacks, also consider recommended exercises, which includes activities such as pushing up, pulling up and deadlifting . This  information is used by the system to calculate their daily calories burned and track their progress toward their fitness goals that they set before.</h5>
        <h5>Goal Setting: Users can set their fitness goals by inserting weight and height at the time, the expected weight, height and the number of days expected to accomplish the goal . The system provides them with daily workout plans, meal selections and updates progress bar to help them achieve their goals when they finishes the daily diet task.</h5>
        <br>
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
    </div>
</body>

<footer></footer>