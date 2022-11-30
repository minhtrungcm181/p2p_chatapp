<?php
include('connectdb.php');

$sql = "SELECT * from account";

$result = mysqli_query($con, $sql);

?>