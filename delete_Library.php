<?php
session_start();
$userId =  $_SESSION["UserId"];
$recipeId = $_POST["foo"];
echo "<div> RecipeId: ". $recipeId. "</div>";
echo "<div> userId: ". $userId. "</div>";

$db = mysqli_connect("mariadb","cs431s15","ahShut3I","cs431s15");

          if(mysqli_connect_errno()) {

            echo"<p>Error: Could not connect to database.<br/>
            Please try again later.</p>";
            exit;
        }

        $query = " DELETE FROM library WHERE User_Id = '$userId' AND Recipe_Id = '$recipeId'";
        mysqli_query($db, $query);
        header('Location: library.php');
//DELETE FROM `library` WHERE `User_Id`
?>