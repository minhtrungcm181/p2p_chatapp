<?php
    include('connectdb.php');
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form
    
        $myusername = mysqli_real_escape_string($con,$_POST['username']);
        $mypassword = mysqli_real_escape_string($con,$_POST['password']);
        $port = mysqli_real_escape_string($con,$_POST['port']);
    
        $sql = "SELECT * FROM account WHERE username = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($con,$sql);
       
    
        $count = mysqli_num_rows($result);
        
    
        if($count == 1) {

            if(!isset($_SESSION['user']) && !isset($_COOKIE['user'])) {
                $_SESSION['user'] = $_COOKIE['user'] = $myusername;
            }

            include('getipfromclient.php');
            $ipandport = $ip . ',' . $port;
            $sql2 = "UPDATE account set address = '$ipandport' WHERE username = '$myusername' ";
            $result = mysqli_query($con, $sql2);
            header('location:friendlist.php');
        }else {
            $error = "Your Login Name or Password is invalid";
        }
    }
?>