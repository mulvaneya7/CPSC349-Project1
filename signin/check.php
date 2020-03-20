<?php
session_start();
$error = "username or password incorrect!";
$email = $_POST['email'];
$password= $_POST['password'];
$db = mysqli_connect("localhost","root","","Food");

if(mysqli_connect_errno()){
    
    echo "<Error: Could not connect to database.<br/>
    Please try again later.</p>";
    exit;
}
$query = "SELECT * FROM user WHERE Email='".$email ." ' and Password = '".$password. "'";
$result = mysqli_query($db,$query);

$row = mysqli_num_rows($result);
$Returnvalue = mysqli_fetch_assoc($result);

if($row==0){
    $_SESSION["error"] = $error;
    header('location:signin.php');

}else{
    $_SESSION["UserId"] = $Returnvalue["UserId"];
    header('location:../index.php');
}
$db->close();
?>