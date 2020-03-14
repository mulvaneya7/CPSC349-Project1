<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$zero = 0;
@$db = new mysqli("localhost","root","","Food");

if(mysqli_connect_errno()) {

    echo"<p>Error: Could not connect to database.<br/>
    Please try again later.</p>";
    exit;
}
$query = "INSERT INTO user VALUES(?,?,?,?)";
$stmt = $db->prepare($query);
$stmt->bind_param('isss',$zero,$username,$email,$password);
$stmt->execute();


if($stmt->affected_rows > 0){
    echo "<p>Info inserted into the database</p>";
}   else {
    echo "<p>An error has occurred.<br/>
        The item was not added.</p>";
       
}
?>