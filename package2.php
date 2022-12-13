<!DOCTYPE html>
<?php 
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["psw"]))
	{
	header('Location: login.php');
	exit();
	}
 ?>
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

    <body>
      <div class="container">
        <div class="contact-box">
          <div class="left"></div>
          <div class="right">
            <h2>PACKAGE #2</h2>
          <form>
            <input type="text" class="field" placeholder="Name" />
            <input type="text" class="field" placeholder="Email" />
            <input type="text" class="field" placeholder="Phone" />
            <input type="number" class="field" placeholder="How many people" required name="People" />
            <input type="datetime-local" class="field" placeholder="Date and time" required name="date"
              value="2020-11-16T20:00" />
            <textarea placeholder="Additional Message" class="field"></textarea>
            <button class="btn"><a href="payment2.php">
                <p>PROCEED TO PAYMENT</p></button>
            </form> 
          </div>
        </div>
      </div>
    </body>

</html>