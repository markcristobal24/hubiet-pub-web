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
	if($count==1){
		$_SESSION["username"] = $user;
		$_SESSION["psw"] = $pass;
		header("Location: home.php");
	}
	else{
		echo ("<script>alert('Login failed.')</script>");
		header("refresh: 0; url=login.php");
	}
	mysqli_close($con);
?>