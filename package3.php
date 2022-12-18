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
            <h2>VIP PACKAGE #3</h2>
          <form method="post" action="toPackage3.php">
            <input type="text" class="field" placeholder="Name" name="fullname" value = "<?php echo $_SESSION["full"] ?>" readonly/>
            <input type="text" class="field" placeholder="Email" name="email" value = "<?php echo $_SESSION["email"]?>"readonly/>
            <input type="text" class="field" placeholder="Phone" name="phone" value = "<?php echo $_SESSION["phone"]?>"readonly/>
            <input type="number" class="field" placeholder="How many people" required name="noPeople" />
            <input type="date" class="field" placeholder="Date and time" name="date" id="date-picker"/>
            <script language="javascript">
              var today = new Date ();
              var dd = String(today.getDate()).padStart(2, '0');
              var mm = String(today.getMonth() + 1).padStart(2, '0');
              var yyyy = today.getFullYear();
              today = yyyy + '-' + mm + '-' + dd;

              $('#date-picker').attr('min', today);
            </script>
            <textarea placeholder="Additional Message" class="field" name="message"></textarea>
            <input class="btn" type="submit" value="Reserve">
            </form> 
          </div>
        </div>
      </div>
    </body>

</html>