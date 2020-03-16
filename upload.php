
<?php
if(isset($_POST['submit'])) {
    //the path to store the uploaded image
    $target = "images/".basename($_FILES['image']['name']);

    //connect to database
    $db = mysqli_connect("localhost", "root", "", "Food");

    //get all the submitted data from the form
    $image = $_FILES['image']['name'];
    $title = $_POST['title'];
    $recipe = $_POST['recipe'];

    //store the submitted data into the database
    $sql = "INSERT INTO recipe_cards (image, title, recipe_text) VALUES ('$image', '$title', '$recipe')";
    mysqli_query($db, $sql);
    header("Location: index.php");

    //Confirm upload
    if(move_uploaded_file($_FILES['image']['temp_name'], $target)) {
        $msg = "Image uploaded successfully!";
    } else {
        $msg = "There was a problem in uploading your image!";
    }
} 
    
?>
