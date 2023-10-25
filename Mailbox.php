<?php
session_start();

// Check if user is already logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

// Handle form submission for new email
if (isset($_POST['recipient']) && isset($_POST['subject']) && isset($_POST['body'])) {
  // Connect to database
  $host = 'localhost';
  $user = 'root';
  $dbpassword = '';
  $dbname = 'campus';
  $mysqli = new mysqli($host, $user, $dbpassword, $dbname);

  // Prepare and execute SQL statement to insert new email into database
  $user_id = $_SESSION['user_id'];
  $recipient = $mysqli->real_escape_string($_POST['recipient']);
  $subject = $mysqli->real_escape_string($_POST['subject']);
  $body = $mysqli->real_escape_string($_POST['body']);
  $sql = "INSERT INTO email (senderID, recipientID, subject, body, sentDate, isRead, user_id) VALUES ($user_id, $recipient, '$subject', '$body', NOW(), FALSE, $user_id)";
  $result = $mysqli->query($sql);

  // Close database connection
  mysqli_close($mysqli);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mailbox</title>
</head>
<body>
  <h1>Mailbox</h1>

  <h2>Compose New Email</h2>
  <form method="POST" action="">
    <label for="recipient">To:</label>
    <input type="text" name="recipient" id="recipient">
    <br>
    <label for="subject">Subject:</label>
    <input type="text" name="subject" id="subject">
    <br>
    <label for="body">Body:</label>
    <textarea name="body" id="body"></textarea>
    <br>
    <input type="submit" value="Send">
  </form>

  <h2>Received Emails</h2>
  <table>
    <thead>
      <tr>
        <th>Sender</th>
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

      // Get received emails from database
      $user_id = $_SESSION['user_id'];
      $sql = "SELECT emailID, senderID, subject, sentDate FROM email WHERE recipientID = $user_id ORDER BY sentDate DESC";
      $result = $mysqli->query($sql);

      // Loop through received emails and output table rows
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['senderID'] . "</td>";
        echo "<td><a href=\"view-email.php?id=" . $row['emailID'] . "\">" . $row['subject'] . "</a></td>";
        echo "<td>" . $row['sentDate'] . "</td>";
        echo "</tr>";
      }

      // Close database connection
      mysqli_close($mysqli);
      ?>
    </tbody>
  </table>

</html>
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
      margin-top: 20px;
    }

    h2 {
      margin-top: 30px;
    }

    form {
      margin-top: 20px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    textarea {
      height: 200px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 30px;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>