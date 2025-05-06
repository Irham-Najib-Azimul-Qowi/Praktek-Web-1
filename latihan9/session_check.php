<?php
session_start();
if (isset($_SESSION["username"])) {
    echo "Anda login sebagai: " . $_SESSION["username"];
} else {
    echo "Anda belum login.";
}
?>

<!-- Session memungkinkan server menyimpan data pengguna selama kunjungan berlangsung. Ini lebih aman dibanding cookies karena tidak disimpan di sisi klien. -->