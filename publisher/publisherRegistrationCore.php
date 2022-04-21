<?php
require_once('config.php');

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$confirmPassword=$_REQUEST['confirmPassword'];
$photo=$_REQUEST['photo'];

$photo=explode(".",$_FILES["photo"]["name"]);
$photo=end($photo);
$photo_name=rand().".".$photo;

if($password!=$confirmPassword){
    header("location:publisherRegistration.php?pasNotMatch");
    exit();
}

$email_check_query = "SELECT * FROM `registered_user` WHERE email='$email' LIMIT 1";
$result = mysqli_query($connect, $email_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists
    if ($user['email'] === $email) {
        header('location:publisherRegistration.php?exist');
        exit();
    }
}

$insertQuery="INSERT INTO `registered_user`(`name`, `email`, `password`,`confirmPassword`,`photo`) VALUES ('$name','$email','$password','$confirmPassword','$photo_name')";
$runQuery=mysqli_query($connect,$insertQuery);

if($runQuery){
    move_uploaded_file($_FILES['photo']['tmp_name'],'publisher_images/'.$photo_name);
}

if($runQuery){
    header("location:publisherRegistration.php?right");
}else{
    echo "Do Not Insert Data";
}
?>