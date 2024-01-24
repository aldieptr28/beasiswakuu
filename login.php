<?php

include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $ambil = mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE username ='$username'");

    if (mysqli_num_rows($ambil) === 1) {
        $data = mysqli_fetch_assoc($ambil);

        // Memeriksa apakah password sesuai tanpa hash
        if ($password === $data['password']) {
            $_SESSION['nama'] = $data['nama'];
            header("location:halamanadmin.php");
            exit();
        } else {
            echo "<script>
                    alert('Password salah');
                    window.location='login.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Username atau password salah');
                window.location='login.php';
              </script>";
    }
}
?>


<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

<style>
        body {
            background-color: #6db33f;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.2);
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            color: #fff;
        }

        input[type="text"],
        input[type="password"] {
            background: rgba(255, 255, 255, 0.8);
            color: #000;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: calc(100% - 20px);
            box-sizing: border-box;
        }

        input[type="submit"] {
            background: #fff;
            color: #6db33f;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: calc(100% - 20px);
            box-sizing: border-box;
        }

        .login-help {
            color: #fff;
            margin-top: 15px;
        }
    </style>

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="login.php" method="POST">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="registrasi.php">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>