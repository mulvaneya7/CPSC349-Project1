<?php

if(isset($_POST['submit'])) {
    $file = $_FILES['image'];
    print_r($file);
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 5000000) {
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?uploadsuccess");
            } else {
                echo "File was too big!";
            }
        } else {
            echo "There was a problem uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}

?>

