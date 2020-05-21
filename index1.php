<?php
require'function.php';                                

$produk = query("SELECT * FROM khas");

?>


<html>
    <head>
        <meta charset="utf-8">
        <title>..:: Tambah Restoran ::..</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container">
        <h1 class="mt-4 mb-4" align="center">Tambah Restoran</h1>
    
        <br> <br>
        
        <table class="table table-striped">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th colspan="3" align="center">Action</th>
                    <th>Nama Restoran</th>
                    <th>Alamat</th>
                    <th>Hari Buka</th>
                    <th>Jam Buka</th>
                    <th>No telepon</th>
                    <th>Harga</th>
                    <th>Link Foto</th>
                </tr>
            </thead>

            <?php foreach ($produk as $row) : ?>
            <tbody>
            <tr>
                <td> <?= $row["id"]; ?> </td>
                <td colspan="3" align="center">
                    <a href="edit.php?id=<?= $row["id"]; ?>" class="btn btn-success">Edit</a>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('Apakah anda yakin menghapus?');" class="btn btn-danger">Hapus</a>
                </td>
                <td> <?= $row["namarestoran"]; ?> </td>
                <td> <?= $row["alamat"]; ?> </td>
                <td> <?= $row["hari_buka"]; ?> </td>
                <td> <?= $row["jam_buka"]; ?> </td>
                <td> <?= $row["notelepon"]; ?> </td>
                <td> <?= $row["harga"]; ?> </td>
                <td> <?= $row["linkfoto"]; ?> </td>
            </tr>

            <?php endforeach; ?>
                
            </tbody>

        </table>
        
        <br><br>
       
            <div class="row" align="center">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">

                    <a href="tambah.php" class="btn btn-primary">Tambah Produk Baru</a>
                  
                </div>
            </div>
        
    </body>
</html>