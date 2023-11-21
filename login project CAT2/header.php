<?php
  session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PROJECT</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>

    <nav>
        <div class="wrapper">
            <a href="index.php"><img src="" alt=""></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php"></a></li>
                <li><a href="blog.php"></a></li>
                <?php
                  if (isset($_SESSION["userid"])) {
                    echo "<li><a href='profile.php'>Profile page</a></li>";
                    echo "<li><a href='includes/Logout.inc.php'>Log out page</a></li>";
                  }
                  else{
                    echo "<li><a href='Sign up.php'>Sign up</a></li>";
                    echo "<li><a href='Login.php'>Log in</a></li>";
                  }
                ?>
            </ul>
        </div>
    </nav>

    <div class="wrapper">