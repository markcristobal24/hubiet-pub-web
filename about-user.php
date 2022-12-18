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
    <title>About | Hubient</title>
    <link rel="stylesheet" href="about-user.css">
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
            <div class="aboutmain">
                <h1>About Hubient Lounge Bar</h1>
                <p>
                    Hubient Lounge Bar was established by Pascal Guilliox. He wanted to
                    establish a bar so he cooperated with the Kumu Industry to make a bar at
                    Guiguinto, Bulacan. He begun to gather information from other bar
                    establishment on how to establish a bar or lounge. He gathered his
                    people to manage the bar and to help him to build a family on it. In
                    July 2022, he acquired a commercial space in the building in GD plaza to
                    build his lounge on it. The soft opening of the bar was August 11,2022.
                    Until now the bar make a acquaint to other places of Bulacan.
                </p>
            </div>

            <div class="drinksmain">
                <img src="drinksAbout.jpg" alt="" style="width: 600px; height: 360px" />
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