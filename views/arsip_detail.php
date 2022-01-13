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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Buku</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM arsip WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover">
                      <tr>
                          <td>Nomor Buku</td> <td><?= $data['no_buku'] ?></td>
                      </tr>
                      <tr>
                          <td>Nama Buku</td> <td><?= $data['nama_buku'] ?></td>
                      </tr>
                      <tr>
                          <td>Penulis</td> <td><?= $data['penulis'] ?></td>
                      </tr>
                      <tr>
                          <td>Penerbit</td> <td><?= $data['penerbit'] ?></td>
                      </tr>
                        <tr>
                            <td width="200">Ruang Buku</td> <td><?= $data['ruang_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Rak/Lemari</td> <td><?= $data['no_rak'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Tingkat/Laci</td> <td><?= $data['no_laci'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                        </tr>
						<tr>
                            <td>Staff Pengantar Buku</td> <td><?= $data['pemberi'] ?></td>
                        </tr>
						<tr>
                            <td>Staff Penerima Buku</td> <td><?= $data['penerima'] ?></td>
                        </tr>
						<tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>

                </div> <!--end panel-body-->
                <!--panel footer-->
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Buku </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>
