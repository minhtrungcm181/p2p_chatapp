<?php

include('connectdb.php');

$username = $_SESSION['user'];

$sql ="SELECT from relationship where hostname = '$username'";

$result = mysqli_query($con, $sql);

?>
