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
  <link rel="stylesheet" href="myReserve.css">
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
                <li class="welcome">WELCOME&nbsp; <?php 
                      echo $_SESSION ["username"];
                        
                    ?>&nbsp;▼
                    <ul class="dropdown">
                        <li><a href="#">Change Password</a></li>
                        <li><a href="toLogout.php">Logout</a></li>
                    </ul>
                </li>
    </ul>
  </div>

  <div class="center">
    <h1>My Reservations</h1>
    <?php
        require "connect.php";
        $query = "SELECT * FROM reserve";
        $result = mysqli_query($con,$query);
        echo "<table border ='1'>
        <tr>
            <th>Reservation Id</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Number of People</th>
            <th>Date</th>
            <th>Price</th>
        </tr>";

        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['reserveId'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['noPeople'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "</tr>";
            }
        } 
        else{
            echo "No records found.";
        }
        echo "</table>";
        mysqli_close($con);
				
    ?>
  </div>




</body>

</html>