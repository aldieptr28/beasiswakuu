
<?php
require 'sidebar.php';
?>


   


    <div class="container-fluid text-center mb-5">
        <h1>Daftar Beasiswa 2024</h1>
        <p>Berikut kami sajikan daftar beasiswa yang diselenggarakan oleh Startup :</p>
    </div>


  <!-- Beasiswa non-pemerintah -->
  <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
                <div class="card">
                    <img src="img/beasiswanon-cendekiawan.png" class="card-img-top img-fluid" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">1. Beasiswa Cendekia Muda #2</h5>
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
                        <h5 class="card-title">2. Beasiswa Bansos Mahasiswa</h5>
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
                        <p class="card-title">3.Beasiswa Indonesian Gold Generation Scholarship adalah program beasiswa kolaborasi Telkom University dengan Forum Osis Jawa Barat. Indonesian Gold Generation Scholarship ini sebelumnya Bernama FOJB Scholarship, namun seiring berjalannya waktu Forum OSIS Jawa Barat melebarkan cakupannya Se-Indonesia dan merubah namanya menjadi Indonesian Gold Generation Scholarship (IGGS).

 

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
                        <h5 class="card-title">4. Beasiswa Cendekia Muda #2</h5>
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
                        <h5 class="card-title">5. Beasiswa Cendekia Muda #2</h5>
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
                        <h5 class="card-title">6. Beasiswa Cendekia Muda #2</h5>
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
                        <h5 class="card-title">7. Beasiswa Cendekia Muda #2</h5>
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


    <!-- footer -->

    <?php 
  
  require 'footer.php';
  
  ?>






    
</body>

</html>