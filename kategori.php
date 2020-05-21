<?php
require'function.php';
$produk = query("SELECT * FROM khas");  

//tombol cari diklik
if(isset($_post["cari"])){
  $khas = cari ($_post[" keyword"]);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title> Kategori </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="style1.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4" > Kategori Kuliner</h1>
        <h1 class="display-5"> Khas Surabaya</span></h1>      
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Container -->
  
         <!-- Rekomendasi -->
         <section id="about">
            <div class="container text-center">
              <h1 class="title">REKOMENDASI</h1>
            </div>
         </section>

         <div align="right">
        <form method="post" action="" class="col-md-3" >
            <input type="text" class="form-control" name="keyword" 
            placeholder="Masukkan Nama Tempat Kuliner" >
            <button type="submit" class="btn btn-secondary" name="cari"> Cari </button>
        </form>
        </div>
         
    <div class="container">
           <!--card-->>
           <div class="row justify-content-center">
          <div class="row">
            <div class="col-lg">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/lontongbalap.jpg" alt="Card image cap"  height="190">
                <div class="card-body">
                  <h5 class="card-title">Lontong Balap Keranggan</h5>
                  <p class="card-text">Jl. Kranggan No. 60, Bubutan, Surabaya</p>
                  <a href="restoran2.php" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-lg">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/sateklopo.jpg" alt="Card image cap"  height="190">
                <div class="card-body">
                  <h5 class="card-title"> Sate Klopo Ondomohen</h5>
                  <p class="card-text">jl. Walikota Mustajab No. 36, Genteng, Surabaya</p>
                  <a href="restoran3.php" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-lg">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/rawon.jpg" alt="Card image cap" height="190">
                <div class="card-body">
                  <h5 class="card-title">Rawon Setan</h5>
                  <p class="card-text">Jl. Embong Malang No. 78, Genteng, Surabaya</p>
                  <a href="restoran4.php" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <br> <br>

        <div class="row justify-content-center">
          <div class="row">
            <div class="col-lg">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/bebek.jpg" alt="Card image cap" height="190">
                <div class="card-body">
                  <h5 class="card-title">Bebek Palupi</h5>
                  <p class="card-text">Jl. Rungkut Asri Tengah No. 10, Rungkut, Surabaya</p>
                  <a href="restoran5.php" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-lg">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/tahutelur.jpg" alt="Card image cap" height="190">
                <div class="card-body">
                  <h5 class="card-title">Tahu Tek Pak Jayen</h5>
                  <p class="card-text">Jl. Dharmahusada No. 112, Gubeng, Surabaya</p>
                  <a href="restoran6.php" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-lg">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/soto.jpg" alt="Card image cap"  height="190" >
                <div class="card-body">
                  <h5 class="card-title">Soto Lamongan Cak Har</h5>
                  <p class="card-text">Jl. Arief Rahman Hakim No. 136, Sukolilo, Surabaya</p>
                  <a href="restoran1.php" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
         
     
        <!-- Testimonial -->
        <section class="testimonial">
          <div class="row justify-content-center">
            <div class="col-lg-8">
            <h5>“Let food be the medicine and medicine be the food.”</h5>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-6 justify-content-center d-flex">
                <figcaption class="figure-caption">
                  <p>Hippocrates</p>
                </figcaption>
          
              <br>
              <br>
              <br>
            </div>
          </div>
        </section>
    </div>
<!-- akhir container -->
<section id="about"></section>
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