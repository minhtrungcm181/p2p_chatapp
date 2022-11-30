<?php
    include('connectdb.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form
    
        $myusername = mysqli_real_escape_string($con,$_POST['username']);
        $mypassword = mysqli_real_escape_string($con,$_POST['password']);
    
        $sql = "SELECT * FROM account WHERE username = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($con,$sql);
       
    
        $count = mysqli_num_rows($result);
        
    
        if($count == 1) {
            
            if(!isset($_SESSION['user']) && !isset($_COOKIE['user'])) {
                $_SESSION['user'] = $_COOKIE['user'] = $myusername;
            }

            include('getipfromclient.php');
            $sql2 = "UPDATE account set address = '$ip' WHERE username = '$myusername' ";
            $result = mysqli_query($con, $sql2);
            
        }else {
            $error = "Your Login Name or Password is invalid";
        }
    }
?>