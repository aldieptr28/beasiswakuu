<?php
include "koneksi.php";
require 'sidebar2.php';

$sql = "SELECT * FROM card_data";
$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body>

    

    <div class="container mt-5" style="padding-top:80px;" >
        <h2>Tabelku</h2> 

        <a href="tambah.php" class="btn btn-success mb-3">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image URL</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["img_url"] . "</td>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>
                            <a href='edit.php?id=" . $row["id"] . "' class='btn btn-warning btn-sm mb-2'>Edit</a>
                            <a href='hapus.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    </div>

</body>

</html>

<?php
$koneksi->close();
?>
