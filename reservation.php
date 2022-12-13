<!DOCTYPE html>
<?php 
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["psw"]))
	{
	header('Location: login.php');
	exit();
	}
 ?>

<head>
    <title>Hubient Bar & Lounge</title>
    <link rel="stylesheet" href="reservation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="hubientLogo.png" alt="Hubient Logo" class="logo" title="Hubient">
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="about-user.php">About</a></li>
                <li class="welcome">WELCOME&nbsp; <?php 
                      echo $_SESSION ["username"];
                        
                    ?>&nbsp;▼
                    <ul class="dropdown">
                        <li><a href="changePass.php">Change Password</a></li>
                        <li><a href="toLogout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div>
            <h1>AVAILABLE ROOMS</h1>
        </div>


        <div class="block1">
            <h3>PACKAGE #1</h3>
            <img src="img/package1.jpg" alt="package1" class="img1">
            <p class="amount1">PHP 2,500</p>
            <p class="prod1">2 HOURS<br>1 BUCKET OF BEERS (RED HORSE, PALE PILSEN, SAN MIG LIGHT, LEMON, OR
                APPLE)<br>1
                NACHOS<br>1 DYNAMITE<br>1 PORK SISIG</p>
            <div class="btn1">
                <button type="button1"><a href="package1.php"><span></span>RESERVE NOW!</a></button>
            </div>
        </div>

        <div class="block">
            <h3>PACKAGE #2</h3>
            <img src="img/package2.jpg" alt="package1" class="img2">
            <p class="amount2">PHP 3,000</p>
            <p class="prod2">2 HOURS<br>2 BUCKET OF BEERS (RED HORSE, PALE PILSEN, SAN MIG LIGHT, LEMON, OR
                APPLE)<br>1
                NACHOS<br>1 DYNAMITE<br>1 CHEESE STICK</p>
            <div class="btn2">
                <button type="button1"><a href="package2.php"><span></span>RESERVE NOW!</a></button>
            </div>
        </div>

        <div class="block">
            <h3>VIP PACKAGE #3</h3>
            <img src="img/package3.jpg" alt="package1" class="img3">
            <p class="amount3">PHP 5,000</p>
            <p class="prod3">3 HOURS<br>3 BCUKET OF BEERS (RED HORSE, PALE PILSEN, SAN MIG LIGHT, LEMON, OR
                APPLE)<br>1
                NACHOS, 1 DYNAMITE, 1 PORK SISIG, 1 CHICKEN WINGS SALTED EGG, 1 CHICKEN TERIYAKI, 1 CRISPY BICOL
                EXPRESS, 1 SHANGHAI, 1 CHEESE STICK</p>
            <div class="btn3">
                <button type="button1"><a href="package3.php"><span></span>RESERVE NOW!</a></button>
            </div>
        </div>

    </div>


    <section class="footer">
        <div class="social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><img src="contacts.png" width="23px" height="20px"></a>

            <p class="copyright">
                © 2022, Hubient Bar & Lounge.<br> All Rights Reserved.
            </p>

        </div>

    </section>
</body>

</html>