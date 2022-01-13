<?php session_start();
//Aktifkan session

require 'config/koneksi.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistem Informasi Peminjaman Buku</title>
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <style type="text/css">
             body {
                margin-top:70px;
                background-color: #19abc1;
            }

            .modalDialog {
                position: fixed;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0.8);
                z-index: 99999;
                opacity:0;
                transition: opacity 200ms ease-in;
                pointer-events: none;
            }
            .modalDialog:target {opacity:1; pointer-events: auto;}
            .modalDialog > div {
                width: 400px;
                position: relative;
                margin: 10% auto;
                padding: 5px 20px 13px 20px;
                border-radius: 10px;
                background: #fff;
                background: linear-gradient(#fff, #aaa);
            }
            .close:hover { background:#abc19c; }
            .close {
                background: #19abc1;
                color: #FFFFFF;
                line-height: 25px;
                position: absolute;
                text-align: center;
                top: -10px;
                right: -12px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                border-radius: 12px;
                box-shadow: 1px 1px 3px #000;
            }
            .navbar {
            border-width: 40px;
            background-color: rgb(1, 1, 128);        /* Fully opaque */
            
            }
            .panel-default>.panel-heading {
    color: #2c3e50;
    background-color: #ecf0f1;
    border-color: #ecf0f1;
}
.alert-info {
    background-color: #222222;
    border-color: #3498db;
    color: #ffffff;
    margin-top: 70px;
}
.panel-body {
    padding: 15px;
    background-color: #abc19c;
}
.panel-default>.panel-heading {
    color: #2c3e50;
    background-color: #abc19c;
    border-color: #ecf0f1;
}
table.table-bordered.dataTable tbody th, table.table-bordered.dataTable tbody td {
    border-bottom-width: 0;
    background-color: #abc19c;
}
        button {
            background-color: #19abc1;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus {
    color: #ffffff;
    background-color: rgb(1, 1, 128); 
}

        </style>
    </head>
    <body>

        <?php //mengambil file menu.php
        require 'akun.php';
        ?>

        <?php //mengambil file menu.php
        require 'menu.php';
        ?>

        <?php //mengambil file menu.php
        require 'content_admin.php';
        ?>


        <?php //mengambil file menu.php
        require 'footer.php';
        ?>

        <script src="Assets/js/jquery.js" type="text/javascript"></script>
        <script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

        <script type="text/javascript" >
                $(function () {
                    $('#dtskripsi').dataTable();
                });
    </script>

    </body>

    </html>
