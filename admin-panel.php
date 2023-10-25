<?php

 include 'header.php';
session_start();

// Check if user is already logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>

  <link rel="stylesheet" href="admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>


  <div class="title">
  <h1 ><span>Welcome to the Admin Panel</span> </h1>
  </div>
  <nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item"style="margin-right: 15px;"><a href="add-item.php">Add Item</a></li>
      <li class="nav-item" style="margin-right: 15px;"><a href="items.php">View Items</a></li>
      <li class="nav-item" style="margin-right: 15px;"><a href="mailbox.php">Mailbox</a></li>
      <li class="nav-item"><a href="index.php">Home</a></li>
    </ul>
  </nav>
  <h2>Email Summary</h2>
  <table>
    <thead>
      <tr>
        <th>Sender</th>
        <th>Recipient</th>
        <th>Subject</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Connect to database
      $host = 'localhost';
      $user = 'root';
      $dbpassword = '';
      $dbname = 'campus';
      $mysqli = new mysqli($host, $user, $dbpassword, $dbname);

      // Get email summary data from database
      $user_id = $_SESSION['user_id'];
      $sql = "SELECT senderID, recipientID, subject, sentDate FROM email WHERE user_id = $user_id";
      $result = $mysqli->query($sql);

      // Loop through email summary data and output table rows
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['senderID'] . "</td>";
        echo "<td>" . $row['recipientID'] . "</td>";
        echo "<td>" . $row['subject'] . "</td>";
        echo "<td>" . $row['sentDate'] . "</td>";
        echo "</tr>";
      }

      // Close database connection
      mysqli_close($mysqli);
      ?>
    </tbody>
  </table>
  <h2>Shared Items Summary</h2>
  <table>
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Category</th>
        <th>Date Shared</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Connect to database
      $host = 'localhost';
      $user = 'root';
      $dbpassword = '';
      $dbname = 'campus';
      $mysqli = new mysqli($host, $user, $dbpassword, $dbname);

      // Get shared items summary data from database
      $user_id = $_SESSION['user_id'];
      $sql = "SELECT itemName, category FROM Items WHERE user_id = $user_id";
      $result = $mysqli->query($sql);

      // Loop through shared items summary data and output table rows
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['itemName'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "</tr>";
      }

      // Close database connection
      mysqli_close($mysqli);
      ?>
    </tbody>
  </table>
</body>
</html>
