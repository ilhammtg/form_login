<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
        <title>daftar</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                padding: 50px;
            }
            table {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            }
            button {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                margin: 10px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
            }
            button:hover {
                opacity:1;
            }
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            .icon-container {
                margin-bottom: 20px;
                padding: 7px 0;
                font-size: 24px;
            }
        </style>
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
        <div class="icon-container">
            <i class="fa fa-user-plus icon"></i>
        </div>
        <table align="center">
            <tr>
                <td colspan="2" align="center">
                    <h3>Pendaftaran User</h3>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name='nama' placeholder=" Nama" style="font-family:Arial, FontAwesome"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name='username' placeholder=" Username" style="font-family:Arial, FontAwesome"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name='password' placeholder=" Password" style="font-family:Arial, FontAwesome"></td>
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
