<?php
    include "config/koneksi.php";

    $sql = "SELECT * FROM peminjaman";
    $tampil = mysqli_query($koneksi,$sql);
    if(mysqli_num_rows($tampil)>0){
        $no = 1;
        $response = array();
        $response["data"]=array();
        while ($r = mysqli_fetch_array($tampil)) {
            $h['no_perkara'] = $r['no_perkara'];
            $h['peminjam'] = $r['peminjam'];
            $h['tgl_pinjam'] = $r['tgl_pinjam'];
            $h['tgl_kembali'] = $r['tgl_kembali'];
            $h['lama_pinjam'] = $r['lama_pinjam'];
            $h['keterangan'] = $r['keterangan'];
            $h['id'] = $r['id'];
            array_push($response["data"],$h);
        }
        $jsonfile = json_encode($response, JSON_PRETTY_PRINT);
        $buatfile=file_put_contents('peminjaman.json', $jsonfile);

        if($buatfile){
             echo "Berhasil membuat file";
             ?>
             <p></p>
             <a href="peminjaman.json">Lihat file JSON</a>
             <?php
        }
    }
    else{
        $response["message"]="tidak ada data";
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
?>