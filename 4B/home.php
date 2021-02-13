<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <style type="text/css">
        .card-title {
            min-height: 100px;
        }

        .card-text {
            min-height: 120px;
        }
    </style>
    <title>Artipost</title>

</head>

<body>
    <div class="container">
        <h2 align="center">ArtiPost Untukmu</h2>
        <div class="row" id="load_data">
            <?php
            include 'koneksi.php';
            $query = mysqli_query($connect, "SELECT * FROM article ORDER BY created_at ASC");
            $coba = $database->prepare($query);
            $coba->execute();
            $res1 = $coba->get_result();
            while ($row = $res1->fetch_assoc()) {
                $id = $row["id"];
                $foto = $row["image"];
                $tanggal = $row["created_at"];
                $judul = $row["title"];
                if (strlen($judul) > 60) {
                    $judul = substr($judul, 0, 60) . "...";
                }
                $konten = $row["content"];
                if (strlen($konten) > 100) {
                    $konten = substr($konten, 0, 100) . "...";
                }
            ?>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <img src="<?php echo $foto; ?>" class="card-img-top" alt="gambar">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $judul; ?></h5>
                            <p class="card-text"><?php echo $konten; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Post on <?php echo $tanggal; ?></small>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</body>

</html>