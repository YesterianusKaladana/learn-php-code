<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Create Your Own Function in PHP </title>
</head>
<body>

    <?php

    $x = 100;

    function newCalc($x) {
        $newnr = $x * 0.75;
        echo "Here is 75% of what you wrote: ".$newnr;

    }

    newCalc ($x);

    echo "<br>";

    $a = 10;
    newCalc ($a);

    ?>
    
</body>
</html>