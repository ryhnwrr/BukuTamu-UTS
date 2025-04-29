<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.html");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    $data = "Nama: $nama\nEmail: $email\nPesan: $pesan\n--------------------------\n";

    file_put_contents("data.txt", $data, FILE_APPEND);

    header("Location: bukuTamu.php");
    exit;
}
if (!is_writable("data.txt")) {
    echo "File tidak bisa ditulis!";
    exit;
}
?>
