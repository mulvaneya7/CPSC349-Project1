<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <?php include 'includes/head.php'; ?>
  </head>
  <body>
    <!-- NAVBAR -->
    <?php  $page='home';include 'components/navbar.php'; ?>
    <!-- Header -->
    <?php include 'components/header.php'; ?>

    <div class="container">
      <div class ="row justify-content-center align-items-center">
        <!-- FA Arrow left -->
        <i class="fas fa-angle-double-left fa-3x"></i>
          <!-- Card Component -->
            <div class="card border-warning" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p><a href="#" class="btn btn-warning">+</a>  add to library</p>
                </div>
            </div>
          <!-- FA Arrow right -->
          <i class="fas fa-angle-double-right fa-3x"></i>
        </div>
      </div>
    </div>

    <div class="jumbotron jumbotron-fluid mt-4">
      <div class="container">

      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>