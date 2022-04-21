<?php
require_once('config.php');

$email= $_REQUEST['email'];
$password= $_REQUEST['password'];


if($email=='roomfinder@gmail.com' && $password=='1234'){
    setcookie("currentAdmin",$email,time()+(86400*7));
    header("location:adminDashboard.php?right");
        }else{
            header('location:adminLogin.php?wrong');
        };

?>