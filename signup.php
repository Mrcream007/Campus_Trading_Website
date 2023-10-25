
<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
  header("Location: index.php");
  exit();
}

if (empty($_POST["username"])) {
    echo "Name is required";
    exit;
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo "Valid email is required";
    exit;
}

if (strlen($_POST["password"]) < 8) {
    echo "Password must be at least 8 characters";
    
    exit;
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    echo "Password must contain at least one letter";
    exit;
}

if (!preg_match("/[0-9]/", $_POST["password"])) {
    echo "Password must contain at least one number";
    exit;
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    echo "Passwords must match";
    exit;
}

// Sanitize and validate input
$username = htmlspecialchars($_POST["username"]);
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
$gender = htmlspecialchars($_POST['gender']);
$password = htmlspecialchars($_POST["password"]);
$role = htmlspecialchars($_POST['role']);

// Hash password
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Execute prepared statement to insert data into database
$mysqli = require_once 'database.php';
$sql = "INSERT INTO Reg (username, email, phone, gender, password_hash, role) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);

if (!$stmt) {
    echo "SQL error: " . $mysqli->error;
    exit;
}

$stmt->bind_param("ssssss", $username, $email, $phone, $gender, $password_hash, $role);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        echo "Email already taken";
    } else {
        echo $mysqli->error . " " . $mysqli->errno;
    }
    exit;
}



?>
