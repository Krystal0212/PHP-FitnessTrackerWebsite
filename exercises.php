<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (!isset($_SESSION['Login Data'])) {
    header('Location: login.php');
    return;
}
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
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercises</title>
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/styleNav.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kaushan Script'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amaranth&family=Comfortaa:wght@700&display=swap">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<style>
		html,
		body {
			overflow-x: hidden;
		}
	</style>
</head>

<style>
	h1 {
		text-align: center;
	}

	header {
		border-bottom: outset;
		/* border-color: black;
		background-image: url('1.png'); */
		background-size: 100%;
	}

	.navigation {
		color: white;
		background-color: black;
		overflow: hidden;
	}

	.navigation a {
		float: right;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
	}

	/* Change the color of links on hover */
	.navigation a:hover {
		background-color: #ddd;
		color: black;
	}

	/* Add a color to the active/current link */
	.navigation a.active {
		background-color: #04AA6D;
		color: black;
	}

	.row {
		text-align: center;
	}
</style>

<body>
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
	<br>

	<div class="container">
		<h1 id="make">Make Your Own Exercises Rotation</h1>
		<p>The strength standards on this page grade your one-rep max performance against other adult lifters at your bodyweight.</p>
		<p>Our strength standards are based on millions of lifts entered by Strength Level users.</p>
		<!-- dòng phải là con trực tiếp của container, mang class row -->
		<div class="row">

			<!-- cột 1 -->
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card">
					<img src="pic/push-ups.png" alt="avt">
					<div class="container">
						<h4><b>Push ups</b></h4>
						<form method="go" action="push-ups.php">
							<button type="submit" class="btn btn-success">GO</button>
						</form>
						<br>
					</div>
				</div>
			</div>

			<!-- cột 2 -->
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card">
					<img src="pic/pull-ups.png" alt="avt">
					<div class="container">
						<h4><b>Pull ups</b></h4>
						<form method="go" action="pull-ups.php">
							<button type="submit" class="btn btn-success">GO</button>
						</form>
						<br>
					</div>
				</div>
			</div>

			<!-- cột 3 -->
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card">
					<img src="pic/squat.png" alt="avt">
					<div class="container">
						<h4><b>Squat</b></h4>
						<form method="go" action="squat.php">
							<button type="submit" class="btn btn-success">GO</button>
						</form>
						<br>
					</div>
				</div>
			</div>

			<!-- cột 4 -->
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card">
					<img src="pic/deadlift.png" alt="avt">
					<div class="container">
						<h4><b>Deadlift</b></h4>
						<form method="go" action="deadlift.php">
							<button type="submit" class="btn btn-success">GO</button>
						</form>
						<br>
					</div>
				</div>
			</div>

			<!-- cột 5 -->
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card">
					<img src="pic/shoulder-press.png" alt="avt">
					<div class="container">
						<h4><b>Shoulder Press</b></h4>
						<form method="go" action="shoulder-press.php">
							<button type="submit" class="btn btn-success">GO</button>
						</form>
						<br>
					</div>
				</div>
			</div>

			<!-- cột 6 -->
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card">
					<img src="pic/dumbbell-curl.png" alt="avt">
					<div class="container">
						<h4><b>Dumbbell Curl</b></h4>
						<form method="go" action="dumbbell-curl.php">
							<button type="submit" class="btn btn-success">GO</button>
						</form>
						<br>
					</div>
				</div>
			</div>


		</div> <!-- Kết thúc dòng 1 -->

	</div>
	<br>
	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
	</script>
	<div class="exercises_body">
		<?php

		?>

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
</body>

</html>