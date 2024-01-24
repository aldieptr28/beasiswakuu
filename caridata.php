<?php
include 'koneksi.php';

$search_term = $_GET['search_term'];
$sql = "SELECT * FROM card_data WHERE title LIKE '%$search_term%' OR description LIKE '%$search_term%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='card'>
                <img src='" . $row['img_url'] . "' class='card-img-top img-fluid' alt=''>
                <div class='card-body'>
                    <h5 class='card-title'>" . $row['title'] . "</h5>
                    <p class='card-text'>" . $row['description'] . "</p>
                    <button class='btn btn-success' data-toggle='modal' data-target='#premiumModal'>Baca Selengkapnya</button>
                </div>
            </div>";
    }
} else {
    echo "Tidak ada hasil ditemukan";
}

$koneksi->close();
?>
