<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $txt = "Selamat datang!";
        $txt2 = "Politeknik negeri madiun";
        $x = 5;
        $y = 10.5;

        echo "<p>Isi variable txt adalah: $txt</p>";
        echo "<p>Isi variable x adalah: $x</p>";
        echo "<p>Isi variable y adalah: $y</p>";
        echo "Belajar PHP di " . $txt2 . "<br>";
        echo $x + $y;

        define("nama_konstanta", "{isi nama anda disini}");
        echo "<br>".nama_konstanta;
    ?>
</body>
</html>