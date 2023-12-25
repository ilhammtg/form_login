<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
        <title>daftar</title>
</head>
<body>

<?php
    if(isset($_POST['username'])){
        $nama = $_POST['nama'];
        $usernmae = $_POST['username'];
        $password = md5($_POST['password']);

        $query = mysqli_query($koneksi, "INSERT INTO user(nama,username,password) values('$nama','$usernmae','$password')");
        if($query){
            echo '<script>alert("Selamat, pendaftaran anda berhasil. Silahkan login.")</script>';
        }else{
            echo '<script>alert("Pendaftaran gagal.")</script>';
        }
        }
    
?>

    <form method='post'>
        <table align="center">
            <tr>
                <td colspan="2" align="center">
                    <h3>Pendaftaran User</h3>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name='nama'></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name='username'></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name='password'></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Daftar User</button>
                <a href="login.php">Login</a>
                </td>
            </tr>
        </table>
           
</body>
</html>