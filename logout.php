<?php

session_start();
unset($_SESSION["UserId"]);
header('location:signin/signin.php');
//$_SESSION["UserId"]
?>