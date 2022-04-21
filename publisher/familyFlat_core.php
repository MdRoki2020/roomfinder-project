<?php
require_once('config.php');

if(isset($_REQUEST['submit'])){
    $flat_category=$_REQUEST['flat_category'];
    $email=$_REQUEST['email'];
    $appertmentName=$_REQUEST['appertmentName'];
    $flatNumber=$_REQUEST['flatNumber'];
    $location=$_REQUEST['location'];
    $description=$_REQUEST['description'];
    $rent=$_REQUEST['rent'];
    $photo=$_REQUEST['photo'];

    $photo=explode(".",$_FILES["photo"]["name"]);
    $photo=end($photo);
    $photo_name=rand().".".$photo;

    $insertQuery="INSERT INTO `family`(`flat_category`,`email`,`appertmentName`, `flatNumber`, `location`, `description`, `rent`, `photo`) VALUES ('$flat_category','$email','$appertmentName','$flatNumber','$location','$description','$rent','$photo_name')";
    $runQuery=mysqli_query($connect,$insertQuery);

    if($runQuery){
        move_uploaded_file($_FILES['photo']['tmp_name'],'family_room_images/'.$photo_name);
    }

    if($runQuery){
        header("location:publisher_zone.php?familyRight");
    }else{
        echo "Do Not Insert Data";
    }
}


?>