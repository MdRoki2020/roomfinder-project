<?php
session_destroy();
unset($_SESSION['currentUser']);

setcookie("currentUser","",time()-(86400*50));
header("location:publisherLogin.php");
?>