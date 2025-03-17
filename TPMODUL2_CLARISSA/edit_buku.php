<?php
include('connect.php');
// ==================1==================
// If statement untuk menyimpan variabel $id dari GET request

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // ==================2==================
    // Definisikan $query untuk mengambil data buku berdasarkan id
    $query = "SELECT * FROM buku WHERE id = $id";
    $data = mysqli_query($conn, $query);
    $buku = mysqli_fetch_assoc($data);

    if (!$buku) {
        echo "<script>alert('Buku tidak ditemukan!'); window.location='katalog_buku.php';</script>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include('navbar.php'); ?>
    <center>
        <div class="container">
            <h1>Ubah Detail Buku</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="POST">
                            <input type="hidden" name="id" value="<?= $buku['id'] ?>">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="judul" value="<?= $buku['judul'] ?>" required>
                                <label for="judul">Judul</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="penulis" value="<?= $buku['penulis'] ?>" required>
                                <label for="penulis">Penulis</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>" required>
                                <label for="tahun_terbit">Tahun Terbit</label>
                            </div>

                            <button type="submit" name="update" class="btn btn-primary w-100">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
