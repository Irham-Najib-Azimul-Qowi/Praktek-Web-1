<!DOCTYPE html>
<html>
<head>
    <title>Form Komentar</title>
</head>
<body>
    <h2>Form Komentar</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama"><br><br>
        Email: <input type="text" name="email"><br><br>
        Komentar:<br>
        <textarea name="komentar" rows="5" cols="40"></textarea><br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = bersihkan_input($_POST["nama"]);
        $email = bersihkan_input($_POST["email"]);
        $comment = bersihkan_input($_POST["komentar"]);

        echo "<h3>Hasil Input:</h3>";
        echo "Nama: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Komentar: " . $comment . "<br>";
    }
    ?>
</body>
</html>

<!-- pembuatan file form_komentar.php ini bertujuan untuk menerima input dari pengguna melalui form, lalu menampilkannya kembali dengan aman menggunakan metode POST. Untuk mencegah potensi serangan seperti script injection, input yang diterima disaring menggunakan fungsi bersihkan_input() yang menggabungkan fungsi trim(), stripslashes(), dan htmlspecialchars(). Dengan cara ini, data yang ditampilkan ke halaman tetap aman dan tidak membahayakan sistem. -->