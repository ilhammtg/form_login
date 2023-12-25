<?php
// inisialisasi session
session_start();

// mengecek apakah ada session user yang aktif, jika tidak maka arahkan ke login.php
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Administrator</title>
</head>
<body style="text-align:center">
    <h1>Halaman Administrator</h1>
    <a href="index.php">Home</a>
    <a href="logout.php">Logout</a>
    <hr>
    <h3>Selamat Datang, <?php echo $_SESSION['user']['nama']; ?></h3>
</body>
</html>