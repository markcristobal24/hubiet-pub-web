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
  <script>
    var button = document.getElementById("approve");
    button.style.visibility="hidden";
  </script>
  <title>Bookings | Hubient</title>
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
        <li class="t2">
          <a href="adminHome.php">
            <img src="bookingicon.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Bookings</div>
          </a>
        </li>
        <li class="">
          <a href="approved.php">
            <img src="bookingicon.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Bookings History</div>
          </a>
        </li>
        <li class="">
          <a href="managepackages.php">
            <img src="managepackagesicon.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Manage Packages</div>
          </a>
        </li>
        <li class="t555">
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
        <div class="lastest-bookings2">
          <div class="heading">
            <h2>Bookings</h2>
          </div>
         
          <form method="post" action="toApprove.php">
            <?php
              error_reporting(0);
              require "connect.php";
              $query = "SELECT * FROM reserve";
              $result = mysqli_query($con, $query);
              echo "<table>
              <thead>
              <tr>
                <th>Reservation Id</th>
                <th>Name</th>
                <th>Package#</th>
                <th>Date</th>
                <th>Price</th>
                <th>Status</th>
                
              </tr>
              </thead>";

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $user = $row['reserveId'];
                  $status = $row['status'];
                  echo "<tr>";
                  echo "<th>" . $row['reserveId'] . "</th>";
                  echo "<th>" . $row['name'] . "</th>";
                  echo "<th>" . $row['packageType'] . "</th>";
                  echo "<th>" . $row['date'] . "</th>";
                  echo "<th>" . $row['price'] . "</th>";
                  echo "<th>" . $row['status'] . "</th>";
                 /* if ($status == "Unpaid") {
                    echo "<th> <button type='submit' id='approve' class='del' name='approve' value='$user' hidden>Approve</button> </th>";
                  } else {
                    echo "<th> <button type='submit' id='approve' class='del' name='approve' value='$user'>Approve</button> </th>";
                  }*/
                  echo "</tr>";
                  
                }
              }
              echo "</table>";
              mysqli_close($con);
          
              
            ?>
           
          </form> 
        </div>
      </div>
    </div>
  </div>
</body>

</html>