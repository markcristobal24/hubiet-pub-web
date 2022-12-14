<!DOCTYPE html>
<?php 
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["psw"]))
	{
	header('Location: login.php');
	exit();
	}
 ?>
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
        <li class="t1">
          <a href="adminhome.php">
            <img src="dashboard.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title1">Dashboard</div>
          </a>
        </li>
        <li class="t22">
          <a href="bookings.php">
            <img src="bookingicon.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Bookings</div>
          </a>
        </li>
        <li class="t333">
          <a href="managepackages.php">
            <img src="managepackagesicon.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Manage Packages</div>
          </a>
        </li>
        <li class="t4">
          <a href="#">
            <img src="settings.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Account Settings</div>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="top-bar">
        <div class="search">
          <input type="text" name="search" placeholder="Search" />
        </div>
        <div class="navbar">
          <ul>
            <li class="welcome">WELCOME&nbsp; <?php 
                      echo $_SESSION ["username"];
                        
                    ?>
                    
           </li>
            <li><a href="toLogout.php">Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="cards">
        <div class="card">
          <div class="card-content">
            <div class="number">5</div>
            <div class="card-name">Bookings</div>
          </div>
          <div class="icon-box">
            <img src="bookingicon.png" alt="test" class="img2" width="50px" height="50px" />
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <div class="number">0</div>
            <div class="card-name">Pending Payments</div>
          </div>
          <div class="icon-box">
            <img src="paymentcard.png" alt="test" class="img2" width="50px" height="55px" />
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <div class="number">3</div>
            <div class="card-name">Available Rooms</div>
          </div>
          <div class="icon-box">
            <img src="wineicon.png" alt="test" class="img2" width="50px" height="50px" />
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <div class="number">PHP 15,500</div>
            <div class="card-name">Earnings</div>
          </div>
          <div class="icon-box">
            <img src="coinicon.png" alt="test" class="img2" width="50px" height="50px" />
          </div>
        </div>
      </div>
      <div class="tables">
        <div class="lastest-bookings">
          <div class="heading">
            <h2>Lastest Bookings</h2>
            <a href="#" class="btn">View All</a>
          </div>
          <table class="">
            <thead>
              <td>Name</td>
              <td>Package #</td>
              <td>Price</td>
              <td>Actions</td>
            </thead>
            <tbody>
              <tr>
                <td>John Paulo Sulit</td>
                <td>3</td>
                <td>PHP 5,000</td>
                <td>
                  <a href="#" class="">View</a>
                  <a href="#" class="">Remove</a>
                  <a href="#" class="">Edit</a>
                </td>
              </tr>
              <tr>
                <td>Arvin Bok</td>
                <td>1</td>
                <td>PHP 2,500</td>
                <td>
                  <a href="#" class="">View</a>
                  <a href="#" class="">Remove</a>
                  <a href="#" class="">Edit</a>
                </td>
              </tr>
              <tr>
                <td>Mark Josh Cristobal</td>
                <td>2</td>
                <td>PHP 3,000</td>
                <td>
                  <a href="#" class="">View</a>
                  <a href="#" class="">Remove</a>
                  <a href="#" class="">Edit</a>
                </td>
              </tr>
              <tr>
                <td>Joel Leonor</td>
                <td>3</td>
                <td>PHP 5,000</td>
                <td>
                  <a href="#" class="">View</a>
                  <a href="#" class="">Remove</a>
                  <a href="#" class="">Edit</a>
                </td>
              </tr>
              <tr>
                <td>Stephen Reonal</td>
                <td>1</td>
                <td>PHP 2,500</td>
                <td>
                  <a href="#" class="">View</a>
                  <a href="#" class="">Remove</a>
                  <a href="#" class="">Edit</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>