<?php
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($username == "admin" && $password == "1234") {
        echo "Login berhasil!";
    } else {
        echo "<span style='color:red;'>Username atau password salah!</span>";
    }
}
?>

<form method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>

<!-- Penanganan error penting untuk memberikan feedback yang jelas kepada pengguna, terutama dalam proses login agar tidak terjadi kebingungan saat gagal. -->