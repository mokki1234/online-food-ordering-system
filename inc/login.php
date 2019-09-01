<?php
session_start();
include ('connection.php');
echo $email = $_POST['email'];
echo $pass = $_POST['password'];
$user_select = mysqli_query($connect, "SELECT * FROM user_info WHERE uemail='$email' AND pass='$pass'");
$koytauser = mysqli_num_rows($user_select);
$user_data = mysqli_fetch_array($user_select);
echo $_SESSION['name'] = $user_data['fname'].' '.$user_data['lname'];
echo $_SESSION['email'] = $user_data['uemail'];
if($koytauser == 1){
    header('location: ../index.php');
    echo 'OK';
}elseif($koytauser == 0){
    echo "Something Worng";
    header('location: ../login.php?result=somethingwrong');
}