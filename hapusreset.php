<?php
include "koneksi.php";

// Ambil ID yang ingin dihapus
$idToDelete = $_GET["id"];

// Lakukan penghapusan data
$deleteQuery = "DELETE FROM card_data WHERE id = $idToDelete";
if ($koneksi->query($deleteQuery) === TRUE) {
    echo "Data berhasil dihapus.";

    // Setelah penghapusan, reset AUTO_INCREMENT
    $resetAutoIncrementQuery = "ALTER TABLE card_data AUTO_INCREMENT = 1";
    if ($koneksi->query($resetAutoIncrementQuery) === TRUE) {
        echo " AUTO_INCREMENT direset.";
    } else {
        echo " Error resetting AUTO_INCREMENT: " . $koneksi->error;
    }
} else {
    echo "Error deleting record: " . $koneksi->error;
}

$koneksi->close();
?>
