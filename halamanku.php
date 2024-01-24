<?php
include 'koneksi.php';
?>
<?php
// Proses pencarian
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];

        // Query pencarian (gantilah dengan query sesuai struktur tabel Anda)
        $sql = "SELECT * FROM card_data WHERE tittle LIKE '%$keyword%' OR description LIKE '%$keyword%'";

        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            // Tampilkan hasil pencarian dalam elemen card Bootstrap
            while ($row = $result->fetch_assoc()) {
                echo "<div class='col' id='kipCard'>";
                echo "<div class='card'>";
                echo "<img src='" . $row['img_url'] . "' class='card-img-top img-fluid' alt=''>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row['tittle'] . "</h5>";
                echo "<p class='card-text'>" . $row['description'] . "</p>";
                echo "<a href='kipkuliah.php' class='btn btn-success' target='_self'>Baca Selengkapnya</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>Tidak ditemukan hasil untuk kata kunci '$keyword'.</p>";
        }
    }
    ?>