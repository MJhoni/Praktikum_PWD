<style type="text/css">
.row {
    margin-left: -15px;
    margin-right: -15px;
    margin-top: 70px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="ruang_arsip" class="col-sm-3 control-label">Ruang Buku</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="ruang_buku" class="form-control">
                                    <option value="Arsip Pidana">Ruang Tamu</option>
                                    <option value="Arsip Perdata">Ruang Baca</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Nomor Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Buku" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nama Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Buku" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Penulis</label>
                            <div class="col-sm-9">
                                <input type="text" name="penulis" class="form-control" id="inputEmail3" placeholder="Inputkan Penulis" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Penerbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerbit" class="form-control" id="inputEmail3" placeholder="Inputkan Penerbit" required>
                            </div>
                        </div>
                  <div class="form-group">
                                       <label for="para_pihak" class="col-sm-3 control-label">Jenis Buku</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="jenis_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Buku" required>
                                       </div>
                                   </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Nomor Rak</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rak"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Rak" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Nomor Laci</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_laci"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Laci" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pemberi" class="col-sm-3 control-label">Pemberi Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="pemberi" class="form-control" id="inputPassword3" placeholder="Inputkan Pemberi Buku" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" class="form-control" id="inputPassword3" placeholder="Inputkan Staff Penerima Buku" required>
                            </div>
                        </div>


                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Dipinjam">Dipinjam</option>
									<option value="Penghapusan">Penghapusan</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Buku</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Buku
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $ruang_buku=$_POST['ruang_buku'];
	$no_buku=$_POST['no_buku'];
	$nama_buku=$_POST['nama_buku'];
	$penulis=$_POST['penulis'];
  $penerbit=$_POST['penerbit'];
  $jenis_buku=$_POST['jenis_buku'];
  $no_rak=$_POST['no_rak'];
	$no_laci=$_POST['no_laci'];
  $tgl_masuk=$_POST['tgl_masuk'];
  $pemberi=$_POST['pemberi'];
	$penerima=$_POST['penerima'];
  $status=$_POST['status'];
	$keterangan=$_POST['keterangan'];
    //buat sql
    $sql="INSERT INTO arsip VALUES ('','$ruang_buku','$no_buku','$nama_buku','$penulis','$penerbit','$jenis_buku','$no_rak','$no_laci','$tgl_masuk','$pemberi','$penerima','$status','$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
