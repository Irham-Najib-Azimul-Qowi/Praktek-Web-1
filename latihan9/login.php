<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        .error {
            color: red;
            font-size: small;
        }
    </style>
</head>
<body>
    <h2>Form Login</h2>
    <?php
    $name = $email = "";
    $nameErr = $emailErr = "";

    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $nameErr = "Nama wajib diisi";
        } else {
            $name = bersihkan_input($_POST["nama"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email wajib diisi";
        } else {
            $email = bersihkan_input($_POST["email"]);
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span><br><br>

        Email: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr)) {
        echo "<h3>Login Berhasil</h3>";
        echo "Nama: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>
</body>
</html>

<!-- login.php ini dibuat untuk menerima dan memvalidasi input nama serta email dari pengguna melalui form login. Setiap input disaring menggunakan fungsi bersihkan_input() untuk mencegah serangan seperti script injection, dan dilakukan pemeriksaan agar tidak ada field yang kosong. Jika terdapat kesalahan, pesan error akan ditampilkan dengan warna merah dan ukuran kecil, sedangkan jika semua input valid, informasi pengguna akan ditampilkan dengan pesan "Login Berhasil". -->