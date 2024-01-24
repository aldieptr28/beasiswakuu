<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $img_url = $_POST["img_url"];
    $title = $_POST["title"];
    $description = $_POST["description"];

    $sql = "INSERT INTO card_data (img_url, title, description) VALUES ('$img_url', '$title', '$description')";
    
    if ($koneksi->query($sql) === TRUE) {
        header("Location: tampilkan.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Tambah Data</h2>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="img_url" class="form-label">Image URL</label>
                <input type="file" class="form-control" name="img_url" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
