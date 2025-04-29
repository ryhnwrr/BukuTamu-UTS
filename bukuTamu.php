<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Halaman Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Buku Tamu</header>
            <form action="simpan.php" method="post">
                <div class="field input">
                    <label>Nama</label>
                    <input type="text" name="nama" required>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="field input">
                    <label>Pesan</label>
                    <textarea name="pesan" required rows="4" style="resize: none; border-radius: 5px; padding: 5px;"></textarea>
                </div>
                <div class="field">
                    <input type="submit" class="btn" value="Kirim">
                </div>
            </form>
            
            <a class="field" href="logout.php" class="btn">Logout</a>
            <br><br>
            <h3>Daftar Tamu:</h3>
            <iframe src="data.txt" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>
        </div>
    </div>
</body>
</html>
