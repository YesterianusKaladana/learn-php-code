<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> CONTACT</title>
    <link rel="stylesheet" stye="text/css" href="style.css">
</head>

<body>

    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="contact.php">CONTACT</a></li>
    </ul>

    <?php

    $_SESSION['username'] = "sepo947a";
    echo $_SESSION['username'];

    ?>

</body>

</html>