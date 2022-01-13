<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Peminjaman Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onLoad="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Peminjaman Buku </h2>
                        <h4>Jalan Palembang - Jambi km. 110<br> Sungai Lilin, Kabupaten Musi Banyuasin, Sumatera Selatan, 30755</h4>
                        <hr>
                        <h3>DATA SELURUH PEMINJAMAN BUKU</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th>
								  <th width="18%">Nomor</th><th>Nama Peminjam</th><th>Tanggal Pinjam</th><th>Tanggal Kembali</th><th>Lama Pinjam</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM peminjaman";
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
