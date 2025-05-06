<?php
if (isset($_COOKIE["nama"])) {
    echo "Selamat datang, " . $_COOKIE["nama"];
} else {
    echo "Cookie belum diset.";
}
?>


<!-- Cookies digunakan untuk menyimpan identitas sementara, misalnya nama pengguna, agar dapat digunakan kembali dalam sesi berikutnya tanpa login ulang. -->