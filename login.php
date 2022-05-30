<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets/login/css/style.css">

    <title>Login - Toko Sembako Supandi</title>
  </head>
  <body>

  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('assets/login/images/bg_1.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 class="text-uppercase">Selamat Datang di Toko Sembako Supandi<br><strong>Silahkan Login!</strong></h3>
              </div>

  	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<div class='alert alert-danger' role='alert'>Email dan Password tidak sesuai atau tidak ada di database</div>";
		}else if($_GET['pesan'] == "logout"){
			echo "<div class='alert alert-success' role='alert'>Anda telah berhasil logout</div>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<div class='alert alert-warning' role='alert'>Anda harus login untuk mengakses halaman admin</div>";
		}
	}
	?>
              <form action="loginexec.php" method="post">
                <div class="form-group first">
                  <label for="username">Nomor Telepon atau Email*</label>
                  <input type="text" class="form-control" placeholder="Masukan Nomor Telepon atau Email" name="Email">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Kata Sandi*</label>
                  <input type="password" class="form-control" placeholder="Masukan Kata Sandi" name="Password">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Ingat Kata Sandi</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Lupa Kata Sandi?</a></span> 
                </div>

                <input type="submit" value="LOGIN" class="btn btn-block py-2 btn-primary">
                <span class="text-center my-3 d-block">Member Baru? <a href="daftar.php">DAFTAR</a></span>
                <span class="text-center my-3 d-block">Atau masuk dengan</span>
                
                
                <div class="">
                <a href="#" class="btn btn-block py-2 btn-facebook">
                  <span class="icon-facebook mr-3"></span>Facebook
                </a>
                <a href="#" class="btn btn-block py-2 btn-google"><span class="icon-google mr-3"></span>Google</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="assets/login/js/jquery-3.3.1.min.js"></script>
    <script src="assets/login/js/popper.min.js"></script>
    <script src="assets/login/js/bootstrap.min.js"></script>
    <script src="assets/login/js/main.js"></script>
  </body>
</html>