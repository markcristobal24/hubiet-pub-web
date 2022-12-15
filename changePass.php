<!DOCTYPE html>
<?php 
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["psw"]))
	{
	header('Location: login.php');
	exit();
	}
 ?>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Hubient Bar & Lounge</title>
  <link rel="stylesheet" href="changePass.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
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
                        <li><a href="#">Change Password</a></li>
                        <li><a href="toLogout.php">Logout</a></li>
                    </ul>
                </li>
    </ul>
  </div>

  <div class="center">
    <h1>Change Password</h1>
    <form method="post" action="toChangePass.php">
      <div class="txt_field">
        <input type="text" name="username" required>
        <span></span>
        <label>Username</label>
      </div>

      <div class="txt_field">
        <input type="password" name="psw" required>
        <span></span>
        <label>Password</label>
      </div>

      <div class="txt_field">
        <input type="password" name="newpsw" required>
        <span></span>
        <label>New Password</label>
      </div>
      <input type="submit" value="Submit">
      
    </form>
  </div>




</body>

</html>