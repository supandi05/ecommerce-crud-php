<?php include '../ecommerce/template/header.php'; ?>
<br>

<?php 
if(isset($_GET['cari'])){ 
  $cari = $_GET['cari'];?>
<div class="alert alert-secondary" role="alert">
  <b>Hasil Pencarian <?php echo $cari ?></b>
</div> <?php
}?>

<div class="container">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <?php
  include("db.php");
    if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $produk = mysqli_query($con, "select * from produk where Nama like '%".$cari."%'");       
  }else{
    $produk = mysqli_query($con, "select * from produk");   
  }
  while ($data = mysqli_fetch_array($produk)) {
    ?>
    <div class="col">
      <div class="p-3 border bg-light">
        <h5 class="text-center"><?php echo $data['Nama']?></h5>
        <div class="text-center">
        <?php echo "<img src='img/$data[Foto]' width='150' height='150' />"?>
        <hr>
        <a class="badge bg-secondary" href="#">Rp. <?php echo $data['Harga']?></a>
      <a class="badge bg-success" href="#">Lihat Detail</a>
    </div>
    
      </div>
    </div>
    <?php }?>
  </div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Sebelumnya</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Selanjutnya</a>
    </li>
  </ul>
</nav>



</body>
<?php include '../ecommerce/template/footer.php'; ?>