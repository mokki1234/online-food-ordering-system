   
<?php

    
session_start();
if (!isset($_SESSION['requestemail'])) {
    header('location: ../forgot-password.php');
}

include './connection.php';
echo $pass = $_POST['password']; 
    echo $repass = $_POST['repassword'];
    echo $_SESSION['requestemail'];
if ($pass && $repass) {
    if($pass == $repass){
        $result = mysqli_query($connect, "UPDATE user_info SET pass='$pass' WHERE uemail='$_SESSION[requestemail]'");
        // echo "ok";
        session_destroy();
        header("Location: ../login.php?result=sup");
    }
    else{
        echo "password dont match";
        // header('location: ../pages/home.php?result=productnotadd');

    }  
} else {
    // header('location: ../pages/home.php?result=productnotadd');
    echo "not";
}
