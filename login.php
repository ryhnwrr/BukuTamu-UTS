<?php
session_start();


$valid_user = "rayhanwiraa";
$valid_pass = "hahahihi";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    
    if ($user === $valid_user && $pass === $valid_pass) {
        $_SESSION['login'] = true;
        header("Location: bukuTamu.php"); 
        exit;
    } else {
        echo "<script>
                alert('Login gagal. Username atau password salah.');
                window.location='index.html';
              </script>";
        exit;
    }
}
?>
