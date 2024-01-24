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
                <form action="search.php" method="GET" class="d-flex" role="search" autocomplete="off">
        <input class="form-control me-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
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
    <div class="carousel-item active" data-bs-interval="3000">
        <a href="https://pmb.unpar.ac.id/menu/informasi_beasiswa">
            <img src="img/bannerunpar.png" class="d-block w-100" alt="...">
        </a>
    </div>


    <div class="carousel-item" data-bs-interval="3000">
        <a href="https://binus.ac.id/scholarship/">
        <img src="img/bannerbinus.png" class="d-block w-100" alt="...">
        </a>
    </div>



    <div class="carousel-item" data-bs-interval="3000">
        <a href="https://beasiswa.pertaminafoundation.org/">
      <img src="img/bannerpertamina.png" class="d-block w-100" alt="...">
      </a>
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
        <img src="img/KIP.png"
            class="card-img-top img-fluid" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">1. KIP KULIAH</h5>
            <p class="card-text">Apa itu KIP Kuliah? KIP Kuliah adalah bantuan biaya pendidikan dari
                pemerintah bagi lulusan SMA / Sederajat yang memiliki potensi akademik baik, tetapi memiliki
                keterbatasan ekonomi. Kamu berkesempatan bebas UKT Kuliah sampai lulus loh dan ada juga uang
                saku bulanan.</p>
                <a href="kipkuliah.php" class="btn btn-success" target="_self">Baca Selengkapnya</a>
        </div>
    </div>

    <!-- Modal Premium Box -->
    

</div>





<div class="col">
    <div class="card">
        <img src="img/Beasiswa-Unggulan.png" class="card-img-top img-fluid" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">2. Beasiswa Unggulan</h5>
            <p class="card-text"> Beasiswa ini akan menanggung UKT penuh sampai lulus, baik di Perguruan Tinggi Swasta maupun perguruan tinggi negeri. Tidak hanya it, penerima beasiswa unggulan
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
                        <p class="card-text"> Beasiswa APERTI BUMN menjadi wadah bagi semua Perguruan Tinggi anggotanya untuk bersinergi  dalam melaksanakan Tri Dharma Perguruan Tinggi. APERTI BUMN memberikan beasiswa full 100% selama masa studi mahasiswa.</p>
                            <a href="apertibumn.php" class="btn btn-success" target="_self">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card mt-1">
                    <img  src="img/beasiswaADIK.png" class="card-img-top img-fluid" class="card-img-top" alt="">
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
                    <h5 class="card-title">5. Beasiswa Indonesia Bangkit</h5>
                        <p class="card-title">Ketua Project Management Unit Beasiswa Indonesia Bangkit (PMU BIB)
                            Kemenag Ruchman Basori menyampaikan akan ada 150 orang penerima beasiswa ini. masing-masing
                            akan mendapat bantuan Rp 20 juta untuk mahasiswa S2 dan Rp 25 juta untuk mahasiswa S3.</p>

                        <a href="beasiswaindonesiabangkit.php" class="btn btn-success" target="_self">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="img/beasiswaindonesiamaju.jpg" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">6. BEASISWA INDONESIA MAJU</h5>
                        <p class="card-text">Beasiswa Indonesia Maju (BIM) adalah program yang diberikan kepada peserta didik atau lulusan yang berprestasi pada bidang akademik dan non-akademik. Beasiswa ini diberikan untuk jenjang S1 dan S2 yang ingin mendaftar ke perguruan tinggi dalam dan luar negeri.
</p>
                            <a href="beasiswaindonesiamaju.php" class="btn btn-success" target="_self">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="img/beasiswakominfoku.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">7. BEASISWA KOMINFO</h5>
                        <p class="card-text">

