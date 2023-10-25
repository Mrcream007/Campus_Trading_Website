<?php include 'header.php'; ?>

<?php include "database.php"; ?>
    <main class="container">
        

        <!-- some images display from database avaliabe-->

          <div class="container">
            <div id="carouselControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/phones.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="website images/kari-shea-1SAnrIxw5OY-unsplash.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="website images/nordwood-themes-_sg8nXmpWDM-unsplash.jpg" alt="Tird slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#Controls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#Controls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
    
          </div>
          <!-- end of some images display from database avaliabe -->

          <!-- Avaliable items display with description from database -->
          <?php 
          include('database.php');
          // Get storyteller's stories from the database
          
          session_start();

          // Check if user is already logged in
          if (!isset($_SESSION['user_id'])) {
            header("Location: login.php");
            exit();
          }
          $sql = "SELECT * FROM Items ";
          $result = $mysqli->query($sql);
          
          
          ?>
          <div class="container-fluid">
            <h2>Available items</h2>
            <div class="row">
                <div class="col-md-3">

                    <!-- to check if items are in the database -->
                    <?php if ($result->num_rows == 0) {
  echo '<div class="container"><p>No stories found.</p></div>';
  exit();
}
                    ?>
                    <!-- to check if items are in the database -->

                    <!-- if items are avaliable -->
                    <?php
      // Loop through each story and display it
      while ($item = $result->fetch_assoc()) {
        echo '<div class="card" style="width: 18rem;">';
        
        echo '<img src="' . $item['image'] . '" class="card-img-top">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">'. "Item Name: " . htmlspecialchars($item['itemName']) . '</h5>';
        echo '<p class="card-text">' . "Item Description: " . htmlspecialchars($item['description']) . '</p>';
        echo '<p class="card-text">' . "Item Category: " . htmlspecialchars($item['category']) . '</p>';
        echo '<p class="card-text">' . "Delevery Mode: " . htmlspecialchars($item['delivery']) . '</p>';
        echo '<a href="trade.php?id=' . $item['item_id'] . '" class="btn btn-primary">Buy</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
      }
      ?>
                    
                    <!-- if items are avaliable -->
                </div>
            </div>
          </div>
          <!-- end of Avaliable items display with description from database -->
    </main>

<?php include 'footer.php'; ?>