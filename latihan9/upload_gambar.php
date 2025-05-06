<!DOCTYPE html>
<html>
<head>
    <title>Upload Gambar</title>
</head>
<body>
    <h2>Form Upload Gambar</h2>

    <form action="" method="post" enctype="multipart/form-data">
        Pilih gambar yang akan diupload:
        <input type="file" name="gambar[]"
               multiple><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $folder = "gambar/";
        $jumlah = count($_FILES['gambar']['name']);

        for ($i = 0; $i < $jumlah; $i++) {
            $namaFile = $_FILES['gambar']['name'][$i];
            $tmpFile = $_FILES['gambar']['tmp_name'][$i];
            $ukuran = $_FILES['gambar']['size'][$i];
            $error = $_FILES['gambar']['error'][$i];

            if ($error === 0) {
                $tujuan = $folder . basename($namaFile);

                if (move_uploaded_file($tmpFile, $tujuan)) {
                    echo "File $namaFile berhasil diupload ke folder $folder.<br>";
                } else {
                    echo "Gagal mengupload file $namaFile.<br>";
                }
            } else {
                echo "Terjadi error saat upload file $namaFile.<br>";
            }
        }
    }
    ?>
</body>
</html>

<!-- Proses upload gambar ini memungkinkan pengguna untuk mengunggah beberapa file sekaligus dan menyimpannya di folder tertentu. Seluruh input file divalidasi agar tidak terjadi error saat halaman pertama kali dibuka, dan hanya diproses saat form disubmit. Sistem ini penting untuk menjaga keamanan dan menghindari kesalahan saat upload file. -->