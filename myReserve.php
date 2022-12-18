<?php 
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_SESSION["psw"]))
	{
	header('Location: login.php');
	exit();
	}

 
 ?>
<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>My Reservations | Hubient</title>
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

  <!--<div class="center"> -->
    <div class="tablesbook">
      <div class="latest-bookings2">
        <div class="heading">
          <h1>My Reservations</h1>
        </div>
        <form method = "post" action="deleteReserve.php">
    <?php
        error_reporting(0);
        require "connect.php";
        $email = $_SESSION["email"];
        $phone = $_SESSION["phone"];
        $query = "SELECT * FROM reserve where email = '$email' and phone = '$phone'";
        $result = mysqli_query($con,$query);
        echo "<table>
        <thead>
        <tr>
            <th>Reservation Id</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Number of People</th>
            <th>Date</th>
            <th>Price</th>
            <th>Package</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>";
        
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $user = $row['reserveId'];
                
                $amount = $row['price'];
               
                $status = $row ['status'];
                echo "<tr>";
                echo "<th>" . $row['reserveId'] . "</th>";
                echo "<th>" . $row['name'] . "</th>";
                echo "<th>" . $row['email'] . "</th>";
                echo "<th>" . $row['phone'] . "</th>";
                echo "<th>" . $row['noPeople'] . "</th>";
                echo "<th>" . $row['date'] . "</th>";
                echo "<th>" . $row['price'] . "</th>";
                echo "<th>" . $row['packageType'] . "</th>";
                echo "<th>" . $row['status'] . "</th>";
                

                if ($status == "Unpaid") {
                  echo "<th> <button type='submit' class='del' name='delete' value='$user'>Cancel</button> </th>";
                    
                  echo "<th><button  type='button' class = 'pay' name='process' value='$user'><a href='payment1.php'><span></span>PROCEED TO PAYMENT</a></button></th>";
                } else {
                  echo "<th> <button type='submit' class='del' name='delete' value='$user' hidden>Cancel</button> </th>";
                  echo "<th><button  type='button' class = 'pay' hidden><a><span></span>PROCEED TO PAYMENT</a></button></th>";
                }
                echo "</tr>";
            }
            
        } 
        echo "</table>";
        mysqli_close($con);
				
    ?>
  </form>
      </div>
    </div>
   
 
  
  <!--</div> -->




</body>

</html>