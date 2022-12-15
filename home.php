<?php 
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["psw"]))
	{
	header('Location: login.php');
	exit();
	}
 ?>
<!DOCTYPE html>

<head>
    <title>Hubient Bar & Lounge</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <div class="content">
            <h1>HUBIENT BAR <br>& LOUNGE</h1>
            <P>" Don’t waste your time at home; enjoy the day with Hubient bar and lounge "</P>
            <div>
                <button type="button"><a href="reservation.php"><span></span>MAKE A RESERVATION</a></button>
            </div>

            <section class="footer">
                <div class="social">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><img src="contacts.png" width="23px" height="20px"></a>
                </div>

                <p class="copyright">
                    © 2022, Hubient Bar & Lounge.<br> All Rights Reserved.
                </p>

            </section>
        </div>
    </div>
</body>

</html>