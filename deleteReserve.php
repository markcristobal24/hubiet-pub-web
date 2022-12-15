<?php
	require "connect.php";
	$user = $_POST["delete"];

	$query="DELETE FROM reserve WHERE reserveId = '$user'";
	$result = mysqli_query($con,$query);;
	mysqli_query($con,$query);
	
	echo "<script>alert('Reservation Deleted Successfully.')</script>";
	header("refresh: 0; url=myReserve.php");

	mysqli_close($con);
?>