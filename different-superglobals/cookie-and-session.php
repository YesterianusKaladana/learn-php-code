<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Session and Cookies in PHP</title>
</head>
<body>

    <?php

    /*
    $_COOKIE
    $_SESSION
    */

    setcookie ("name", "Sepo", time() - 86400);
    $_SESSION['name'] = "12";

    ?>
    
</body>
</html>