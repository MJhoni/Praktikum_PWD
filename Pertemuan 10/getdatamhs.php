<?php
    require_once "koneksi.php";
    $sql = "select * from mahasiswa where nim = 102";
    $query = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
    }
    header('content-type: application/json');
    echo json_encode($data);
    mysqli_close($con);
    
?>