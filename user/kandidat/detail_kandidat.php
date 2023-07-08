<?php
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "hmjpoll");
    $query = "select * from kandidat where id='$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo mysqli_error($conn);
    }

    $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card mt-4" style="width: 50rem;">
        <div class="card-header">
            Detail Kandidat
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama : <?=$data['nama']?></li>
            <li class="list-group-item">No.Urut : <?=$data['urut']?></li>
            <li class="list-group-item">NIM : <?=$data['nim']?></li>
            <li class="list-group-item">Visi : <?=$data['visi']?></li>
            <li class="list-group-item">Misi : <?=$data['misi']?></li>
        </ul>
        <div class="card-footer text-right">
            <a href="index_ti.php" class="badge bg-success">Kembali ke Lihat Kandidat</a>
        </div>
        </div>
    <!-- end container -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>