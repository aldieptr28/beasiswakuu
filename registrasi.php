<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $cek_user = mysqli_query($koneksi, "SELECT * FROM tb_beasiswa WHERE username= '$username'");
    $cek_login = mysqli_num_rows($cek_user);

    if ($cek_login > 0) {
        echo "<script>
                alert('username terdaftar');
                window.location='registrasi.php';
              </script>";
    } else {
        if ($password1 != $password2) {
            echo "<script>
                    alert('konfirmasi password tidak sesuai');
                    window.location='registrasi.php';
                  </script>";
        } else {
            mysqli_query($koneksi, "INSERT INTO tb_beasiswa VALUES ('', '$nama', '$username', '$password1')");

            echo "<script>
                    alert('berhasil dikirim');
                    window.location='login.php';
                  </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Regitrasi dulu lahhh</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<style>

		body {
            background-color: #6db33f; /* Warna latar belakang */
            color: #fff; /* Warna teks */
        }

        .main-w3layouts {
            background: rgba(255, 255, 255, 0.2); /* Warna latar belakang form */
            padding: 2em;
            border-radius: 10px;
            margin-top: 50px;
        }

        h1 {
            color: #fff; /* Warna judul form */
        }

        .text,
        .email,
        .w3lpass {
            background: rgba(255, 255, 255, 0.2); /* Warna latar belakang input */
            color: #fff; /* Warna teks input */
        }

        .colorlibcopy-agile {
            color: #fff; /* Warna teks copyright */
        }

        .colorlib-bubbles li {
            background: #fff; /* Warna gelembung */
        }

        .bagus:hover {
            color: red;
        }
	</style>
	<!-- main -->
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 main-w3layouts wrapper">
                <h1 class="text-center mb-4">Regitrasi dulu bro</h1>
                <div class="main-agileinfo">
                    <div class="agileits-top">
                        <form action="" method="POST">
                            <div class="form-group">
                                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required="yes">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="username" placeholder="Username" required="yes">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="password1" placeholder="Password" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="password2" placeholder="Confirm Password" required="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="SIGNUP" name="submit">
                            </div>
                        </form>
                        <p class="text-center">Don't have an Account? <a href="login.php" class="bagus" >Login Now!</a></p>
                    </div>
                </div>
                <!-- copyright -->
                
            </div>
        </div>
        <!-- //main -->
    </div>
	
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>