<!-- hasilpencarian.php -->
<?php
include 'koneksi.php';
require 'sidebar.php';

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    // Query ke database untuk mencari data berdasarkan kata kunci
    $sql = "SELECT * FROM card_data WHERE title LIKE '%$keyword%' OR description LIKE '%$keyword%'";
    $result = $koneksi->query($sql);

    // Tampilkan hasil pencarian
    echo "<div class='container'>";
    if ($result->num_rows > 0) {
        echo "<div class='row justify-content-center'>"; // Baris dengan elemen ditengah
        while ($row = $result->fetch_assoc()) {
            echo "<div class='col-md-6' id='kipCard'>"; // Menggunakan col-md-6 untuk lebar setengah
            echo "<div class='card'>
                    <img src='" . $row['img_url'] . "' class='card-img-top img-fluid' alt=''>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $row['title'] . "</h5>
                        <p class='card-text'>" . $row['description'] . "</p>
                        <a href='kipkuliah.php' class='btn btn-success' target='_self'>Baca Selengkapnya</a>
                    </div>
                  </div>";
            echo "</div>";

          
        }
        echo "</div>"; // Tutup baris
    } else {
        echo "Tidak ada hasil ditemukan.";
    }
    echo "</div>";
    
    
} else {
    // Redirect ke halaman index jika tidak ada kata kunci pencarian
    header("Location: index.php");
    exit();
}

$koneksi->close();
?>

<?php
require 'footer.php';
?>
