<?php
    require "connect.php";
    $user = $_POST["username"];
    $pass = $_POST["psw"];
    $newpass = $_POST["newpsw"];

    $query = "SELECT * FROM customer WHERE username = '$user' and password = '$pass'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows ($result);

    if ($count==1) {
        $query="UPDATE customer SET password='$newpass' WHERE username='$user' AND password='$pass'";
		mysqli_query($con,$query);
		echo ("<script>alert('Password changed.')</script>");
		header("refresh: 0; url=home.php");
    }
    else{
		echo ("<script>alert('Update failed.')</script>");
		header("refresh: 0; url=changePass.php");
	}
	mysqli_close($con);
?>