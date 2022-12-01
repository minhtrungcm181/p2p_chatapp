<?php
include('connectdb.php');
include('login.php');
$username = $_SESSION['user'];
$clientname = $_GET['addfriend'];

$sql = "SELECT address from account where username = '$clientname'";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);

$ip = $row['address'];


$sql = "INSERT into relationship (hostname, clientname, address)
value ('$username', '$clientname', '$ip')";

$result2 = mysqli_query($con,$sql);

?>