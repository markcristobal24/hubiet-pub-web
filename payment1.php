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
          <div class="right">
            <h2>Payment Method</h2>
          <form method="post" action="toPay.php">
          <input type="text" class="field" placeholder="RESERVATION ID"  name="reserveId" value = "<?php echo $_SESSION["reserveId"] ?>" readonly/>
            <input type="text" class="field" placeholder="GCASH #"  name="gcash" required/>
            <input type="text" class="field" placeholder="REFERENCE #" name="reference" required/>
            <input type="text" class="field" placeholder="AMOUNT" name="amount" value = "<?php echo $_SESSION["price"] ?>" readonly/>
            <input class="btn" type="submit" value="SUBMIT"/>
            </form>  
          </div>
        </div>
      </div>
    </body>

</html>