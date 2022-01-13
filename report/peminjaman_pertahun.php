<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Peminjaman Arsip Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onLoad="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];
 $ambilthn=$_POST['tahun'];
		 $tahunNama;
        if($ambilthn==1){
          $tahunNama=="2020";
        }elseif ($ambilthn==2){
          $tahunNama=="2019";
        } elseif ($ambilthn==3) {
          $tahunNama=="2018";
        } elseif ($ambilthn==4) {
          $tahunNama=="2017";
        } elseif ($ambilthn==5) {
          $tahunNama=="2016";
        }
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Peminjaman Buku </h2>
                        <h4>Jalan Palembang - Jambi km. 110<br> Sungai Lilin, Kabupaten Musi Banyuasin, Sumatera Selatan, 30755</h4>
                        <hr>
                        <h3>DATA PEMINJAMAN ARSIP TAHUN   <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<th>No.</th><th>Nomor Perkara</th><th>Peminjam</th><th>Tanggal Pinjam </th><th>Tanggal Kembali</th><th>Lama Pinjam</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM peminjaman WHERE substr(tgl_pinjam,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									                  <td><?= $data['no_perkara'] ?></td>
                                    <td><?= $data['peminjam'] ?></td>
                                    <td><?= $data['tgl_pinjam'] ?></td>
                                    <td><?= $data['tgl_kembali'] ?></td>
									                  <td><?= $data['lama_pinjam'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Sungai Lilin,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Tanto , S.Hum<strong></u><br>
                                        NIP.152681212136908
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
