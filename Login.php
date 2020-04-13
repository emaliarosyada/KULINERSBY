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
    <title> Login </title>
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
              <div class="card" style="width: 22rem;">
                
                <div class="card-body">
                  <div class="container">
                    <h2>Login</h2>
                    <form action="/action_page.php">
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                      </div>
                      <div class="form-group form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg">
              <div class="card" style="width: 22rem;">
                
                <div class="card-body">
                  <div class="container">
                    <h2>Register</h2>
                    <form action="/action_page.php">
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                      </div>
                      <div class="form-group">
                        <label for="pwd">Create Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>




</body>
</html>