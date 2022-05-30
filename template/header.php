<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Toko Sembako Supandi</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<img src="img/banner.jpg" class="img-fluid" alt="Gambar untuk Bannner">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Toko Sembako Supandi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Makanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Minuman</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produk Lainnya
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Peralatan Elektronik</a></li>
            <li><a class="dropdown-item" href="#">Aksesoris Elektronik</a></li>
            <li><a class="dropdown-item" href="#">Fashion Pria</a></li>
            <li><a class="dropdown-item" href="#">Fashion Wanita</a></li>
            <li><a class="dropdown-item" href="#">Tas, Jam Tangan</a></li>
            <li><a class="dropdown-item" href="#">Kesehatan & Kecantikan</a></li>
            <li><a class="dropdown-item" href="#">Bayi & Makanan</a></li>
            <li><a class="dropdown-item" href="#">TV & Elektronik Rumah</a></li>
            <li><a class="dropdown-item" href="#">Kebutuhan Rumah Tangga</a></li>
            <li><a class="dropdown-item" href="#">Outdor & Olahraga</a></li>
            <li><a class="dropdown-item" href="#">Otomotif</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li> 
      </ul>
      <form class="d-flex" action="cari.php">
        <input class="form-control me-2" type="search" placeholder="Cari Produk" aria-label="cari" name="cari">
        <button class="btn btn-success" type="submit">Cari</button>
      </form>
        <?php 
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
            }
            ?>
    </div>
  </div>
</nav>
<body>

