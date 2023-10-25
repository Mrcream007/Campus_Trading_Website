<?php
session_start();

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM Reg WHERE username = '$username'";

    $result = $mysqli->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];

            // Redirect to admin panel page
            header('Location: admin-panel.php');
            exit();
        }
    }
}

?>



<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fontawesome-5.15/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/sign.js"></script>
</head>

<body>
        <main>
            <div class="container">
              <br>
                <h3 style="text-align: center;">Login</h3>
                <p><a href="reg.php">New Member Signup</a> </p>
                <br>
                <form method="post" action="signin.php" >
                    <div class="form">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">

                    </div>
                    <div class="form">
                      <label for="Password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="password" name="password">
                    </div>
                    <p id="message"></p>
	
                    <div class="form">
                      <input type="checkbox" class="form-check-input" id="Check">
                      <label class="form-check-label" for="Check">Remember Me</label>

                      
                    </div>
                    <div class="container">
                      <p><a style="margin-left: 200px;" href="recoverPage.php">Reset Password</a></p>
                    </div>
                    <p id="message"></p>
                    <button type="sumbit"  class="btn btn-success" >Login</button>
                    
                  </form>
            </div>
        </main>     
      
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>