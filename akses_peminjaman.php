<?php
    $url = "http://localhost/PWD_peminjaman_buku/getdata_peminjaman.php";
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($client);
    $result = json_decode($response);
    foreach ($result as $r) {
    echo "<p>";
    echo "No Perkara : " . $r->no_perkara. "<br />";
    echo "Nama Peminjam : " . $r->peminjam . "<br />";
    echo "Tanggal Pinjam : " . $r->tgl_pinjam . "<br />";
    echo "Tanggal Kembali : " . $r->tgl_kembali. "<br />";
    echo "Lama Pinjam: " . $r->lama_pinjam . "<br />";
    echo "Keterangan : " . $r->keterangan . "<br />";
    echo "</p>";
    }
    
?>