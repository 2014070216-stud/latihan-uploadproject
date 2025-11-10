<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Login</h2>
    <div class="container">
        <form method="POST">
            <table>
                <tr>
                    <td>
                        <label for="username">Masukkan Username</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="username" placeholder="Username">
                    </td>
                </tr>

                <br>
                <br>

                <tr>
                    <td>
                        <label for="password">Masukkan Password</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="password" name="password" placeholder="Password">
                    </td>
                </tr>

                <br>
                <br>
                
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <button type="submit" name="login">Login</button>
                        <p>Belum punya akun? <a href="register.php">Klik disini</a></p>
                    </td>
                </tr>
            </table>
        </form>
</div>
</body>
</html>

<?php


session_start();//
include 'koneksi.php';//


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);


    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header("Location: home.php");
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>
