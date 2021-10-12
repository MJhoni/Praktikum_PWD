<?php //sintaks untuk pembuka bahasa php
$filecounter = "counter.txt"; // mendefinisikan nama file untuk menyimpan counter pada counter.txt
$fileload = fopen($filecounter, "r+"); // membuka file yang kita inginkan dengan fungsi fopen() dan dimasukkan ke variabel $fileload, r+ artinya Membuka file dalam mode read dan write.
$hit = fread ($fileload, filesize($filecounter)); // membaca isi file tersebut dengan fungsi fread(). dengan parameter pertama $fileload, parameter keduanya ukuran dari $filecounter, kemudian dimasukkan ke variabel $hit

echo ("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>"); // membuat table dengan lebar 250pixel, alignnya ditengah, border dengan ketebalan 1pixel, cellspacing dan cellpaddingnya bernilai 0, dan warna border biru. lalu membuka baris tabel
echo ("<td width=250 valign=middle align=center>"); // membuat kolom dengan lebar 250 pixel dan ditengah
echo ("<font face=verdana size=2 color=#FF0000><br>"); // gaya fontnya verdana dengan ukuran 2 berwarna merah, membuat baris baru.
echo ("Anda pengungung yang ke: "); //informasi pengunjung
echo ($hit); // variabel hit yang digunakan untuk melihat berapa orang yang sudah berkunjung
echo ("</br></font>"); // menutup baris dan font
echo ("</td>"); // menutup kolom
echo ("</tr></table>"); // menutup baris dan tabel
fclose($fileload); // menutup file tersebut dan menghapusnya dari memori menggunakan fungsi fclose() dengan variabel $fileload

$fileload = fopen($filecounter,"w+"); // membuka file yang kita inginkan dengan fungsi fopen() dan dimasukkan ke variabel $fileload, w+ artinya Membuka file dalam mode read dan write. Menghapus konten file sebelumnya atau membuat file baru jika belum ada.
$hit = $hit + 1; // variabel hit akan bertambah nilai 1 setiap perulangannya
fwrite($fileload, $hit, strlen($hit)); // menulis ke $fileload, $hit dimasukkan dan dibaca ada berapa.
fclose($fileload); //menutup file tersebut dan menghapusnya dari memori menggunakan fungsi fclose() dengan variabel $fileload
?>