Kementerian Komunikasi dan Informatika melalui Badan Penelitian dan Pengembangan Sumber Daya Manusia kembali membuka Program Beasiswa S2 Dalam dan Luar Negeri Tahun 2024. Program ini merupakan salah satu wujud komitmen Kementerian Komunikasi dan Informatika untuk pengembangan kapasitas sumber daya manusia di bidang Teknologi Informasi dan Komunikasi.</p>
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
                        <p class="card-text">Beasiswa LPDP adalah program beasiswa yang diselenggarakan oleh Lembaga Pengelola Dana Pendidikan (LPDP) di bawah Kementerian Keuangan (Kemenkeu) RI untuk memberikan kesempatan bagi putra putri Indonesia kuliah di dalam atau luar negeri.</p>
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
                        <p class="card-text">Bertepatan dengan peringatan Hari Pendidikan Nasional Tahun 2023, Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi, melalui Balai Pembiayaan Pendidikan Tinggi (BPPT), kembali membuka pendaftaran Beasiswa Pendidikan Indonesia (BPI) Kemendikbudristek tahun 2023.</p>
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
                        <p class="card-text">Program bantuan PIP Dikdasmen ini punya tujuan untuk membantu biaya personal pendidikan peserta didik dalam rangka meningkatkan akses bagi anak usia 6 tahun sampai dengan 21 tahun.</p>
                        <a href="beasiswapendidikanindonesia.php" class="btn btn-success" target="_self" >Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Beasiswa non-pemerintah -->
            <div class="col">
                <div class="card">
                    <img src="img/beasiswanon-cendekiawan.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">11. Beasiswa Cendekia Muda #2</h5>
                        <p class="card-text">Youth Space Innovation sebagai penyelenggara Beasiswa Cendikia Muda merupakan sebuah platform digital yang bergerak di bidang edukasi dengan beragam aspek pengembangan diri meliputi pembentukan dan pendidikan karakter pemimpin yang berinovasi, berpikir kritis, kreatif & inovatif, serta mampu menginspirasi dan memberikan kontribusi nyata bagi negeri.</p>
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
                    <img src="img/logopremiumkujir.png" 
                        class="img-fluid mx-auto d-block" width="100px" height="100px" alt="Premium Feature">
                    <p>Untuk mengakses informasi selengkapnya dan fitur premium, Anda perlu membeli langganan premium kami. Dengan langganan ini, Anda akan mendapatkan akses penuh ke semua fitur eksklusif dan informasi terbaru.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="redirectTobeasiswacendekiamuda()">Beli</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    
            </div>
            <script>
    function redirectTobeasiswacendekiamuda() {
        window.location.href = "beasiswacendekiamuda.php";
    }
</script>



<div class="col">
                <div class="card">
                    <img src="img/beasiswabansos.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">12. Beasiswa Bansos Mahasiswa</h5>
                        <p class="card-text">KABAR GEMBIRA! TELAH DIBUKA PENDAFTARAN BANSOS MAHASISWA SECARA ONLINE !

Bagi mahasiswa kurang mampu dan memiliki KTP Kota Tangerang bisa mengajukan bantuan sosial biaya pendidikan jenjang perguruan tinggi sebesar Rp 6.000.000,- dengan mendaftarkan diri melalui Aplikasi Tangerang LIVE pada menu bansos mahasiswa (syarat dan ketentuan berlaku) ya!</p>
<button class="btn btn-success" data-toggle="modal" data-target="#premiumModalBansostangerang">Baca Selengkapnya</button>

                    </div>
                </div>
                  <!-- Modal Premium Box -->
        <div class="modal" id="premiumModalBansostangerang" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Fitur Premium</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               
                <div class="modal-body text-center">
                    <img src="img/logopremiumkujir.png"
                        class="img-fluid mx-auto d-block" width="100px" height="100px" alt="Premium Feature">
                    <p>Untuk mengakses informasi selengkapnya dan fitur premium, Anda perlu membeli langganan premium kami. Dengan langganan ini, Anda akan mendapatkan akses penuh ke semua fitur eksklusif dan informasi terbaru.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="redirectTobeasiswabansostangerang()">Beli</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
            </div>

<script>
    function redirectTobeasiswabansostangerang() {
        window.location.href = "beasiswabansostangerang.php";
    }
</script>



<div class="col">
                <div class="card">
                    <img src="img/beasiswaiggs.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-title">13.Beasiswa Indonesian Gold Generation Scholarship adalah program beasiswa kolaborasi Telkom University dengan Forum Osis Jawa Barat. Indonesian Gold Generation Scholarship ini sebelumnya Bernama FOJB Scholarship, namun seiring berjalannya waktu Forum OSIS Jawa Barat melebarkan cakupannya Se-Indonesia dan merubah namanya menjadi Indonesian Gold Generation Scholarship (IGGS).

 

Beasiswa IGGS dikhususkan bagi lulusan SMA/SMK/MA tahun 2023 dan 2024 untuk melanjutkan pendidikan ke Telkom University dengan tanpa biaya kuliah 100%*.</p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#premiumModalIGGS">Baca Selengkapnya</button>
                    </div>
                </div>
                  <!-- Modal Premium Box -->
    <div class="modal" id="premiumModalIGGS" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Fitur Premium</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="img/logopremiumkujir"
                        class="img-fluid mx-auto d-block" width="100px" height="100px" alt="Premium Feature">
                    <p>Untuk mengakses informasi selengkapnya dan fitur premium, Anda perlu membeli langganan premium kami. Dengan langganan ini, Anda akan mendapatkan akses penuh ke semua fitur eksklusif dan informasi terbaru.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="redirectTobeasiswaIGGS()">Beli</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
            </div>
            <script>
    function redirectTobeasiswaIGGS() {
        window.location.href = "beasiswaIGGS.php";
    }
</script>

