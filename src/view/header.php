<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/header.css">
</head>
<body>
<?php
if (isset($_SESSION['user_email'])) {
    $user_logged_in = true;
}
else {
    $user_logged_in =false;
}


?>
<div class="header">
        <div id="home">
            <a href='../index.php'>HOME</a>
        </div>

        <?php if (!$user_logged_in) { ?>
            <div id="register">
                <a href='register.php'>REGISTER</a>
            </div>
        <?php } ?>

        <div id="logout">
            <?php if ($user_logged_in) { ?>
                <a href='logout.php'>LOG OUT</a>
            <?php } else { ?>
                <a href='login.php'>LOG IN</a>
            <?php } ?>
        </div>
    </div>
    </body>
    </html>