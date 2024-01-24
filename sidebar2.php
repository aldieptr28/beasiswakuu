<?php

include 'koneksi.php';

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>website beasiswa</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/676a7d6f76.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  

    

    
</head>



<body>







    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-success fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://beasiswaluarbiasa.com/wp-content/uploads/2020/08/BLB-ICON-PUTIH-PUTIH-300x300.png"
                    width="50px" height="50px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kategori Beasiswa
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="kategoripemerintah.php">Pemerintah</a></li>
                            <li><a class="dropdown-item" href="kategorinonpemerintah.php">Non - Pemerintah</a></li>
                          


                        </ul>
                    </li>


                </ul>
                <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <!-- tombol pencarian -->
    <button class="btn btn-outline-light me-4" type="submit">
        <i class="fas fa-search"></i>
    </button>
    <a href="login.php">
    <i class="fas fa-user-tie fa-2x text-white"></i>
</a>

</form>
</div>
      
</div>
    </nav>