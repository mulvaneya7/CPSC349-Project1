<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    
    </head>
 <form action="check.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="jumbotron">
            
                
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email"    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    <?php
                        if(isset($_SESSION["error"])){
                            $error = $_SESSION["error"];
                            echo "<small id='passwordHelp' class='form-text text-muted'>".$error."</small>";
                        }

                    ?>
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                   
        
        </div>
    </div>

</form>

    <style>
        .container{
            padding-top:10%;
        }
    </style>
</html>

<?php
    unset($_SESSION['error']);

?>