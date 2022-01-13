<?php

$ambil=  mysqli_query($koneksi, "SELECT * FROM arsip") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
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
                    <h3 class="panel-title">Tambah Data Pinjaman Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Nomor Perkara</label>
                            <div class="col-sm-9">
								<input type="text" name="no_perkara" class="form-control" id="no_perkara" placeholder="Nomor Perkara">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Nama Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="peminjam" class="form-control" id="nama_peminjam" placeholder="Nama Peminjam">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tglPinjam" class="col-sm-3 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-3">
                                <input type="date" name="tglPinjam" class="form-control" id="tanggal_pinjam" placeholder="Tanggal Pinjam">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="keterangan" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Peminjaman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $noPerkara=$_POST['no_perkara'];
	$peminjam=$_POST['peminjam'];
	$tglPinjam=$_POST['tglPinjam'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO peminjaman VALUES ('$noPerkara','$peminjam','$tglPinjam','Belum Kembali','','$ket','')";
	$sqlArsip="UPDATE arsip SET status='Dipinjam' WHERE no_perkara";
    $query=  mysqli_query($koneksi, $sql);
	$queryArsip=  mysqli_query($koneksi, $sqlArsip);
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
