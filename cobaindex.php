<?php

include ('koneksi.php'); 

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>website beasiswa</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/676a7d6f76.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    
    <head>
    <!-- Referensi ke TinyMCE -->

    
</head>



<body>
    <style>

#ikon {
    transition: transform 0.3s, color 0.3s;
}

#ikon:hover {
    transform: scale(1.2);
    /* Membesarkan ikon saat dihover */
    color: #808080;
    /* Mengubah warna menjadi abu-abu saat dihover */
}

#logo {
    transition: transform 0.3s, color 0.3s;
}

#logo:hover {
    transform: scale(1.7);
    /* Membesarkan ikon saat dihover */
    color: #808080;
    /* Mengubah warna menjadi abu-abu saat dihover */
}
</style>





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

    <div class="container mt-5 " style="padding-top: 80px;" >
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-4 fw-bold text-success">Selamat Datang di Portal Beasiswa</h1>
                <p class="lead">Peluang besar untuk menggapai mimpi Anda!</p>
            </div>
        </div>
    </div>


    <!-- Slide -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/bannerunpar.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/bannerbinus.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/bannerpertamina.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    <div class="container-fluid text-center mb-5">
        <h1>Daftar Beasiswa 2024</h1>
        <p>Berikut kami sajikan daftar beasiswa yang sedang dibuka tahun 2024 :</p>
    </div>


    <!-- Card beasiswa -->


    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">

        <div class="col" id="kipCard">
    <div class="card">
        <img src="https://i0.wp.com/borobudurnews.com/wp-content/uploads/2020/03/KIP.png"
            class="card-img-top img-fluid" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">1. KIP KULIAH</h5>
            <p class="card-text">Apa itu KIP Kuliah? KIP Kuliah adalah bantuan biaya pendidikan dari
                pemerintah bagi lulusan SMA / Sederajat yang memiliki potensi akademik baik, tetapi memiliki
                keterbatasan ekonomi. Kamu berkesempatan bebas UKT Kuliah sampai lulus loh dan ada juga uang
                saku bulanan.</p>
            <button class="btn btn-success" data-toggle="modal" data-target="#premiumModal">Baca Selengkapnya</button>
        </div>
    </div>

    <!-- Modal Premium Box -->
    <div class="modal" id="premiumModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Fitur Premium</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/premium-quality-icon-badge-label-crown-logo-design-template-3a691fecd901bd330e40b9f992811cca_screen.jpg?ts=1670282669"
                        class="img-fluid mx-auto d-block" width="100px" height="100px" alt="Premium Feature">
                    <p>Untuk mengakses informasi selengkapnya dan fitur premium, Anda perlu membeli langganan premium kami. Dengan langganan ini, Anda akan mendapatkan akses penuh ke semua fitur eksklusif dan informasi terbaru.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="redirectToKipKuliah()">Beli</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
    function redirectToKipKuliah() {
        window.location.href = "kipkuliah.php";
    }
</script>

<div class="col">
    <div class="card">
        <img src="img/Beasiswa-Unggulan.png" class="card-img-top img-fluid" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">2. Beasiswa Unggulan</h5>
            <p class="card-text">Uang Kuliah Tunggal di Perguruan Tinggi Negeri atau Sumbangan Pembinaan
                Pendidikan di Perguruan Tinggi Swasta akan dibayar penuh sampai lulus. Penerima Beasiswa
                Unggulan Kemendikbud berhak atas bantuan biaya hidup selama kuliah. Untuk jenjang S1,
                bantuan ini mencapai Rp1,4 juta per bulan.</p>
            <a href="beasiswaunggulan.php" class="btn btn-success" target="_self">Baca Selengkapnya</a>
        </div>
    </div>
