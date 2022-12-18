<?php
	session_start();
	require "connect.php";
	if(isset($_SESSION["username"]) && isset($_SESSION["psw"])){
		header("Location: home.php");
		exit();
	}	
	$user = $_POST["username"];
	$pass = $_POST["psw"];
	
	$query = "SELECT * FROM customer WHERE username='$user' and password='$pass'";
	$result = mysqli_query($con,$query);
	$count =  mysqli_num_rows($result);

	$query2 = "SELECT email, phoneNumber FROM customer WHERE username='$user' and password='$pass'";
	$result2 = mysqli_query($con, $query2);
	$count2 = mysqli_num_rows($result2);

	if ($count2 ==1) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION["fname"] = $row['firstName'];
		$full = $row['lastName'];
		$_SESSION["full"] = $_SESSION["fname"] . " " . $full;
    	$_SESSION["email"] = $row['email'];
    	$_SESSION["phone"] = $row['phoneNumber'];
	}


	if($count==1){
		$_SESSION["username"] = $user;
		$_SESSION["psw"] = $pass;
		$num = $_SESSION["num"];
		header("Location: home.php");
	} else if ($user == "admin1" && $pass = "admin1234") {
		$_SESSION["username"] = $user;
		$_SESSION["psw"] = $pass;
		header("Location: adminhome.php");
	}
	else{
		echo ("<script>alert('Login failed.')</script>");
		header("refresh: 0; url=login.php");
	}
	mysqli_close($con);
?>