<?php include '../admin/header.php'; ?>


 <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Produk</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="tambahproduk.php"><button class="btn btn-success">Tambah Produk<i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                      <div class="btn-group pull-right">
                                         <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                      </div>
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th>Kode Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Merk</th>
                                                <th>Harga</th>
                                                <th>Deskripsi</th>
                                                <th>Kategori</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                          include("../db.php");
                                          $produk = mysqli_query($con, "select * from produk");
                                          while ($data = mysqli_fetch_array($produk)) {
                                            ?>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td><?php echo $data['Kode']?></td>
                                                <td><?php echo $data['Nama']?></td>
                                                <td><?php echo $data['Merk']?></td>
                                                <td>Rp. <?php echo $data['Harga']?></td>
                                                <td><?php echo $data['Deskripsi']?></td>
                                                <td><?php echo $data['Kategori']?></td>
                                                <td><?php echo "<img src='../img/$data[Foto]' width='150' height='150' />"?></td>
                                                <td><a class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</a>  
                                                <a class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</a></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>

<?php include '../admin/footer.php'; ?>