<div class="col">
                <div class="card">
                    <img src="img/beasiswaempower.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">14. Beasiswa Cendekia Muda #2</h5>
                        <p class="card-text">Empower bersama Rares mengadakan beasiswa untuk perempuan di jenjang SMP- SMA sederajat. 

Syarat penerima beasiswa ini yaitu merupakan perempuan dan berasal dari keluarga dengan ekonomi kurang mampu. 

Terdapat beberapa fasilitas yang akan diberikan melalui beasiswa dari Empower ini, berikut benefitnya. </p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#premiumModalEmpower">Baca Selengkapnya</button>
                    </div>
                </div>
                  <!-- Modal Premium Box -->
    <div class="modal" id="premiumModalEmpower" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Fitur Premium</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="img/logopremiumkujir.png"
                        class="img-fluid mx-auto d-block" width="100px" height="100px" alt="Premium Feature">
                    <p>Untuk mengakses informasi selengkapnya dan fitur premium, Anda perlu membeli langganan premium kami. Dengan langganan ini, Anda akan mendapatkan akses penuh ke semua fitur eksklusif dan informasi terbaru.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="redirectTobeasiswaEmpower()">Beli</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
            </div>
            <script>
    function redirectTobeasiswaEmpower() {
        window.location.href = "beasiswaEmpower.php";
    }
</script>

<div class="col">
                <div class="card">
                    <img src="img/beasiswanon-cendekiawan.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">10. Beasiswa Cendekia Muda #2</h5>
                        <p class="card-text">Youth Space Innovation sebagai penyelenggara Beasiswa Cendikia Muda merupakan sebuah platform digital yang bergerak di bidang edukasi dengan beragam aspek pengembangan diri meliputi pembentukan dan pendidikan karakter pemimpin yang berinovasi, berpikir kritis, kreatif & inovatif, serta mampu menginspirasi dan memberikan kontribusi nyata bagi negeri.</p>
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
                    <img src=""
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
            <script>
    function redirectToKipKuliah() {
        window.location.href = "beasiswacendekiamuda.php";
    }
</script>

<div class="col">
                <div class="card">
                    <img src="img/beasiswanon-cendekiawan.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">10. Beasiswa Cendekia Muda #2</h5>
                        <p class="card-text">Youth Space Innovation sebagai penyelenggara Beasiswa Cendikia Muda merupakan sebuah platform digital yang bergerak di bidang edukasi dengan beragam aspek pengembangan diri meliputi pembentukan dan pendidikan karakter pemimpin yang berinovasi, berpikir kritis, kreatif & inovatif, serta mampu menginspirasi dan memberikan kontribusi nyata bagi negeri.</p>
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
                    <img src="img/logopremiumkujir.png"
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
            <script>
    function redirectToKipKuliah() {
        window.location.href = "beasiswacendekiamuda.php";
    }
</script>

<div class="col">
                <div class="card">
                    <img src="img/beasiswanon-cendekiawan.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">10. Beasiswa Cendekia Muda #2</h5>
                        <p class="card-text">Youth Space Innovation sebagai penyelenggara Beasiswa Cendikia Muda merupakan sebuah platform digital yang bergerak di bidang edukasi dengan beragam aspek pengembangan diri meliputi pembentukan dan pendidikan karakter pemimpin yang berinovasi, berpikir kritis, kreatif & inovatif, serta mampu menginspirasi dan memberikan kontribusi nyata bagi negeri.</p>
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
                    <img src="img/logopremiumkujir.png"
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
            <script>
    function redirectToKipKuliah() {
        window.location.href = "beasiswacendekiamuda.php";
    }
</script>

<div class="col">
                <div class="card">
                    <img src="img/beasiswanon-cendekiawan.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">10. Beasiswa Cendekia Muda #2</h5>
                        <p class="card-text">Youth Space Innovation sebagai penyelenggara Beasiswa Cendikia Muda merupakan sebuah platform digital yang bergerak di bidang edukasi dengan beragam aspek pengembangan diri meliputi pembentukan dan pendidikan karakter pemimpin yang berinovasi, berpikir kritis, kreatif & inovatif, serta mampu menginspirasi dan memberikan kontribusi nyata bagi negeri.</p>
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
                    <img src="img/logopremiumkujir.png"
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
            <script>
    function redirectToKipKuliah() {
        window.location.href = "beasiswacendekiamuda.php";
    }
</script>


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
                <div class="partner-box mb-4">
                    <img src="https://sbmptmu.id/wp-content/uploads/2022/04/logo_Unmuh-Jember-1-PMB-UNMUH-JEMBER-768x773.png    " alt="Mitra 3" width="100px" height="100px" class="img-fluid">
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

    <!-- footer -->
<?php 
require 'footer.php';
?>

         
</body>

</html>