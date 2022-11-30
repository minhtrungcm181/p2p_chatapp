<?php
    include('connectdb.php');
    include('getipfromclient.php');
    $ipaddress = $ip;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form
    
        $myusername = mysqli_real_escape_string($con,$_POST['username']);
        $mypassword = mysqli_real_escape_string($con,$_POST['password']);
    
        $sql = "SELECT * FROM account WHERE username = '$myusername'";
        $result = mysqli_query($con,$sql);

        $count = mysqli_num_rows($result);
        if($count == 1) {
            echo "error, username exists !";
            
        }else {
            $sql2 = "INSERT INTO account (username, password, address) VALUES ('$myusername','$mypassword','$ipaddress')";
            $result = mysqli_query($con,$sql2);
            echo "done";
        }
    }

?>