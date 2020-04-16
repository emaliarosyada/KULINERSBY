<?php
require'function.php';                                

$produk = query("SELECT * FROM khas WHERE namarestoran = 'Lontong Balap Pak Gendut'");
$review = query("SELECT * FROM review7");

if(isset($_POST["submit"]) ){


  //query apakah data berhasil ditambah atau tidak
  if(tambahreview($_POST) > 0) {
      echo "
      <script>
          alert('Data berhasil ditambahkan!');
          document.location.href = 'restoran8.php';
      </script>
      ";
      header('location: restoran8.php');
  } else {
      echo "
      <script>
          alert('Data gagal ditambahkan!');
      </script>
  ";
  }
  
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="style1.css">

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title> Tempat Kuliner </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        </style>

  </head>
  
  <body>
    
   <!-- Navbar -->
   <section id="nav-bar">
           <nav class="navbar navbar-expand-lg navbar-light">
           <a class="navbar-brand" href="#"><img src="img/kitchen.png"></a>
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="halamanutama.php">HOME </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" >LOGIN</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section> 
    <!-- Akhir navbar -->
    <!-- Jumbotron -->
    <br><br><br>
    
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-lg">
                <div class="card" style="width: 25rem;" >
                    <div class="card-body">

                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                              <li data-target="#demo" data-slide-to="0" class="active"></li>
                              <li data-target="#demo" data-slide-to="1" class="active"></li>
                              <li data-target="#demo" data-slide-to="2" class="active"></li>
                            </ul>

                            <?php foreach ($produk as $row) : ?>
                            
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="img/about2.jpg" alt="Los Angeles" width="1100" height="500">
                              </div>
                              <div class="carousel-item">
                                <img src="img/about2.jpg" alt="Chicago" width="1100" height="500">
                              </div>
                              <div class="carousel-item">
                                <img src="img/about2.jpg" alt="Chicago" width="1100" height="500">
                              </div>
                             
                            </div>
                            
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                              <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                              <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>

                        <h5 class="card-title" style="color:darkslategrey"><?= $row["namarestoran"]; ?></h5>
                        <p class="card-text"><img class="card-img-left" src="https://webstockreview.net/images/google-map-icons-png-3.png" height="10" >  <a href="<?= $row["linkalamat"]; ?>" target="_blank"><?= $row["alamat"]; ?></a></p>

                    <p class="small-screen-toggle">
                        <i class="fa fa-phone left"></i>
                        <span class="left" itemprop="telephone">
                            
                            <a href="tel:<?= $row["notelepon"]; ?>"><?= $row["notelepon"]; ?></a>, <a href="tel:<?= $row["notelepon"]; ?>"><?= $row["notelepon"]; ?></a>
                        </span>
                        <span class="clearfix"></span>
                    </p>

                    <p class="small-screen-toggle">
                        <i class="fa fa-clock-o left"></i>
                        
                        <span class="left"> <?= $row["hari_buka"]; ?> ,
                            <?= $row["jam_buka"]; ?></span>
                        
                    </p>

                    <?php endforeach; ?>

                    <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black">Menu</button></p>
                   
                            <!-- Menu -->
                        <div id="menu" class="w3-modal">
                            <div class="w3-modal-content w3-animate-zoom">
                                <div class="w3-container w3-black w3-display-container">
                                    <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                                    <h1>Makanan</h1>
                                </div>
                                <div class="w3-container">
                                    <h5>Soto Ayam <b>Rp. 20.000</b></h5>
                                    <h5>Soto Daging <b>Rp. 25.000</b></h5>
                                    <h5>Jeroan <b>Rp. 5.000</b></h5>
                                </div>
                                <div class="w3-container w3-black">
                                    <h1>Minuman</h1>
                                </div>
                                <div class="w3-container">
                                    <h5>Es Teh Manis <b>Rp. 5.000</b></h5>
                                    <h5>Es Jeruk <b>Rp. 5.000</b></h5>
                                </div>                           
                            </div>
                        </div>
                </div>
            </div>                 
        </div>        
    </div>

    <br><br><br>
      
                              
      <?php foreach ($review as $row) : ?>
      <div class="container mt-3">
    
        <!-- Media top -->
        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
          <img src="https://www.clipartmax.com/png/middle/119-1198197_anonymous-person-svg-png-icon-free-download-anonymous-icon-png.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
          <span class="w3-right w3-opacity">16 min</span> <!--ditambahin database waktu dibuat-->
          
            <h4><?= $row["nama"]; ?></h4>
            <hr class="w3-clear">
            <p><?= $row["review"]; ?></p>
            <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
            <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
          </div>
        </div>
      </div>
      <?php endforeach; ?>
 
      <div class="row justify-content-center">
    <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="rawonsetan.html">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="rawonsetan.html">Next</a></li>
      </ul>
    </div>

    <br>
    <br>
    
    <div class="container mt-3">
    <div class="w3-container w3-card w3-white w3-round w3-margin">
    <H4>Tambahkan Review </H4>
        
    <form method="post" action="">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" rows="5" id="nama" name="nama" required></textarea>
          </div>
          <div class="form-group">
            <label for="review">Review:</label>
            <textarea class="form-control" rows="5" id="review" name="review" required></textarea>
          </div>
          <button type="submit" class="btn btn-success"  name="submit">Tambahkan Review</button>
              <br>
              <br>
            </form>
          </div>
          </div>
  
    <!-------footer------->
    <section id="footer">
            <img src="img/wavescopy2.png" class="footer-img">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 footer-box">
                            <img src="img/kitchen.png">
                            <p>Subscribe Easy tutorials YouTube Channel to watch more videos on website development, Digital Marketing, WordPress and Graphics Designing. press bell icon to get notifications.</p>
                        </div>
                        
                        <div class="col-md-4 footer-box">
                            <p><b>KONTAK KAMI</b></p>
                            <p>Kuliner Surabaya</p>
                            <p>+62 81234567890</p>
                            <p>abcdefgh@gmail.com</p>
                        </div>
                    </div>
                </div>
        </section>  
</body>
</html>