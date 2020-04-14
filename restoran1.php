<?php
require'function.php';                                

$produk = query("SELECT * FROM khas WHERE namarestoran = 'Soto Ayam Cak Har'");
$review = query("SELECT * FROM review");

if(isset($_POST["submit"]) ){


  //query apakah data berhasil ditambah atau tidak
  if(tambahreview($_POST) > 0) {
      echo "
      <script>
          alert('Data berhasil ditambahkan!');
          document.location.href = 'restoran1.php';
      </script>
      ";
      header('location: restoran1.php');
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
    <link rel="stylesheet" href="style.css">

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title> Soto Ayam Lamongan Cak Har </title>

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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark " >
      <div class="container">
        <a class="navbar-brand" href="#">Kuliner Surabaya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item btn btn-primary tombol" href="login.html">Login</a>
          </div>
        </div>
       </div>
    </nav>
    <!-- Akhir navbar -->
    <!-- Jumbotron -->
    
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
                            
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://media-cdn.tripadvisor.com/media/photo-s/06/b7/66/fc/chicken-soup-with-indonesian.jpg" alt="Los Angeles" width="1100" height="500">
                              </div>
                              <div class="carousel-item">
                                <img src="https://garuda.industry.co.id/uploads/berita/detail/12763.jpg" alt="Chicago" width="1100" height="500">
                              </div>
                              <div class="carousel-item">
                                <img src="https://arifsetiawan.com/wp-content/uploads/2018/06/Soto-Lamongan-Cak-Har-3.jpg" alt="New York" width="1100" height="500">
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

                        <h3 class="card-title" style="color:black">Soto Lamongan Cak Har</h3>
                        <p class="card-text"><img class="card-img-left" src="https://webstockreview.net/images/google-map-icons-png-3.png" height="10" >  <a href="https://www.google.com/search?safe=strict&sxsrf=ALeKk01Dt7voBSK4X_lkERYHrRQZRNOMEg:1586762168466&ei=rhGUXuTJEsKw9QPRs6moDw&q=soto%20ayam%20lamongan%20cak%20har&oq=soto+ayam+lamonga&gs_lcp=CgZwc3ktYWIQAxgDMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADoECAAQRzoECCMQJzoFCAAQgwE6BAgAEENKKQgXEiUwZzgzZzEwMGc3OGc3MWcxMDNnOTFnOTBnODZnMzZnOTJnMTExShsIGBIXMGcxZzFnMWcxZzFnMmcyZzFnNGc1ZzNQ7BlY-TZgh0NoAnADeACAAWuIAaAMkgEEMTYuM5gBAKABAaoBB2d3cy13aXo&sclient=psy-ab&npsic=0&rflfq=1&rlha=0&rllag=-7292645,112782183,343&tbm=lcl&rldimm=7692316336860811164&lqi=Chpzb3RvIGF5YW0gbGFtb25nYW4gY2FrIGhhclo4Chpzb3RvIGF5YW0gbGFtb25nYW4gY2FrIGhhciIac290byBheWFtIGxhbW9uZ2FuIGNhayBoYXI&phdesc=zx6lnNzN9xg&ved=2ahUKEwiru5Pb7eToAhUPU30KHTQ5D9UQvS4wAHoECAsQIA&rldoc=1&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:9&rlst=f#rlfi=hd:;si:12301630764080797655,l,Chpzb3RvIGF5YW0gbGFtb25nYW4gY2FrIGhhclo4Chpzb3RvIGF5YW0gbGFtb25nYW4gY2FrIGhhciIac290byBheWFtIGxhbW9uZ2FuIGNhayBoYXI,y,U_-vMn5khBU;mv:[[-7.28953822268097,112.78335724388852],[-7.28989817731903,112.78299435611149]]" target="_blank">Jl. Dr. Ir. H. Soekarno No. 220, Sukolilo, Surabaya</a></p>

                        <p class="small-screen-toggle">           
                            <span class="left" itemprop="telephone">
                                <img class="card-img-left" src="https://image.flaticon.com/icons/png/512/25/25453.png" height="10" >
                                <a href="tel:082233337398">082233337398</a>, <a href="tel:081332743024"> 081332743024</a>
                            </span>
                            <span class="clearfix"></span>
                        </p>
    
                        <p class="small-screen-toggle">                           
                            <img class="card-img-left" src="https://banner2.cleanpng.com/20180604/kwx/kisspng-computer-icons-time-attendance-clocks-font-aweso-clock-icon-5b14c6364f6622.2216713915280881183252.jpg" height="10" >
                            <span class="left"> Senin - Minggu (06:00 - 22:00)</span>                          
                        </p>                    
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
    </div>

    <div class="container mt-3">
        <p>Komentar orang: </p>
        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <img src="https://www.clipartmax.com/png/middle/119-1198197_anonymous-person-svg-png-icon-free-download-anonymous-icon-png.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
            <span class="w3-right w3-opacity">16 min</span>
            <h4>Luhut Binsar</h4><br>
            <hr class="w3-clear">
            <p>Gokil sih.</p>
            <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
            <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
        </div>
    </div>

    <div class="container mt-3">
        <p>Tulis pendapat: </p>
        <div class="w3-row-padding">
            <div class="w3-col m12">
              <div class="w3-card w3-round w3-white">
                <div class="w3-container w3-padding">
                  <h6 class="w3-opacity">Yuk ditulis</h6>
                  <p contenteditable="true" class="w3-border w3-padding"> </p>
                  <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> 
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
    <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="rawonsetan.html">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="rawonsetan.html">Next</a></li>
      </ul>
    </div>

    <div class="row footer">
        <div class="col text-center">
        <p>2020 All Rights Reserved by Kelompok 2 RBPL</p>
        </div>
    </div>
            
            <!-- akhir container -->
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min .js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"  crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
          
</body>
</html>