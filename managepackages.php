<?php 
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["psw"]))
	{
	header('Location: login.php');
	exit();
	}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous" />

  <title>Hubient Bar & Lounge</title>
</head>

<body>
  <div class="container">
    <div class="sidebar">
      <ul>
        <li>
          <a href="#">
            <img src="hubientLogo.png" alt="Hubient Logo" class="logo" title="Hubient" />
          </a>
        </li>
        <li class="t222">
          <a href="adminHome.php">
            <img src="bookingicon.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Bookings</div>
          </a>
        </li>
        <li class="">
          <a href="approved.php">
            <img src="bookingicon.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Approved Bookings</div>
          </a>
        </li>
        <li class="t3">
          <a href="managepackages.php">
            <img src="managepackagesicon.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Manage Packages</div>
          </a>
        </li>
        <li class="t55">
          <a href="accounts.php">
            <img src="accounticon.png" alt="test" class="img2" width="23px" height="23px" />
            <div class="title">Accounts</div>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="top-bar">
        <div class="search">
        </div>
        <div class="navbar">
          <ul>
          <li class="welcome">WELCOME&nbsp; <?php 
                      echo $_SESSION ["username"];?>               
          </li>
          <li class="welcome"><a href="toLogout.php">Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="tablesbook">
        <div class="lastest-bookings3">
          <div class="heading">
            <h2>Manage Packages</h2>
          </div>
          <table class="">
            <thead>
              <td>Package #</td>
              <td>Price</td>
              <td>Actions</td>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>