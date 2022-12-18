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
    
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="hubientLogo.png" alt="Hubient Logo" class="logo" title="Hubient">
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="about-user.php">About</a></li>
                <li><a href="myReserve.php">My Reservation</a></li>
                <li class="welcome">WELCOME&nbsp; <?php 
                      echo $_SESSION ["fname"];
                        
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
            <form method="post" action="checkAvailability1.php">
                <div class="txt_field">
                <label>Check-In Date</label>
                    <input type="date" name="check-date" id="date-picker1" required>
                    <span></span>
                    <script language="javascript">
              var today = new Date ();
              var dd = String(today.getDate()).padStart(2, '0');
              var mm = String(today.getMonth() + 1).padStart(2, '0');
              var yyyy = today.getFullYear();
              today = yyyy + '-' + mm + '-' + dd;

              $('#date-picker1').attr('min', today);
            </script>
                </div>
                <div class="btn1">
                <input type="submit" value="RESERVE NOW!">
            </div>
            </form>
            
        </div>

        <div class="block">
            <h3>PACKAGE #2</h3>
            <img src="img/package2.jpg" alt="package1" class="img2">
            <p class="amount2">PHP 3,000</p>
            <p class="prod2">2 HOURS<br>2 BUCKET OF BEERS (RED HORSE, PALE PILSEN, SAN MIG LIGHT, LEMON, OR
                APPLE)<br>1
                NACHOS<br>1 DYNAMITE<br>1 CHEESE STICK</p>
                <form method="post" action="checkAvailability2.php">
                <div class="txt_field">
                <label>Check-In Date</label>
                    <input type="date" name="check-date" id="date-picker2" required>
                    <span></span>
                    <script language="javascript">
              var today = new Date ();
              var dd = String(today.getDate()).padStart(2, '0');
              var mm = String(today.getMonth() + 1).padStart(2, '0');
              var yyyy = today.getFullYear();
              today = yyyy + '-' + mm + '-' + dd;

              $('#date-picker2').attr('min', today);
            </script>
                </div>
                <div class="btn2">
                <input type="submit" value="RESERVE NOW!">
            </div>
            </form>
          
        </div>

        <div class="block">
            <h3>VIP PACKAGE #3</h3>
            <img src="img/package3.jpg" alt="package1" class="img3">
            <p class="amount3">PHP 5,000</p>
            <p class="prod3">3 HOURS<br>3 BUCKET OF BEERS (RED HORSE, PALE PILSEN, SAN MIG LIGHT, LEMON, OR
                APPLE)<br>1
                NACHOS, 1 DYNAMITE, 1 PORK SISIG, 1 CHICKEN WINGS SALTED EGG, 1 CHICKEN TERIYAKI, 1 CRISPY BICOL
                EXPRESS, 1 SHANGHAI, 1 CHEESE STICK</p>
                <form method="post" action="checkAvailability3.php">
                <div class="txt_field">
                <label>Check-In Date</label>
                    <input type="date" name="check-date" id="date-picker3" required>
                    <span></span>
                    <script language="javascript">
              var today = new Date ();
              var dd = String(today.getDate()).padStart(2, '0');
              var mm = String(today.getMonth() + 1).padStart(2, '0');
              var yyyy = today.getFullYear();
              today = yyyy + '-' + mm + '-' + dd;

              $('#date-picker3').attr('min', today);
            </script>
                </div>
                <div class="btn1">
                <input type="submit" value="RESERVE NOW!">
            </div>
            </form>
            
        </div>

    </div>


    
</body>

</html>