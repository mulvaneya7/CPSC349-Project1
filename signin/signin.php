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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
 <form action="check.php" method="post" enctype="multipart/form-data">
    <div class="container-fluid h-100">
        <div class="row h-100">
        
           <div class="col-6" id ="register">
           <p id ="headp"><i class="fas fa-fish fa-2x"> &nbsp;Foodies</i></p>
                <h1> Welcome</h1></br>
               
                <h3 class="text-muted"><strong>Register for an Foodie account here.</strong><h3>
                <p id="registerbtn">
                <a href="../signup/register.php" role="button" class="btn btn-warning">Register</a>
                <p>
           </div>


            <div class="col-6" id ="signin">
                
                    
                            <div id="or">Or login to your account</div></p>
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
        #headp{
            padding-bottom:10%;
            font-size:24px;
        }
       
        #signin{
            padding-top:19%;
            padding-left:10%;
            font-family: 'Open Sans', sans-serif;
           
        }
        #registerbtn{
            padding-top: 13%;
           
        }
        .form-control{
            width:60%;
            
        }
        #or{
            font-size:25px;
            color: grey;
        }
        #register{
            background-color:#141414;
           
           
        }
        
       .text-muted{
        color: $text-muted !important;
       }
        a{
            width:30%;
        }
        i{
            padding-right:10px;
        }
        #register{
            color:white;
            padding-top:8%;
            text-align:left;
            font-family: 'Roboto', sans-serif;
            font-family: 'Open Sans', sans-serif;
            /* font-family: 'Sen', sans-serif; */
        }

       div.row{
           height:100%;
       }
       

        
    </style>
</html>

<?php
    unset($_SESSION['error']);

?>