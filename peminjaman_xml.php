<?php
    include "config/koneksi.php";

    header('Content-Type:text/xml');
    $query= "SELECT * FROM peminjaman";
    $hasil = mysqli_query($koneksi,$query);
    $jumlahField = mysqli_num_fields($hasil);

    echo "<?xml version='1.0'?>";
    echo "<data>";
    while($data = mysqli_fetch_array($hasil))
    {
        echo "<peminjaman>";
        echo "<no_perkara>",$data['no_perkara'],"</no_perkara>";
        echo "<peminjam>",$data['peminjam'],"</peminjam>";
        echo "<tgl_pinjam>",$data['tgl_pinjam'],"</tgl_pinjam>";
        echo "<tgl_kembali>",$data['tgl_kembali'],"</tgl_kembali>";
        echo "<lama_pinjam>",$data['lama_pinjam'],"</lama_pinjam>";
        echo "<keterangan>",$data['keterangan'],"</keterangan>";
        echo "<id>",$data['id'],"</id>";
        echo "</peminjaman>";
    }
    echo "</data>";
?>