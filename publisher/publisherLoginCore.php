<?php
require_once('config.php');

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];


$selectQuery="SELECT * FROM `registered_user` WHERE email='$email' AND password='$password'";

$runQuery=mysqli_query($connect,$selectQuery);

$chakeCount= mysqli_num_rows($runQuery);

if($runQuery==true){
    if($chakeCount===1){
        setcookie("currentUser",$email,time()+(86400*7));
        header("location:publisher_zone.php");

    }else{
        header('location:publisherLogin.php?wrong');
    }
}

?>