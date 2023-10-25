

<!DOCTYPE html>
<html>

<head>
    <title>Campus TradeIn Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fontawesome-5.15/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Raleway:ital,wght@0,300;0,400;1,300&display=swap"
        rel="stylesheet">
</head>

<body>

        <header>
            <div class="leftmenu">
              <a href="index.php"><img id="logo" src="assets\images\Asset 1@2x.png" alt="books" style="width: 250px;" ></a>
                
            </div>
            <div class="rightmenu">
                <nav>
                    <ul>
                        <li><a href="add-item.php">Make a Sale</a></li>
               
                <?php if (isset($user)): ?>
                <li class="nav-item">
                <a class="nav-link" href="index.php">Hello <?= htmlspecialchars($user["username"]) ?></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Log out</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
                </li>
                <?php endif; ?>
            
                        <li><a href="items.php">View items</a></li>
                    </ul>
                </nav>
            </div>
        </header>