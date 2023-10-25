<?php include 'header.php'; ?>
<?php
session_start();

// Check if user is already logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

// Connect to database

$host = 'localhost';
$user = 'root';
$dbpassword = '';
$dbname = 'campus';

$mysqli = new mysqli($host, $user, $dbpassword, $dbname);

if ($mysqli->connect_errno) {
    echo("Connection error: " . $mysqli->connect_error);
}

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get form data
  $title = $_POST["itemName"];
  $category = $_POST["category"];
  $delivery = $_POST["delivery"];
  $description = $_POST["description"];
  
  // Upload image file
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $allowed_types = array("jpg", "jpeg", "png", "gif");
  if (!in_array($imageFileType, $allowed_types)) {
      die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
  }
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      $image_url = $target_file;
  } else {
      die("Sorry, there was an error uploading your file.");
  }
  $user_id = $_SESSION['user_id'];
  // Insert data into database
  $sql = "INSERT INTO Items (user_id, itemName, category, delivery, description, image) VALUES ('$user_id', '$title', '$category', '$delivery', '$description', '$image_url')";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("ssssss", $user_id, $title, $category, $delivery, $description, $image_url);
  if ($stmt->execute())  {
    header('Location: index.php');
    exit();
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
  }
  
  // Close database connection
  mysqli_close($mysqli);
}
?>  
        <div class="container">

        

<h2 style="text-align: center;">Add an Item</h2>
<form  method="post" enctype="multipart/form-data" >
<div class="itemName">
    <label class="form-label" for="itemName">Enter item name:</label>
    <input class="form-control" type="text" id="itemName" name="itemName" placeholder="Item name...">
</div>
<div class="category">
    <label class="form-label" for="category">Select category:</label>
    <select class="custom-select" id="category" name="category">
        <option value="books">Books</option>
        <option value="electronics">Electronics</option>
        <option value="clothing">Clothing</option>
        <option value="home">Home &amp; Garden</option>
    </select>
</div>
<div class="delivery">
    <label class="form-label" for="deliverySelect">Select delivery location:</label>
    <select class="custom-select" id="delivery" name="delivery">
        <option value="Sir Ian Wood Building">The Sir Ian Wood Building</option>
        <option value="sport_building">Sport Building</option>
        <option value="Ishbel Gordon Building">The Ishbel Gordon Building</option>
        <option value="Ishbel Gordon Building">Gray’s School Of Art</option>
        <option value="Garthdee House">Garthdee House</option>
        <option value="Annexe">Annexe</option>
    </select>
</div>
<div class="description">
    <label class="form-label" for="descriptionInput">Enter item description:</label>
    <textarea class="form-control" id="descriptionInput" name="description" rows="4" placeholder="Item description..."></textarea>
</div>
<div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            </div>

<div class="buttons">
    <button class="btn btn-success" type="submit">Submit</button>
    <button class="btn btn-danger" type="button" onclick="window.location.href='index.html'">Cancel</button>
</div>
</form>
</div>


<?php include 'footer.php'; ?>


    