<?php

include('connectdb.php');
include('login.php');

$username = $_SESSION['user'];
$sql ="SELECT clientname, address from relationship where hostname = '$username'";

$result = mysqli_query($con, $sql);

$rowjson2 = array();

while($r2 = mysqli_fetch_assoc($result)) {
    $rowjson2[] = $r2;

}
echo json_encode($rowjson2);

?>
