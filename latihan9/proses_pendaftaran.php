<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Data yang Diterima:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
        $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
        $pesan = isset($_POST['pesan']) ? htmlspecialchars($_POST['pesan']) : '';

        if ($nama && $email && $gender && $pesan) {
            echo "Nama: " . $nama . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Jenis Kelamin: " . $gender . "<br>";
            echo "Pesan: " . $pesan . "<br>";
        } else {
            echo "<p class='error'>Data tidak lengkap!</p>";
        }
    } else {
        echo "<p class='error'>Metode pengiriman harus POST!</p>";
    }
    ?>
</body>
</html>