<?php
include ('connection.php');
echo $fname = $_POST['fname'];
echo $lname = $_POST['lname'];
echo $uemail = $_POST['email'];
echo $pass = $_POST['password'];
   echo $repass = $_POST['repassword'];

$email_select = mysqli_query($connect, "SELECT * FROM user_info WHERE uemail='$uemail'");
$how_many_user = mysqli_num_rows($email_select);
if ($fname && $lname && $uemail && $pass && $repass) {
    if ($pass == $repass) {  
            if ($how_many_user  >= 1) {
                // header('location: ../pages/signup.php?result=sameemail');
                echo "Vai ai email diye registation kora ase onno email diye try koren";
            } else {
                mysqli_query($connect, "INSERT INTO user_info(fname,lname,uemail,pass)VALUES('$fname','$lname','$uemail','$pass')");
                // header('location: ../pages/signup.php?result=successful');
                echo "ok";
            }
      
    } else {
        echo "Pass duita mile nai";
        // header('location: ../pages/signup.php?result=passdontmatch');
    }
} else {
    // header('location: ../index.php?result=fieldempty');
}