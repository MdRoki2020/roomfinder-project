<?php
require_once('config.php');

$orderId=$_REQUEST['orderId'];
$userName=$_REQUEST['userName'];
$userEmail=$_REQUEST['userEmail'];
$nid=$_REQUEST['nid'];
$flatNumber=$_REQUEST['flatNumber'];
$flatCategory=$_REQUEST['flatCategory'];
$publisherEmail=$_REQUEST['publisherEmail'];

$insertQuery="INSERT INTO `billing_details`(`orderId`,`userName`,`userEmail`, `nid`, `flatNumber`, `flatCategory`, `publisherEmail`) VALUES ('$orderId','$userName','$userEmail','$nid','$flatNumber','$flatCategory','$publisherEmail')";
$runQuery=mysqli_query($connect,$insertQuery);

if($runQuery){
    header('location:b_ensure.php?right');
}else{
    echo "Something Went Wrong Please Try Again Later";
}
?>