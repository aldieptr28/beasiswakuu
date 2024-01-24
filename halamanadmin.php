

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Menarik dengan Bootstrap</title>
    <!-- Referensi Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Gaya Kustom Anda (Opsional) -->
    <style>
        body {
            padding-top: 60px;
        }

        .jumbotron {
            text-align: center;
            background-color: #343a40;
            color: white;
        }

        .feature-box {
            border: 1px solid #dee2e6;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">
                <img src="https://beasiswaluarbiasa.com/wp-content/uploads/2020/08/BLB-ICON-PUTIH-PUTIH-300x300.png"
                    width="50px" height="50px" alt="">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
           
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1 class="display-4">Halo Admin !</h1>

        <a class="btn btn-success btn-lg" href="tampilkan.php" role="button">Kelola data beasiswa   </a>
    </div>

    <!-- Fitur -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="feature-box">
                    <h2>BEASISWA PEMERINTAH</h2>
                 
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-box">
                    <h2>BEASISWA FROM STARUP </h2>
            
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-box">
                    <h2>PELATIHAN     BERBAYAR</h2>
                   
                </div>
            </div>
            
        </div>
    </div>

   <?php
   require 'footer.php';
   ?>
</body>

</html>
