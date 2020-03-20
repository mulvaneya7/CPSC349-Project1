<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sen&display=swap" rel="stylesheet">
    </head>
 <form action="check.php" method="post" enctype="multipart/form-data">
    <div class="container-fluid h-100">
        <div class="row h-100">
           <div class="col-6" id ="register">
                <h1> Welcome</h1></br>
                <h3>Register for an Foodie account here.<h3>
                <p id="registerbtn">
                <a href="../signup/signup.html" role="button" class="btn btn-warning">Register</a>
                <p>
           </div>


            <div class="col-6" id ="signin">
                
                    
                            <div>Or login to your account</div></p>
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
                            <button type="submit" class="btn btn-warning">Sign In</button>
                      
            </div>    
        </div>
    </div>

</form>

    <style>
        html,body{
            height: 100%;
           
        }
        form{
            height:100%;
        }
        .container-fluid{
          height:100%;
          overflow:hidden;
          overflow-y: hidden;
        }
        #signin{
            padding-top:15%;
            padding-left:10%;
           
        }
        #registerbtn{
            padding-top: 10%;
        }
        .form-control{
            width:60%;
            
        }
        #register{
            background-color:#29302B;
           
           
        }
        #register{
            color:white;
            padding-top:25%;
            text-align:left;
            font-family: 'Roboto', sans-serif;
            font-family: 'Sen', sans-serif;
        }

       div.row{
           height:100%;
       }
       

        
    </style>
</html>

<?php
    unset($_SESSION['error']);

?>