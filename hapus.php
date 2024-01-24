<?php
include "koneksi.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM card_data WHERE id=$id";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: tampilkan.php");
        exit();
    } else {
        echo "Error deleting record: " . $koneksi->error;
    }
} else {
    echo "Invalid request!";
    exit();
}

$koneksi->close();
?>
