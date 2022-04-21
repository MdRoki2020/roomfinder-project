<?php
require_once('config.php');

if(isset($_REQUEST['id'])){
    $id= $_REQUEST['id'];
}

$deleteQuery="DELETE FROM `billing_details` WHERE `userId`=$id";
$runQuery=mysqli_query($connect,$deleteQuery);

if($runQuery){
    header('location: adminDashboard.php');
}else{
    echo 'Something Is Happening';
}

?>