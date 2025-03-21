<!DOCTYPE HTML>

<?php
include('database.php');
if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email'])) {
    $user_name = $_POST['username'];
    $pass = $_POST['password'];
    $mail = $_POST['email'];

    $get_username = "SELECT * FROM `account` where username = '$user_name' ";
    $result_get_username = $database->query($get_username);

    $get_email = "SELECT * FROM `account` where email = '$mail' ";
    $result_get_mail = $database->query($get_email);

    if ($result_get_mail->num_rows > 0) {
        echo "<script type='text/javascript'>alert('Already have this email !');</script>";
    } elseif ($result_get_username->num_rows > 0) {
        echo "<script type='text/javascript'>alert('Already have this username !');</script>";
    } elseif ($_POST['username'] == "") {
        echo "<script type='text/javascript'>alert('Please enter your username !');</script>";
    } elseif ($_POST['password'] == "") {
        echo "<script type='text/javascript'>alert('Please enter your password !');</script>";
    } elseif ($_POST['email'] == "") {
        echo "<script type='text/javascript'>alert('Please enter your email !');</script>";
    } else {
        $sql_insert = "INSERT INTO account(ID,username,password,email) VALUES(Null,'$user_name', '$pass', '$mail')";
        $result_register = $database->query($sql_insert) or die($database->error);
?>
        <script type='text/javascript'>
            window.location.href = 'login.php';
            alert("Register success !\nNow log in your account");
        </script>
<?php
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <meta charSet="utf-8">
    <meta name="release-version" content="v4.14.20">
    <meta property="fb:app_id" content="186796388009496">
    <link rel="canonical" href="https://www.myfitnesspal.com">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <title>PlantFit. | Register</title>
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
    <div id="__next" data-reactroot>
        <header>
            <header class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation4 MuiAppBar-root MuiAppBar-colorDefault MuiAppBar-positionStatic css-12upb36">
                <div class="MuiToolbar-root MuiToolbar-regular css-eg6my0">
                    <div class="MuiContainer-root MuiContainer-maxWidthMd MuiContainer-disableGutters css-18rmlqv">
                        <div class="MuiGrid-root MuiGrid-container css-1d3bbye">
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-10z0jsg" href="/">My Home</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1i8enoe" href="/en/food/diary">Food</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej"><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1i8enoe" href="exercises.html">Exercise</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej"><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1i8enoe" href="/en/reports">Reports</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej"><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1i8enoe" href="/en/apps/logged_in_index">Apps</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej"><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1i8enoe" href="https://community.myfitnesspal.com/en/entry/jsconnect?client_id=1122755462&amp;Target=%2Fcategories">Community</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej"><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1i8enoe" href="https://blog.myfitnesspal.com/">Blog</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej"><a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1i8enoe" href="/premium?source=menu_bar">Premium</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="MuiToolbar-root MuiToolbar-gutters MuiToolbar-regular css-uom0n6">
                    <div class="MuiContainer-root MuiContainer-maxWidthMd MuiContainer-disableGutters css-18rmlqv">
                        <div class="MuiGrid-root MuiGrid-container css-1d3bbye">
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1sw7z84" data-testid="" href="/">Home</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1ncw7et" data-testid="" href="/account/my-goals">Goals</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1ncw7et" data-testid="" href="/measurements/check-in">Check-In</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1ncw7et" href="/en/messages" data-testid="mail-Link">Mail</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1ncw7et" data-testid="" href="/profile/anluong231123">Profile</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1ncw7et" href="/en/friends" data-testid="">Friends</a>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-1ncw7et" data-testid="" href="/account/settings">Settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- DAY LA BODY -->

            <div class="container">
                <h3 class="mt-5 mb-3">Register</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">User name:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>

                    <div class="form-group ">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>

                    <div>
                        <input class="btn btn-primary" type="submit" value="Register">
                    </div>

                    <div style="padding-top:10px">
                        <a href="login.php" data-nav-link="">Already had account</a>
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
    </div>
</body>

<footer></footer>