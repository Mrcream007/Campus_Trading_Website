
<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
  header("Location: admin-panel.php");
  exit();
}
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require 'database.php';
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (empty($username) || empty($password)) {
        $is_invalid = true;
    } else {
        $sql = "SELECT * FROM Reg WHERE username = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        
        if ($user && password_verify($password, $user["password_hash"])) {
            session_start();
            session_regenerate_id();
            $_SESSION["user_id"] = $user["user_id"];
            header("Location: index.php");
            exit;
        } 

       
        else {
            $is_invalid = true;
        }
    }
    
    $mysqli->close();
}

?>