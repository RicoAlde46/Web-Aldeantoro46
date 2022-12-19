<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username,alamat,telepon,email, password)
                    VALUES ('$username', '$alamat','$telepon','$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, Registrasi Berhasil!')</script>";
                $username = "";
                $alamat = "";
                $telepon = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi Kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="stylephp.css">

    <title>Profile</title>
</head>

<body>

    <div class="container">
        </form>
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Profile</p>
            <div class="input-group">
                <label for="username">Username :</label>
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <label for="alamat">Alamat</label>
                <input type="alamat" placeholder="Alamat" name="alamat" value="<?php echo $alamat; ?>" required>
            </div>
            <div class="input-group">
                <label for="telepon">Nomer Telepon :</label>
                <input type="telepon" placeholder="Nomer Telepon" name="telepon" value="<?php echo $telepon; ?>" required>
            </div>
            <div class="input-group">
                <label for="email">Email :</label>
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <label for="password">Password :</label>
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <label for="cpassword">Confirm Password :</label>
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <form>
                <div class="input-group">
                    <button name="submit" class="btn">Edit Profil</button>
                </div>
                <div class="input-group">
                    <a href="profile.php" class="btn">Batal</a>
                </div>
                <div class="input-group">
                    <a href="index.php" class="btn">Back</a>
                </div>
                <div class="input-group">

                    <a href="./logout.php" class="btn">Keluar</a>
                </div>
                <div class="card">
                    <div class="card-body text-center">

                        <img class="img img-responsive rounded-circle mb-3" width="160" src="img/logo.png<?php echo $_SESSION['user']['photo'] ?>" />

                        <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                        <p><?php echo $_SESSION["user"]["email"] ?></p>
                        <p1>Upload Profile Photo</p1>
                        <input type="file" name="picture" class="ketik" />
                    </div>
                </div>
            </form>
    </div>

</body>

</html>