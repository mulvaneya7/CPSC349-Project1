<?php
session_start();
        $userId =  $_SESSION["UserId"];
        echo "<div> User Id:". $userId. "</div>";
       

         $recipeId = $_POST["foo"];
         echo "<div> RecipeId: ". $recipeId. "</div>";
          @$db = new mysqli("mariadb","cs431s15","ahShut3I","cs431s15");

          if(mysqli_connect_errno()) {

            echo"<p>Error: Could not connect to database.<br/>
            Please try again later.</p>";
            exit;
        }
          $query = "INSERT INTO library VALUES(?,?)";
          $stmt = $db->prepare($query);
          $stmt->bind_param('ii',$userId,$recipeId);
          $stmt->execute();


if($stmt->affected_rows > 0){
    echo "<p>Info inserted into the database</p>";
     header('location:index.php');
}   else {
    echo "<p>An error has occurred.<br/>
        The item was not added.</p>";
       
}
      ?>