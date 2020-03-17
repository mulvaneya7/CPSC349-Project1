<!-- load cards from database -->
<?php
        $db = mysqli_connect("localhost", "root", "", "Food");
        $sql = "SELECT * FROM recipe_cards";
        $result = mysqli_query($db, $sql);

        if($result) {
          if(mysqli_num_rows($result) >0) {
              $row = mysqli_fetch_assoc($result);
              //print_r($row);
          
?>
                <div class="container">
                <div class ="row justify-content-center align-items-center">
                    <!-- FA Arrow left -->
                    <a href="displaycard.php?getPrev=true" name="dec"><i class="fas fa-angle-double-left fa-3x"></i></a>
                    <!-- Card Component -->
                        <div class="card border-warning" style="width: 18rem;">
                            <img src="images/<?php echo $row['image']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                            <p class="card-text"><?php echo $row['recipe_text'];?></p>
                            <p><a href="#" class="btn btn-warning">+</a>  add to library</p>
                            </div>
                        </div>
                    <!-- FA Arrow right -->
                    <a href="displaycard.php?getNext=true" name="inc"><i class="fas fa-angle-double-right fa-3x"></i></a>
                    </div>
                </div>
                </div>
<?php
            
          }
        }
?>


