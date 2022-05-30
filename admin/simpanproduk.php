<?php 
include '../db.php';
$kode = $_POST['Kode'];
$nama = $_POST['Nama'];
$merk = $_POST['Merk'];
$harga = $_POST['Harga'];
$deskripsi = $_POST['Deskripsi'];
$kategori = $_POST['Kategori'];

if ($_POST['file']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$foto = $_FILES['file']['name'];
			$x = explode('.', $foto);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$foto);
 
$data = mysqli_query($con, "INSERT INTO produk(Kode,Nama,Merk,Harga,Deskripsi,Kategori,Foto) VALUES('$kode','$nama','$merk','$harga','$deskripsi','$kategori','foto')");

				if($data){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
 
header("location:produk.php?pesan=input");


?>