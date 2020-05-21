<?php
require'function.php';

//ambil data di url
$id = $_GET["id"];


//query data sesuai id
$khas = query("SELECT * FROM khas WHERE id=$id")[0];
var_dump($id);


if(isset($_POST["submit"]) ){

    //query apakah data berhasil diubah atau tidak
    if(ubah($_POST) >0) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'index1.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('Data gagal diubah');
              document.location.href = 'index1.php';
        </script>
        ";
    } 
}

?>

<html>
<head>
    <<meta charset="utf-8">
        <title>..:: Sistem Informasi Tempat Kuliner ::..</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
</head>
<body>
<div class="container">
        <h1 class="mt-4 mb-4" align="center">Update Tempat Kuliner</h1>
        

        <form method="post" action="">
            <input type="hidden" name="id" value="<?= $khas["id"]; ?>">
            
            
            <!--Menambah namaresto-->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="namarestoran"> Nama Tempat Kuliner :</label>
                    <input type="text" class="form-control" name="namarestoran" id="namarestoran" required>
                </div>
            </div>

            <!--Menambah alamat-->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="alamat">Alamat :</label>
                     <input type="text" class="form-control" name="alamat" id="alamat" required> 
                </div>
            </div>

            <!--Menambah haribuka-->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="hari_buka">Hari buka : </label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="hari_buka"id="hari_buka" required>                      
                    </div>
                </div>
            </div>

            <!--Menambah jambuka-->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="jam_buka"> Jam Buka :</label>
                    <input type="text" class="form-control" name="jam_buka" id="jam_buka" required>
                </div>
            </div>

            <!--Menambah notelepon-->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="notelepon"> No telepon:</label>
                    <input type="text" class="form-control" name="notelepon" id="notelepon" required>
                </div>
            </div>

            <!--Menambah harga-->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="harga"> Harga :</label>
                    <input type="text" class="form-control" name="harga" id="harga" required>
                </div>
            </div>

            <!--Menambah foto-->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="linkfoto"> Link Foto :</label>
                    <input type="text" class="form-control" name="linkfoto" id="linkfoto" required>
                </div>
            </div>

            <!--Button-->
            <div class="row" align="center">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-left:38px" name="submit">Update Produk</button>
                    <a href="index1.php"  class="btn btn-danger">Batal</a>
                </div>
            </div>
            </div>

        </form>

</body>


</html>