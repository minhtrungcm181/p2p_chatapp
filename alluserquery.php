<?php
include('connectdb.php');

$sql = "SELECT username from account";

$result = mysqli_query($con, $sql);

$rowjson = array();

while($r = mysqli_fetch_assoc($result)) {
    $rowjson[] = $r;

}
echo json_encode($rowjson);

?>