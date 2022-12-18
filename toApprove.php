<?php
    require "connect.php";
    error_reporting(0);
    $user = $_POST["approve"];
    $query = "SELECT * FROM reserve WHERE reserveId = '$user'";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)){
    $id = $row['reserveId'];
    $name = $row['name'];
    $package = $row['packageType'];
    $date = $row['date'];
    $price = $row['price'];

    $query2 = "INSERT INTO archive (reserveId, name, packageType, date, price) 
    VALUES ('$id', '$name', '$package', '$date', '$price')";

    if (mysqli_query($con, $query2)) {
        $query3 = "DELETE FROM reserve WHERE reserveId = '$user'";
        $result = mysqli_query($con,$query);
	    mysqli_query($con,$query3);
        echo "<script>alert('Reservation Approved')</script>";
        header("refresh: 0; url=adminHome.php");
    }
}
?>