<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($x = 0; $x <= 10; $x++){
            $y = str_repeat("*", $x);
            echo "$y <br>";
        }
    ?>
</body>
</html>