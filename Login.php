<?
require'function.php'; 

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
    <title> Login </title>
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

    <section id="about">
            <div class="container text-center">
              <h1>KULINER SURABAYA</h1>
            </div>
         </section>

  <!-- Jumbotron -->


      <div class="row justify-content-center">
          <div class="row">
            <div class="col-lg">
              <div class="card" style="width: 22rem;">
                
                <div class="card-body">
                  <div class="container">
                    <h2>Login</h2>
                
                    <form action="halamanutama.php" method="post">
                      <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="username" class="form-control" id="username" placeholder="Enter username" name="username" required>
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                      </div>
                      <div class="form-group form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                      </div>
                    
                      <button type="submit" class="btn btn-primary">Login</button>
                      <br><br>
                      <div>
                        <h7 style="color:blue;">Belum punya akun?      </h7>
                      <a href="register.php" class="btn btn-primary" style="margin-left:38px">Sign up</a></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
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