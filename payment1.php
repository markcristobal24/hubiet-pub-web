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
  <link rel="stylesheet" type="text/css" href="payment1.css" />
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
      <div class="center">
            <h1>Payment Method</h1>
          <form method="post" action="toPay.php">
            <div class="txt_field">
              <input type="text" name="reserveId" required>
              <span></span>
              <label>Reservation ID</label>
            </div>
            <div class="txt_field">
              <input type="text" name="gcash" required>
              <span></span>
              <label>GCASH Number</label>
            </div>
            <div class="txt_field">
              <input type="text" name="reference" required>
              <span></span>
              <label>Reference Number</label>
            </div>
            <div class="txt_field">
              <input type="text" name="reference" required>
              <span></span>
              <label>Amount</label>
            </div>
            <input class="btn" type="submit" value="SUBMIT"/>
            </form>  
      </div>
    </body>

</html>