<?php
session_start();
include ('connection.php');
echo $email = $_POST['email'];
echo $_SESSION['requestemail'] = $_POST['email'];
$user_select = mysqli_query($connect, "SELECT * FROM user_info WHERE uemail='$email'");
$koytauser = mysqli_num_rows($user_select);
$user_data = mysqli_fetch_array($user_select);


if($koytauser == 1){
    header('location: ../newpassword.php');
    echo 'ase';
}elseif($koytauser == 0){
    echo "nai";
    header('location: ../forgot-password.php?result=gmailnotfound');
}