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

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleFood.css">

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

    <!-- used to avoid fake favicon requests
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Jquery -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
</head>

<header>
    <div class="contain" id="myContain">
        <a href="index.php" class="headline">
            <span id="plant">Plant</span>
            <span id="fit">Fit</span>
            <span id="dot">.</span>
        </a>

        <div class="navbar" id="myNavbar">

            <div></div>

            <a href="home.php" id="home-nav" data-nav-link="">Home</a>
	
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

        </div>

        <a href="javascript:void(0);" class="icon-navbar" onclick="myFunction()">
            <ion-icon name="menu-outline"></ion-icon>
        </a>

        <script>
            'use strict';
            const navTogglers = document.querySelectorAll("[data-nav-toggler]");
            const navLinks = document.querySelectorAll("[data-nav-link]");
            const overlay = document.querySelector("#myOverlay");
            const navbar = document.querySelector("#myNavbar");

            function myFunction() {

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
    </div>
</header>

<body>
    <!-- SubHeader -->
    <div class="navbar2">
        <div class="subnav">
            <button class="subnavbtn">My Home</button>
            <div class="subnav-content">
                <a href="home.php">Home</a>
                <a href="progress.php">Progress</a>
            </div>
        </div>
        <div class="subnav">
            <button class="subnavbtn" id="food">Food</button>
            <div class="subnav-content">
                <a href="food.php">Food Consumed</a>
            </div>
        </div>
        <div class="subnav">
            <button class="subnavbtn">Exercise</button>
            <div class="subnav-content">
                <a href="exercises.php">Diary</a>
            </div>
        </div>
    </div>

    <script>
        var subnavButtons = document.querySelectorAll('.subnavbtn');

        for (var i = 0; i < subnavButtons.length; i++) {
            subnavButtons[i].addEventListener('click', function() {
                var subnavContent = this.nextElementSibling;
                if (subnavContent.style.display === 'block') {
                    subnavContent.style.display = 'none';
                    this.parentNode.classList.remove('active');
                } else {
                    subnavContent.style.display = 'block';
                    this.parentNode.classList.add('active');
                }
            });
        }
    </script>
    </div>


    <!-- DAY LA BODY -->
    <div class="container">
        <div class="heading2">
            <h2>Choose the food cards you consumed</h2>
        </div>
        <div class="group">Breakfast</div>
        <div class="row">
            <div class="col-sm">
                <label>
                    <img src="pic/oatmeal.jpg" alt="Oatmeal" width="150" height="150">
                    <div>Oatmeal</div>
                    <div>150 calories</div>
                    <input type="checkbox" name="food-card" value="oatmeal">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/bagel.jpg" alt="Bagel" width="150" height="150">
                    <div>Bagel</div>
                    <div>250 calories</div>
                    <input type="checkbox" name="food-card" value="bagel">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/smoothie.jpg" alt="Smoothie" width="150" height="150">
                    <div>Smoothie</div>
                    <div>200 calories</div>
                    <input type="checkbox" name="food-card" value="smoothie">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/sandwich.jpg" alt="Sandwich" width="150" height="150">
                    <div>Sandwich</div>
                    <div>445 calories</div>
                    <input type="checkbox" name="food-card" value="sandwich">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/avocado-toast.jpg" alt="Avocado toast" width="150" height="150">
                    <div>Avocado toast</div>
                    <div>350 calories</div>
                    <input type="checkbox" name="food-card" value="avocado-toast">
                </label>
            </div>
        </div>
        <div class="group">Lunch</div>
        <div class="row">
            <div class="col-sm">
                <label>
                    <img src="pic/banh-mi.jpg" alt="Banh mi" width="150" height="150">
                    <div>Banh mi</div>
                    <div>400 calories</div>
                    <input type="checkbox" name="food-card" value="banh-mi">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/pho.jpg" alt="Pho" width="150" height="150">
                    <div>Pho</div>
                    <div>300 calories</div>
                    <input type="checkbox" name="food-card" value="pho">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/pork-bun.jpg" alt="Pork bun" width="150" height="150">
                    <div>Pork bun</div>
                    <div>300 calories</div>
                    <input type="checkbox" name="food-card" value="pork-bun">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/salad.jpg" alt="Salad" width="150" height="150">
                    <div>Salad</div>
                    <div>150 calories</div>
                    <input type="checkbox" name="food-card" value="salad">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/bo-ne.jpg" alt="Dodging beef steak" width="150" height="150">
                    <div>Dodging beef steak</div>
                    <div>700 calories</div>
                    <input type="checkbox" name="food-card" value="bo-ne">
                </label>
            </div>
        </div>
        <div class="group">Dinner</div>
        <div class="row">
            <div class="col-sm">
                <label>
                    <img src="pic/curry-bread.jpg" alt="Curry and bread" width="150" height="150">
                    <div>Curry and bread</div>
                    <div>550 calories</div>
                    <input type="checkbox" name="food-card" value="curry-and-bread">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/meatballs.jpg" alt="Meatballs" width="150" height="150">
                    <div>Meatballs</div>
                    <div>350 calories</div>
                    <input type="checkbox" name="food-card" value="meatballs">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/grilled-pork.jpg" alt="Grilled pork" width="150" height="150">
                    <div>Grilled pork</div>
                    <div>300 calories</div>
                    <input type="checkbox" name="food-card" value="grilled-pork">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/rice-bowl.jpg" alt="Rice bowl" width="150" height="150">
                    <div>Rice bowl</div>
                    <div>500 calories</div>
                    <input type="checkbox" name="food-card" value="rice-bowl">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/pasta.jpg" alt="Pasta" width="150" height="150">
                    <div>Pasta</div>
                    <div>450 calories</div>
                    <input type="checkbox" name="food-card" value="pasta">
                </label>
            </div>
        </div>
        <div class="group">Snacks</div>
        <div class="row">
            <div class="col-sm">
                <label>
                    <img src="pic/burger.jpg" alt="Burger" width="150" height="150">
                    <div>Burger</div>
                    <div>500 calories</div>
                    <div class="text-align: center;"></div>
                    <input type="checkbox" name="food-card" value="burger">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src=" pic/fries.jpg" alt="Fries" width="150" height="150">
                    <div>Fries</div>
                    <div>350 calories</div>
                    <div class="text-align: center;"></div>
                    <input type="checkbox" name="food-card" value="fries">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/pizza.jpg" alt="Pizza" width="150" height="150">
                    <div>Pizza</div>
                    <div>800 calories</div>
                    <input type="checkbox" name="food-card" value="pizza">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/apple-slices.jpg" alt="Apple slices" width="150" height="150">
                    <div>Apple slices</div>
                    <div>50 calories</div>
                    <input type="checkbox" name="food-card" value="apple-slices">
                </label>
            </div>
            <div class="col-sm">
                <label>
                    <img src="pic/doner-kebab.jpg" alt="Doner kebab" width="150" height="150">
                    <div>Doner kebab</div>
                    <div>600 calories</div>
                    <input type="checkbox" name="food-card" value="doner-kebab">
                </label>
            </div>
        </div>
        <div class="row">
            <button class="buttonS" onclick="calculateCalories()">Calculate total calories</button>
            <div class="col-sm">
                <button class="buttonA" onclick="checkCalories()">Submit the consumption</button>
            </div>
        </div>
        <div class="row">
            <p style="margin-left:43px">Total calories consumed: <span id="total-calories">0</span></p>
        </div>
    </div>

    <script>
        let status = false;
        let temp = 0;
        let store = 0;



        function calculateCalories() {
            const foodCards = document.querySelectorAll('input[name="food-card"]:checked');
            let totalCalories = 0;
            for (let i = 0; i < foodCards.length; i++) {
                const calorieValue = foodCards[i].value;
                if (calorieValue === 'burger') {
                    totalCalories += 500;
                } else if (calorieValue === 'pizza') {
                    totalCalories += 800;
                } else if (calorieValue === 'fries') {
                    totalCalories += 350;
                } else if (calorieValue === 'oatmeal') {
                    totalCalories += 150;
                } else if (calorieValue === 'bagel') {
                    totalCalories += 250;
                } else if (calorieValue === 'avocado-toast') {
                    totalCalories += 350;
                } else if (calorieValue === 'smoothie') {
                    totalCalories += 200;
                } else if (calorieValue === 'sandwich') {
                    totalCalories += 445;
                } else if (calorieValue === 'banh-mi') {
                    totalCalories += 400;
                } else if (calorieValue === 'pho') {
                    totalCalories += 300;
                } else if (calorieValue === 'pork-bun') {
                    totalCalories += 300;
                } else if (calorieValue === 'salad') {
                    totalCalories += 150;
                } else if (calorieValue === 'bo-ne') {
                    totalCalories += 700;
                } else if (calorieValue === 'curry-and-bread') {
                    totalCalories += 550;
                } else if (calorieValue === 'meatballs') {
                    totalCalories += 350;
                } else if (calorieValue === 'grilled-pork') {
                    totalCalories += 300;
                } else if (calorieValue === 'rice-bowl') {
                    totalCalories += 500;
                } else if (calorieValue === 'pasta') {
                    totalCalories += 450;
                } else if (calorieValue === 'apple-slices') {
                    totalCalories += 50;
                } else if (calorieValue === 'doner-kebab') {
                    totalCalories += 600;
                }
            }

            document.getElementById('total-calories').textContent = totalCalories;
            temp = totalCalories;
        }

        function checkCalories() {
            // alert(checkStatus())
            if (checkStatus() === true) {
                // alert(temp > 3500)
                if (temp <= 0) {
                    alert("Too little or no calories consumed");
                    return false;
                }

                if (temp > 3500) {
                    alert("Too much calories consumption");
                    return false;
                }

                if (temp > 0 && temp < 3500) {
                    alert("Success");
                    
                    if (temp + store > 3500) {
                        store = store;
                    } else {
                        store += temp;
                    }
                }

                if (store > 2200 && store < 3500) {
                    alert("Food's goal finished");
                    status = true;
                    return true;
                }
                location.reload()
            } else {
                alert("Enough for today >.<");
                location.reload()
            }
            /*
            fetch("updateData.php", {
                method: "POST",
                body: JSON.stringify({ status: status }),
                headers: { "Content-Type": "application/json" }
            })
                .then(response => {
                    if (response.ok) {
                        console.log("Status updated successfully");
                        console.log(response);
                    } else {
                        console.error("Failed to update status");
                    }
                })
                .catch(error => console.error("Error while updating status", error));
             */
            $.ajax({
                url: "updateData.php",
                type: "POST",
                data: { status: status },
                success: function (data) {
                    console.log(data);
                    status = data.status;
                }
            });
        }



        function checkStatus() {
            // alert(status);
            if (status === true) {
                return false;
            }
            return true;
        }
    </script>
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