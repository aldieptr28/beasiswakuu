<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $img_url = $_POST["img_url"];
    $title = $_POST["title"];
    $description = $_POST["description"];

    $sql = "UPDATE card_data SET img_url='$img_url', title='$title', description='$description' WHERE id=$id";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: tampilkan.php");
        exit();
    } else {
        echo "Error updating record: " . $koneksi->error;
    }
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM card_data WHERE id=$id";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data not found!";
        exit();
    }
} else {
    echo "Invalid request!";
    exit();
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Edit Data</h2>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <div class="mb-3">
                <label for="img_url" class="form-label">Image URL</label>
                <input type="file" class="form-control" name="img_url" value="<?php echo $row["img_url"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="<?php echo $row["title"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" required><?php echo $row["description"]; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
