<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login E-Commerce - Supandi</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<?php
	session_start();
	include("db.php");
	$Username = $_SESSION["Username"];

$user = mysqli_query($con, "select * from user where Username = '$Username'");
	while ($ruser = mysqli_fetch_array($user)) {
		?>



	<div class="card">
  <h5 class="card-header">E-Commerce - Supandi</h5>
  <div class="card-body">
  	
    <h5 class="card-title">Hai, Selamat Datang <?php echo "$Username"?></h5>
    <p class="card-text">Anda Login Sebagai <?php echo "$ruser[Bagian]"?></p>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Keluar
</button>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <a type="button" href="logout.php" class="btn btn-primary">Yakin</a>
      </div>
    </div>
  </div>
</div>

<?php }?>


<br><br>
<div table-responsive>
<h5 class="text-center">Data Produk</h5>
<table class="table table-bordered border-primary table align-middle">
  <thead>
    <tr>
      <th scope="col">Kode Produk</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Merk</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Kategori</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>

  <?php
  include("db.php");
  $produk = mysqli_query($con, "select * from produk");
  while ($data = mysqli_fetch_array($produk)) {
    ?>
  <tbody>
    <tr>
      <td><?php echo $data['Kode']?></td>
      <td><?php echo $data['Nama']?></td>
      <td><?php echo $data['Merk']?></td>
      <td>Rp. <?php echo $data['Harga']?></td>
      <td><?php echo $data['Deskripsi']?></td>
      <td><?php echo $data['Kategori']?></td>
      <td><?php echo "<img src='img/$data[Foto]' width='150' height='150' />"?></td>
    </tr>
  </tbody>
  <?php }?>
</table>
</div>

</body>

<script src="js/bootstrap.min.js"></script>
</html>
