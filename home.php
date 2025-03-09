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
if (!isset($_SESSION['Login Data'])) {
    header('Location: login.php');
    return;
}
?>

<?php
include("database.php");

$user_login = $_SESSION["Login Data"]["username"];

$sql_user = "SELECT * FROM account WHERE username = '$user_login'";

$result_user = $database->query($sql_user);

$user = mysqli_fetch_assoc($result_user);

// echo implode(" ",$user);
// check if form is submitted
if (isset($_POST['addInfo'])) {
    $name = $_POST['name'];
    $cannang = $_POST['cannang'];
    $chieucao = $_POST['chieucao'];
    $dream_weight = $_POST['dream_weight'];
    $dream_height = $_POST['dream_height'];
    $training = $_POST['training'];

    // khởi tạo array
    $info = array(
        'name' => $name,
        'Cannang' => $cannang,
        'Chieucao' => $chieucao,
        'dream_weight' => $dream_weight,
        'dream_height' => $dream_height,
        'training' => $training
    );

    // Chuyển array thành json
    $info = json_encode($info);

    $sql = "UPDATE account SET info = '$info' WHERE username = '$user_login' ";

    $database->query($sql);
    //Check tên có số không
    if (preg_match('~[0-9]+~', $name)) {
    ?> <script type='text/javascript'>
            alert("Try again ! Your name can not contains number");
        </script>
    <?php }
    //check so lieu nhap vo co phai number khong
    elseif (!is_numeric($dream_height) or !is_numeric($cannang) or !is_numeric($chieucao) or !is_numeric($dream_weight) or !is_numeric($training)) {
    ?> <script type='text/javascript'>
            alert("Try again ! Please enter a valid status");
        </script>
    <?php }
    //check gia tri expect co lon hon hien tai
    elseif ($dream_weight < $cannang or $dream_height < $chieucao) {
    ?>
        <script type='text/javascript'>
            alert("Try again ! Expected value must be higher than your current value");
        </script>
    <?php }
    // kiểm tra nếu data update có thay đổi thì thông báo thành công
    elseif ($database->affected_rows > 0) {
    ?>
        <script type='text/javascript'>
            alert("Update success !");
        </script>
        <script>
            setTimeout(() => {
                // Reload lại trang
                window.location.reload();
            }, 1000);
        </script>
<?php }
}

// Mảng chứa các key của json
$encode_info = array(
    'name' => 'Name',
    'Cannang' => 'Weight',
    'Chieucao' => 'Height',
    'dream_weight' => 'Expect Weight',
    'dream_height' => 'Expect Height',
    'training' => 'Planning days'
);


?>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
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
    <!-- DAY LA BODY -->
    <div class="container mb-4" style="height: 100%">
        <div class="row mt-4 ml-3">
            <div class="col-md-3">
                <div class="card">
                    <img src="img5.jpg" class="card-img-top rounded-circle p-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= $_SESSION["Login Data"]['username'] ?></h5>
                        <ul>
                            <?php
                            // kiểm tra nếu info là null thì hiển thị thông báo chưa có thông tin
                            if (gettype($user['info']) == 'NULL') {
                                echo '<li>No information</li>';
                            } else {
                                // Chuyển json thành array
                                $info = json_decode($user['info'], true);

                                // Hiển thị thông tin
                                foreach ($info as $key => $value) {
                                    echo '<li>' . $encode_info[$key] . ': <b>' . $value . '</b></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 ml-0">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="inputa" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="inputa" aria-describedby="emailHelp" name='name'>
                    </div>
                    <div class="mb-3">
                        <label for="inputa" class="form-label">Weight:</label>
                        <input type="text" class="form-control" id="inputa" aria-describedby="emailHelp" name='cannang'>
                    </div>
                    <div class="mb-3">
                        <label for="inputa" class="form-label">Height:</label>
                        <input type="text" class="form-control" id="inputa" aria-describedby="emailHelp" name='chieucao'>
                    </div>
                    <div class="mb-3">
                        <label for="inputa" class="form-label">Expect weight:</label>
                        <input type="text" class="form-control" id="inputa" aria-describedby="emailHelp" name='dream_weight'>
                    </div>
                    <div class="mb-3">
                        <label for="inputa" class="form-label">Expect height:</label>
                        <input type="text" class="form-control" id="inputa" aria-describedby="emailHelp" name='dream_height'>
                    </div>
                    <div class="mb-3">
                        <label for="inputa" class="form-label">Total training day:</label>
                        <input type="text" class="form-control" id="inputa" aria-describedby="emailHelp" name='training'>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left:340px" name="addInfo">Submit</button>
                </form>
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