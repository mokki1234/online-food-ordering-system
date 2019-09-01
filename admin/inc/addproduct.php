<?php
include ('connection.php');
echo $pname = $_POST['pname'];
echo $pprice = $_POST['pprice'];
echo $product_img_name = $_FILES['pimg']['name'];
echo $product_img_tmp = $_FILES['pimg']['tmp_name'];
move_uploaded_file($product_img_tmp, '../images/' . $product_img_name);
if ($pname && $pprice) {
    $upostinsert =  mysqli_query($connect, "INSERT INTO products(pname,pprice,pimg) VALUES('$pname','$pprice','$product_img_name')");
    // header('location: ../pages/home.php?result=addproduct');
    echo "ok";
}else{
    // header('location: ../pages/home.php?result=productnotadd');
    echo "Something Wrong";
}