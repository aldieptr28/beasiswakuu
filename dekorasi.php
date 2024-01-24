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
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fitur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang di Beasiswaku. Eaa!</h1>
        <p class="lead">Tempat terbaik untuk menemukan informasi beasiswa dan pelatihan.</p>
        <a class="btn btn-success btn-lg" href="login.php" role="button">Let's GO</a>
    </div>

    <!-- Fitur -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="feature-box">
                    <h3>BOOTCAMP</h3>
                
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-box">
                    <h2>BEASISWA STARTUP</h2>
                  
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-box">
                    <h3>BEASISWA PEMERINTAH</h3>
            
                </div>
            </div>
            
        </div>
    </div>

    <!-- mitra -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="display-4 fw-bold mb-4">Mitra Kami</h2>
            </div>
            <div class="col-md-12 d-flex justify-content-around flex-wrap align-items-center">
                <div class="partner-box mb-4">
                    <img src="img/BUMN.png" alt="Mitra 1" width="300px" height="300px" class="img-fluid">
                </div>
                <div class="partner-box mb-4">
                    <img src="img/mitralogokominfo.jpg" alt="Mitra 2" width="250px" height="250px" class="img-fluid">
                </div>
                <div class="partner-box mb-4">
                    <img src="img/kemendikbud 2.png" alt="Mitra 3" width="300px" height="300px" class="img-fluid">
                </div>
                <div class="partner-box mb-4">
                    <img src="img/mitralogotelkomsel.jpg" alt="Mitra 3" width="300px" height="300px" class="img-fluid">
                </div>

                <div class="partner-box mb-4">
                    <img src="img/mitralogocodepolitanku.jpeg" alt="Mitra 3" width="300px" height="300px" class="img-fluid">
                </div>



            </div>
        </div>
    </div>

    <!-- testimoni -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="display-4 fw-bold mb-4">Testimoni Pelanggan</h2>
            </div>
            <div class="col-md-12 d-flex justify-content-between overflow-hidden">
                <div class="card text-white bg-dark mb-3" style="max-width: 30%;">
                    <div class="card-header">aldie_ptr</div>
                    <div class="card-body">
                        <p class="card-text">"Saya rasa ini sangat bagus, dengan adanya web ini kita bisa uptodate mengenai informasi beasiswa"</p>
                    </div>
                </div>
                <div class="card text-white bg-dark mb-3" style="max-width: 30%;">
                    <div class="card-header">Gustia_rebecca</div>
                    <div class="card-body">
                        <p class="card-text">"Website ini worth it banget siii, apalagi buat anak kuliahan kayak gue, jadi ga bingung nyari info beasiswa, soalnya disini udah lengkap. satu kata dari saya, mantap !"</p>
                    </div>
                </div>
                <div class="card text-white bg-dark mb-3" style="max-width: 30%;">
                    <div class="card-header">Duta</div>
                    <div class="card-body">
                        <p class="card-text">"Wahhh, baru nemu niih website, gokill sihh. Kek semua informasi beasiswa udah kehimpun disini, jadi gua ga bingung buat cari beasiswa dimana. apalagi ada beasiswa yang mengasah skill, misal beasiswa coding yang gua ikutin hari ini. berkat web ini, gua lebih uptodate. ."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php
   require 'footer.php';
   ?>
</body>

</html>
