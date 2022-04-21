<?php
require_once('config.php');

if(isset($_REQUEST['id'])){
    $id= $_REQUEST['id'];
}

$deleteQuery="DELETE FROM `family` WHERE `id`=$id";
$runQuery=mysqli_query($connect,$deleteQuery);

if($runQuery){
    header('location: family_room.php');
}else{
    echo 'Something Is Happening';
}

?>