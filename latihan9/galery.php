<!DOCTYPE html>
<html>
<head>
    <title>Galeri Gambar</title>
    <style>
        img {
            width: 200px;
            height: auto;
            margin: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h2>Galeri Gambar</h2>
    <?php
    $folder = "gambar/";
    $files = scandir($folder);

    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            echo "<img src='$folder$file' alt='$file'>";
        }
    }
    ?>
</body>
</html>


<!-- Kode ini menampilkan semua gambar dari folder gambar/ sebagai galeri menggunakan fungsi scandir. Dengan filter sederhana, file ditampilkan dalam bentuk <img>, menciptakan galeri secara otomatis. -->