</div>



            <div class="col">
                <div class="card">
                    <img src="img/apertibumn2.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">3. APERTI BUMN</h5>
                        <p class="card-text">“Tahun ini kami (APERTI BUMN) akan memberikan kepada puluhan mahasiswa/i
                            baru yang terpilih, dan akan memperoleh beasiswa full 100% selama masa studi di universitas
                            yang dipilihnya.</p>
                            <a href="beasiswaunggulan.php" class="btn btn-success" target="_self">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card">
                    <img src="img/beasiswaADIK.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">4. BEASISWA ADIK</h5>
                        <p class="card-text">Calon mahasiswa yang mendapatkan beasiswa ADik akan mendapatkan bantuan
                            berupa biaya pendidikan yang langsung dibayarkan ke perguruan tinggi, dan biaya hidup yang
                            diberikan langsung ke rekening mahasiswa.</p>
                            <a href="beasiswaAdik.php" class="btn btn-success" target="_self">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="img/beasiswaindonesiabangkit.png" class="card-img-top img-fluid" class="card-img-top"
                        alt="">
                    <div class="card-body">
                        <h5 class="card-title">Ketua Project Management Unit Beasiswa Indonesia Bangkit (PMU BIB)
                            Kemenag Ruchman Basori menyampaikan akan ada 150 orang penerima beasiswa ini. masing-masing
                            akan mendapat bantuan Rp 20 juta untuk mahasiswa S2 dan Rp 25 juta untuk mahasiswa S3.</h5>
                        <p class="card-text">Beasiswaku.</p>
                        <a href="beasiswaindonesiabangkit.php" class="btn btn-success" target="_self">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="img/beasiswaindonesiamaju.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">6. BEASISWA INDONESIA MAJU</h5>
                        <p class="card-text">Beasiswaku.</p>
                            <a href="beasiswaindonesiamaju.php" class="btn btn-success" target="_self">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="img/beasiswakominfo.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">7. BEASISWA KOMINFO</h5>
                        <p class="card-text">Beasiswaku.</p>
                        <a href="beasiswakominfo.php" class="btn btn-success" target="_self" >Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="img/beasiswalpdp.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">8. BEASISWA LPDP</h5>
                        <p class="card-text">Beasiswaku.</p>
                        <a href="beasiswalpdp.php" class="btn btn-success" target="_self" >Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="img/beasiswsapendidikanindonesia.png" class="card-img-top img-fluid" class="card-img-top"
                        alt="">
                    <div class="card-body">
                        <h5 class="card-title">9. BEASISWA PENDIDIKAN INDONESIA</h5>
                        <p class="card-text">Beasiswaku.</p>
                        <a href="beasiswapendidikanindonesia.php" class="btn btn-success" target="_self" >Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="img/pip.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">10. PROGRAM INDONESIA PINTAR</h5>
                        <p class="card-text">Beasiswaku.</p>
                        <a href="beasiswapendidikanindonesia.php" class="btn btn-success" target="_self" >Baca
                            Selengkapnya</a>
                    </div>
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
                    <img src="img/kominfo.png" alt="Mitra 2" width="250px" height="250px" class="img-fluid">
                </div>
                <div class="partner-box mb-4">
                    <img src="img/kemendikbud 2.png" alt="Mitra 3" width="300px" height="300px" class="img-fluid">
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
                <div class="card text-white bg-success mb-3" style="max-width: 30%;">
                    <div class="card-header">aldie_ptr</div>
                    <div class="card-body">
                        <p class="card-text">"Saya rasa ini sangat bagus, dengan adanya web ini kita bisa uptodate mengenai informasi beasiswa"</p>
                    </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 30%;">
                    <div class="card-header">Gustia_rebecca</div>
                    <div class="card-body">
                        <p class="card-text">"Website ini worth it banget siii, apalagi buat anak kuliahan kayak gue, jadi ga bingung nyari info beasiswa, soalnya disini udah lengkap. satu kata dari saya, mantap !"</p>
                    </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 30%;">
                    <div class="card-header">Duta</div>
                    <div class="card-body">
                        <p class="card-text">"Wahhh, baru nemu niih website, gokill sihh. Kek semua informasi beasiswa udah kehimpun disini, jadi gua ga bingung buat cari beasiswa dimana. apalagi ada beasiswa yang mengasah skill, misal beasiswa coding yang gua ikutin hari ini. berkat web ini, gua lebih uptodate. ."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <footer class="container-fluid bg-dark text-white mt-5 p-4">
        <div class="row">
            <div class="col-md-4">
                <h5>Kontak Kami</h5>
                <p>Alamat: Jalan menuju surga No. 123, Kota Jember</p>
                <p>Email: webeasiswaku.com</p>
                <p>Telepon: 082247124129</p>
            </div>
            <div class="col-md-4">
                <h5>Sosial Media</h5>
                <a href="#" class="text-white me-3">
                    <i class="bi bi-facebook"></i>
                    Facebook
                </a>
                <a href="#" class="text-white me-3">
                    <i class="bi bi-twitter"></i>
                    Twitter
                </a>
                <a href="#" class="text-white me-3">
                    <i class="bi bi-instagram"></i>
                    Instagram
                </a>
                <a href="#" class="text-white">
                    <i class="bi bi-linkedin"></i>
                    LinkedIn
                </a>
            </div>
            <div class="col-md-4">
                <h5>Link Berguna</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Syarat dan Ketentuan</a></li>
                    <li><a href="#">Pusat Bantuan</a></li>
                </ul>
            </div>
        </div>
        <hr class="my-4">
        <p class="text-center">&copy; 2023 PT. Website kita kelompok 4. All Rights Reserved.</p>
    </footer>



    <script src="bootstrap/js/bootstrap.min.js"></script>


    
</body>

</html>