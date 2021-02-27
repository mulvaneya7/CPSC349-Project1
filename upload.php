
<?php
if(isset($_POST['submit'])) {
    //the path to store the uploaded image
    //$target = "images/".basename($_FILES['image']['name']);

    //connect to database
    $db = mysqli_connect("mariadb","cs431s15","ahShut3I","cs431s15");

    //get all the submitted data from the form
    $image = $_FILES['image']['name'];
    $title = $_POST['title'];
    $recipe = $_POST['recipe'];

    $imageExt = explode('.', $image);
    $imageActualExt = strtolower(end($imageExt));

    

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($imageActualExt, $allowed)) {
        $imageNameNew = uniqid('',true).".".$imageActualExt;
        $imageDestination = 'images/'.$imageNameNew; 
        //store the submitted data into the database
        $sql = "INSERT INTO recipe_cards (image, title, recipe_text) VALUES ('$imageDestination', '$title', '$recipe')";
        mysqli_query($db, $sql);
        //header("Location: index.php");

        //Confirm upload
        if(move_uploaded_file($_FILES['image']['tmp_name'], $imageDestination)) {
            $msg = "Image uploaded successfully!";
        } else {
            $msg = "There was a problem in uploading your image!";
        }
    }

    echo $msg;
    header('Location: index.php');
} 
    
?>
