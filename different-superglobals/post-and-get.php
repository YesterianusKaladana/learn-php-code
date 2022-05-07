<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>POST and GET Superglobals in PHP</title>
</head>
<body>

    <?php
    /*
    $GLOBALS
    $_POST
    $_GET
    $_COOKIE
    $_SESSION
    */
    ?>

    echo $_GET['name'];

    <form method="GET">
        <input type="hidden" name="name" value="Sepo">
        <button type="submit">PRESS ME!</button>
    </form>
    
</body>
</html>