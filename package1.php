<?php 
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["psw"]))
	{
	header('Location: login.php');
	exit();
	}
 ?>
<!DOCTYPE html>

<html>

<head>
  <title>Hubient Bar & Lounge</title>
  <link rel="stylesheet" type="text/css" href="package1.css" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
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

    <body>
      <div class="container">
        <div class="contact-box">
          <div class="left"></div>
          <div class="right">
            <h2>PACKAGE #1</h2>
          <form method="post" action="toPackage1.php"> 
            <input type="text" class="field" placeholder="Name"  name="fullname" required/>
            <input type="text" class="field" placeholder="Email" name="email" required/>
            <input type="text" class="field" placeholder="Phone" name="phone" required/>
            <input type="number" class="field" placeholder="How many people" name="noPeople" required  />
            <input type="date" class="field" placeholder="Date and time" name="date" required 
            value="<?php echo date('Y-m-d'); ?>"  />
            <textarea placeholder="Additional Message" name="message" class="field"></textarea>
            <input class="btn" type="submit" value="Reserve">
                
            </form>       
          </div>
        </div>
      </div>
    </body>

</html>