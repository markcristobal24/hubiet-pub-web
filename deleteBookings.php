<?php
	session_start();
	require "connect.php";
	$user = $_POST["delete"];

	$query="DELETE FROM reserve WHERE reserveId = '$user'";
	$result = mysqli_query($con,$query);;
	mysqli_query($con,$query);
	$_SESSION["approved"] = $user;
	echo "<script>alert('Reservation Deleted Successfully.')</script>";
	header("refresh: 0; url=adminHome.php");

	mysqli_close($con);
?>