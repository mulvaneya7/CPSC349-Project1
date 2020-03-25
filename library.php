<?php
    session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <?php include 'includes/head.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>

  <body>
    <!-- NAVBAR -->
    <?php  $page='library';include 'components/navbar.php'; ?>
    <!-- END NAVBAR -->
    <?php
    $userId = $_SESSION["UserId"];
    //echo "$userId";
    $db = mysqli_connect("mariadb","cs431s15","ahShut3I","cs431s15");
    if(mysqli_connect_errno()) {

      echo"<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
      exit;
    }

    $sql = "SELECT * FROM recipe_cards AS R
            INNER JOIN library AS L
            ON R.id = L.Recipe_id AND L.User_Id = '$userId';  
            ";

    $result = mysqli_query($db, $sql);

    while($resultRow = $result->fetch_assoc()){
      $row[] = $resultRow;
    }
    //print_r($row);
    ?>
    <!-- Header -->
    <div class="jumbotron">
        <h1 class="display-4">Welcome to your library!</h1>
        <p class="lead">All your recipes in one location</p>
    </div>
    <div class="container">
      <div class ="row align-items-start">
   <?php for($x= 0; $x <= sizeof($row)-1; $x++) { ?>
  
        <div class="col-lg-4 col-md-6">
            <div class="card-deck">
              <div class="card text-white bg-dark mb-3" style="width: 18rem; margin: 50px">
                <img class="card-img-top"  src="<?php echo $row[$x]['image']; ?>" alt="">
                <div class="card-body h-100">
                  <h5 class="card-title text-center"><?php echo $row[$x]['title']; ?></h5>
                  <h5 class="card-title"><?php echo $row[$x]['recipe_text'];?></h5>

                </div>
              </div>
            </div>
        </div>
     
      <?php
        }
     ?>
      </div>
    </div>
   
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  </body>
</html>
