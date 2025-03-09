<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['Login Data'])) {
    header('Location: login.php');
    return;
}
?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercises</title>
	<link rel="stylesheet" href="css/style1.css">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kaushan Script'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amaranth&family=Comfortaa:wght@700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      html, body {
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
		background-size: 100%	;
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
	.row{
		text-align: center;
	}
    img.steps{
        display: block; margin-left: auto; margin-right: auto;
    }
</style>

<body>
	<header>
		
		<div class="contain">
			<a href="#" class="headline">
				<span id="plant">Plant</span>
				<span id="fit">Fit</span>
				<span id="dot">.</span>
			</a>
	
			<div class="navbar" id="myNavbar">
	
				<div></div>
	
				<a href="home.php" id="home-nav" data-nav-link="">Home</a>
	
				<a href="aboutus.php" data-nav-link="">About Us</a>
	
				<a href="https://notepad.pw/code/oOZDpfOl1ey7pgvbnY6i" data-nav-link="">Contact</a>
	
			</div>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<ion-icon name="menu-outline"></ion-icon>
			</a>
		</div>
		
	</header>
	<div class="container">
        <br>
		<h1 id="make">DEADLIFT</h1>
        <p>Deadlift strength standards help you to compare your one-rep max lift with other lifters at your bodyweight.</p>
        <a href="exercises.php" data-nav-link="">Another Exercises</a>
        <h3>Instructions</h3>
        <p><b>Step 1 : Begin </b> with the barbell on the floor</p>
        <p><b>Step 2 : Grip </b> the barbell with a hook or overhand grip</p>
        <p><b>Step 3 : Look </b> straight ahead and take the slack out of the bar</p>
        <img src="pic/dl1.jpg" class="steps" alt="step3" width="400" height="500">
        <p><b>Step 4 : Lift </b> the bar off the floor in a controlled manner</p>
        <p><b>Step 5 : Stand </b> up and lockout</p>
        <img src="pic/dl2.jpg" class="steps" alt="step3" width="400" height="500">
        <p><b>Step 4 : Lower </b> the bar down in a controlled manner</p>
        <img src="pic/dl3.jpg" class="steps" alt="step3" width="400" height="500">
        <br>
        <h3>Reps By Weight</h3>
        <img src="pic/dltable.png" class="steps" alt="table">
        <h3 class="mt-5 mb-3 text-center text-primary">How many calories did I burn by doing deadlift ?</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="border p-3 rounded" action="http://web-tdtu.herokuapp.com/lab01/login.php">
                    <div class="form-group">
                        <label for="email">Input reps you did:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter reps" name="reps">
                    </div>
                    <button class="btn btn-primary" type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        <br>
    </div>
    <!-- <script>
        function calculateCaloriesBurned(pushUpReps) {
        // Assume the user weighs 150 pounds and completes push-ups at a moderate intensity
        const caloriesPerPushUp = 0.5;
        const weightInPounds = 150;
        const intensityFactor = 3.5;

        // Calculate the number of calories burned
        const caloriesBurned = (caloriesPerPushUp * pushUpReps * weightInPounds) / intensityFactor;

        return caloriesBurned;
    }

    </script>
    <script>
        const pushUpReps = prompt("Enter the number of push-up reps completed:");
        const caloriesBurned = calculateCaloriesBurned(pushUpReps);
        console.log("Calories burned:", caloriesBurned);

    </script> -->
    
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
	<div class="exercises_body">
		<?php
		
		?>

	</div>

	<footer class="MuiBox-root css-g0t3np">
		<div class="MuiBox-root css-pskig2">
			<nav class="MuiGrid-root MuiGrid-container css-enlun6"><a
					class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76"
					href="/en/welcome/learn_more"><span
						class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">About</span></a><a
					class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76"
					href="/nutrition-facts-calories"><span
						class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Food</span></a><a
					class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76"
					href="/en/exercise/lookup"><span
						class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Exercise</span></a><a
					class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76"
					href="/en/apps"><span
						class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Apps</span></a><a
					class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76"
					href="https://community.myfitnesspal.com/en/entry/jsconnect?client_id=1122755462&amp;Target=%2Fcategories"><span
						class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Community</span></a><a
					class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76"
					href="https://blog.myfitnesspal.com/"><span
						class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Blog</span></a><a
					class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineNone css-2lxm76"
					href="/premium?source=menu_bar"><span
						class="MuiTypography-root MuiTypography-button2 css-1cqbz5i">Premium</span></a></nav>
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
</body>

</html>
